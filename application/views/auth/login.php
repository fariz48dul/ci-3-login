<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Codeigneter 3</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }

        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <?php
                        $errors = $this->session->flashdata('errors');
                        if (!empty($errors)) {
                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger text-center">
                                        <?php foreach ($errors as $key => $error) { ?>
                                            <?= "$error<br>"; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <form class="form-signin" action="<?= base_url('auth/proses_login'); ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="username" id="text" class="form-control" placeholder="Username" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>

                            <div class="text-center mt-3">
                                <small>Don't have accout? <a href="<?= base_url('auth/register') ?>">Sign Up</a></small>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>