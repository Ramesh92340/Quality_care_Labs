<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PackageModel;


class Admin extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        return view('login');
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
                'isLoggedIn' => true,
            ]);

            if ($user == true) {
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
        return view('admin/dashboard');
    }

    public function packages()
    {
        $package = new PackageModel();
        $data['pack'] = $package->findAll();
        return view('admin/packages',  $data);
    }

    public function add_package()
    {
        return view('admin/add_package');
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
            return redirect()->to('package' )->with('success', "Package added Successfully");
        } else {
            return redirect()->to('package' )->with('blog-error', "Package added failed");
        }
    }

    public function edit_package($id)
    {
        $package = new PackageModel();
    }
}
