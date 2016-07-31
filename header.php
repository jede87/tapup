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
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
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
					<a id="logo-container" href="#" class="brand-logo left">
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
						<li><a href="#" id="home">Hem</a></li>
						<li><a href="#" id="about">Om oss</a></li>
						<li><a href="#" id="team">Team</a></li>
					</ul>
					<!-- <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a> -->
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->
