<?php if (session('isLoggedIn')) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quality Care</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- Full version of jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>


        <!-- Alertify -->
        <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url() ?>assets2/modules/fontawesome/css/all.min.css">

        <!-- Summernote -->
        <!-- include libraries(jQuery, bootstrap) -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets2/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets2/css/components.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets2/css/style.min.css">

        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-94034622-3');
        </script>

        <!-- Custom CSS -->
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
                                    <div class="d-sm-none d-lg-inline-block">Hi <?= session('username') ?></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- 
                                    <a href="profile/<?= session('staff_id') ?>" class="dropdown-item has-icon">
                                        <i class="far fa-user"></i> Profile
                                    </a> -->
                                    <a href="<?= base_url() ?>admin/admin_profile" class="dropdown-item has-icon">
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
                                <a href="<?= base_url() ?>admin/dashboard">Quality Care</a>
                            </div>
                            <div class="sidebar-brand sidebar-brand-sm">
                                <a href="<?= base_url() ?>admin/dashboard">QC</a>
                            </div>
                            <ul class="sidebar-menu">
                                <li class="menu-header">Dashboard</li>
                                <li class="">
                                    <a href="<?= base_url() ?>admin/dashboard" class="nav-link n"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                                </li>

                                <li class="">
                                    <a href="<?= base_url() ?>admin/coustmers" class="nav-link n"><i class="fas fa-users"></i><span>Customers</span></a>
                                </li>
                                <!-- <li class="">
                                    <a href="<?= base_url() ?>admin/orders" class="nav-link n"><i class="fas fa-users"></i><span>Orders</span></a>
                                </li> -->

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

                                                <li><a class="nav-link" href="<?= base_url() ?>test-service/<?= $sv['id'] ?>">Test</a></li>

                                            </ul>
                                        </li>
                                <?php endforeach;
                                endif; ?>

                                <li class="menu-header">Health Risks</li>
                                <?php if (isset($health)) :
                                    foreach ($health as $sv) : ?>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-blank"></i> <span style="font-size: 12px;"><?= $sv['name']; ?></span></a>
                                            <ul class="dropdown-menu">

                                                <li><a class="nav-link" href="<?= base_url() ?>health-desc/<?= $sv['id'] ?>">Healthrisk Description</a></li>
                                                <li><a class="nav-link" href="<?= base_url() ?>health-packages/<?= $sv['id'] ?>">Health Tesk Packages</a></li>

                                            </ul>
                                        </li>
                                <?php endforeach;
                                endif; ?>








                                <li class="menu-header">Starter</li>

                                <li class="dropdown">
                                    <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                        <span>Health Risks</span></a>

                                    <ul class="dropdown-menu">

                                        <li><a class="nav-link" href="<?= base_url() ?>health">Types of Health Risks</a></li>
                                        <!-- <li><a class="nav-link" href="<?= base_url() ?>health_disc">Discription of Health Risks</a></li>

                                        <li><a class="nav-link" href="<?= base_url() ?>package">Packages in Health Risks</a></li> -->
                                        <!-- <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> -->
                                    </ul>
                                </li>

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