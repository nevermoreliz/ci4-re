<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">

    <title>Document</title>

    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://admisionestudiantil.upea.bo/assets/frontend/education-master/images/slider/upea1.png');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
</head>

<body>

    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Bienvenido</h3>

                                <?= session('msg') ?>

                                <!-- Sign In Form -->
                                <form action="<?= base_url(route_to('signin')) ?>" method="POST">
                                    <div class="form-floating mb-3">
                                        <label for="floatingInput">Usuario</label>
                                        <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Ingrese su Usuario" value="<?= old('username'); ?>">
                                        <p class="text-danger"><?= session('errors.username'); ?></p>


                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="floatingPassword">Contraseña</label>
                                        <input type="password" name="contrasenia" class="form-control" id="floatingPassword" placeholder="Ingrese su Contraseña">
                                        <p class="text-danger"><?= session('errors.contrasenia'); ?></p>

                                    </div>

                                    <!-- <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="rememberPasswordCheck">
                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            Remember password
                                        </label>
                                    </div> -->

                                    <div class="d-grid">
                                        <input class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" value="Ingresar">
                                        <!-- <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Iniciar Sesi&oacute;n </button> -->
                                        <!-- <div class="text-center">
                                            <a class="small" href="#">Forgot password?</a>
                                        </div> -->
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>