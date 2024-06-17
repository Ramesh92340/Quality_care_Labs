<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\UserModel;
use App\Models\OrdersModel;

class Orders extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->user = new UserModel();
        $this->ordersModel = new OrdersModel();
        $this->cartItemsModel = new CartModel();
    }

    public function ShowOrders()
    {
        $session = \Config\Services::session();
        $data['orders'] = $this->ordersModel->getOrders($session->get('userId'));
        echo json_encode($data);
        // return view('quality/orders', $data);
    }

    public function Success($userId)
    {
        $session = \Config\Services::session();

        if ($this->request->getMethod() === 'POST') {
            if ($this->request->getPost('error')) {
                log_message('error', 'Payment error: ' . print_r($this->request->getPost('error'), true));
                return redirect()->to('/checkout');
            } elseif ($this->request->getPost('razorpay_payment_id')) {
                $user = $this->user->find($userId);
                if ($user) {
                    $orderData = [
                        'payment_id' => $this->request->getPost('razorpay_payment_id'),
                        'user_id' => $user['id'],
                        'cart_ids' => json_encode($session->get('cart_ids')),
                        'details' => json_encode($session->get('formData')),
                        'status' => 1,
                        'total_amount' => $session->get('grand_total')
                    ];

                    // Insert order data into the database
                    $orderInsertResult = $this->ordersModel->insert($orderData);
                    if ($orderInsertResult) {
                        log_message('info', 'Order successfully inserted: ' . print_r($orderData, true));
                        $cartIds = $session->get('cart_ids');
                        if (!empty($cartIds)) {
                            $cartIdsData = [];
                            foreach ($cartIds as $cartId => $value):
                                $cartIdsData[] = $cartId;
                            endforeach;
                            $this->cartItemsModel->updateBatchData(
                                ['is_done' => 1],
                                $cartIdsData
                            );
                        }
                        return redirect()->to('/');
                    } else {
                        log_message('error', 'Order insertion failed: ' . print_r($orderData, true));
                        // You can also set a flashdata message here to inform the user
                        $session->setFlashdata('error', 'Order insertion failed. Please try again.');
                        // return redirect()->to('/checkout');
                    }
                } else {
                    log_message('error', 'User not found: ' . $userId);
                    // return redirect()->to('/');
                }
            } else {
                log_message('error', 'Invalid payment data');
                // return redirect()->to('/');
            }
        }
    }
}
