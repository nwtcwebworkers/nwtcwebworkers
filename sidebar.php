<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webworkers-2016v2
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

// WP_Query arguments
$args = array(
	'post_type' => array( 'post', 'meetup' ),
    'posts_per_page' => 1
);

// The Query
$query = new WP_Query( $args );

?>

<aside id="secondary" class="col-md-4 widget-area" role="complementary">
    <section id="categories-2" class="widget widget_categories next-meetup">
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
        </ul>
    </section>
    <section class="widget widget_categories email-signup">
        <p class="text-center">
            <a href="/email">Subscribe to Meetup News</a>
        </p>
    </section>
    
    
    <?php
        if ( $query->have_posts() ) :

			

			/* Start the Loop */
			while ( $query->have_posts() ) : $query->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-upcoming-meetup', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-upcoming-meetup', 'none' );

		endif; 
    
    
    
    ?>
    
    
    
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
