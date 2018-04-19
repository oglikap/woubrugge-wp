<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php include( get_template_directory() . '/includes/techniek.php' ); ?>

  <?php endwhile; ?>
<?php get_footer(); ?>
