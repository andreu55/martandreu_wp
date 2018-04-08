<footer class="footer-container white-text-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-7">
            <h3><?= $nombre ?></h3>
            <p><?= $descripcion ?></p>
            <?php include "socialbuttons.php" ?>

            <p class="thanks">
              <small>Thanks to <a href="http://www.mashup-template.com/" target="_blank" rel="nofollow" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" target="_blank" rel="nofollow"  title="Beautiful Free Images">Unsplash</a> for this template! <i class="fa fa-fw fa-heart-o"></i></small>
            </p>
          </div>
          <div class="col-xs-12 col-sm-5">
            <div class="pull-right">
              <h3 class="template-title-example">
                <a href="<?= $baseUrl ?>/blog">
                  <?= $ult_entradas ?>
                </a>
              </h3>
              <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                <p><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
