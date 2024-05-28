<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\UserModel;

class User extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->user = new UserModel();
        $this->lgtable = new LoginModel();
    }


    public function signup()
    {
        // Retrieve POST data
        $cpassword = $this->request->getPost('createpassword');
        $confirmPass = $this->request->getPost('conformpassword');
        $firstName = $this->request->getPost('first_name');
        $lastName = $this->request->getPost('last_name');
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');

        // Check if passwords match
        if ($cpassword !== $confirmPass) {
            return redirect()->to('useregister')->with('blog-error', "Create password and confirm password do not match");
        }

        // Hash the password securely
        $hashedPassword = md5($confirmPass);

        // Prepare data for insertion
        $userData = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'phone' => $phone,
            'email' => $email,
            'password' => $hashedPassword, // Store hashed password
        ];

        $lgData = [
            'username' => $email,
            'password' => $hashedPassword, // Store hashed password
            'user_type' => 2,
        ];

        // Insert user data
        $userInsertResult = $this->user->insert($userData);

        if ($userInsertResult) {
            // Insert login data
            $lgInsertResult = $this->lgtable->insert($lgData);

            if ($lgInsertResult) {
                return redirect()->to('userlogin')->with('success', "Registration successfully completed");
            } else {
                return redirect()->to('useregister')->with('blog-error', "Registration Failed during login data insertion");
            }
        } else {
            return redirect()->to('useregister')->with('blog-error', "Registration Failed during user data insertion");
        }
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
        $userData = $session->get('userData');
        // Check if passwords match
        if ($password != $userData['password']) {
            $hashedPassword = md5($password);
        } else {
            $hashedPassword = $password;
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
            'username' => $email,
            'password' => $hashedPassword, // Store hashed password
            'user_type' => 2,
        ];

        // Insert user data
        $userInsertResult = $this->user->update(session('userData')['id'], $userData);
        if ($userInsertResult) {
            $userData['id'] = session('user_id');
            $lgInsertResult = $this->lgtable->update(session('login_id'), $lgData);
            $session->set(['userData' => $userData]);
            if ($lgInsertResult) {
                return redirect()->to('userprofile')->with('success', "Update successfully completed");
            } else {
                return redirect()->to('userprofile')->with('blog-error', "Updating user Failed during login data insertion");
            }
        }
        return redirect()->to('userprofile')->with('blog-error', "Updating user Failed during login data insertion");
    }

    public function userlogout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('userlogin');
    }


    public function login()
    {
        $session = \Config\Services::session();
        $loginmodel = new Loginmodel();
        $usermodel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $hashedPassword = md5($password);  // Hash the incoming password with MD5

        // Fetch the user based on the email
        $user = $loginmodel->where('username', $email)->first();
        $userData = $usermodel->where('email', $email)->first();

        // Verify user exists and password is correct
        if ($user && $hashedPassword === $user['password']) {
            // Set session data
            $session->set([
                'user_id' => $userData['id'],
                'login_id' => $user['id'],
                'username' => $user['username'],
                'usertype' => $user['user_type'],
                'isLoggedIn' => true,
                'userData' => $userData
            ]);

            // Redirect based on user type
            if ($user['user_type'] == 2) {
                return redirect()->to('userprofile')->with('success', "Welcome {$user['username']}");
            } else {
                // You can add additional user type checks and redirects here if needed
            }
        } else {
            // Redirect to login page with error
            return redirect()->to('userlogin')->with('blog-error', 'Invalid email or password');
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

    public function coustmers()
    {
        $pack = new PackageModel();
        $data['pack'] = $pack->findAll();
        $cate = new CategoryModel();
        $data['cate'] = $cate->findAll();
        $data['service'] = $this->service->findAll();
        $data['health'] = $this->healthcate->getItems();
        return view('admin/coustmers', $data);
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
