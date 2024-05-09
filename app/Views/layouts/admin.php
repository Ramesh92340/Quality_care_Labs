<?php if (session('isLoggedIn')) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quality Care</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- Corrected Alertify library URL -->
        <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">

        <!-- General CSS Files -->
        <link rel="stylesheet" href="<?= base_url() ?>assets2/modules/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets2/modules/fontawesome/css/all.min.css">



        <!-- Template CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets2/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets2/css/components.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets2/css/style.min.css">

        <!-- Start GA -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-94034622-3');
        </script>
        <!-- /END GA -->
        <style>
            .navbar {
                background-color: #6777ef;
            }
        </style>

    </head>

    <body>

        <body>
            <div id="app">
                <div class="main-wrapper main-wrapper-1 col-12 col-sm-12 col-lg-12">
                    <nav class="navbar navbar-expand-lg main-navbar">
                        <form class="form-inline mr-auto">
                            <ul class="navbar-nav mr-3">
                                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                            </ul>
                        </form>
                        <ul class="navbar-nav navbar-right">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                    <img alt="image" src="<?= base_url() ?>assets2/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                    <div class="d-sm-none d-lg-inline-block">Hi,<?= session('username') ?></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="profile/<?= session('staff_id') ?>" class="dropdown-item has-icon">
                                        <i class="far fa-user"></i> Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?= base_url() ?>logout" class="dropdown-item has-icon text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="main-sidebar sidebar-style-2">
                        <aside id="sidebar-wrapper">
                            <div class="sidebar-brand">
                                <a href="<?= base_url() ?>admin/dashboard">Bhavi creations</a>
                            </div>
                            <div class="sidebar-brand sidebar-brand-sm">
                                <a href="index.html">BC</a>
                            </div>
                            <ul class="sidebar-menu">
                                <li class="menu-header">Dashboard</li>
                                <li class="">
                                    <a href="<?= base_url() ?>admin/dashboard" class="nav-link n"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                                </li>
                                <li class="menu-header">Packages</li>
                                <?php if (isset($pack)) :
                                    foreach ($pack as $pc) : ?>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-blank"></i> <span><?= $pc['package_name']; ?></span></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                if (isset($cate)) :
                                                    foreach ($cate as $ct) :
                                                        if ($ct['package'] == $pc['id']) :  ?>
                                                            <li><a class="nav-link" href="<?= base_url() ?>test/<?= $ct['id'] ?>"><?= $ct['name'] ?></a></li>
                                                <?php
                                                        endif;
                                                    endforeach;
                                                endif;
                                                ?>

                                            </ul>
                                        </li>
                                <?php endforeach;
                                endif; ?>

                                <li class="menu-header">Services</li>
                                <?php if (isset($service)) :
                                    foreach ($service as $sv) : ?>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-blank"></i> <span style="font-size: 12px;"><?= $sv['name']; ?></span></a>
                                            <ul class="dropdown-menu">
                                                
                                                            <li><a class="nav-link" href="<?= base_url() ?>test-service/">Test</a></li>
                                                
                                            </ul>
                                        </li>
                                <?php endforeach;
                                endif; ?>


                                <li class="menu-header">Starter</li>

                                <li class="dropdown">
                                    <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                        <span>Packages</span></a>

                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="<?= base_url() ?>package">Packages</a></li>
                                        <li><a class="nav-link" href="<?= base_url() ?>category">Category</a></li>
                                        <!-- <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> -->
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="nav-link has-dropdown"><i class="far fa-square"></i>
                                        <span>Services</span></a>

                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="<?= base_url() ?>department">Department</a></li>
                                        <li><a class="nav-link" href="<?= base_url() ?>servicess">Services</a></li>
                                    </ul>
                                </li>
                        </aside>
                    </div>
                    <div class="main-content">

                        <?= $this->renderSection('content') ?>

                    </div>
                    <?= $this->renderSection('script') ?>
                    <footer class="main-footer">
                        <div class="footer-left">
                            Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="https://bhavicreations.com/">Bhavi Creations</a>
                        </div>
                        <div class="footer-right">

                        </div>
                    </footer>

                    <!-- General JS Scripts -->
                    <script src="<?= base_url() ?>assets2/modules/jquery.min.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/popper.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/tooltip.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/bootstrap/js/bootstrap.min.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/nicescroll/jquery.nicescroll.min.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/moment.min.js"></script>
                    <script src="<?= base_url() ?>assets2/js/stisla.js"></script>

                    <!-- JS Libraies -->
                    <script src="<?= base_url() ?>assets2/modules/jquery.sparkline.min.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/chart.min.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/summernote/summernote-bs4.js"></script>
                    <script src="<?= base_url() ?>assets2/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

                    <!-- Page Specific JS File -->
                    <script src="<?= base_url() ?>assets2/js/page/index.js"></script>

                    <!-- Template JS File -->
                    <script src="<?= base_url() ?>assets2/js/scripts.js"></script>
                    <script src="<?= base_url() ?>assets2/js/custom.js"></script>

                </div>
            </div>




        </body>
    </body>

    </html>


<?php else : ?>
    <?php
    // Load the session library if it's not autoloaded
    $session = \Config\Services::session();

    // Destroy the session
    $session->destroy();

    // Redirect to the login page
    return redirect()->to('/');
    ?>
<?php endif; ?>