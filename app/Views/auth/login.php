<?php

use App\Controllers\Auth;

?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/login-form-18/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/login-form-18/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>/login-form-18/css/bootstrap.min.css">
    <title>Login Page</title>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Silahkan Login</h3>

                        <form method="POST" action="<?= site_url('auth/login') ?>" class="login-form">
                            <!-- alert -->
                            <?php if (session()->getFlashdata('erorr')) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo session()->getFlashdata('erorr') ?>
                                </div>
                            <?php } ?>

                            <!-- end alert-->
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <input id="username" name="username" type="text" class="form-control rounded-left" placeholder="Username" required ">
                </div>
                <div class=" form-group d-flex">
                                <input id="password" name="password" type="password" class="form-control rounded-left" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button id="login" name="login" type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="<?= base_url(); ?>/login-form-18/js/popper.js"></script>
    <script src="<?= base_url(); ?>/login-form-18/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/login-form-18/js/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>