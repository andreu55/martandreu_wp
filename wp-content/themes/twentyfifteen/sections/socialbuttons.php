<ul class="list-icons">
  <?php foreach ($social as $s): ?>
    <li><a href="<?= $s['url'] ?>" target="_blank" rel="nofollow" class="social-round-icon white-round-icon fa-icon">
      <i class="fa <?= $s['icon'] ?>"></i>
    </a></li>
  <?php endforeach; ?>
</ul>
