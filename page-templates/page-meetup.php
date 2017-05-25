<?php
/**
 * The template for displaying all the email page.
 * Template Name: Meetup
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016v2
 */

get_header(); ?>

	
	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">

			<?php
				$args = array( 'post_type' => 'meetup', 'posts_per_page' => 10 );
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

        <?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
