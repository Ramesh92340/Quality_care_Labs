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
      <img src="assets/img/logo (1).png" alt="" style="width: 250px;">
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
                              <li><a class="active" href="<?= base_url() ?>lab">Lab</a></li>
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
                        <a class="header-bottom-btn" style="border-radius: 8px;" href="<?= base_url() ?>#appointment ">Book
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
            <a href="<?= base_url() ?>cart"><i style="font-size: 30px; color: white;" class="fa-solid fa-cart-plus cart-icon"></i></a>
            <a href="<?= base_url() ?>userlogin"><i style="font-size: 30px; color: white;" class="fa-solid fa-user"></i></a>
        </div>
      </div>

      <div class="footer-widget__social mb-30 ">
         <a class="tp-f-fb" href="https://www.facebook.com/profile.php?id=61553810283752 " target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
         <a class="tp-f-inst" href="https://www.instagram.com/quality_care_lab?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA== " target="_blank"><i class="fa-brands fa-instagram"></i></a>
         <a class="tp-f-youtube" href="https://www.youtube.com/@Quality_Care_Lab" target="_blank"><i class="fab fa-youtube"></i></i></a>
         <a class="tp-f-fb" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
         <a class="tp-f-pinterest" href="https://in.pinterest.com/labqualitycare6/" target="_blank"><i class="fab fa-pinterest"></i></a>
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


   <!-- main-area -->
   <main>


      <section>
         <div class="img_body">
            <img class="title-image" src="<?= base_url() ?>assets/img/Lab-page.png" alt="Title Image">

         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- research-area -->
      <section class="research-area pt-50 pb-30">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="research-item mb-50 wow fadeInUp" data-wow-delay=".2s">
                     <div class="research-item__thum fix mb-20">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15263.66592724114!2d82.23331450031097!3d16.978657991445367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.989065099999998!2d82.2474639!4m5!1s0x3a38286d29ab4d8f%3A0x5497a7f1df337003!2sQuality%20Care%20Speciality%20Lab%2C%202-34-8%2F1%2C%20Chinta%20Vari%20St%2C%20opp.%20St.%20Anthony%20High%20School%2C%20Bhanugudi%20Junction%2C%20Jn%2C%20Kakinada%2C%20Andhra%20Pradesh%20533003!3m2!1d16.9679644!2d82.2371027!5e0!3m2!1sen!2sin!4v1710241368393!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Kakinada</a></h4>
                        <p>
                           D.NO : #2-34-8/1 Chintavari Street, <br>
                           Bhanugudi Junction <br> Cell : 7658905666.</p>

                        <!-- Add onclick event to open directions in a new tab -->
                        <a class="research-item__btn" onclick="openDirectionskkd()">Get Directions</a>
                     </div>
                  </div>
               </div>

               <!-- JavaScript function to open directions in a new tab -->
               <script>
                  function openDirectionskkd() {
                     // URL for directions
                     var directionsURL = "https://www.google.com/maps/dir//Quality+Care+Speciality+Lab,+2-34-8%2F1,+Chinta+Vari+St,+opp.+St.+Anthony+High+School,+Bhanugudi+Junction,+Jn,+Kakinada,+Andhra+Pradesh+533003";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>

               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-pink mb-50 wow fadeInUp" data-wow-delay=".4s">
                     <div class="research-item__thum fix mb-20">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d121860.2453030735!2d82.46127383664654!3d17.357348127590164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a39c7e96fb1bf41%3A0xb3c9fa61aa8e6a1e!2s77%2Ctown%20road%2C%20Tuni%20Pentakota%20Rd%2C%20Tuni%2C%20Andhra%20Pradesh%20533401!3m2!1d17.357394499999998!2d82.5436869!5e0!3m2!1sen!2sin!4v1710241451643!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Tuni</a></h4>
                        <p>SAKTHI VOLAUNTARY BLOOD BANK <br> Cinima road Tuni <br>Cell : 7658905888</p>
                        <a class="research-item__btn" onclick="openDirectionstuni()">Get Directions</a>
                     </div>
                  </div>
               </div>
               <script>
                  function openDirectionstuni() {
                     // URL for directions
                     var directionsURL = "https://www.google.com/maps/dir//Quality+Care+Lab,+77,town+road,+Tuni+Pentakota+Rd,+Tuni,+Andhra+Pradesh+533401/@17.3513783,82.5407111,14.75z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a39c7e96fb1bf41:0xb3c9fa61aa8e6a1e!2m2!1d82.5436869!2d17.3573945!3e0?hl=en&entry=ttu";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-green mb-50 wow fadeInUp" data-wow-delay=".6s">
                     <div class="research-item__thum fix mb-20">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d122270.10254507813!2d82.13186102172145!3d16.72981016505791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a37f506fd77224b%3A0x691af953a112e247!2sCHINTHA%20STREET%2C%20opp.%20JIMPER%20HOSPITAL%2C%20near%20INDIRA%20GANDHI%20STATUE%2C%20Yanam%2C%20Puducherry%20533464!3m2!1d16.729826499999998!2d82.2142628!5e0!3m2!1sen!2sin!4v1710241528877!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Yanam</a></h4>
                        <p>D.NO : 08-08-001 Opp. Old Nurse Quarters Beside. Indiragandhi park Yanam <br> Cell :
                           9143535333</p>
                           <a class="research-item__btn" onclick="openDirectionsYanam()">Get Directions</a>
                     </div>
                  </div>
               </div>
               <script>
                  function openDirectionsYanam() {
                     // URL for directions
                     var directionsURL = "https://www.google.com/maps/dir//Quality+care+lab,+CHINTHA+STREET,+opp.+JIMPER+HOSPITAL,+near+INDIRA+GANDHI+STATUE,+Yanam,+Puducherry+533464/@16.72981,82.131861,11z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a37f506fd77224b:0x691af953a112e247!2m2!1d82.2142628!2d16.7298265!3e0?hl=en&entry=ttu";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-sky mb-50 wow fadeInUp" data-wow-delay=".2s">
                     <div class="research-item__thum fix mb-20">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d244306.77459224197!2d81.97181828914466!3d16.910815779736378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.989065099999998!2d82.2474639!4m5!1s0x3a37935fd509f0a7%3A0x76b30e3523f089c0!2sQUALITY%20CARE%20LAB%2C%20near%20BALUSU%20KALYANA%20MANDAPAM%2C%20Market%20Center%2C%20Ratnampeta%2C%20Ramachandrapuram%2C%20Andhra%20Pradesh!3m2!1d16.837806099999998!2d82.0258119!5e0!3m2!1sen!2sin!4v1710241583529!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Ramachandrapuram</a></h4>
                        <p>VENKATESWARA SCANS & DIAGNOSTICS <br>D.NO : 22-3-22/3 Old bus station, Ramachandrapurum <br>
                           CELL :9542540963</p>
                           <a class="research-item__btn" onclick="openDirectionsrcpm()">Get Directions</a>
                     </div>
                  </div>
               </div>
               <script>
                  function openDirectionsrcpm() {
                     // URL for directions
                     var directionsURL = " https://www.google.com/maps/dir//QUALITY+CARE+LAB,+19-1-44,+near+BALUSU+KALYANA+MANDAPAM,+Market+Center,+Ratnampeta,+Ramachandrapuram,+Andhra+Pradesh+533255/@16.910882,82.136631,11z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a37935fd509f0a7:0x76b30e3523f089c0!2m2!1d82.0258119!2d16.8378061!3e0?hl=en&entry=ttu";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-green mb-50 wow fadeInUp" data-wow-delay=".4s">
                     <div class="research-item__thum fix mb-20">
                        <img src="<?= base_url() ?>assets/img/research/research-thumb-05.jpg" alt="research-thumb">
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Peddapuram</a></h4>
                        <p>X67R+J5C Quality care lab, RajuGari St, <br> opposite srinivasa chicken center, Recharlapeta,
                           Burma Colony,Peddapuram<br> Cell :
                        </p>
                        <a class="research-item__btn" onclick="openDirectionspdp()">Get Directions</a>
                     </div>
                  </div>
               </div>
               <script>
                  function openDirectionspdp() {
                     // URL for directions
                     var directionsURL = " ";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item mb-50 wow fadeInUp" data-wow-delay=".6s">
                     <div class="research-item__thum fix mb-20">
                        <img src="<?= base_url() ?>assets/img/research/research-thumb-05.jpg" alt="research-thumb">
                         
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Ravulapalem</a></h4>
                        <p>BHAVANI MULTIECIALITY & LAPROSCOPY HOSPITALS <br> D.NO :8-840, Sujana plaza, Ravulapalem <br>
                           Cell : 7658905444</p>
                           <a class="research-item__btn" onclick="openDirectionsrvpm()">Get Directions</a>
                     </div>
                  </div>
               </div>
               <script>
                  function openDirectionsrvpm() {
                     // URL for directions
                     var directionsURL = " ";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-pink mb-50 wow fadeInUp" data-wow-delay=".2s">
                     <div class="research-item__thum fix mb-20">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1957040.9007239023!2d80.10913503386546!3d16.659585063577296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.989065099999998!2d82.2474639!4m5!1s0x3a4a074c3a8d5fa3%3A0xa4cb2f3b8a38b00c!2squality%20care%20lab%20tenali!3m2!1d16.2357299!2d80.64581179999999!5e0!3m2!1sen!2sin!4v1710241853362!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Tenali</a></h4>
                        <p>D.NO. 7-5-77 ASN Degree College Complex,

                           Shop No : 2 Prakasam Road,

                           Ganganammapet, Tenali. <br> CELL : 9948316123</p>
                           <a class="research-item__btn" onclick="openDirectionstnli()">Get Directions</a>
                     </div>
                  </div>
               </div>
               <script>
                  function openDirectionstnli() {
                     // URL for directions
                     var directionsURL = "https://www.google.com/maps/dir//Thyrocare+Tenali+All+Blood+tests+%26+RTPCR,+PRAKKANA,+BILAL+HOTEL+ROAD,+KOTHA+VANTENA,+Wahab+Rd,+Tenali,+Andhra+Pradesh+522201/@16.2423673,82.0154532,7z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a4a074c3a8d5fa3:0xa4cb2f3b8a38b00c!2m2!1d80.6458118!2d16.2357299!3e0?hl=en&entry=ttu";

                     // Open directions in a new tab
                     window.open(directionsURL, '_blank');
                  }
               </script>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-sky mb-50 wow fadeInUp" data-wow-delay=".4s">
                     <div class="research-item__thum fix mb-20">
                        <img src="<?= base_url() ?>assets/img/map.png" alt="research-thumb">
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Opening Soon...</a></h4>
                        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate accusantium amet
                           obcaecati perferendis </p>
                        <a class="research-item__btn">get directions</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="research-item tp-green mb-50 wow fadeInUp" data-wow-delay=".6s">
                     <div class="research-item__thum fix mb-20">
                        <img src="<?= base_url() ?>assets/img/map.png" alt="research-thumb">
                     </div>
                     <div class="research-item__content">
                        <span>Our Branch In</span>
                        <h4 class="research-item__title mb-20"><a>Opening Soon...</a></h4>
                        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate accusantium amet
                           obcaecati perferendis </p>
                        <a class="research-item__btn">get directions</a>
                     </div>
                  </div>
               </div>

            </div>
            <!-- <div class="row">
                  <div class="col-12">
                     <div class="basic-pagination text-center mt-30">
                        <nav>
                           <ul>
                              <li>
                                 <a href="research.html">
                                    <i class="fa-light fa-arrow-left-long"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="research.html">1</a>
                              </li>
                              <li>
                                 <span class="current">2</span>
                              </li>
                              <li>
                                 <a href="research.html">3</a>
                              </li>
                              <li>
                                 <a href="research.html">...</a>
                              </li>
                              <li>
                                 <a href="research.html">
                                    <i class="fa-light fa-arrow-right-long"></i>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div> -->
         </div>
      </section>
      <!-- research-area-end -->

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
                        <a href="<?= base_url() ?> "><img src="<?= base_url() ?>assets/img/footer logo.png" style="border-radius: 3px;" alt="logo"></a>
                     </h4>
                     <p>Quality Care Lab is committed to providing patient focused, high quality, affordable and
                        sustainable health laboratory services with state-of-the art technology to our customers</p>
                     <div class="footer-widget__social">
                        <a class="tp-f-fb" href="https://www.facebook.com/profile.php?id=61553810283752 " target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="tp-f-inst" href="https://www.instagram.com/quality_care_lab?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA== " target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a class="tp-f-youtube" href="https://www.youtube.com/@Quality_Care_Lab" target="_blank"><i class="fab fa-youtube"></i></i></a>
                        <a class="tp-f-fb" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="tp-f-pinterest" href="https://in.pinterest.com/labqualitycare6/" target="_blank"><i class="fab fa-pinterest"></i></a>
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
                           <li><a href="<?= base_url() ?>refundpolicy"><i class="fa-solid fa-truck"></i>&nbsp;Shipping and Delivery </a></li>
                           <li><a href="<?= base_url() ?>shippingpolicy"><i class="fa-solid fa-ban"></i>&nbsp;Cancellation and Refund </a></li>


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
                        <button type="submit" class="footer-widget__fw-news-btn"><i class="fa-solid fa-paper-plane"></i></button>
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
                     <span> ©2023 Quality Care . <i>All Rights Reserved. Designed & Developed by <a href="https://bhavicreations.com/" target="_blank"><strong style="font-weight: bold; font-style: italic;">Bhavi Creations</strong> </a></i></span>
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