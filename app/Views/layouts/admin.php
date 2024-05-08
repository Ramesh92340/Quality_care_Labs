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
                                <?php if (isset($branch)) :
                                    foreach ($branch as $bn) : ?>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span><?= $bn['name']; ?></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="nav-link" href="<?= base_url() ?>staff/admin/<?= $bn['id'] ?>">Staff</a></li>
                                                <li><a class="nav-link" href="<?= base_url() ?>stocks/admin/<?= $bn['id'] ?>">Stocks</a></li>
                                                <li><a class="nav-link" href="<?= base_url() ?>Services/admin/<?= $bn['id'] ?>">Services</a></li>
                                                <a href="#" class="nav-link has-dropdown"> Leaves</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="nav-link" href="<?= base_url() ?>approve_leave/admin/<?= $bn['id'] ?>">Approve Leave</a></li>
                                                    <li><a class="nav-link" href="<?= base_url() ?>leave_history/admin/<?= $bn['id'] ?>">History</a></li>
                                                </ul>
                                            </ul>
                                        </li>
                                <?php endforeach;
                                endif; ?>
                                <li class="menu-header">Starter</li>
                              
                                <li class="dropdown">
                                    <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                        <span>Packages</span></a>

                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="<?= base_url() ?>package">Add Package</a></li>
                                        <li><a class="nav-link" href="<?= base_url() ?>category">Add Category</a></li>
                                        <!-- <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="nav-link has-dropdown"><i class="far fa-square"></i>
                                        <span>Holidays</span></a>

                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="<?= base_url() ?>add_holiday">Add Holiday</a></li>
                                        <li><a class="nav-link" href="<?= base_url() ?>manage_holiday">Manage Holidays</a></li>
                                        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> 
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="nav-link has-dropdown"><i class="far fa-square"></i>
                                        <span>Expenses</span></a>

                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="<?= base_url() ?>add_expense/admin">Add Expenses</a></li>
                                        <li><a class="nav-link" href="<?= base_url() ?>manage_expense/admin">Manage Expenses</a></li>
                                        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> 
                                    </ul>
                                </li> -->
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