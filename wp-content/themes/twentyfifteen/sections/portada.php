<div class="container-fluid">
  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 hidden-xs">
      <h1><?= $nombre ?></h1>
      <p><?= $descripcion ?></p>
    </div>
    <!-- col-sm-offset-8  -->
    <div class="col-sm-4 pull-right ult-noticias">
      <div class="text-right">
        <h3 class="template-title-example">
          <a href="<?= $baseUrl ?>/blog">
            <?= $ult_entradas ?>
          </a>
        </h3>
        <?php
          $posts_query = new WP_Query('posts_per_page=4');
          while ($posts_query->have_posts()) : $posts_query->the_post();
        ?>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <i class="fas fa-angle-left fa-fw"></i></p>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <br>
      <div class="pull-right">
        <?php include("socialbuttons.php") ?>
      </div>
    </div>
  </div>
</div>
