<section class="wrapper style1">
  <div class="container">
    <div class="row 200%">
      <div class="8u 12u(mobile)" id="content">
        <article id="main">
          <header>
            <p><?php the_excerpt(); ?></p>
          </header>
          <span class="">
            <?php the_post_thumbnail('landscape');?>
            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
          </span>
            <?php the_content(); ?>
        </article><!-- #main -->
      </div><!-- #content -->

      <?php get_sidebar(); ?>

    </div>
    <!-- Carousel -->
    <?php if( have_rows('gallery') ): ?>

      <?php while( have_rows('gallery') ): the_row();?>

        <?php $images = get_sub_field('gallery_1'); ?>

          <?php if( $images ): ?>
          <section class="carousel">

            <h3>Landschappen</h3>
            <div class="reel">
            <?php foreach( $images as $image ): ?>

              <article>
                <a href="<?php echo $image['url']; ?>" class="image featured"><img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                <p class="wp-caption-text"><?php echo $image['caption']; ?></p>
              </article>

            <?php endforeach; ?>
            </div><!-- .reel -->

          </section><!-- .carousel -->

        <?php endif; ?>

        <?php $images = get_sub_field('gallery_2'); ?>

          <?php if( $images ): ?>
          <section class="carousel">

            <h3>Vogels</h3>
            <div class="reel">
            <?php foreach( $images as $image ): ?>

              <article>
                <a href="<?php echo $image['url']; ?>" class="image featured"><img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                <p class="wp-caption-text"><?php echo $image['caption']; ?></p>
              </article>

            <?php endforeach; ?>
            </div><!-- .reel -->

          </section><!-- .carousel -->

        <?php endif; ?>

        <?php $images = get_sub_field('gallery_3'); ?>

          <?php if( $images ): ?>
          <section class="carousel">

            <h3>Stillevens</h3>
            <div class="reel">
            <?php foreach( $images as $image ): ?>

              <article>
                <a href="<?php echo $image['url']; ?>" class="image featured"><img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                <p class="wp-caption-text"><?php echo $image['caption']; ?></p>
              </article>

            <?php endforeach; ?>
            </div><!-- .reel -->

          </section><!-- .carousel -->

        <?php endif; ?>

        <?php $images = get_sub_field('gallery_4'); ?>

          <?php if( $images ): ?>
          <section class="carousel">

            <h3>Varia</h3>
            <div class="reel">
            <?php foreach( $images as $image ): ?>

              <article>
                <a href="<?php echo $image['url']; ?>" class="image featured"><img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                <p class="wp-caption-text"><?php echo $image['caption']; ?></p>
              </article>

            <?php endforeach; ?>
            </div><!-- .reel -->

          </section><!-- .carousel -->

        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>
    <footer>
      <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
    </footer>
  </div><!-- .container -->
</section>
