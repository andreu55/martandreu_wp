
<!-- El carousel funciona por id! -->
<div id="carousel-proyectos" class="carousel carousel-fade slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">

    <?php foreach ($proyectos as $c): ?>

      <div class="item <?= $c['active'] ? 'active' : '' ?>">
        <img class="img-responsive" src="<?= myurl('assets/images/') ?><?= $c['img'] ?>" alt="<?= $c['titulo'] ?> imagen">
        <div class="carousel-caption card-shadow reveal">
          <h3><?= $c['titulo'] ?></h3>
          <a class="left carousel-control" href="#carousel-proyectos" role="button" data-slide="prev">
            <i class="fas fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-proyectos" role="button" data-slide="next">
            <i class="fas fa-chevron-right"></i>
            <span class="sr-only">Next</span>
          </a>
          <div class="descripcion">
            <?= $c['descr'] ?>
          </div>
          <a href="./<?= $c['url'] ?>" target="_blank" rel="nofollow" class="btn btn-primary" title="<?= $c['titulo'] ?>">
            Discover
          </a>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
</div>
