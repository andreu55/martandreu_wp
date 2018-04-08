

<header>
  <nav class="navbar navbar-default active">
    <div class="container">
      <div class="navbar-header">

        <!-- Este el boton que sale en la versión movil! -->
        <a href="#contacto" class="btn btn-default navbar-btn navbar-toggle collapsed pull-right" title="¡Contacta con nosotros!"><?= $contacto ?></a>

        <a class="navbar-brand" href="<?= home_url( '/' ); ?>">
          <img src="<?= myurl('assets/images/logo.svg') ?>" class="navbar-logo-img" logo">
          &nbsp;
          <?= $nombre ?>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php /*
          <li class="lang_block">
            <!-- <span onclick="cambiaLang('es')">es</span> / <span onclick="cambiaLang('en')">en</span> -->
            <span>
              <a href="<?= home_url( '/es' ); ?>">es</a> / <a href="<?= home_url( '/en' ); ?>">en</a>
            </span>
          </li>
          */ ?>
          <li><p>

            <!-- Este el el boton que sale en la version esritorio! -->
            <a href="#contacto" class="btn btn-default navbar-btn" title="¡Contacta con nosotros!"><?= $contacto ?></a>
          </p></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
