<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016v2
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">

		<?php
		$args = array(
			'post_type' => array( 'post', 'meetup' ),
		 'posts_per_page' => 10
	 );
		$loop = new WP_Query( $args );

		if ( $loop->have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( $loop->have_posts() ) : $loop->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
		<aside id="secondary" class="col-md-4 widget-area" role="complementary">
			<?php //get_sidebar(); ?>
				<section id="categories-2" class="widget widget_categories next-meetup">
					<!-- <h2 class="widget-title text-center">Social Font Icons</h2> -->
					<ul class="social-links list-inline text-center">
						<li>
									<a href="https://twitter.com/NWTCWebWorkers" target="_blank">
											<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
							</li>
						<li>
									<a href="https://trello.com/invite/b/UKPSaGqx/d56c34b7e54ea729fb562129b3fcfcba/nwtc-web-workers" target="_blank">
											 <i class="fa fa-trello" aria-hidden="true"></i>
									 </a>
							</li>
						<li>
									<a href="/email">
											 <i class="fa fa-envelope" aria-hidden="true"></i>
									 </a>
							</li>
					</ul>

				</section>
				<section id="categories-2" class="widget widget_categories next-meetup">
					<h2 class="widget-title text-center">Next Meetup</h2>
					<div class="date text-center">
						<p>October 25th</p>
						<p>6:00PM - 7:00PM</p>
					</div>

				</section>
				<!-- <section id="categories-2" class="widget widget_categories">
					<h2 class="widget-title">Cool Events:</h2>
					<div class="date">
						<p>BarCamp GB</p>
						<p>November 2016</p>
					</div>

				</section> -->
			</aside>
	</div><!-- #primary -->

<?php
get_footer();
