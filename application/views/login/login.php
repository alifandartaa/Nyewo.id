<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login - nyewo.id</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">


    <style>
        body {
            background: #e6e6e6;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto" style="margin-top:50px">

        <form class=" form-signin" method="post" action="<?php echo base_url('login'); ?>">
            <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>
            <?php echo $this->session->flashdata('error'); ?>
            <?php echo $this->session->flashdata('success'); ?>
            <label for="inputEmail">Username</label>
            <input type="text" name="username" id="inputEmail" class="form-control mb-4" placeholder="Your Username" required autofocus>
            <small id="emailHelp" class="form-text text-danger"><?php echo form_error('username'); ?></small>
            <label for="inputPassword">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control mb-4" placeholder="Your Password" required>
            <small id="emailHelp" class="form-text text-danger"><?php echo form_error('password'); ?></small>
            <button class="btn btn-lg btn-primary btn-block mb-4" type="submit">Sign In</button>
            <small class="form-text text-center"><a href="<?php echo base_url('login/register'); ?>">Register here</a></small>
            <p class="mt-5 mb-3 text-muted text-center fixed-bottom">&copy; Nyewo.id 2019</p>
        </form>
    </div>
</body>

</html>