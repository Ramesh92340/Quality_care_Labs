<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Quality Care Labs</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/web logo.png">
   <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
   <script src="frontend.js"></script>
   <!-- CSS here -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/spacing.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.css">
   <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">


   <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
</head>

<body>


   <!-- Scroll-top -->

   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
   </button>

   <!-- Scroll-top-end-->

   <!-- preloader -->
   <div id="preloadertp">
      <img src="<?= base_url() ?>assets/img/logo (1).png" alt="" style="width: 250px;">
   </div>
   <!-- preloader end  -->


   <!-- header-area -->
   <header class="d-none d-xl-block">
      <div class="header-custom" id="header-sticky">
         <div class="header-logo-box">
            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo (1).png" alt="logo"></a>
         </div>
         <div class="header-menu-box     ">
            <div class="header-menu-top ">
               <div class="row align-items-center pt-25 pb-25">
                  <div class="col-lg-2">
                     <div class="header-time">
                        <i class="fa-solid fa-phone"></i>
                        &nbsp; 7658905111
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="header-time">
                        <i class="fa-solid fa-envelope"></i>
                        &nbsp; info@qualitycarelabs.com
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="header-time pr-2 ps-2">
                        <i class="fa-solid fa-location-dot ms-2"></i>&nbsp; #2-34-8/1,Chintavari Street,
                        Bhanugudi Junction,Kakinada-533003
                        <!-- <span>Monday - Friday  09:00 am - 05:00 Pm</span> -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-menu-bottom">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="main-menu main-menu-second">
                        <nav id="mobile-menu">
                           <ul>
                              <li><a class="active" href="<?= base_url() ?>">Home</a>

                              </li>
                              <li><a href="<?= base_url() ?>about">About Us</a>
                              </li>
                              <li><a href="<?= base_url() ?>lab">Lab</a></li>
                              <li class="has-dropdown"><a href="<?= base_url() ?>services">Services</a>
                                 <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>service1">~ CLINICAL BIOCHEMIATRY</a></li>
                                    <li><a href="<?= base_url() ?>service2">~ HEMATOLOGY</a></li>
                                    <li><a href="<?= base_url() ?>service3">~ IMMUNOLOGY & SEROLOGY</a></li>
                                    <li><a href="<?= base_url() ?>service4">~ MOLECULAR BIOLOGY</a></li>
                                    <li><a href="<?= base_url() ?>service5">~ MICROBIOLOGY</a></li>
                                    <li><a href="<?= base_url() ?>service6">~ HISTOPATHOLOGY & CYTOLOGY</a></li>
                                 </ul>
                              </li>
                              <li class=" "><a href="<?= base_url() ?>packages">Packages</a>

                              </li>
                              <li><a href="<?= base_url() ?>contact">Contact</a></li>
                              <!-- <li class="has-dropdown"><a href="services.html"> <i class="fa-solid fa-cart-plus cart-icon"></i></a>
                                    <ul class="sub-menu">
                                       <li><a href="services-details1.html">~ CLINICAL BIOCHEMIATRY</a></li>
                                       <li><a href="services-details2.html">~ HEMATOLOGY</a></li>
                                    </ul>
                                 </li> -->

                           </ul>
                        </nav>
                     </div>
                  </div>

                  <div class="col-lg-5">
                     <div class="header-cart-order d-flex align-items-center justify-content-end">
                        <div class="header-cart-list  d-flex align-items-center justify-content-end mr-50">
                           <button class="tp-menu-toggle mr-40"><i class="fa-solid fa-list"></i></button>
                           <div class="tp-cart-icon-area">
                              <a href="<?= base_url() ?>cart"><i class="fa-solid fa-basket-shopping"></i></a>
                              <!-- <div class="tpcarticon">
                                    <ul>
                                       <li>
                                          <div class="tpcarticon__checkout-link">
                                             <a href="cart.html">Shopping Cart</a>
                                             <a class="sec-red-btn" href="checkout.html">Checkout</a>
                                         </div>
                                       </li>
                                    </ul>
                                 </div> -->
                           </div>
                           <div class="tp-cart-icon-area ms-4">
                              <a href="<?= base_url() ?>userlogin"><i class="fa-solid fa-user"></i></a>

                           </div>
                        </div>
                        <a class="header-bottom-btn" style="border-radius: 8px;"
                           href="<?= base_url() ?>#appointment ">Book
                           Appointment</a>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->

   <!-- tp-mobile-header-area start -->
   <div id="header-mob-sticky" class="tp-mobile-header-area pt-15 pb-15 d-xl-none">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-4 col-10">
               <div class="tp-mob-logo">
                  <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo (1).png" alt="logo"></a>
               </div>
            </div>
            <div class="col-md-8 col-2">
               <div class="tp-mobile-bar d-flex align-items-center justify-content-end">
                  <div class="tp-bt-btn-banner d-none d-md-block d-xl-none mr-30">
                     <a class="tp-bt-btn" href="<?= base_url() ?> ">
                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="2" cy="2" r="2" fill="#0E63FF" />
                           <circle cx="7" cy="2" r="2" fill="#0E63FF" />
                           <circle cx="12" cy="2" r="2" fill="#0E63FF" />
                           <circle cx="12" cy="7" r="2" fill="#0E63FF" />
                           <circle cx="12" cy="12" r="2" fill="#0E63FF" />
                           <circle cx="7" cy="7" r="2" fill="#0E63FF" />
                           <circle cx="7" cy="12" r="2" fill="#0E63FF" />
                           <circle cx="7" cy="17" r="2" fill="#0E63FF" />
                           <circle cx="2" cy="7" r="2" fill="#0E63FF" />
                           <circle cx="2" cy="12" r="2" fill="#0E63FF" />
                        </svg><span>Help Desk :</span>+91 7658905111
                     </a>
                  </div>
                  <button class="tp-menu-toggle"><i class="fa-solid fa-bars"></i></button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-mobile-header-area end -->

   <!-- sidebar-info -->
   <div class="tpsideinfo tp-side-info-area">
      <button class="tpsideinfo__close"><i class="fal fa-times"></i></button>
      <div class="tpsideinfo__logo mb-40">
         <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/footer logo.png" alt="logo"></a>
      </div>

      <div class="mobile-menu"></div>

      <div class="tpsideinfo__content mb-60">
         <p class=" d-none d-xl-block">Our mission is to ensure the generation of accurate and precise findings.</p>
         <span>Contact Us</span>
         <a href="#"><i class="fa-solid fa-star"></i> #2-34-8/1,Chintavari Street,
            Bhanugudi Junction,Kakinada-533003</a>
         <a href="#"><i class="fa-solid fa-star"></i>7658905111</a>
         <a href="#"><i class="fa-solid fa-star"></i> info@qualitycarelabs.com</a>
         <br>
         <br>
         <div class="  d-flex" style="gap:25px">
            <a href="<?= base_url() ?>cart"><i style="font-size: 30px; color: white;"
                  class="fa-solid fa-cart-plus cart-icon"></i></a>
            <a href="<?= base_url() ?>userlogin"><i style="font-size: 30px; color: white;"
                  class="fa-solid fa-user"></i></a>
         </div>
      </div>

      <div class="footer-widget__social mb-30 ">
         <a class="tp-f-fb" href="https://www.facebook.com/profile.php?id=61553810283752 " target="_blank"><i
               class="fa-brands fa-facebook-f"></i></a>
         <a class="tp-f-inst"
            href="https://www.instagram.com/quality_care_lab?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA== "
            target="_blank"><i class="fa-brands fa-instagram"></i></a>
         <a class="tp-f-youtube" href="https://www.youtube.com/@Quality_Care_Lab" target="_blank"><i
               class="fab fa-youtube"></i></i></a>
         <a class="tp-f-fb" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
         <a class="tp-f-pinterest" href="https://in.pinterest.com/labqualitycare6/" target="_blank"><i
               class="fab fa-pinterest"></i></a>
         <a class="tp-f-linkedin" href="#" target="_blank"><i class="fab fa-linkedin"></i></a>

      </div>


      <div class="tpsideinfo__content-inputarea mb-60 d-none d-xl-block">
         <span>Get Update</span>
         <div class="tpsideinfo__content-inputarea-input">
            <?= form_open_multipart('sendonlymail'); ?>

            <input name="mail" type="email" placeholder="Enter Mail" required>
            <button type="submit" class="footer-widget__fw-news-btn"><i class="fa-solid fa-paper-plane"></i></button>
            </form>
         </div>
      </div>



   </div>
   <!-- sidebar-info-end -->

   <div class="body-overlay"></div>

   <!-- main-area -->
   <main>

      <!-- breadcrumb-area -->
      <!-- <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay" data-background="assets/img/banner/breadcrumb-01.jpg">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                     <div class="tp-breadcrumb">
                        <h2 class="tp-breadcrumb__title">Cheackout</h2>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                     <div class="tp-breadcrumb__link text-xl-end">
                        <span>Bioxlab : <a href="checkout.html">Cheackout</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
      <!-- breadcrumb-area-end -->

      <!-- checkout-area start -->
      <section class="checkout-area pb-100 wow fadeInUp mt-100" data-wow-duration=".8s" data-wow-delay=".2s">
         <?php
         $session = \Config\Services::session();
         $userData = $session->get('userData');
         ?>
         <div class="container">
            <form action="#">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                           <!-- <div class="col-md-12">
                                          <div class="country-select">
                                             <label>Country <span class="required">*</span></label>
                                             <select>
                                                   <option value="volvo">United States</option>
                                                   <option value="saab">Algeria</option>
                                                   <option value="mercedes">Canada</option>
                                                   <option value="audi">Germany</option>
                                                   <option value="audi2">England</option>
                                                   <option value="audi3">Qatar</option>
                                                   <option value="audi5">Dominican Republic</option>
                                             </select>
                                          </div>
                                       </div> -->
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>First Name <span class="required">*</span></label>
                                 <input type="text" placeholder="" required value="<?= $userData['first_name'] ?>" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Last Name <span class="required">*</span></label>
                                 <input type="text" placeholder="" required value="<?= $userData['last_name'] ?>" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Company Name</label>
                                 <input type="text" placeholder="" required value="<?= $userData['first_name'] ?>" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Address <span class="required">*</span></label>
                                 <input type="text" placeholder="Street address" required
                                    value="<?= $userData['address'] ?>" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Town / City <span class="required">*</span></label>
                                 <input type="text" placeholder=" " / required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>State  <span class="required">*</span></label>
                                 <input type="text" placeholder="" required />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Postcode / Zip <span class="required">*</span></label>
                                 <input type="text" placeholder=" " required />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Email Address <span class="required">*</span></label>
                                 <input type="email" placeholder="" required value="<?= $userData['email'] ?>" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Phone <span class="required">*</span></label>
                                 <input type="text" placeholder=" " required value="<?= $userData['phone'] ?>" />
                              </div>
                           </div>
                           <!-- <div class="col-md-12">
                              <div class="checkout-form-list create-acc">
                                 <label>Don't have an account? <a href="<?= base_url() ?>register"
                                       class="register_color"> Register </a></label>
                              </div>
                           </div> -->
                        </div>
                        <!-- <div class="different-address">
                           <div class="ship-different-title">
                              <h3>
                                 <label>Ship to a different address?</label>
                                 <input id="ship-box" type="checkbox" />
                              </h3>
                           </div>
                           <div id="ship-box-info">
                              <div class="row">

                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>First Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" value="<?= $userData['first_name'] ?>" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Last Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" value="<?= $userData['last_name'] ?>" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Company Name</label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Address <span class="required">*</span></label>
                                       <input type="text" placeholder="Street address"
                                          value="<?= $userData['address'] ?>" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Town / City <span class="required">*</span></label>
                                       <input type="text" placeholder="Town / City" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>State / County <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Postcode / Zip <span class="required">*</span></label>
                                       <input type="number" placeholder="Postcode / Zip" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Email Address <span class="required">*</span></label>
                                       <input type="email" placeholder="" value="<?= $userData['email'] ?>" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Phone <span class="required">*</span></label>
                                       <input type="text" placeholder="Postcode / Zip"
                                          value="<?= $userData['phone'] ?>" />
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="order-notes">
                              <div class="checkout-form-list">
                                 <label>Order Notes</label>
                                 <textarea id="checkout-mess" cols="30" rows="10"
                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="your-order mb-30 ">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                           <!-- <table>
                              <thead>
                                 <tr>
                                    <th class="product-name ps-2">Product</th>
                                    <th class="product-total  ps-2">Total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="cart_item">
                                    <td class="product-name ps-2">
                                       Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                    </td>
                                    <td class="product-total ps-2">
                                       <span class="amount">₹165.00</span>
                                    </td>
                                 </tr>
                                 <tr class="cart_item">
                                    <td class="product-name ps-2">
                                       Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                    </td>
                                    <td class="product-total ps-2">
                                       <span class="amount">₹50.00</span>
                                    </td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr class="cart-subtotal   ">
                                    <th class="ps-2">Cart Subtotal</th>
                                    <td><span class="amount ps-2">₹215.00</span></td>
                                 </tr>
                                 <tr class="shipping">
                                    <th class="ps-2">Shipping</th>
                                    <td>
                                       <ul>
                                          <li class="ps-2">
                                             <input type="radio" name="shipping" />
                                             <label>
                                                Flat Rate: <span class="amount ">₹7.00</span>
                                             </label>
                                          </li>
                                          <li class="ps-2">
                                             <input type="radio" name="shipping" />
                                             <label>Free Shipping:</label>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>
                                 <tr class="order-total">
                                    <th class="ps-2">Order Total</th>
                                    <td><strong><span class="amount ps-2">₹215.00</span></strong>
                                    </td>
                                 </tr>
                              </tfoot>
                           </table> -->
                           <table id="checkout-items">
                              <thead>
                                 <tr>
                                    <th class="ps-2"> Item Type</th>
                                    <th class="ps-2">Quantity</th>

                                    <th class="ps-2">Price</th>

                                 </tr>

                              </thead>
                              <tbody>


                              </tbody>
                              <tfoot>
                                 <tr class="order-total">
                                    <th class="ps-2"> Total Amount</th>
                                    <td><strong><span class="amount ps-2"
                                             id="checkout-totalAmount">₹00.00</span></strong>
                                    </td>
                                 </tr>
                              </tfoot>

                           </table>

                        </div>
                        <div class="payment-method">
                           <!-- <div class="accordion" id="checkoutAccordion">
                                       <div class="accordion-item">
                                          <h2 class="accordion-header" id="checkoutOne">
                                             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                             Direct Bank Transfer
                                             </button>
                                          </h2>
                                          <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                             <div class="accordion-body">
                                             Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <h2 class="accordion-header" id="paymentTwo">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                             Cheque Payment
                                             </button>
                                          </h2>
                                          <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                             <div class="accordion-body">
                                             Please send your cheque to Store Name, Store Street, Store Town, Store
                                             State / County, Store
                                             Postcode.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <h2 class="accordion-header" id="paypalThree">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                             PayPal
                                             </button>
                                          </h2>
                                          <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                             <div class="accordion-body">
                                             Pay via PayPal; you can pay with your credit card if you don’t have a
                                             PayPal account.
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                           <div class="order-button-payment mt-20">
                              <button type="submit" class="tp-btn-second w-100">Place order</button>
                           </div>
                        </div>




                     </div>
                  </div>


                  <script>
                     document.addEventListener("DOMContentLoaded", function () {
                        // Retrieve cart items from local storage
                        let cartItems = [];
                        try {
                           cartItems = JSON.parse(localStorage.getItem("cart")) || [];
                        } catch (error) {
                           console.error("Error parsing cart items from local storage:", error);
                           // Handle the error, like resetting the cart items
                           cartItems = [];
                        }

                        // Initialize variables to hold total quantity for services and packages
                        let totalServiceQuantity = 0;
                        let totalPackageQuantity = 0;

                        // Aggregate quantities based on item type
                        cartItems.forEach((item, index) => {
                           if (item.type === "service") {
                              totalServiceQuantity += parseInt(item.quantity);
                           } else if (item.type === "package") {
                              totalPackageQuantity += parseInt(item.quantity);
                           }
                        });

                        // Display total quantities in the appropriate place on the checkout page
                        document.getElementById("total-service-quantity").innerText = totalServiceQuantity;
                        document.getElementById("total-package-quantity").innerText = totalPackageQuantity;
                     });
                  </script>



               </div>
            </form>
         </div>
      </section>
      <!-- checkout-area end -->

   </main>
   <!-- main-area-end -->

   <!-- footer-area -->
   <footer>
      <div class="footer-area theme-bg pt-50  ">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget footer-col-1 mb-50 wow fadeInUp" data-wow-delay=".2s">
                     <h4 class="footer-widget__title mb-30">
                        <a href="<?= base_url() ?> "><img src="<?= base_url() ?>assets/img/footer logo.png"
                              style="border-radius: 3px;" alt="logo"></a>
                     </h4>
                     <p>Quality Care Lab is committed to providing patient focused, high quality, affordable and
                        sustainable health laboratory services with state-of-the art technology to our customers</p>
                     <div class="footer-widget__social">
                        <a class="tp-f-fb" href="https://www.facebook.com/profile.php?id=61553810283752 "
                           target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="tp-f-inst"
                           href="https://www.instagram.com/quality_care_lab?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA== "
                           target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a class="tp-f-youtube" href="https://www.youtube.com/@Quality_Care_Lab" target="_blank"><i
                              class="fab fa-youtube"></i></i></a>
                        <a class="tp-f-fb" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="tp-f-pinterest" href="https://in.pinterest.com/labqualitycare6/" target="_blank"><i
                              class="fab fa-pinterest"></i></a>
                        <a class="tp-f-linkedin" href="#" target="_blank"><i class="fab fa-linkedin"></i></a>

                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget footer-col-2 mb-50 wow fadeInUp" data-wow-delay=".4s">
                     <h4 class="footer-widget__title mb-20">Menu</h4>
                     <div class="footer-widget__links">
                        <ul>
                           <li><a href="<?= base_url() ?> ">Home</a></li>
                           <li><a href="<?= base_url() ?>about">About us</a></li>
                           <li><a href="<?= base_url() ?>lab">Lab</a></li>

                           <li><a href="<?= base_url() ?>services">Services</a></li>
                           <li><a href="<?= base_url() ?>packages">Packages</a></li>
                           <li><a href="<?= base_url() ?>contact">Contact us</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget footer-col-3 mb-50 wow fadeInUp" data-wow-delay=".6s">
                     <h4 class="footer-widget__title mb-20">Contact info</h4>
                     <div class="footer-widget__info">
                        <ul>
                           <li> <i class="fa-solid fa-location-dot"></i> &nbsp; #2-34-8/1,Chintavari Street
                              <br> Bhanugudi Junction, <br>Kakinada-533003
                           </li>

                           <li><i class="fa-solid fa-phone"></i> &nbsp; 7658905111 </li>

                           <li><i class="fa-solid fa-envelope"></i> &nbsp; info@qualitycarelabs.com </li>
                           <!-- <li>Office Hours: 8AM - 11PM</li>
                              <li>Sunday - Wekend Day</li> -->
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="footer-widget footer-col-4 mb-50 wow fadeInUp" data-wow-delay=".8s">
                     <h4 class="footer-widget__title mb-20">Mailing</h4>
                     <p>Sign up for our mailing list to get</p>
                     <div class="footer-widget__newsletter p-relative">
                        <?= form_open_multipart('sendonlymail'); ?>

                        <input name="mail" type="email" placeholder="Enter Mail" required>
                        <button type="submit" class="footer-widget__fw-news-btn"><i
                              class="fa-solid fa-paper-plane"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="footer-area-bottom theme-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                  <div class="footer-widget__copyright">
                     <span> ©2023 Quality Care . <i>All Rights Reserved. Designed & Developed by <a
                              href="https://bhavicreations.com/" target="_blank"><strong
                                 style="font-weight: bold; font-style: italic;">Bhavi Creations</strong> </a></i></span>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                  <div class="footer-widget__copyright-info info-direction">
                     <ul class="d-flex align-items-center">
                        <li><a href="<?= base_url() ?>terms">Terms and conditions</a></li>
                        <li><a href="<?= base_url() ?>privacy">Privacy policy</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer-area-end -->

   <!-- JS here -->
   <script src="assets/js/jquery.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/aos.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/jquery.knob.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>


