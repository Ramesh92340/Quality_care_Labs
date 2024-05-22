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
        $name = $this->request->getPost('name');
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
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $hashedPassword, // Store hashed password
        ];
    
        $lgData = [
            'username' => $name,
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
    
    

    public function login()
    {
        $session = \Config\Services::session();
        $loginmodel = new Loginmodel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $hashedpassword = md5($password);

        $user = $loginmodel->where('username', $username)->first();

        if ($user && $user['password'] === $hashedpassword) {
            $session = session();
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'usertype' => $user['user_type'],
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
        return view('admin/packages',  $data);
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
        $package = new  PackageModel();

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
        $package = new  PackageModel();
        $cate = new CategoryModel();
        $test = new TestModel();

        $data2 = $package->where('id',$id)->delete();
        $date3 = $cate->where('Package', $id)->delete();
        $data4 = $test->where('package_id', $id)->delete();

        if ($data2 && $date3 && $data4 == true) {
            return redirect()->to('package')->with('success', "Package Deleted Successfully");
        } else {
            return redirect()->to('package')->with('blog-error', "Package Deleted failed");
        }
    }

}
