<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Nyewo.id</title>
    <link rel="icon" type="image/jpeg" href="<?= base_url('assets/img/icon-web.jpeg'); ?>">
    <link href="<?= base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/css/datepicker3.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/css/styles.css'); ?>" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="<?php echo base_url('admin'); ?>"><span>nyewo.id</span>Admin</a>

            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="<?= base_url('assets/admin/images/user-solid.svg'); ?>" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">admin</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href="<?php echo base_url('admin'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="<?php echo base_url('admin/createLapangan'); ?>"><em class="fa fa-calendar">&nbsp;</em> Buat Lapangan</a></li>
            <li><a href="<?php echo base_url('admin/viewLapangan'); ?>"><em class="fa fa-calendar">&nbsp;</em> Lihat Lapangan</a></li>

        </ul>
        </li>
        <li><a href="<?php echo base_url('admin/logout'); ?>" onclick="return confirm('Anda yakin ingin keluar?');"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('admin'); ?>">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">
                    <?php
                    $class = $this->router->fetch_method();
                    echo $class;
                    ?></li>
            </ol>
        </div>
        <!--/.row-->