<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Acorn Admin Template | Login Page</title>
  <meta name="description" content="Login Page" />
  <!-- Favicon Tags Start -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url(); ?>dashboard/img/favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>dashboard/img/favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>dashboard/img/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>dashboard/img/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>dashboard/img/favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?= base_url(); ?>dashboard/img/favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?= base_url(); ?>dashboard/img/favicon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?= base_url(); ?>dashboard/img/favicon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?= base_url(); ?>dashboard/img/favicon/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?= base_url(); ?>dashboard/img/favicon/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?= base_url(); ?>dashboard/img/favicon/mstile-310x310.png" />
  <!-- Favicon Tags End -->
  <!-- Font Tags Start -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url(); ?>dashboard/font/CS-Interface/style.css" />
  <!-- Font Tags End -->
  <!-- Vendor_theme Styles Start -->
  <link rel="stylesheet" href="<?= base_url(); ?>dashboard/css/vendor_theme/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>dashboard/css/vendor_theme/OverlayScrollbars.min.css" />

  <!-- Vendor_theme Styles End -->
  <!-- Template Base Styles Start -->
  <link rel="stylesheet" href="<?= base_url(); ?>dashboard/css/styles.css" />
  <!-- Template Base Styles End -->

  <link rel="stylesheet" href="<?= base_url(); ?>dashboard/css/main.css" />
  <script src="<?= base_url(); ?>dashboard/js/base/loader.js"></script>
</head>

<body class="h-100">
  <div id="root" class="h-100">
    <!-- Background Start -->
    <div class="fixed-background"></div>
    <!-- Background End -->

    <div class="container-fluid p-0 h-100 position-relative">
      <div class="row g-0 h-100">
        <!-- Left Side Start -->
        <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
          <div class="min-h-100 d-flex align-items-center">
            <div class="w-100 w-lg-75 w-xxl-50">
              <div>
                <div class="mb-5">
                  <h1 class="display-3 text-white">Dirección Relaciones</h1>
                  <h1 class="display-3 text-white">Internacionales UPEA</h1>
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                  ¡Bienvenido! Estamos felices de tenerte aquí. Por favor, ingresa tus credenciales para acceder a tu cuenta y comenzar a disfrutar de nuestros servicios. ¡Gracias por confiar en nosotros!
                </p>

              </div>
            </div>
          </div>
        </div>
        <!-- Left Side End -->

        <!-- Right Side Start -->
        <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
          <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
            <div class="sw-lg-50 px-5">
              <div class="sh-11">
                <a href="index.html">
                  <div class="logo-default"></div>
                </a>
              </div>
              <?php if (session('msg')) : ?>

                <div class="alert alert-<?= session('msg.type') ?>" role="alert">
                  <?= session('msg.body'); ?>
                </div>

              <?php endif; ?>
              <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Bienvenido,</h2>
                <h2 class="cta-1 text-primary mb-0">¡Empecemos!</h2>
              </div>
              <div class="mb-0">
                <!-- <p class="h6">Utilice sus credenciales para iniciar sesión</p> -->

              </div>
              <div>
                <form id="loginForm" class="tooltip-end-bottom" action="<?= base_url(route_to('signin')); ?>" method="POST" novalidate>
                  <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="user"></i>
                    <input class="form-control" type="text" placeholder="Ingrese nombre de usuario" name="username" value="<?= old('username'); ?>" />
                    <p class="text-danger" style="color:red"><?= session('errors.username'); ?></p>
                  </div>
                  <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="lock-off"></i>
                    <input class="form-control pe-7" name="contrasenia" type="password" placeholder="Ingrese su contraseña" />
                    <p class="text-danger" style="color:red"><?= session('errors.contrasenia'); ?></p>

                  </div>
                  <!-- <input class="form-control pe-7" type="submit" value="Ingresar" /> -->
                  <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Side End -->
      </div>
    </div>
  </div>



  <!-- Vendor_theme Scripts Start -->
  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/jquery-3.5.1.min.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/OverlayScrollbars.min.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/autoComplete.min.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/clamp.min.js"></script>

  <script src="<?= base_url(); ?>dashboard/icon/acorn-icons.js"></script>
  <script src="<?= base_url(); ?>dashboard/icon/acorn-icons-interface.js"></script>

  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/jquery.validate/jquery.validate.min.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/vendor_theme/jquery.validate/additional-methods.min.js"></script>

  <!-- Vendor_theme Scripts End -->

  <!-- Template Base Scripts Start -->
  <script src="<?= base_url(); ?>dashboard/js/base/helpers.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/base/globals.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/base/nav.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/base/search.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/base/settings.js"></script>
  <!-- Template Base Scripts End -->
  <!-- Page Specific Scripts Start -->

  <script src="<?= base_url(); ?>dashboard/js/pages/auth.login.js"></script>

  <script src="<?= base_url(); ?>dashboard/js/common.js"></script>
  <script src="<?= base_url(); ?>dashboard/js/scripts.js"></script>
  <!-- Page Specific Scripts End -->
</body>

</html>