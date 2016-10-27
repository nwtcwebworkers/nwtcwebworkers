<?php
/**
 * The template for displaying all single posts.
 * Template Name: 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package webworkers-2016v2
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">

			<?php
				$args = array( 'post_type' => 'meetup', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/content', get_post_format() );

				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				endwhile;
			?>

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
			</aside>
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
