<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\HealthModel;
use App\Models\CategoryModel;
use App\Models\HealthdescModel;
use App\Models\HealthriskpacksModel;
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
        $this->healthcate = new HealthModel();
        $this->healthdesc = new HealthdescModel();
        $this->healthpack = new HealthriskpacksModel();
        $this->cart = new CartModel();
        helper('form');
        $session = \Config\Services::session();

    }


    public function index(): string
    {
        $data['pack'] = $this->package->findAll();
        $data['cat'] = $this->category->findAll();
        $data['test'] = $this->test->findAll();
        $data['health'] = $this->healthcate->getItems();
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

    public function removeFromCart($id, $quantity, $type)
    {
        $session = \Config\Services::session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('userlogin')->with('success', "You must be logged in to access this page.");
        } else {
            $isDelete = false;
            $data = [
                'user' => $session->get('user_id'),
                'status' => 1
            ];
            $userData = $this->cart->checkIfExists($session->get('user_id'), $type, $id);
            if ($type == 1) {
                if ($userData) {
                    if ($userData['servicesqty'] > $quantity) {
                        $data['servicesqty'] = $userData['servicesqty'] - $quantity;
                    } else {
                        $isDelete = true;
                    }
                } else {
                    $data['servicesqty'] = $quantity;
                }
                $data['services'] = $id;
            } else if ($type == 2) {
                if ($userData) {
                    if ($userData['healthriskqty'] > $quantity) {
                        $data['healthriskqty'] = $userData['healthriskqty'] - $quantity;
                    } else {
                        $isDelete = true;
                    }
                } else {
                    $data['healthriskqty'] = $quantity;
                }
                $data['healthrisk'] = $id;
            } else if ($type == 3) {
                if ($userData) {
                    if ($userData['packagesqty'] > $quantity) {
                        $data['packagesqty'] = $userData['packagesqty'] - $quantity;
                    } else {
                        $isDelete = true;
                    }
                } else {
                    $data['packagesqty'] = $quantity;
                }
                $data['packages'] = $id;
            }
            if ($isDelete) {
                $data2 = $this->cart->delete($userData['id']);
            } else {
                $data2 = $this->cart->update($userData['id'], $data);
            }
            if ($data2 == true) {
                return 'Removed from cart.';
            } else {
                return 'Error while removing from cart';
            }
        }
    }

    public function addToCart($id, $quantity, $type, $insertionType)
    {
        $session = \Config\Services::session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('userlogin')->with('success', "You must be logged in to access this page.");
        } else {
            $data = [
                'user' => $session->get('user_id'),
                'status' => 1
            ];
            $userData = $this->cart->checkIfExists($session->get('user_id'), $type, $id);
            if ($type == 1) {
                if ($userData && $insertionType == 1) {
                    $data['servicesqty'] = $userData['servicesqty'] + $quantity;
                } else {
                    $data['servicesqty'] = $quantity;
                }
                $data['services'] = $id;
            } else if ($type == 2) {
                if ($userData && $insertionType == 1) {
                    $data['healthriskqty'] = $userData['healthriskqty'] + $quantity;
                } else {
                    $data['healthriskqty'] = $quantity;
                }
                $data['healthrisk'] = $id;
            } else if ($type == 3) {
                if ($userData && $insertionType == 1) {
                    $data['packagesqty'] = $userData['packagesqty'] + $quantity;
                } else {
                    $data['packagesqty'] = $quantity;
                }
                $data['packages'] = $id;
            }
            if (!$userData) {
                $data2 = $this->cart->insert($data);
            } else {
                $data2 = $this->cart->update($userData['id'], $data);
            }
            if ($data2 == true) {
                return 'Added to Cart.';
                // return redirect()->to($_SERVER['HTTP_REFERER'])->with('success', "Product added to cart success.");
            } else {
                return 'Error while uploading to Cart.';
                // return redirect()->to($_SERVER['HTTP_REFERER'])->with('blog-error', "Product added failed");
            }
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
        $session = \Config\Services::session();
        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getServicesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'services');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['data1'] as &$service) {
                $service['in_cart'] = in_array($service['id'], $cartPackageIds);
            }
        }
        return view('quality/service1', $data);
    }

    public function service2()
    {
        $data['data2'] = $this->sertest->select_test2();
        $session = \Config\Services::session();
        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getServicesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'services');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['data2'] as &$service) {
                $service['in_cart'] = in_array($service['id'], $cartPackageIds);
            }
        }
        return view('quality/service2', $data);
    }

    public function service3()
    {
        $data['data3'] = $this->sertest->select_test3();
        $session = \Config\Services::session();
        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getServicesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'services');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['data3'] as &$service) {
                $service['in_cart'] = in_array($service['id'], $cartPackageIds);
            }
        }
        return view('quality/service3', $data);
    }

    public function service4()
    {
        $data['data4'] = $this->sertest->select_test4();
        $session = \Config\Services::session();
        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getServicesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'services');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['data4'] as &$service) {
                $service['in_cart'] = in_array($service['id'], $cartPackageIds);
            }
        }
        return view('quality/service4', $data);
    }

    public function service5()
    {
        $data['data5'] = $this->sertest->select_test5();
        $session = \Config\Services::session();
        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getServicesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'services');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['data5'] as &$service) {
                $service['in_cart'] = in_array($service['id'], $cartPackageIds);
            }
        }
        return view('quality/service5', $data);
    }

    public function service6()
    {
        $data['data6'] = $this->sertest->select_test6();
        $session = \Config\Services::session();
        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getServicesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'services');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['data6'] as &$service) {
                $service['in_cart'] = in_array($service['id'], $cartPackageIds);
            }
        }
        return view('quality/service6', $data);
    }

    public function packages()
    {
        $session = \Config\Services::session();
        $data['pack'] = $this->package->findAll();

        if ($session->get('isLoggedIn')) {
            $cartPackages = $this->cart->getPackagesCart($session->get('user_id'));

            // Create an array of package IDs in the cart for quick lookup
            $cartPackageIds = array_column($cartPackages, 'packages');

            // Add a flag to indicate if a package is in the cart
            foreach ($data['pack'] as &$package) {
                $package['in_cart'] = in_array($package['id'], $cartPackageIds);
            }
        }

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
        $session = \Config\Services::session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('userlogin')->with('success', "You must be logged in to access this page.");
        } else {
            $data['services'] = $this->cart->getServicesCart($session->get('user_id'));
            $data['healthrisk'] = $this->cart->getHealthRiskCart($session->get('user_id'));
            $data['packages'] = $this->cart->getPackagesCart($session->get('user_id'));
            return view('quality/cart', $data);
        }
    }

    public function health()
    {
        return view('quality/health');
    }


    public function checkout()
    {
        $session = \Config\Services::session();
        if (!$session->get('isLoggedIn')) {
            // return redirect()->to('userlogin')->with('blog-error', 'You must be logged in to access this page.');
            return view('quality/userlogin');
        } else {
            $services = $this->cart->getServicesCart($session->get('user_id'));
            $healthrisk = $this->cart->getHealthRiskCart($session->get('user_id'));
            $packages = $this->cart->getPackagesCart($session->get('user_id'));
            $data = [];

            $finalAmount = 0;

            // Sum the total price for packages
            foreach ($packages as $pkg):
                $data['cart_items'][] = [
                    'name' => $pkg['package_name'],
                    'type' => 'Package',
                    'price' => $pkg['package_price'],
                    'quantity' => $pkg['packagesqty']
                ];
                $finalAmount += $pkg['packagesqty'] * $pkg['package_price'];
            endforeach;

            // Sum the total price for services
            foreach ($services as $sr):
                $data['cart_items'][] = [
                    'name' => $sr['test_name'],
                    'type' => 'Service',
                    'price' => $sr['price'],
                    'quantity' => $sr['servicesqty']
                ];
                $finalAmount += $sr['servicesqty'] * $sr['price'];
            endforeach;

            // Sum the total price for health risks
            foreach ($healthrisk as $hr):
                $data['cart_items'][] = [
                    'name' => $hr['name'],
                    'type' => 'Health Risk',
                    'price' => $hr['price'],
                    'quantity' => $hr['healthriskqty']
                ];
                $finalAmount += $hr['healthriskqty'] * $hr['price'];
            endforeach;

            $data['grand_total'] = $finalAmount;
            return view('quality/checkout', $data);
        }
    }



    public function healthrisks($id)
    {
        $data['healthdesc'] = $this->healthdesc->find_by_healthid($id);
        $data['healthpack'] = $this->healthpack->find_by_healthid($id);
        return view('quality/health_risks', $data);
    }


    public function userlogin()
    {
        $session = \Config\Services::session();
        if (!$session->get('isLoggedIn')) {
            // return redirect()->to('userlogin')->with('blog-error', 'You must be logged in to access this page.');
            return view('quality/userlogin');
        } else {
            return view('quality/userprofile');
        }
    }


    public function useregister()
    {
        return view('quality/useregister');
    }

    public function userprofile()
    {
        $session = \Config\Services::session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('userlogin')->with('blog-error', 'You must be logged in to access this page.');
        }
        return view('quality/userprofile');
    }
    public function terms()
    {
        return view('quality/terms');

    }
    public function privacy()
    {
        return view('quality/privacy');

    }
}
