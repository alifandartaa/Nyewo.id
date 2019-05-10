<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nyewo.id - Tempat Booking Lapangan</title>
    <!-- 
Journey Template 
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Google web font "Open Sans" -->
    <link rel="icon" type="image/jpeg" href="<?= base_url('assets/img/icon-web.jpeg'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css'); ?>"> <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>"> Bootstrap style
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datepicker.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/templatemo-style.css'); ?>"> <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        <div class="tm-top-bar" id="tm-top-bar">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg narbar-light">
                        <a class="navbar-brand mr-auto" href="<?= base_url('home/index'); ?>">
                            <img src="<?= base_url('assets/img/logo-utama.png'); ?>" style=" min-width: 160px; max-width: 200px;" alt="Site logo">

                        </a>
                        <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('#tm-section-3'); ?>">Rekomendasi Tempat</a>
                                </li>
                                <li class="nav-item">
                                    <?php if ($this->session->userdata('username') != NULL) : ?>
                                        <a class="btn btn-outline-info m-5" href="<?= base_url('user/logout'); ?>">Logout</a>
                                    <?php else : ?>
                                        <a class="btn btn-outline-info m-5" href="<?= base_url('login'); ?>">Login</a>
                                    <?php endif; ?>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .tm-top-bar -->