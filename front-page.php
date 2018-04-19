<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<!--		<link rel="stylesheet" href="assets/css/main.css" />-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <?php wp_head(); ?>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->

      <?php while( have_posts() ): the_post(); ?>

        <?php get_template_part( 'home-templates/content', 'header' ); ?>
        <?php get_template_part( 'home-templates/content', 'banner' ); ?>

				<?php if( have_rows( 'home' ) ) : ?>

				<div id="about" class="wrapper style1">
						<div class="row">
							<article class="8u 12u(mobile) special">
								<?php while( have_rows( 'home' ) ): the_row(); ?>

								<h2><?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?></h2>
								<p>
								<?php if( get_sub_field('content') ): the_sub_field('content'); endif; ?>
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<?php
								$image = get_sub_field('image');

								if( !empty($image) ):?>

									<div class="image">
										<a href="<?php echo $image['url']; ?>">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
									</div>
									<p class="wp-caption-text"><?php echo $image['caption']; ?>

								<?php endif; ?>
							</article>

						</div>

					</div><!-- #about -->

			<!-- Main -->
				<div class="wrapper style1">

					<div class="carousel about">
						<div class="reel">
							<?php $args = array( 'category' => 3 );
								$postslist = get_posts($args);
								foreach( $postslist as $post ):
								setup_postdata( $post );
								?>
								<article>
									<header>
										<h3>
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h3>
									</header>
									<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('square'); ?></a>
									<?php the_excerpt(); ?>
								</article>

							<?php endforeach;
							wp_reset_postdata();
							?>
						</div>
					</div>

						<?php endwhile; ?>
						<?php endif; ?>

				</div>

			<!-- Contact -->
			<?php while( have_rows('contact') ): the_row(); ?>
				<div class="container" style="font-size: 14px;">

					<section id="contact" class="container special">
						<header>
							<h2><?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?></h2>
							<p><?php if( get_sub_field('subtitle') ): the_sub_field('subtitle'); endif; ?></p>
						</header>
						<div class="row">
							<article class="6u 12u(mobile) special">
								<header>
									<p><?php if( get_sub_field('header_contact') ): the_sub_field('header_contact'); endif; ?></p>
								</header>
								<?php if( get_sub_field('contact') ): the_sub_field('contact'); endif; ?>
							</article>
							<article class="6u 12u(mobile) special">
								<header>
									<img src="<?php echo get_template_directory_uri() . '/images/swallow.svg'; ?>" width="150" height="150" />
									<p>De eerste steen werd gelegd door Annelies Kroon in december 1991</p>
								</header>


							</article>

						</div>
					</section>

				</div>

			<?php endwhile; ?>


      <?php endwhile; ?>

				<?php get_footer(); ?>
