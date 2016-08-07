<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="hfeed site">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header id="masthead" class="site-header" role="banner">
		<div class="navbar-fixed">
			<nav class="black" role="navigation">
				<div class="nav-wrapper container">
					<a href="#" class="brand-logo left">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png">
					</a>
					<?php
					 //wp_nav_menu( array( 
					//	'theme_location' => 'primary', 
					//	'container' => 'ul', 
				//		'menu_class' => 'right hide-on-med-and-down',
				//		'menu_id' => ''  
				//		) );
					?>
					<?php 
					// wp_nav_menu( array( 
					//'theme_location' => 'primary', 
					//	'container' => 'ul', 
				//		'menu_class' => 'side-nav', 
				//		'menu_id' => 'nav-mobile' 
				//		) );
					?>
					<ul class="right">
						<li><a href="#" id="home">Varför</a></li>
						<li><a href="#" id="about">Lösning</a></li>
						<li><a href="#" id="team">Team</a></li>
					</ul>
					<!-- <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a> -->
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
