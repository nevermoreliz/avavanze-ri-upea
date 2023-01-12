<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!isset($notificaciones)) $notificaciones = ''; ?>
<?php if (!isset($auth)) $auth = ''; ?>
<?php if (!isset($menu)) $menu = ''; ?>
<?php if (!isset($menu_horizontal)) $menu_horizontal = ''; ?>
<?php if (!isset($contenido)) $contenido = ''; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from wp.alithemes.com/html/jobhub/frontend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 05:15:00 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Direccion De Relaciones Internacionales</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/public_html/front_tres/assets/imgs/theme/favicon.svg') ?>" />
    <!-- Template CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.min.css" /> -->
    <link rel="stylesheet" href="<?= base_url('assets/public_html/front_tres/assets/css/plugins/animate.min.css') ?>" />

    <!-- <link rel="stylesheet" href="assets/css/mainc619.css?v=1.0" /> -->
    <link rel="stylesheet" href="<?= base_url('assets/public_html/front_tres/assets/css/mainc619.css?v=1.0') ?>" />

    <?php if (is_file(FCPATH . 'assets/public_html/assets/css/' . $this->router->class . '/' . $this->router->method . '.css')) : ?>
        <link href="<?php echo base_url('assets/public_html/assets/css/' . $this->router->class . '/' . $this->router->method . '.css'); ?>" rel="stylesheet" />
    <?php endif; ?>

</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="<?= base_url('assets/public_html/front_tres/assets/imgs/theme/loading.gif') ?>" alt="jobhub" />
                </div>
            </div>
        </div>
    </div> -->

    <header class="header sticky-bar">

        <!-- MENU FRONT -->
        <?php echo $menu_front; ?>

    </header>

    <!--End header-->

    <!-- Content -->
    <main class="main psg-contenedor">

    <?php echo $contenido; ?>

    </main>
    <!-- End Content -->
    <!-- Footer -->
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a href="index.html">
                        <!-- <img alt="jobhub" src="assets/imgs/theme/jobhub-logo.svg" /> -->
                        <img alt="jobhub" src="<?= base_url('assets/public_html/front_tres/')?>assets/imgs/img-pagina/LOGO-MEJORADO-NORMAL.svg" style="width:185px;height:43px;" />
                    </a>
                    <div class="mt-10 mb-20">
                        <h6><strong>Estamos Ubicados :</strong></h6>
                        <br>Zona Villa Esperanza - Av. Juan Pablo II Esq. Sucre
                        <br>
                        <label>Click </label>
                        <a href="https://www.google.com/maps/place/Universidad+P%C3%BAblica+de+El+Alto/@-16.4936297,-68.1944482,18z/data=!4m12!1m6!3m5!1s0x0:0xc6efc5b8e49e9f21!2sUniversidad+P%C3%BAblica+de+El+Alto!8m2!3d-16.4934416!4d-68.1942979!3m4!1s0x0:0xc6efc5b8e49e9f21!8m2!3d-16.4934416!4d-68.1942979?hl=es-ES" target="_blank">Aqui</a> para ver la direcci&oacute;n
                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <h6><strong> Contacto URNI de la U.P.E.A</strong></h6>
                    <ul class="menu-footer mt-40">
                        <li><a href="#"><strong>Telefono : </strong>22844177</a></li>
                        <li><a href="#"><strong>Celular : </strong>76567636 - 68000676</a></li>
                        <li><a href="#"><strong>Correo : </strong>camposugartevictor@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 img-qr">
                    <!--<h6><strong> Datos URNI </strong></h6>-->
                    <figure><img src="<?= base_url('assets/public_html/front_tres/')?>assets/imgs/img-pagina/footer/qr-code.svg" alt="jobhub"></figure>
                </div>

            </div>

            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6">
                        ©2022 <a href="#"><strong>Designed By</strong></a> Unidad Relaciones Nacionales e
                        Internacionales de
                        la UPEA
                    </div>
                    <div class="col-md-6 text-md-end text-start">
                        <div class="footer-social">
                            <a href="#" class="icon-socials icon-facebook"></a>
                            <a href="#" class="icon-socials icon-youtube"></a>
                            <a href="#" class="icon-socials icon-instagram"></a>
                            <a href="#" class="icon-socials icon-whatsapp"></a>
                            <!--<a href="#" class="icon-socials icon-linkedin"></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Vendor JS-->
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/vendor/modernizr-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/vendor/jquery-migrate-3.3.0.min.js') ?>"></script>
    <!-- <script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/vendor/bootstrap.bundle-v5-1-3.min.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/waypoints.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/wow.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/magnific-popup.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/select2.min.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/isotope.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/scrollup.js') ?>"></script>
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/plugins/swiper-bundle.min.js') ?>"></script>
    <!-- Template  JS -->
    <script src="<?= base_url('assets/public_html/front_tres/assets/js/mainc619.js?v=1.0') ?>"></script>

    <?php if (is_file(FCPATH . 'assets/public_html/assets/js/' . $this->router->class . '/' . $this->router->method . '.js')) : ?>
        <script src="<?php echo base_url('assets/public_html/assets/js/' . $this->router->class . '/' . $this->router->method . '.js'); ?>"></script>
    <?php endif; ?>
</body>

<!-- Mirrored from wp.alithemes.com/html/jobhub/frontend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 05:19:09 GMT -->

</html>