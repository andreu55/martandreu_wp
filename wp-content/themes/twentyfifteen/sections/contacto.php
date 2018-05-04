<div class="section-container-spacer">
  <h2 class="text-center">
    <i class="far fa-paper-plane fa-fw"></i>
    <?= $getInTouch ?>
  </h2>
  <p class="text-center">
    <?= $getInTouch_text ?>
  </p>
</div>
<div class="card-container">
  <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
    <form action="" class="reveal-content">
      <div class="row">
        <div class="col-md-7">
          <!-- <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="<?= $escribenos ?>"></textarea>
          </div>
          <button type="submit" class="btn btn-primary"><?= $send ?></button> -->
          <?php while (have_posts()): the_post();
            echo the_content();
      		endwhile; ?>
        </div>
        <div class="col-md-5">
          <ul class="list-unstyled address-container">
            <li>
              <span class="fa-icon">
                <i class="fas fa-map fa-fw"></i>
              </span>
              Ruzafa, Valencia
            </li>
            <li>
              <span class="fa-icon">
                <i class="fas fa-phone fa-fw"></i>
              </span>
              622 666 125
            </li>
            <li>
              <span class="fa-icon">
                <i class="fas fa-at fa-fw"></i>
              </span>
              andreu@martayandreu.com
            </li>
            <li>
              <span class="fa-icon">
                <i class="fas fa-at fa-fw"></i>
              </span>
              marta@andreuymarta.com
            </li>
          </ul>
        </div>
      </div>
    </form>
  </div>
  <div class="card-image col-xs-12" id="contact-img"></div>
</div>
