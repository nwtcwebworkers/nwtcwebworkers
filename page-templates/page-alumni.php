<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Alumni
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016v2
 */

get_header(); ?>

<style>

@supports ( display:grid ){

	.grid-alumni [class*="col-"]{	
		width: 100%;
		float: none;
	}

	.grid-alumni .row {
		margin-left: 0;
		margin-right: 0;
	}
	.row::before{
		content: none;
	}
	.grid-alumni{
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-gap: 10px;
		background-color: #fff;
		color: #444;
	}
	.alumnus h3 {
		grid-column-start: 1;
		grid-column-end: 3;
	}
	.alumnus--social {
		font-size: 4em;
		margin: 0;
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		position: absolute;
		top: 0px;
		width: 100%;
		opacity:0;
		transition: .3s ease-out;
	}
	.alumnus--social:hover {
		padding: 2px;
		opacity: 100;
	}

}

.alumnus {
	text-align: center;
}

.alumnus--image{
	/*border-radius: 105px;*/
	position: relative;
}


</style>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
			<ul class="row list-unstyled grid-alumni">
			<?php
				$args = array(
					'role' => ''
				);

				// The Query
				$user_query = new WP_User_Query( $args );

				// print_r($user_query);
				
				// User Loop
				if ( ! empty( $user_query->results ) ) {
					foreach ( $user_query->results as $user ) {						
						
						// echo '<li class="alumnus">';
						echo '<li class="col-md-4 alumnus">';
						echo '<h3>' . $user->display_name . '</h3>';

						echo '<div class="alumnus--image">' . get_avatar($user->id, 200) 
						// echo '
						// 	<ul class="list-unstyled alumnus--social">
						// 		<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						// 		<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						// 		<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						// 		<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						// 	</ul>
						// '
						. '</div>';
						echo '</li>';
					}
				} else {
					echo 'No users found.';
				}
				?>
			</ul>
			

		
		

		</main><!-- #main -->
        
        <?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
