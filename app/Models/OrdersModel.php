<?php
namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'payment_id',
        'cart_ids',
        'user_id',
        'details',
        'status',
        'total_amount',
        'created_at'
    ];

    public function getAllOrders()
    {
        $orders = $this->findAll();

        // Initialize an array to hold the combined data
        $ordersWithCartDetails = [];

        // Loop through each order
        foreach ($orders as $order) {
            // Initialize an array to hold cart details for this order
            $cartDetails = [];

            // Assuming cart_ids is a comma-separated list of cart IDs
            $cartIds = json_decode($order['cart_ids']);

            $this->from('user_details as user');
            $this->select('user.*');
            $this->where('user.id', $order['user_id']);
            $userData = $this->first();

            // Loop through each cart ID and get the cart details
            foreach ($cartIds as $cartId) {
                // Query the cart table for this cart ID
                $this->from('cart as cart');
                $this->select('cart.*');
                $this->where('cart.id', $cartId);
                $cartDetail = $this->first();

                // Merge the cart details into the cartDetails array
                $cartDetails = array_merge($cartDetails, [$cartDetail]);
            }

            // Add the cart details to the order data
            $order['cart_details'] = $cartDetails;
            $order['user'] = $userData;

            // Add the order to the ordersWithCartDetails array
            $ordersWithCartDetails[] = $order;
        }

        // Return the orders with their respective cart details
        return $ordersWithCartDetails;
    }

    public function getOrders($userId)
    {
        // First, get the orders for the given user
        $this->where('user_id', $userId);
        $this->where('status', 1);
        $orders = $this->find();

        echo count($orders);

        // Initialize an array to hold the combined data
        $ordersWithCartDetails = [];

        // Loop through each order
        foreach ($orders as &$order) {
            // Initialize an array to hold cart details for this order
            $cartDetails = [];

            // Assuming cart_ids is a comma-separated list of cart IDs
            $cartIds = json_decode($order['cart_ids']);

            $this->from('user_details as user');
            $this->select('user.*');
            $this->where('user.id', $order['user_id']);
            $userData = $this->first();

            // Loop through each cart ID and get the cart details
            foreach ($cartIds as $cartId => $value1) {
                // Query the cart table for this cart ID
                $this->from('cart as cart');
                $this->select('cart.*');
                $this->where('cart.id', $cartId);
                $cartDetail = $this->first();

                // Merge the cart details into the cartDetails array
                $cartDetails = array_merge($cartDetails, [$cartDetail]);
            }

            // Add the cart details to the order data
            $order['cart_details'] = $cartDetails;
            $order['user'] = $userData;

            // Add the order to the ordersWithCartDetails array
            $ordersWithCartDetails[] = $order;
        }

        // Return the orders with their respective cart details
        return $ordersWithCartDetails;
    }
}