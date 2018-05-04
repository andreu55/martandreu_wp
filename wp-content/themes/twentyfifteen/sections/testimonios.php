<div class="col-xs-12 col-md-12">
  <h2>Testimonios</h2>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div id="carousel-testimonios" class="carousel carousel-fade slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

          <?php foreach ($testimonios as $t): ?>

            <div class="item <?= $t['active'] ? 'active' : '' ?>">
              <div class="row">
                <!-- Prev button -->
                <div class="col-sm-1 hidden-xs">
                  <a id="chev-move-left" class="left carousel-control" href="#carousel-testimonios" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </div>
                <div class="col-sm-10">
                  <div class="card-shadow reveal">
                    <div class="col-lg-4">
                      <img class="img-responsive img-centered" src="<?= myurl('assets/images/') ?><?= $t['img'] ?>" alt="<?= $t['nombre'] ?> imagen">
                    </div>
                    <div class="col-lg-8">
                      <p class="slider_text">
                        <i class="fas fa-quote-left fa-fw"></i>
                        <?= $t['descr'] ?>
                      </p>
                      <p class="slider_text-author">
                        <?= $t['nombre'] ?>
                      </p>
                      <p class="slider_text-source">
                        <?= $t['url'] ?>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Next button -->
                <div class="col-sm-1 hidden-xs">
                  <a id="chev-move-right" class="right carousel-control" href="#carousel-testimonios" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
