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

   <!-- Include slick-theme.css -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
   <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>

   <style>
      ul,
      li {
         list-style: disc;
      }
   </style>

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
         <a href="<?= base_url() ?>./cart.html"><i style="font-size: 30px; color: white;" class="fa-solid fa-cart-plus cart-icon"></i>
         </a>
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


      <!-- slider-arae -->
      <section class="slider-area p-relative">
         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="<?= base_url() ?>assets/img/Slider-1.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="<?= base_url() ?>assets/img/Slider-2.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="<?= base_url() ?>assets/img/Slider-3.png" class="d-block w-100" alt="...">
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </section>
      <!-- slider-arae-end -->

      <!-- about-area -->
      <section class="about-area grey-bg pt-50 tp-box-space pb- 30 ml-30 mr-30" data-background="assets/img/shape/shape-bg-05.png">
         <div class="about-wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-12 col-12">
                     <div class="about-thumb text-lg-center p-relative ml-85 mb-60 wow fadeInLeft" data-wow-delay=".3s">
                        <img src="<?= base_url() ?>assets/img/About-us-1.png" alt="about-thumb">

                        <div class="about-thumb-shape d-none d-md-block">
                           <img src="<?= base_url() ?>assets/img/About-us-2.png" alt="about-shape">
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-12 col-12">
                     <div class="about-content ml-60 mb-60 wow fadeInRight" data-wow-delay=".3s">
                        <div class="tp-section">
                           <span class="tp-section__sub-title left-line mb-25">About &nbsp; Quality &nbsp; Care</span>

                           <i>Welcome to Quality care, where excellence meets precision in the realm of laboratory
                              testing. Established with a steadfast commitment to quality, accuracy, and innovation, we
                              take pride in being a leading provider of laboratory services.</i>
                           <h4>OUR MISSION</h4>
                           <P class=" mr-20 mb-35">Quality Care Lab vision is to provide best diagnostic
                              services with relevant medical technology. This will be
                              achieved by providing innovative, timely, and Accurate
                              Clinical Referral Testing Services.</P>
                        </div>
                        <div class="about-content__btn"><a href="<?= base_url() ?>about.html" class="tp-btn">KNOW MORE...</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </section>
      <!-- about-area-end -->

      <section class="choose-area grey-bg pt-40 pb-10 tp-box-space ml-30 mr-30 mt-10 mb-20" data-background="assets/img/shape/shape-bg-07.png">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-section text-center">
                     <span class="tp-section__sub-title left-line right-line mb-20">who we are</span>
                     <h3 class="tp-section__title mb-20">Why Choose Us</h3>
                     <p class=" mr-20 mb-35 ">Quality Care Lab is committed to providing patient focused, high quality,
                        affordable and sustainable health laboratory services with state-of-the art technology to our
                        customers.</p>
                  </div>
               </div>
            </div>
            <div class="row ">
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="experience-item text-center mb-30 wow fadeInUp" data-wow-delay=".2s">
                     <div class="progress-circular tl-progress">
                        <input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="165" data-height="165" data-bgcolor="#ECEEF3" data-fgcolor="#0E63FF" data-thickness=".07" data-readonly="true" disabled />
                     </div>
                     <span class="skill-item-title">SERVICES</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="experience-item text-center mb-30 wow fadeInUp" data-wow-delay=".4s">
                     <div class="progress-circular tl-progress">
                        <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="165" data-height="165" data-bgcolor="#ECEEF3" data-fgcolor="#F72A75" data-thickness=".07" data-readonly="true" disabled />
                     </div>
                     <span class="skill-item-title">TECHNOLOGY</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="experience-item text-center mb-30 wow fadeInUp" data-wow-delay=".6s">
                     <div class="progress-circular tl-progress">
                        <input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="165" data-height="165" data-bgcolor="#ECEEF3" data-fgcolor="#42BFFF" data-thickness=".07" data-readonly="true" disabled />
                     </div>
                     <span class="skill-item-title">OUR BEST STAFF</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="experience-item text-center mb-30 wow fadeInUp" data-wow-delay=".8s">
                     <div class="progress-circular tl-progress">
                        <input type="text" class="knob" value="0" data-rel="90" data-linecap="round" data-width="165" data-height="165" data-bgcolor="#ECEEF3" data-fgcolor="#10D0A1" data-thickness=".07" data-readonly="true" disabled />
                     </div>
                     <span class="skill-item-title">AUTOMATION</span>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <div class="container" style="margin-bottom: 30px;">
         <div class="row">
            <div class="col-12">
               <h2>Test by Health Risks</h2>
            </div>
         </div>
      </div>

      <!-- small cards  -->

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="row d-flex flex-row justify-content-center">
                     <div class="col-md-2 col-sm-4 col-6 mt-4">
                        <div class="card" style="border-top:solid">
                           <div class="d-flex flex-row justify-content-center" style="border-radius: 50%; overflow: hidden; margin: 0 auto;">
                              <img src="<?= base_url() ?>assets/img/heart (1).png" class="card-img-top img-fluid" style="height: 80px; width:80px" alt="...">
                           </div>
                           <div class="card-body">
                              <h5 class="card-title little_card">Heart</h5>

                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-4 col-6  mt-4">
                        <div class="card" style="border-top:solid">
                           <div class="d-flex flex-row justify-content-center">
                              <img src="<?= base_url() ?>assets/img/liver (1).png" style="height: 80px; width:80px" class="card-img-top" alt="...">
                           </div>
                           <div class="card-body">
                              <h5 class="card-title little_card">Liver</h5>
                              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-4 col-6  mt-4">
                        <div class="card" style="border-top:solid">
                           <div class="d-flex flex-row justify-content-center">
                              <img src="<?= base_url() ?>assets/img/Test icons/kidney.png" style="height: 80px; width:80px" class="card-img-top" alt="...">
                           </div>
                           <div class="card-body">
                              <h5 class="card-title little_card">Kidney</h5>
                              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-4 col-6  mt-4">
                        <div class="card" style="border-top:solid">
                           <div class="d-flex flex-row justify-content-center">
                              <img src="<?= base_url() ?>assets/img/Test icons/thyroid.png" style="height: 80px; width:80px" class="card-img-top" alt="...">
                           </div>
                           <div class="card-body">
                              <h5 class="card-title little_card">Thyroid</h5>
                              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-4 col-6  mt-4   ">
                        <div class="card" style="border-top:solid">
                           <div class="d-flex flex-row justify-content-center">
                              <img src="<?= base_url() ?>assets/img/Test icons/bone.png" style="height: 80px; width:80px" class="card-img-top" alt="...">
                           </div>
                           <div class="card-body">
                              <h5 class="card-title little_card">Bone & Joint</h5>
                              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                           </div>
                        </div>
                     </div>
                     <!-- Add more card items as needed -->

                  </div>
               </div>
            </div>
            <!-- Additional carousel items can be added similarly -->

         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>


      <!-- gallery-area -->
      <section class="gallery-area pb-10" style="margin-top: 50px;">
         <div class="gallery-bg-title theme-light-bg tp-box-space pt-30 pb-200 mr-30 ml-30" data-background="assets/img/shape/shape-bg-06.png">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-section text-center">
                        <span class="tp-section__sub-title sub-title-white left-line-white right-line-white mb-15">Work
                           Gallery</span>
                        <h3 class="tp-section__title title-white mb-40">Quality Care Gallery</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="gallery-item-bg wow fadeInUp" data-wow-delay=".3s">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="gallery-item p-relative mb-30">
                        <img src="<?= base_url() ?>assets/img/Gallary-1.png" alt="gallery-thumb">
                        <div class="gallery-item__content">
                           <h4 class="gallery-item__title"><a href="<?= base_url() ?>services-details1.html">CLINICAL BIOCHEMIATRY</a>
                           </h4>
                           <!-- <span><i class="fa-solid fa-tag"></i><a href="services-details.html">Genetics</a></span> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 col-md-6 d-none d-lg-block">
                     <div class="gallery-item p-relative mb-30">
                        <img src="<?= base_url() ?>assets/img/Gallary-5.png" alt="gallery-thumb">
                        <div class="gallery-item__content">
                           <h4 class="gallery-item__title"><a href="<?= base_url() ?>services-details5.html">MICROBIOLOGY</a></h4>
                           <!-- <span><i class="fa-solid fa-tag"></i><a href="services-details.html">Genetics</a></span> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="gallery-item p-relative mb-30">
                        <img src="<?= base_url() ?>assets/img/new-machine.png" alt="gallery-thumb">
                        <div class="gallery-item__content">
                           <h4 class="gallery-item__title"><a href="<?= base_url() ?>services-details3.html">IMMUNOLOGY & SEROLOGY</a>
                           </h4>
                           <!-- <span><i class="fa-solid fa-tag"></i><a href="services-details.html">Genetics</a></span> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="gallery-item p-relative mb-30">
                        <img src="<?= base_url() ?>assets/img/Gallary-4.png" alt="gallery-thumb">
                        <div class="gallery-item__content">
                           <h4 class="gallery-item__title"><a href="<?= base_url() ?>services-details4.html">MOLECULAR BIOLOGY</a></h4>
                           <!-- <span><i class="fa-solid fa-tag"></i><a href="services-details.html">Genetics</a></span> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="gallery-item p-relative mb-30">
                        <img src="<?= base_url() ?>assets/img/Gallary-2.png" alt="gallery-thumb">
                        <!-- <img src="assets/img/Gallary-2.png" alt="gallery-thumb"> -->

                        <div class="gallery-item__content">
                           <h4 class="gallery-item__title"><a href="<?= base_url() ?>services-details2.html">HEMATOLOGY</a></h4>
                           <!-- <span><i class="fa-solid fa-tag"></i><a href="services-details.html">Genetics</a></span> -->
                        </div>
                     </div>
                  </div>

               </div>

            </div>
         </div>
      </section>
      <!-- gallery-area-end -->




      <!-- appoinment-area -->
      <section id="appointment" class="appoinment-area grey-bg mb-50 tp-box-space ml-30 mr-30 " data-background="assets/img/shape/shape-bg-08.png">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-xl-4 col-lg-12 col-md-12">
                  <div class="appoint-thumb">
                     <img src="<?= base_url() ?>assets/img/Gallary-6.png" alt="appoinment-img">
                  </div>
               </div>
               <div class="col-xl-8 col-lg-12 col-md-12">
                  <div class="visitor-info visitor-info-bg">
                     <h4 class="appoinment-title mb-25"><i class="fa-light fa-file-signature"></i>Book your appointment
                     </h4>
                     <div class="visitor-form">
                        <?php if (isset($_GET['success_message'])) : ?>
                           <div class="alert alert-success" role="alert">
                              <?= $_GET['success_message'] ?>
                           </div>
                        <?php endif; ?>

                        <?php if (isset($_GET['error_message'])) : ?>
                           <div class="alert alert-danger" role="alert">
                              <?= $_GET['error_message'] ?>
                           </div>

                        <?php endif; ?>
                        <?= form_open_multipart('sendappointment'); ?>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="visitor-form__input">
                                 <input name="name" type="text" placeholder="Your name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="visitor-form__input">
                                 <input name="email" type="email" placeholder="Your mail" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="visitor-form__input">
                                 <input name="test" type="text" placeholder="Test Name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="visitor-form__input">
                                 <input name="date" type="date" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="visitor-form__input">
                                 <textarea placeholder="Type your massage" name="message"></textarea>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-12">
                              <div class="visit-btn mt-20">
                                 <button name="submit" type="submit" class="tp-btn">Book Now</button>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-8 col-12">
                              <div class="visit-serial mt-45">
                                 <span><strong>24/7 EMERGENCY SERVICE </strong>: <a href="<?= base_url() ?>tel:+917658905111">+917658905111 &nbsp;<i class="fas fa-phone"></i></i></a></span>
                              </div>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- appoinment-area-end -->





      <section class="blog-area pt-85 pb-20">
         <div class="container  wow fadeInUp" data-wow-delay=".3s">
            <div class="row align-items-center">
               <div class="col-md-8 col-12">
                  <div class="tp-section">
                     <span class="tp-section__sub-title left-line mb-15">What's New</span>
                     <h3 class="tp-section__title mb-40">Popular Packages</h3>
                  </div>
               </div>
            </div>
            <!-- <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="blog-item">
                     <div class="blog-item__thumb fix">
                        <img src="<?= base_url() ?>assets/img/Packages-2.png" alt="blog-thumb">
                     </div>
                     <div class="blog-item__content">
                        <h5 class="blog-item__title mb-15"> DIABETIC HEALTH CHECK </h5>
                        <span class="bottom10">by: Quality Care</span>
                        <p><strong>₹800.00</strong></p>
                        <span class="regular-price"><del>₹1950.00</del></span>
                        <hr />
                        <p class="pull-left"><a href="<?= base_url() ?>packages.html" class="link_arrow">Read more</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="blog-item">
                     <div class="blog-item__thumb fix">
                        <img src="<?= base_url() ?>assets/img/Packages.png" alt="blog-thumb">
                     </div>
                     <div class="blog-item__content">
                        <h5 class="blog-item__title mb-15"> HEART CHECK </h5>
                        <span class="bottom10">by: Quality Care</span>
                        <p><strong>₹800.00</strong></p>
                        <span class="regular-price"><del>₹1300.00</del></span>
                        <hr />
                        <p class="pull-left"><a href="<?= base_url() ?>packages.html" class="link_arrow">Read more</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="blog-item">
                     <div class="blog-item__thumb fix">
                        <img src="<?= base_url() ?>assets/img/Packages-3.png" alt="blog-thumb">
                     </div>
                     <div class="blog-item__content">
                        <h5 class="blog-item__title mb-15"> QUALITY CARE AROGYA CHECK </h5>
                        <span class="bottom10">by: Quality Care</span>
                        <p><strong>₹1800.00</strong></p>
                        <span class="regular-price"><del>₹5000.00</del></span>
                        <hr />
                        <p class="pull-left"><a href="<?= base_url() ?>packages.html" class="link_arrow">Read more</a></p>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </section>



      <!-- Bootstrap JS (optional if you already have it included) -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>


      <div class="card-slider container only_forr_slider">
         <div class="cards cards_paddaing">
            <?php if (isset($pack)) : ?>
               <?php foreach ($pack as $pk) : ?>
                  <?php
                  // Initialize total tests count for the package
                  $total_tests_count = 0;
                  ?>
                  <div class="card need_margin_side">
                     <h6 class="text-center" style="padding-top: 30px; padding-bottom: 30px;" data-package-name="<?= $pk['package_name'] ?>"><?= $pk['package_name'] ?></h6>
                     <div class="text-center" style="background: linear-gradient(to right, #020b86cb, #666cc2cb); color:white;">
                        <h3 class="mt-3" data-package-price="<?= $pk['package_price'] ?>"><?= $pk['package_price'] ?>/-</h3>
                        <?php foreach ($cat as $ct) : ?>
                           <?php if ($pk['id'] == $ct['package']) : ?>
                              <?php
                              // Increment total tests count for the package
                              $total_tests_count += count(array_filter($test, function ($ts) use ($ct, $pk) {
                                 return $ct['id'] == $ts['category_id'] && $pk['id'] == $ts['package_id'];
                              }));
                              ?>
                           <?php endif; ?>
                        <?php endforeach; ?>
                        <p style="color:white">(<?= $total_tests_count ?> Tests)</p>
                     </div>
                     <?php if (isset($cat)) : ?>
                        <?php foreach ($cat as $ct) : ?>
                           <?php if ($pk['id'] == $ct['package']) : ?>
                              <div class="accordion mt-3 ms-2 mb-3" style="margin-right: 10px;">
                                 <div class="accordion-item shadow">
                                    <h2 class="accordion-header" id="heading<?= $ct['id'] ?>">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $ct['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $ct['id'] ?>">
                                          <?= $ct['name'] ?> (<?= countTestsInCategory($ct['id'], $pk['id'], $test) ?> Tests)
                                       </button>
                                    </h2>
                                    <div id="collapse<?= $ct['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $ct['id'] ?>" data-bs-parent="#faqAccordion">
                                       <div class="accordion-body">
                                          <ul class="ms-2">
                                             <?php foreach ($test as $ts) : ?>
                                                <?php if ($ct['id'] == $ts['category_id'] && $pk['id'] == $ts['package_id']) : ?>
                                                   <li><?= $ts['test_name'] ?></li>
                                                <?php endif; ?>
                                             <?php endforeach; ?>
                                          </ul>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           <?php endif; ?>
                        <?php endforeach; ?>
                     <?php endif; ?>
                     <div class="d-flex flex-row justify-content-center">
                        <a href="<?= $pk['id'] ?>"><button class="m-3 p-3 text-center book-now-btn" style="height:50px; width:150px; background-color: rgb(44, 109, 206); color:white; border-radius: 5px;">Book Now</button></a>
                     </div>
                  </div>
               <?php endforeach; ?>
            <?php endif; ?>
         </div>
         <button class="custom-prev"></button>
         <button class="custom-next"></button>
      </div>

      <?php
      function countTestsInCategory($categoryId, $packageId, $tests)
      {
         $count = 0;
         foreach ($tests as $test) {
            if ($test['category_id'] == $categoryId && $test['package_id'] == $packageId) {
               $count++;
            }
         }
         return $count;
      }
      ?>




      <!-- <div id="cart-items">

      </div> -->

      <script>
         document.addEventListener("DOMContentLoaded", function() {
            // Function to update the cart UI
            function updateCartUI() {
               // Retrieve existing cart items from localStorage
               const cartItems = JSON.parse(localStorage.getItem("cart")) || [];

               // Select the cart element where you want to display the items
               const cartElement = document.getElementById("cart-items");

               // Clear the existing content of the cart element
               cartElement.innerHTML = "";

               // Iterate over each cart item and add it to the cart UI
               cartItems.forEach(item => {
                  const itemElement = document.createElement("div");
                  itemElement.innerHTML = `
                          <div>${item.packageName}</div>
                          <div>${item.packagePrice}</div>
                          <hr>
                      `;
                  cartElement.appendChild(itemElement);
               });
            }

            // Add event listener to all "Book Now" buttons
            const bookNowButtons = document.querySelectorAll('.book-now-btn');
            bookNowButtons.forEach(button => {
               button.addEventListener('click', function() {
                  // Traverse the DOM to find the package name and price
                  const packageName = button.parentElement.parentElement.querySelector('h6[data-package-name]').innerText;
                  const packagePrice = button.parentElement.parentElement.querySelector('h3[data-package-price]').innerText;

                  // Create cart item object
                  const cartItem = {
                     packageName: packageName,
                     packagePrice: packagePrice,
                     quantity: 1 // You can set the quantity as per your requirement
                  };

                  // Retrieve existing cart items from localStorage
                  let cartItems = [];
                  try {
                     cartItems = JSON.parse(localStorage.getItem("cart")) || [];
                  } catch (error) {
                     console.error("Error parsing cart items from local storage:", error);
                     // Handle the error, like resetting the cart items
                     cartItems = [];
                  }

                  // Add the new cart item
                  cartItems.push(cartItem);

                  // Save the updated cart items back to localStorage
                  localStorage.setItem("cart", JSON.stringify(cartItems));

                  // Update the cart UI
                  updateCartUI();
               });
            });

            // Update the cart UI when the page loads
            updateCartUI();
         });
      </script>






      <section>
         <div class="container " style="margin-top: 50px;">
            <div class="row">

               <h2>Why is preventive health checkup important?</h2>
               <p> Preventive health checkups play a crucial role in maintaining overall well-being and avoiding
                  potential health issues. As the saying goes, "Prevention is better than cure," and in today's
                  fast-paced world, prioritizing health awareness and disease prevention is more important than ever.
                  Factors such as sedentary lifestyles, workplace stress, unhealthy dietary habits, and increased
                  reliance on automobiles contribute to the rise of lifestyle-related diseases like obesity, diabetes,
                  and high blood pressure. Through advanced tests and technologies, clinical laboratories can accurately
                  identify various disorders early on, enabling timely intervention and potentially preventing the
                  progression of these conditions. Investing in preventive health checkups not only helps in early
                  detection and management of health issues but also promotes a healthier lifestyle overall.</p>
            </div>
         </div>
      </section>


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
                        <li><a href="<?= base_url() ?>trems.html">Terms and conditions</a></li>
                        <li><a href="<?= base_url() ?>privacy.html">Privacy policy</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer-area-end -->

   <!-- JS here -->
   <script src="<?= base_url() ?>assets/js/jquery.js"></script>
   <script src="<?= base_url() ?>assets/js/waypoints.js"></script>
   <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url() ?>assets/js/swiper-bundle.js"></script>
   <script src="<?= base_url() ?>assets/js/slick.js"></script>
   <script src="<?= base_url() ?>assets/js/magnific-popup.js"></script>
   <script src="<?= base_url() ?>assets/js/counterup.js"></script>
   <script src="<?= base_url() ?>assets/js/wow.js"></script>
   <script src="<?= base_url() ?>assets/js/isotope-pkgd.js"></script>
   <script src="<?= base_url() ?>assets/js/imagesloaded-pkgd.js"></script>
   <script src="<?= base_url() ?>assets/js/ajax-form.js"></script>
   <script src="<?= base_url() ?>assets/js/aos.js"></script>
   <script src="<?= base_url() ?>assets/js/meanmenu.js"></script>
   <script src="<?= base_url() ?>assets/js/nice-select.js"></script>
   <script src="<?= base_url() ?>assets/js/jquery.appear.js"></script>
   <script src="<?= base_url() ?>assets/js/jquery.knob.js"></script>
   <script src="<?= base_url() ?>assets/js/main.js"></script>


   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- Include slick.js -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   <script>
      $(document).ready(function() {
         $('.cards').slick({
            dots: true,
            infinite: false,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 30000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                  breakpoint: 1200,
                  settings: {
                     slidesToShow: 3,
                     slidesToScroll: 1,
                     height: '100%',
                     infinite: true,
                     dots: true
                  }
               },
               {
                  breakpoint: 992,
                  settings: {
                     height: '100%',
                     slidesToShow: 2,
                     slidesToScroll: 1,
                     infinite: true,
                     dots: true
                  }
               },
               {
                  breakpoint: 768,
                  settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     height: '100%',
                     initialSlide: 1
                  }
               }
            ]
         });
      });
   </script>



   <!-- <script>
   document.addEventListener("DOMContentLoaded", function() {
      const cards = document.querySelector(".cards");
      const prevBtn = document.querySelector(".prev-btn");
      const nextBtn = document.querySelector(".next-btn");
      const cardWidth = document.querySelector(".card").offsetWidth;
      
      let currentPosition = 0;
    
      prevBtn.addEventListener("click", function() {
        currentPosition += cardWidth;
        if (currentPosition > 0) {
          currentPosition = 0;
        }
        cards.style.transform = `translateX(${currentPosition}px)`;
      });
    
      nextBtn.addEventListener("click", function() {
        currentPosition -= cardWidth;
        const maxPosition = -(cards.offsetWidth - (cardWidth * 3));
        if (currentPosition < maxPosition) {
          currentPosition = maxPosition;
        }
        cards.style.transform = `translateX(${currentPosition}px)`;
      });
    });
   </script> -->
</body>

</html>