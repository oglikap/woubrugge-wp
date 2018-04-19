<section class="gallery">
  <?php
  $images = get_field('gallery');

  if( $images ): ?>
    <ul>
      <?php foreach( $images as $image ): ?>
        <li>
          <a href="<?php echo $image['url']; ?>">
            <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
          <p><small><?php echo $image['caption']; ?></small></p>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>
