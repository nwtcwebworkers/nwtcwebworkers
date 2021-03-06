<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webworkers-2016v2
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'webworkers-2016v2' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<nav id="site-navigation" class="navbar navbar-default container" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'webworkers-2016v2' ); ?>
						<span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
					</button>
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title">
								<!-- <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?> -->
								<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?>
									<img class="img-responsive img-logo" src="/wp-content/themes/webworkers-2016v2/img/logo-name-inverted.png" />
								</a>
							</h1>
						<?php else : ?>
							<p class="site-title">
								<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?>
									<img class="img-responsive img-logo" src="/wp-content/themes/webworkers-2016v2/img/logo-name-inverted.png" />
								</a>
							</p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
						<?php
						endif; ?>
					</div><!-- .site-branding -->

				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
						<li><a href="/meetups">Meetups</a></li>
						<!--<li><a href="/alumni">Alumni</a></li>-->
						<!-- <li><a href="#">Blog</a></li> -->
						<li><a href="/about">About</a></li>
						<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					</ul>

				</div><!-- /.navbar-collapse -->


			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
