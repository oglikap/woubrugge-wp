<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--<link rel="stylesheet" href="assets/css/main.css" />-->
		<?php wp_head(); ?>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body <?php body_class(); ?>>

		<div id="page-wrapper">

			<div id="header">
				<?php the_custom_logo(); ?>
				<h2 style="color:white;"><?php the_title(); ?></h2>
				<!-- Nav -->
					<nav id="nav">
						<?php wp_nav_menu( array( 'theme_location' => 'woubrugge-menu', 'menu_class' => '' ) ); ?>
					</nav>
			</div>
