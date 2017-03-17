<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BonnJoel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bonnjoel' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="top-header">
				<p class="top-contact"><span>Get in touch</span> 01707 645 884 - office@millharbourdigital.co.uk</p>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
						</a>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-6">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<a id="hamburger" href="#" class="menu-toggle" >
							<span class="top-bar"></span>
							<span class="middle-bar"></span>
							<span class="bottom-bar"></span>
						</a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
