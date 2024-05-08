<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('quality/index');
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

}
