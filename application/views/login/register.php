<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>


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
    <div class="container align-left">

        <?php echo validation_errors(); ?>
        <form class="form-signin" method="post" action="<?php echo base_url('login/register'); ?>">
            <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal text-center">Please register</h1>
            <label for="inputEmail">Name</label>
            <input type="text" name="nama" id="inputEmail" class="form-control" placeholder="Your Name" required autofocus>
            <small id="emailHelp" class="form-text text-danger"><?php echo form_error('nama'); ?></small>
            <label for="inputPassword">Username</label>
            <input type="text" name="username" id="inputPassword" class="form-control" placeholder="Your Username" required>
            <small id="emailHelp" class="form-text text-danger"><?php echo form_error('username'); ?></small>
            <label for="inputEmail">Password</label>
            <input type="password" name="password" id="inputEmail" class="form-control" placeholder="Your Password" required>
            <small id="emailHelp" class="form-text text-danger"><?php echo form_error('password'); ?></small>
            <label for="inputEmail">Re-enter Your Password</label>
            <input type="password" name="repassword" id="inputEmail" class="form-control" placeholder="Re-enter Your Password" required>
            <small id="emailHelp" class="form-text text-danger"><?php echo form_error('repassword'); ?></small>
            <label for="inputEmail">Contact</label>
            <input type="number" name="contact" id="inputEmail" class="form-control" placeholder="Your Contact Phone">
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted fixed-bottom text-center">&copy; Nyewo.id 2019</p>
        </form>
    </div>
</body>

</html>