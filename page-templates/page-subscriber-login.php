<?php
/**
 * The template for displaying all the email page.
 * Template Name: Alumni Login
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016v2
 */

get_header(); ?>

	
	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8" role="main">
            <div class="alumni-form">
                <?php
				$args = array( 'redirect' => site_url() );

                if(isset($_GET['login']) && $_GET['login'] == 'failed')
                {
                    ?>
                        <div id="login-error" style="background-color: #FFEBE8;border:1px solid #C00;padding:5px;">
                            <p>Login failed: You have entered an incorrect Username or password, please try again.</p>
                        </div>
                    <?php
                }
                
                wp_login_form( $args );

                if ( get_option( 'users_can_register' ) ) :
                    $registration_url = sprintf( '<a class="ww-register btn btn-default" href="%s">%s</a>', esc_url( wp_registration_url() ), __( 'Register' ) );
                
                    /** This filter is documented in wp-includes/general-template.php */
                    echo apply_filters( 'register', $registration_url );
                endif;
                    ?>
            </div>
			
                
			

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
						<p>September 27th</p>
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
// get_sidebar();
get_footer();
