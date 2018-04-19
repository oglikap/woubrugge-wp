<?php

/* Template Name: Pers */

get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php include( get_template_directory() . '/includes/pers.php' ); ?>

  <?php endwhile; ?>

<?php get_footer(); ?>
