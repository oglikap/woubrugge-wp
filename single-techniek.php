<?php
/**
* The template for displaying a single techniek.
*
* @package WordPress
* @subpackage Stokerij
* @since Stokerij 0.1
*/

get_header() ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

  // Include the page content template.
  get_template_part( 'template-parts/content', 'techniek' );
  // End of the loop.
endwhile;
?>

<?php get_footer(); ?>
