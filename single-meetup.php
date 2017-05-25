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
/*
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
*/
			?>

<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
        
        <?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
