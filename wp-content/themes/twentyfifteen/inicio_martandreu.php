<?php /* Template Name: MartaAndreu */

  // $url = get_bloginfo('url');
  // $url = bloginfo('template_directory');

  $baseUrl = get_bloginfo('url');

  function myurl($str) {
    if ($str[0] != '/') {
      $str = '/'.$str;
    }
    return bloginfo('template_directory').$str;
  }

  // if (!isset($path)) {
  //
  //   $path = $_SERVER['PATH_INFO'] ?? '';
  //   $path = trim($path, '/');
  //
  //   $permitidos = ['es', 'en'];
  //
  //   if (!$path || !in_array($path, $permitidos)) {
  //     if (strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'es') !== false) { $path = 'es'; }
  //     else { $path = 'en'; }
  //   }
  // }
  // require_once "idiomas/$path/datos.php";

  require_once "inicio_textos.php";

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="author" content="Andreu y Marta">
  <meta name="google" content="notranslate" />
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-icon-180x180.png">
  <link rel="icon" href="<?= $baseUrl ?>/wp-content/uploads/2018/03/cropped-logo-3-32x32.png" sizes="32x32" />
  <link rel="icon" href="<?= $baseUrl ?>/wp-content/uploads/2018/03/cropped-logo-3-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="<?= $baseUrl ?>/wp-content/uploads/2018/03/cropped-logo-3-180x180.png" />
  <meta name="msapplication-TileImage" content="<?= $baseUrl ?>/wp-content/uploads/2018/03/cropped-logo-3-270x270.png" />
  <meta name="description" content="<?= $descripcion ?>">
  <title><?= $nombre_plano ?></title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <link href="<?= myurl('main.550dcf66.css') ?>" rel="stylesheet">
</head>

<body>
  <?php include "sections/barra.php" ?>

  <!-- Portada -->
  <div class="hero-full-container background-image-container white-text-container">
    <?php include "sections/portada.php" ?>
  </div>

  <!-- Qué hacemos -->
  <div class="section-container">
    <?php include "sections/quehacemos.php" ?>
  </div>

  <!-- Carousel proyectos -->
  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php include "sections/proyectos.php" ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Quienes somos -->
  <div class="section-container">
    <div class="container text-center">
      <?php include "sections/quienessomos.php" ?>
    </div>
  </div>

  <!-- Testimonios -->
  <div class="section-container" id="testimonios">
    <div class="row section-container-spacer text-center">
      <?php include "sections/testimonios.php" ?>
    </div>
  </div>

  <!-- Contacto -->
  <div id="contacto" class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <?php include "sections/contacto.php" ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarFixedTopAnimation();
    });
  </script>

  <?php include "sections/footer.php" ?>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navActivePage();
      scrollRevelation('.reveal');
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID

  <script>
    (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
    (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
  </script>
  -->

<script type="text/javascript" src="<?= myurl('main.0cf8b554.js') ?>"></script>

</body>

</html>
