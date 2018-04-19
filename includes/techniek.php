<section class="carousel">
  <?php

    //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => 'techniek',
    //  'job_role'  => 'executive',
    //  'posts_per_page' => 4
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>
  
    <div class="reel">
      <?php
      while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
      <article>
        <header style="margin:0;">
          <h3 style="font-size:1.25em;">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <a href="<?php the_permalink(); ?>" class="image featured">
            <?php the_post_thumbnail('widescreen'); ?>
          </a>
        </header>
        <?php the_excerpt(); ?>
      </article>
     <?php
        endwhile; ?>
      <?php
        //* Restore original Post Data
      wp_reset_postdata();}?>
   </div><!-- .reel -->
  </section><!-- .carousel -->
