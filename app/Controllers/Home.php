<?php

namespace App\Controllers;

use App\Models\HealthModel ;
use App\Models\CategoryModel;
use App\Models\PackageModel;
use App\Models\ServiceModel;
use App\Models\ServicetestModel;
use App\Models\TestModel;


class Home extends BaseController
{

    public function __construct()
    {
        $this->package = new PackageModel();
        $this->category = new CategoryModel();
        $this->test = new TestModel();
        $this->service = new ServiceModel();
        $this->sertest = new ServicetestModel();
        $this->healthModel  = new HealthModel (); // Add ItemModel
        helper('form');
    }


    public function index(): string
    {
        $data['pack'] = $this->package->findAll();
        $data['cat'] = $this->category->findAll();
        $data['test'] = $this->test->findAll();
        $data['items'] = $this->healthModel ->getItems(); // Load items data
        return view('quality/index', $data);
    }

    // mails controller function

    public function sendappointment()
    {
        $to = 'srimadhuraju@gmail.com';
        $subject = 'this message from appointment form';

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $test = $this->request->getPost('test');
        $date = $this->request->getPost('date');
        $message = $this->request->getPost('message');

        // Compose the message
        $messageContent = "
        <h1>New Message</h1>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Test Name:</strong> $test</p>
        <p><strong>Date:</strong><br>$date</p>
        <p><strong>Message:</strong><br>$message</p>
        ";

        // Load email service
        $email = \Config\Services::email();

        // Set email parameters
        $email->setTo($to);
        $email->setFrom(config('Email')->fromEmail, config('Email')->fromName);
        $email->setSubject($subject);
        $email->setMessage($messageContent);

        // Set email format to HTML
        $email->setMailType('html');

        // Send email
        if ($email->send()) {
            echo '<script>alert("Message has been sent.\n\nPLEASE CLICK OK."); window.location.href="' . base_url() . '";</script>';
        } else {
            echo '<script>alert("Message could not be sent .\n\nPLEASE CLICK OK."); window.location.href="' . base_url() . '";</script>';
        }
    }

    public function sendcontact()
    {
        $to = 'srimadhuraju@gmail.com';
        $subject = 'this message from Contact form';

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $number = $this->request->getPost('number');
        $requirements = $this->request->getPost('requirements');
        $message = $this->request->getPost('message');

        // Compose the message
        $messageContent = "
        <h1>New Message</h1>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Number:</strong> $number</p>
        <p><strong>Requirements:</strong><br>$requirements</p>
        <p><strong>Message:</strong><br>$message</p>
        ";

        // Load email service
        $email = \Config\Services::email();

        // Set email parameters
        $email->setTo($to);
        $email->setFrom(config('Email')->fromEmail, config('Email')->fromName);
        $email->setSubject($subject);
        $email->setMessage($messageContent);

        // Set email format to HTML
        $email->setMailType('html');

        // Send email
        if ($email->send()) {
            echo '<script>alert("Message has been sent.\n\nPLEASE CLICK OK."); window.location.href="' . base_url() . 'contact";</script>';
        } else {
            echo '<script>alert("Message could not be sent .\n\nPLEASE CLICK OK."); window.location.href="' . base_url() . 'contact";</script>';
        }
    }

    public function sendmail()
    {
        $to = 'srimadhuraju@gmail.com';
        $subject = 'this message from Contact form';

        $email = $this->request->getPost('mail');

        $messageContent = "
        <h1>New Message</h1>
        
        <p><strong>Email:</strong> $email</p>
          ";
          $email = \Config\Services::email();

          // Set email parameters
          $email->setTo($to);
          $email->setFrom(config('Email')->fromEmail, config('Email')->fromName);
          $email->setSubject($subject);
          $email->setMessage($messageContent);
  
          // Set email format to HTML
          $email->setMailType('html');
  
          // Send email
          if ($email->send()) {
              echo '<script>alert("Message has been sent.\n\nPLEASE CLICK OK."); window.location.href="' . base_url() . 'contact";</script>';
          } else {
              echo '<script>alert("Message could not be sent .\n\nPLEASE CLICK OK."); window.location.href="' . base_url() . 'contact";</script>';
          }
     
       
    }
    //end mail controller

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
        $data['data1'] = $this->sertest->select_test1();
        return view('quality/service1' , $data);
    }

    public function service2()
    {
        $data['data2'] = $this->sertest->select_test2();

        return view('quality/service2', $data);
    }

    public function service3()
    {
        $data['data3'] = $this->sertest->select_test3();

        return view('quality/service3', $data);
    }

    public function service4()
    {
        $data['data4'] = $this->sertest->select_test4();

        return view('quality/service4', $data);
    }

    public function service5()
    {
        $data['data5'] = $this->sertest->select_test5();

        return view('quality/service5', $data);
    }

    public function service6()
    {
        $data['data6'] = $this->sertest->select_test6();

        return view('quality/service6', $data);    }

    public function packages()
    {
        $data['pack'] = $this->package->findAll();
        $data['cat'] = $this->category->findAll();
        $data['test'] = $this->test->findAll();
        return view('quality/packages', $data);
    }

    public function contact()
    {
        return view('quality/contact');
    }

    public function cart()
    {
        return view('quality/cart');
    }

    public function health()
    {
        return view('quality/health');
    }


    public function checkout()
    {
        return view('quality/checkout');
    }


 
    public function healthrisks()
    {
        return view('quality/health_risks');
    }

  
    

     
}
