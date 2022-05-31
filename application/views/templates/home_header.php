<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HotelKuy - Find your dream hotel room</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/8ea583efc0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/csshk.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?= base_url('home'); ?>">Hotel<span>Kuy</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto font-weight-bold">
                    <a class="nav-item nav-link <?php if ($this->uri->uri_string() == 'home') {
                                                    echo 'active';
                                                } ?>" href="<?= site_url('home'); ?>">Home</a>
                    <a class="nav-item nav-link <?php if ($this->uri->uri_string() == 'home/about') {
                                                    echo 'active';
                                                } ?>" href="<?= site_url('home/about'); ?>">About</a>
                    <a class="nav-item nav-link <?php if ($this->uri->uri_string() == 'home/room') {
                                                    echo 'active';
                                                } ?>" href="<?= site_url('home/room'); ?>">Room List</a>
                    <a class="nav-item nav-link <?php if ($this->uri->uri_string() == 'home/contact') {
                                                    echo 'active';
                                                } ?>" href="<?= site_url('home/contact'); ?>">Contact Us</a>
                    <a class="nav-item nav-link <?php if ($this->uri->uri_string() == 'home/payment') {
                                                    echo 'active';
                                                } ?>" href="<?= site_url('home/payment'); ?>">Payment</a>
                    <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle <?php if ($this->uri->uri_string() == 'home/userProfile') {
                                                                echo 'active';
                                                            } ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-nav rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('home/userProfile'); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </nav>