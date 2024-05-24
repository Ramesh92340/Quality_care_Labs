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
                              <li><a href="<?= base_url() ?>">Home</a>

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
      <?php
      $finalPrice = 0;
      ?>


      <section class="cart-area pt-30 pb-50 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
            <div class="row">
               <h2 class="text-center">Cart Items</h2>

               <div class="col-12">
                  <div class="table-content table-responsive">
                     <h4>Services</h4>

                     <table class="table">
                        <thead>
                           <tr>
                              <th class="product-thumbnail text-center">S.No</th>
                              <th class="product-thumbnail text-center">Test Code</th>
                              <th class="cart-product-name text-center">Test Name</th>
                              <th class="product-price text-center">Price Per Unit</th>
                              <th class="product-quantity text-center">Quantity</th>
                              <th class="product-subtotal text-center">Total</th>
                              <th class="product-remove text-center">Remove</th>
                           </tr>
                        </thead>
                        <tbody id="cart-items">
                           <?php if (isset($services)):
                              $totalServicesPrice = 0;
                              ?>
                              <?php foreach ($services as $index => $sr): ?>
                                 <tr>
                                    <td><?= $sr['id'] ?></td>
                                    <td><?= $sr['test_code'] ?></td>
                                    <td><?= $sr['test_name'] ?></td>
                                    <td><?= $sr['price'] ?></td>
                                    <td><?= $sr['servicesqty'] ?></td>
                                    <td>
                                       <?php
                                       $calculatedservicesPrice = $sr['servicesqty'] * $sr['price'];
                                       $totalServicesPrice += $calculatedservicesPrice;
                                       $finalPrice += $calculatedservicesPrice;
                                       echo $calculatedservicesPrice;
                                       ?>
                                    </td>
                                    <td><a
                                          href="<?= base_url() ?>removefromcart/<?= $sr['id'] ?>/<?= $sr['servicesqty'] ?>/1">x</a>
                                    </td>
                                 </tr>
                              <?php endforeach; ?>
                           <?php endif; ?>
                           <!-- Cart items will be dynamically inserted here -->
                        </tbody>
                     </table>
                  </div>

                  <div class="col-lg-6 col-md-12 ms-auto">
                     <div class="cart-page-total">
                        <ul class="mb-20">
                           <li>Total Services Amount <span>₹<?= $totalServicesPrice ?></span></li>
                        </ul>
                     </div>
                  </div>





                  <div class="table-content table-responsive">
                     <h4>packages</h4>
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="product-thumbnail text-center">S.No</th>
                              <th class="cart-product-name text-center">Package Name</th>
                              <th class="product-thumbnail text-center">No. of Tests</th>
                              <th class="product-price text-center">Price of Package</th>
                              <th class="product-quantity text-center">Quantity</th>
                              <th class="product-subtotal text-center">Total</th>
                              <th class="product-remove text-center">Remove</th>
                           </tr>
                        </thead>
                        <tbody id="cart-items">
                           <?php if (isset($packages)):
                              $totalPackagesPrice = 0;
                              ?>
                              <?php foreach ($packages as $index => $pkg): ?>
                                 <tr>
                                    <td><?= $pkg['id'] ?></td>
                                    <td><?= $pkg['package_name'] ?></td>
                                    <td><?= $pkg['package_name'] ?></td>
                                    <td><?= $pkg['package_price'] ?></td>
                                    <td><?= $pkg['packagesqty'] ?></td>
                                    <td>
                                       <?php
                                       $calculatedHealthRiskPrice = $pkg['packagesqty'] * $pkg['package_price'];
                                       $totalPackagesPrice += $calculatedHealthRiskPrice;
                                       $finalPrice += $calculatedHealthRiskPrice;
                                       echo $calculatedHealthRiskPrice;
                                       ?>
                                    </td>
                                    <td><a
                                          href="<?= base_url() ?>removefromcart/<?= $pkg['id'] ?>/<?= $pkg['packagesqty'] ?>/3">x</a>
                                    </td>
                                 </tr>
                              <?php endforeach; ?>
                           <?php endif; ?>
                           <!-- Cart items will be dynamically inserted here -->
                        </tbody>
                     </table>
                  </div>

                  <div class="col-lg-6 col-md-12 ms-auto">
                     <div class="cart-page-total">
                        <ul class="mb-20">
                           <li>Total Package Amount <span>₹<?= $totalPackagesPrice ?></span></li>
                        </ul>
                     </div>
                  </div>




                  <div class="table-content table-responsive">
                     <h4> Health Risks</h4>
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="product-thumbnail text-center">S.No</th>
                              <th class="cart-product-name text-center">Health Risks Name</th>
                              <th class="product-thumbnail text-center">No. of parameters</th>
                              <th class="product-price text-center">Price of Package</th>
                              <th class="product-quantity text-center">Quantity</th>
                              <th class="product-subtotal text-center">Total</th>
                              <th class="product-remove text-center">Remove</th>
                           </tr>
                        </thead>
                        <tbody id="cart-items">
                           <?php if (isset($healthrisk)):
                              $totalHealthRiskPrice = 0;
                              ?>
                              <?php foreach ($healthrisk as $index => $hr): ?>
                                 <tr>
                                    <td><?= $hr['id'] ?></td>
                                    <td><?= $hr['name'] ?></td>
                                    <td><?= $hr['parameters'] ?></td>
                                    <td><?= $hr['price'] ?></td>
                                    <td><?= $hr['healthriskqty'] ?></td>
                                    <td>
                                       <?php
                                       $calculatedHealthRiskPrice = $hr['healthriskqty'] * $hr['price'];
                                       $totalHealthRiskPrice += $calculatedHealthRiskPrice;
                                       $finalPrice += $calculatedHealthRiskPrice;
                                       echo $calculatedHealthRiskPrice;
                                       ?>
                                    </td>
                                    <td><a
                                          href="<?= base_url() ?>removefromcart/<?= $hr['id'] ?>/<?= $hr['healthriskqty'] ?>/2">x</a>
                                    </td>
                                 </tr>
                              <?php endforeach; ?>
                           <?php endif; ?>
                           <!-- Cart items will be dynamically inserted here -->
                        </tbody>
                     </table>
                  </div>

                  <div class="col-lg-6 col-md-12 ms-auto">
                     <div class="cart-page-total">
                        <ul class="mb-20">
                           <li>Total Health Risks Package Amount <span>₹<?= $totalHealthRiskPrice ?></span></li>
                        </ul>
                     </div>
                  </div>




                  <div class="col-lg-6 col-md-12 ms-auto">
                     <div class="cart-page-total">
                        <ul class="mb-20">
                           <li class="totalamount_last"><strong> Total Amount</strong> <span>
                                 <strong>₹<?= $finalPrice ?></strong></span></li>
                        </ul>
                     </div>
                  </div>


                  <section class="checkout-area pb-10 wow fadeInUp mt-50" data-wow-duration=".8s" data-wow-delay=".2s">
                     <div class="container">

                        <div class="row">
                           <div class="col-md-6">
                              <div class="d-flex justify-content-start">
                                 <button class="header-bottom-btn" style="border-radius: 8px;" type="button"
                                    onclick="addmore( )">ADD MORE</button>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="d-flex justify-content-end">
                                 <button class="header-bottom-btn" style="border-radius: 8px;" type="button"
                                    onclick="redirectToAnotherPage()">Proceed to Buy</button>
                              </div>

                           </div>
                        </div>

                        <script>
                           function redirectToAnotherPage() {
                              // Redirect to another page
                              window.location.href = "checkout";
                           }


                           function addmore() {
                              // Redirect to another page
                              window.location.href = "services";
                           }
                        </script>


                     </div>
                  </section>
               </div>







               <script>
                  // Retrieve cart items from local storage
                  let cartItems = JSON.parse(localStorage.getItem("cart")) || [];

                  // Display cart items on the cart page
                  const cartContainer = document.getElementById("cart-items");
                  let totalAmount = 0;
                  cartItems.forEach((item, index) => {
                     const row = document.createElement("tr");

                     const cell1 = document.createElement("td");
                     cell1.className = "product-thumbnail text-center";
                     cell1.textContent = index + 1;

                     const cell2 = document.createElement("td");
                     cell2.className = "product-thumbnail";
                     cell2.textContent = item.testCode;

                     const cell3 = document.createElement("td");
                     cell3.className = "cart-product-name";
                     cell3.textContent = item.testName;

                     const cell4 = document.createElement("td");
                     cell4.className = "product-price text-center";
                     cell4.textContent = item.price;

                     const cell5 = document.createElement("td");
                     cell5.className = "product-quantity text-center";
                     const input = document.createElement("input");
                     input.className = "cart-input";
                     input.type = "number";
                     input.min = "1";
                     input.value = "1";
                     input.dataset.index = index;
                     cell5.appendChild(input);

                     const cell6 = document.createElement("td");
                     cell6.className = "product-subtotal text-center";
                     cell6.textContent = item.price;

                     const cell7 = document.createElement("td");
                     cell7.className = "product-remove text-center";
                     const removeButton = document.createElement("a");
                     removeButton.href = "#";
                     removeButton.className = "remove-item";
                     const trashIcon = document.createElement("i");
                     trashIcon.className = "fa-solid fa-trash";

                     // Append the trash icon to the removeButton
                     removeButton.appendChild(trashIcon);
                     cell7.appendChild(removeButton);

                     row.appendChild(cell1);
                     row.appendChild(cell2);
                     row.appendChild(cell3);
                     row.appendChild(cell4);
                     row.appendChild(cell5);
                     row.appendChild(cell6);
                     row.appendChild(cell7);

                     cartContainer.appendChild(row);


                     totalAmount += parseFloat(item.price);
                  });

                  document.getElementById("totalAmount").innerText = "₹" + totalAmount.toFixed(2);

                  // Add event listeners for changing quantity
                  const quantityInputs = document.querySelectorAll(".cart-input");
                  quantityInputs.forEach(input => {
                     input.addEventListener("change", function (event) {
                        const index = event.target.dataset.index;
                        const quantity = parseInt(event.target.value);
                        const pricePerUnit = parseFloat(cartItems[index].price);
                        const subtotal = quantity * pricePerUnit;
                        cartItems[index].quantity = quantity;
                        cartItems[index].subtotal = subtotal;
                        event.target.closest("tr").querySelector(".product-subtotal").textContent = "₹" + subtotal.toFixed(2);
                        updateTotal();
                        localStorage.setItem("cart", JSON.stringify(cartItems));
                     });
                  });

                  // Add event listeners for removing items
                  const removeButtons = document.querySelectorAll(".remove-item");
                  removeButtons.forEach(button => {
                     button.addEventListener("click", function (event) {
                        const index = event.target.closest("tr").querySelector(".cart-input").dataset.index;
                        cartItems.splice(index, 1);
                        event.target.closest("tr").remove();
                        updateTotal();
                        localStorage.setItem("cart", JSON.stringify(cartItems));
                     });
                  });

                  function updateTotal() {
                     totalAmount = cartItems.reduce((acc, item) => acc + item.subtotal, 0);
                     document.getElementById("totalAmount").innerText = "₹" + totalAmount.toFixed(2);
                  }

                  function addItemToCart(item) {
                     // Add item to cart logic
                     cartItems.push(item);

                     // Save cart items to local storage
                     localStorage.setItem("cart", JSON.stringify(cartItems));
                  }

                  function removeItemFromCart(index) {
                     // Remove item from cart logic
                     cartItems.splice(index, 1);

                     // Save cart items to local storage
                     localStorage.setItem("cart", JSON.stringify(cartItems));
                  }


                  function updateCart() {
                     // Update cart logic

                     // Save cart items to local storage
                     localStorage.setItem("cart", JSON.stringify(cartItems));
                  }


                  try {
                     let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
                  } catch (error) {
                     console.error("Error parsing cart items from local storage:", error);
                     // Handle the error, like resetting the cart items
                     cartItems = [];
                  }


                  function clearCart() {
                     localStorage.removeItem("cart");
                  }
               </script>






               <!-- 
               <div class="col-6  d-flex flex-row justify-content-start">
                  <a class="header-bottom-btn" style="border-radius: 8px;" href="./services.html">ADD MORE</a>

               </div>

               <div class="col-6 d-flex flex-row justify-content-end">
                  <a class="header-bottom-btn" style=" border-radius: 8px;" href="./checkout.html ">Proceed to Buy</a>
               </div> -->

            </div>





            <!-- <div class="col-12">
                  <form action="cartMail.php" method="post">
                     <div class="table-content table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail  text-center">SNo.</th>
                                 <th class="product-thumbnail   text-center">Test Code</th>
                                 <th class="cart-product-name  text-center">Test Name</th>
                                 <th class="product-price  text-center"> Price Per Unit</th>
                                 <th class="product-quantity  text-center">Quantity</th>
                                 <th class="product-subtotal  text-center">Total</th>
                                 <th class="product-remove  text-center" id="remove">Remove</th>
                              </tr>
                           </thead>





                           <tbody>


                              <tr>
                                 <td class="product-price  text-center"><span class="amount">1</span></td>
                                 <td class="product-thumbnail"> fdgfd </td>
                                 <td class="product-name"><a href="shop-details.html">Master Web Design in Adobe XD</a>
                                 </td>
                                 <td class="product-price text-center"><span class="amount">₹130.00</span></td>
                                 <td class="product-quantity text-center">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal  text-center"><span class="amount">₹130.00</span></td>
                                 <td class="product-remove  text-center"> <i class="fa-solid fa-trash"></i> </td>
                              </tr>



                              <tr>
                                 <td class="product-price  text-center"><span class="amount">2</span></td>
                                 <td class="product-thumbnail"><a href="shop-details.html">drg</a></td>
                                 <td class="product-name"><a href="shop-details.html">How to Write Great Web Content</a>
                                 </td>
                                 <td class="product-price  text-center"><span class="amount">₹120.50</span></td>
                                 <td class="product-quantity text-center   ">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal  text-center"><span class="amount">₹120.50</span></td>
                                 <td class="product-remove  text-center"><a href="#"><i
                                          class="fa-solid fa-trash"></i></a></td>
                              </tr>
                           </tbody>



                        </table>
                     </div>


                     <div class="col-lg-6 col-md-12 ms-auto">
                        <div class="cart-page-total">

                           <ul class="mb-20">
                              <li>Total <span>₹250.00</span></li>
                           </ul>
                        </div>
                     </div>

                     <section class="checkout-area pb-10 wow fadeInUp mt-50" data-wow-duration=".8s"
                        data-wow-delay=".2s">
                        <div class="container">
                           <form action="#" method="post">
                              <div class="row">
                                 <div class="col-lg-12 col-md-12">
                                    <div class="checkbox-form">
                                       <h3>Customer Details</h3>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input name="first_name" type="text" placeholder="" required />
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input name="last_name" type="text" placeholder="" required />
                                             </div>
                                          </div>

                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Address-1<span class="required">*</span></label>
                                                <input name="address" type="text" placeholder="D.no, Apartment "
                                                   required />
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Address-2<span class="required">*</span></label>
                                                <input name="address2" type="text" placeholder="Street address"
                                                   required />
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input name="location" type="text" placeholder="Town / City" required />
                                             </div>
                                          </div>

                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Pin code <span class="required">*</span></label>
                                                <input name="pin_code" type="text" placeholder="Postcode  " required />
                                             </div>
                                          </div>

                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input name="number" type="text" placeholder=" " required />
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input name="mail" type="email" placeholder="" required />
                                             </div>
                                          </div>

                                       </div>

                                    </div>
                                 </div>


                              </div>
                           </form>
                        </div>
                     </section>



                  </form>
               </div> -->




         </div>
      </section>






      <!-- cart area end-->

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