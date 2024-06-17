<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\OrdersModel;
use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\HealthModel;
use App\Models\ServiceModel;
use App\Models\TestModel;
use App\Models\UserModel;

class Admin extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->service = new ServiceModel();
        $this->healthcate = new HealthModel();
        $session = \Config\Services::session();

    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = \Config\Services::session();
        $loginmodel = new Loginmodel();
        $usermodel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $hashedpassword = md5($password);
        echo $hashedpassword;
        $user = $loginmodel->where('username', $username)->first();

        if ($user && $user['password'] === $hashedpassword) {
            $session = session();

            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'usertype' => $user['user_type'],
                'userdata' => $usermodel->where('username', $user['username'])->first(),
                'isLoggedIn' => true,
            ]);

            if ($user['user_type'] == 1) {
                return redirect()->to('admin/dashboard')->with('success', "welcome {$username}");
            }
        } else {
            return redirect()->to('login')->with('blog-error', 'invalid username or password');
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('login');
    }

    public function dashboard()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        return view('admin/dashboard', $data);
    }

    public function admin_profile()
    {
        $usermodel = new UserModel();
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        $data['userData'] = $usermodel->where('username', session()->get('username'))->first();
        return view('admin/admin_profile', $data);
    }

    public function updateuser()
    {
        // Retrieve POST data
        $password = $this->request->getPost('password');
        $firstName = $this->request->getPost('first_name');
        $lastName = $this->request->getPost('last_name');
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');

        $session = \Config\Services::session();
        $userData = $session->get('userdata');
        // Check if passwords match
        if ($password != '') {
            if ($password != ($userData['password'] ?? '')) {
                $hashedPassword = md5($password);
            } else {
                $hashedPassword = $password;
            }
        } else {
            $hashedPassword = $userData['password'];
        }

        // Prepare data for insertion
        $userData = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'phone' => $phone,
            'address' => $address,
            'email' => $email,
            'password' => $hashedPassword, // Store hashed password
        ];

        $lgData = [
            'password' => $hashedPassword, // Store hashed password
            'user_type' => 1,
        ];
        $userModal = new UserModel();
        $lgtable = new LoginModel();
        // Insert user data
        $userInsertResult = $userModal->update($session->get('userdata')['id'], $userData);
        if ($userInsertResult) {
            $userData['id'] = $session->get('userdata')['id'];
            $lgInsertResult = $lgtable->update($session->get('user_id'), $lgData);
            $session->set(['userdata' => $userData]);
            if ($lgInsertResult) {
                return redirect()->to('admin/admin_profile')->with('success', "Update successfully completed");
            } else {
                return redirect()->to('admin/admin_profile')->with('blog-error', "Updating user Failed during login data insertion");
            }
        }
        return redirect()->to('admin/admin_profile')->with('blog-error', "Updating user Failed during login data insertion");
    }

    public function coustmers()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        $loginModel = new LoginModel();
        $userModel = new UserModel();
        $orders = new OrdersModel();
        $loginUsers = $loginModel->where('user_type', 2)->findAll();
        foreach ($loginUsers as &$loginUser) {
            $loginUser['userData'] = $userModel->where('email', $loginUser['username'])->first();
            if ($loginUser['userData']) {
                $loginUser['orders'] = $orders->getOrders($loginUser['userData']['id']);
            } else {
                $loginUser['orders'] = [];
            }
        }
        $data['customers'] = $loginUsers;
        return view('admin/coustmers', $data);
    }

    public function cutsomersOrders($userId)
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        $loginModel = new LoginModel();
        $userModel = new UserModel();
        $ordersModel = new OrdersModel();
        $userData = $userModel->where('id', $userId)->first();
        if ($userData) {
            $orders = $ordersModel->getOrders($userData['id']);
        } else {
            $orders = [];
        }
        $data['orders'] = $orders;
        return view('admin/orders', $data);
    }

    public function orders()
    {
        $orders = new OrdersModel();
        $data['orders'] = $orders->getAllOrders();
        return view('admin/orders', $data);
    }

    public function info()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        return view('admin/info', $data);
    }
    public function cust_services()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        return view('admin/cust_services', $data);
    }
    public function cust_packages()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        return view('admin/cust_packages', $data);
    }
    public function cust_healthrisks()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        return view('admin/cust_healthrisks', $data);
    }
    public function packages()
    {
        $package = new PackageModel();
        $data['pack'] = $package->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        return view('admin/packages', $data);
    }

    public function add_package()
    {
        $package = new PackageModel();
        $data['pack'] = $package->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        return view('admin/add_package', $data);
    }



    public function insert()
    {
        $package = new PackageModel();
        $name = $this->request->getPost('pack_name');
        $price = $this->request->getPost('pack_price');

        $data = [
            'package_name' => $name,
            'package_price' => $price
        ];

        // print_r($data);

        $data2 = $package->insert($data);
        if ($data2 == true) {
            return redirect()->to('package')->with('success', "Package added Successfully");
        } else {
            return redirect()->to('package')->with('blog-error', "Package added failed");
        }
    }

    public function edit($id)
    {
        $package = new PackageModel();
        $data['pack'] = $package->findAll();
        $data['pack1'] = $package->get_by_id($id);
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        return view('admin/edit_package', $data);
    }

    public function update_data()
    {
        $package = new PackageModel();

        $id = $this->request->getPost('pack_id');

        $data = [
            'package_name' => $this->request->getPost('pack_name'),
            'package_price' => $this->request->getPost('pack_price')
        ];

        // Call the update_date() method on the $package object
        $data2 = $package->update_date($id, $data);

        if ($data2 == true) {
            return redirect()->to('package')->with('success', "Package Updated Successfully");
        } else {
            return redirect()->to('package')->with('blog-error', "Package Updated failed");
        }
    }

    public function delete($id)
    {
        $package = new PackageModel();
        $cate = new CategoryModel();
        $test = new TestModel();

        $data2 = $package->where('id', $id)->delete();
        $date3 = $cate->where('Package', $id)->delete();
        $data4 = $test->where('package_id', $id)->delete();

        if ($data2 && $date3 && $data4 == true) {
            return redirect()->to('package')->with('success', "Package Deleted Successfully");
        } else {
            return redirect()->to('package')->with('blog-error', "Package Deleted failed");
        }
    }

}
