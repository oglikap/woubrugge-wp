<section class="carousel">
  <?php

    //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => 'press',
    //  'job_role'  => 'executive',
    //  'posts_per_page' => 4
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>
    <!--<h2>In de pers</h2>-->
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
        <?php if( get_field('sub_header') ): the_field('sub_header'); endif; ?>
      </article>
     <?php
        endwhile; ?>
      <?php
        //* Restore original Post Data
      wp_reset_postdata();}?>
   </div><!-- .reel -->
  </section><!-- .carousel -->

  <div class="wrapper style1">
    <div class="container">

      <?php if( have_rows('balans') ): ?>

      <header style="text-align:center">
        <h2>Energiebalans</h2>
        <p>Hier kunt u de energiebalans bekijken vanaf het jaar 2000.</p>
      </header>
      <ul class="list">

        <?php while( have_rows('balans') ): the_row(); ?>

          <li style="margin:1em;display:inline-block;">

          <?php
          $link = get_sub_field('file');
            if( $link ): ?>

              	<a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

            <?php endif; ?>

          </li>

          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
