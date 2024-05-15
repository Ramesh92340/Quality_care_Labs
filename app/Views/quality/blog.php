<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Bioxlab - Laboratory & Science Research</title>
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

   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Scroll-top -->
      <button class="scroll-top scroll-to-target" data-target="html">
         <i class="fas fa-angle-up"></i>
      </button>
      <!-- Scroll-top-end--> 
      
      <!-- preloader -->
      <div id="preloadertp">
         <img src="<?= base_url() ?>assets/img/preloader.png" alt="">
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
                        <a class="header-bottom-btn" style="border-radius: 8px;" href="<?=base_url() ?>#appointment ">Book
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

                
      
      <!-- main-area -->
      <main>

         <!-- breadcrumb-area -->
         <section class="breadcrumb__area pt-100 pb-120 breadcrumb__overlay" data-background="assets/img/banner/breadcrumb-01.jpg">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-7 col-12">
                     <div class="tp-breadcrumb">
                        <h2 class="tp-breadcrumb__title">Contact us</h2>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-5 col-12">
                     <div class="tp-breadcrumb__link d-flex align-items-center">
                        <span>Bioxlab : <a href="<?= base_url() ?>blog-details.html"> Blog Details</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb-area-end -->
      
         <!-- postbox area start -->
         <div class="postbox-area pt-120 pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12">
                     <div class="postbox pr-20 pb-50">
                        <article class="postbox__item format-image mb-60 transition-3">
                           <div class="postbox__thumb w-img mb-35">
                              <a href="<?= base_url() ?>blog-details.html">
                                 <img src="<?= base_url() ?>assets/img/blog/blog-in-01.jpg" alt="blog-thumg">
                              </a>
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta mb-40">
                                 <span><a href="<?= base_url() ?>team-details.html"><i class="fa-regular fa-user"></i> Alextina</a></span>
                                 <span><i class="fa-regular fa-clock"></i> Dec 28, 2022</span>
                                 <span><a href="<?= base_url() ?>about.html"><i class="fa-regular fa-message-dots"></i> (04) Coments</a></span>
                                 <span><i class="fa-light fa-eye"></i> 1,526 views</span>
                              </div>
                              <h3 class="postbox__title mb-40">
                                 <a href="<?= base_url() ?>blog-details.html">Lavoratories used for scientic reseach take many froms.</a>
                              </h3>
                              <div class="postbox__text mb-40">
                                 <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                              </div>
                              <div class="postbox__read-more">
                                 <a href="<?= base_url() ?>blog-details.html" class="tp-btn">Reade more</a>                               
                              </div>
                           </div>
                        </article>
                        <article class="postbox__item format-image mb-60 transition-3">
                           <div class="postbox__thumb postbox-active swiper-container w-img p-relative mb-35">
                              <div class="swiper-wrapper">
                                 <div class="postbox__slider-item swiper-slide">
                                    <img src="<?= base_url() ?>assets/img/blog/blog-in-02.jpg" alt="">
                                 </div>
                                 <div class="postbox__slider-item swiper-slide">
                                    <img src="<?= base_url() ?>assets/img/blog/blog-in-01.jpg" alt="">
                                 </div>
                                 <div class="postbox__slider-item swiper-slide">
                                    <img src="<?= base_url() ?>assets/img/blog/blog-in-03.jpg" alt="">
                                 </div>
                              </div>
                              <div class="postbox-nav">
                                 <button class="postbox-slider-button-next"><i class="fa-solid fa-chevron-right"></i></button>
                                 <button class="postbox-slider-button-prev"><i class="fa-solid fa-chevron-left"></i></button>
                              </div>
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta mb-40">
                                 <span><a href="<?= base_url() ?>team-details.html"><i class="fa-regular fa-user"></i> Alextina</a></span>
                                 <span><i class="fa-regular fa-clock"></i> Dec 28, 2022</span>
                                 <span><a href="<?= base_url() ?>about.html"><i class="fa-regular fa-message-dots"></i> (04) Coments</a></span>
                                 <span><i class="fa-light fa-eye"></i> 1,526 views</span>
                              </div>
                              <h3 class="postbox__title mb-40">
                                 <a href="<?= base_url() ?>blog-details.html">Lavoratories used for scientic reseach take many froms.</a>
                              </h3>
                              <div class="postbox__text mb-40">
                                 <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                              </div>
                              <div class="postbox__read-more">
                                 <a href="<?= base_url() ?>blog-details.html" class="tp-btn">read more</a>
                              </div>
                           </div>
                        </article>
                        <article class="postbox__item format-video mb-60 transition-3">
                           <div class="postbox__thumb postbox__video p-relative w-img mb-35">
                              <a href="<?= base_url() ?>blog-details.html">
                                 <img src="<?= base_url() ?>assets/img/blog/blog-in-03.jpg" alt="">
                              </a>
                              <a href="https://www.youtube.com/watch?v=OMqWRlxo1oQ" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                           </div>
                           <div class="postbox__content">
                              <div class="postbox__meta mb-40">
                                 <span><a href="team-details.html"><i class="fa-regular fa-user"></i> Alextina</a></span>
                                 <span><i class="fa-regular fa-clock"></i> Dec 28, 2022</span>
                                 <span><a href="about.html"><i class="fa-regular fa-message-dots"></i> (04) Coments</a></span>
                                 <span><i class="fa-light fa-eye"></i> 1,526 views</span>
                              </div>
                              <h3 class="postbox__title mb-40">
                                 <a href="<?= base_url() ?>blog-details.html">Four Ways to Fullfill Your Task For Makes Parents Happy and Healthy</a>
                              </h3>
                              <div class="postbox__text mb-40">
                                 <p>Compellingly exploit B2B vortals with emerging total linkage. Appropriately pursue strategic leadership whe intermandated ideas. Proactively revolutionize interoperable "outside the box" thinking with fully researched innovation. Dramatically facilitate exceptional architectures and bricks-and-clicks data. Progressively genera extensible e-services for.</p>
                              </div>
                              <div class="postbox__read-more">
                                 <a href="<?= base_url() ?>blog-details.html" class="tp-btn">read more</a>
                              </div>
                           </div>
                        </article>
                        <div class="basic-pagination">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="<?= base_url() ?>blog.html">
                                       <i class="fa-light fa-arrow-left-long"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="<?= base_url() ?>blog.html">1</a>
                                 </li>
                                 <li>
                                    <span class="current">2</span>
                                 </li>
                                 <li>
                                    <a href="<?= base_url() ?>blog.html">3</a>
                                 </li>
                                 <li>
                                    <a href="<?= base_url() ?>blog.html">...</a>
                                 </li>
                                 <li>
                                    <a href="<?= base_url() ?>blog.html">
                                       <i class="fa-light fa-arrow-right-long"></i>
                                    </a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12">
                     <div class="sidebar__wrapper pl-25 pb-50">
                        <div class="sidebar__widget mb-45">
                           <div class="sidebar__widget-content">
                              <h3 class="sidebar__widget-title mb-25">Search</h3>
                              <div class="sidebar__search">
                                 <form action="#">
                                    <div class="sidebar__search-input-2 p-relative">
                                       <input type="text" placeholder="Search post">
                                       <button type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="sidebar__widget mb-40">
                           <h3 class="sidebar__widget-title mb-25">Category</h3>
                           <div class="sidebar__widget-content">
                              <ul>
                                 <li><a href="<?= base_url() ?>blog-details.html">Chemistry<span>03</span></a></li>
                                 <li><a href="<?= base_url() ?>blog-details.html">Forensic science <span>07</span></a></li>
                                 <li><a href="<?= base_url() ?>blog-details.html">Gemological <span>09</span></a></li>
                                 <li><a href="<?= base_url() ?>blog-details.html">COvid Analysis <span>01</span></a></li>
                                 <li><a href="<?= base_url() ?>blog-details.html">Becteriology <span>00</span></a></li>
                                 <li><a href="<?= base_url() ?>blog-details.html">Angiosperm <span>26</span></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="sidebar__widget mb-55">
                           <h3 class="sidebar__widget-title mb-25">Recent Post</h3>
                           <div class="sidebar__widget-content">
                              <div class="sidebar__post rc__post">
                                 <div class="rc__post mb-20 d-flex align-items-center">
                                    <div class="rc__post-thumb">
                                       <a href="<?= base_url() ?>blog-details.html"><img src="<?= base_url() ?>assets/img/blog/sidebar/blog-sm-1.jpg" alt="blog-sidebar"></a>
                                    </div>
                                    <div class="rc__post-content">
                                       <div class="rc__meta">
                                          <span>4 March. 2022</span>
                                       </div>
                                       <h3 class="rc__post-title">
                                          <a href="<?= base_url() ?>blog-details.html">Don't Underestimate Tree for Medicine</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="rc__post mb-20 d-flex align-items-center">
                                    <div class="rc__post-thumb">
                                       <a href="<?= base_url() ?>blog-details.html"><img src="<?= base_url() ?>assets/img/blog/sidebar/blog-sm-2.jpg" alt="blog-sidebar"></a>
                                    </div>
                                    <div class="rc__post-content">
                                       <div class="rc__meta">
                                          <span>12 February. 2022</span>
                                       </div>
                                       <h3 class="rc__post-title">
                                          <a href="<?= base_url() ?>blog-details.html">Equipping Researchers in the Developing World</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="rc__post mb-20 d-flex align-items-center">
                                    <div class="rc__post-thumb">
                                       <a href="<?= base_url() ?>blog-details.html"><img src="<?= base_url() ?>assets/img/blog/sidebar/blog-sm-3.jpg" alt="blog-sidebar"></a>
                                    </div>
                                    <div class="rc__post-content">
                                       <div class="rc__meta">
                                          <span>14 January. 2022</span>
                                       </div>
                                       <h3 class="rc__post-title">
                                          <a href="<?= base_url() ?>blog-details.html">Role of Genetics in treating Heigh-grade glioma</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="rc__post d-flex align-items-center">
                                    <div class="rc__post-thumb">
                                       <a href="<?= base_url() ?>blog-details.html"><img src="<?= base_url() ?>assets/img/blog/sidebar/blog-sm-4.jpg" alt="blog-sidebar"></a>
                                    </div>
                                    <div class="rc__post-content">
                                       <div class="rc__meta">
                                          <span>18 March. 2021</span>
                                       </div>
                                       <h3 class="rc__post-title">
                                          <a href="<?= base_url() ?>blog-details.html">Research And Verify of a Covid-19 Virus</a>
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="sidebar__widget mb-55">
                           <h3 class="sidebar__widget-title mb-25">Popular Tag</h3>
                           <div class="sidebar__widget-content">
                              <div class="tagcloud">
                                 <a href="<?= base_url() ?>blog-details.html">Covid-19</a>
                                 <a href="<?= base_url() ?>blog-details.html">Gene</a>
                                 <a href="<?= base_url() ?>blog-details.html">Test</a>
                                 <a href="<?= base_url() ?>blog-details.html">Lab</a>
                                 <a href="<?= base_url() ?>blog-details.html">data</a>
                                 <a href="<?= base_url() ?>blog-details.html">Virus</a>
                                 <a href="<?= base_url() ?>blog-details.html">Pandemic </a>
                                 <a href="<?= base_url() ?>blog-details.html">Symptoms</a>
                                 <a href="<?= base_url() ?>blog-details.html">Medicine</a>
                                 <a href="<?= base_url() ?>blog-details.html">Bacteria</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- postbox area end -->         

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
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/jquery.knob.js"></script>
   <script src="assets/js/main.js"></script>
</body>
</html>
