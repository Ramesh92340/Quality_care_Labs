<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\PackageModel;
use App\Models\TestModel;

class Home extends BaseController
{

    public function __construct()
    {   
        $this->package = new PackageModel();
        $this->category = new CategoryModel();
        $this->test = new TestModel();
    }

    public function index(): string
    {
       
        $data['pack'] = $this->package->findAll();
        $data['cat'] = $this->category->findAll();
        $data['test'] = $this->test->findAll();
        return view('quality/index', $data);
    }

    public function about()
    {
        return view('quality/about');
    }

    public function lab()
    {
        return view('quality/lab');
    }

    public function services()
    {
        return view('quality/services');
    }

    public function service1()
    {
        return view('quality/service1');
    }

    public function service2()
    {
        return view('quality/service2');
    }

    public function service3()
    {
        return view('quality/service3');
    }

    public function service4()
    {
        return view('quality/service4');
    }

    public function service5()
    {
        return view('quality/service5');
    }

    public function service6()
    {
        return view('quality/service6');
    }

    public function packages()
    {
        return view('quality/packages');
    }

    public function contact()
    {
        return view('quality/contact');
    }

    public function cart()
    {
        return view('quality/cart');
    }

    public function checkout()
    {
        return view('quality/checkout');
    }

}
