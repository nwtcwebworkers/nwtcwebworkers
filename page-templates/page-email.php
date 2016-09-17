<?php
/**
 * The template for displaying all the email page.
 * Template Name: Email
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016v2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- <?php
			// while ( have_posts() ) : the_post();
			//
			// 	get_template_part( 'template-parts/content', 'page' );
			//
			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;
			//
			// endwhile; // End of the loop.
			?> -->


      <div class="container" style="max-width: 760px;">
          <style type="text/css">
              /*#mc_embed_signup{

                  clear:left;
                  color: hsla(0,0%,100%,1.00);
                  font-size:14px;
                }
                #mc_embed_signup .button {
                    background-color: hsla(31, 78%, 53%, 1);
                    color: hsla(0,0%,100%, 1);
                    border-color: hsl(31, 78%, 53%);
                    border: 1px solid hsl(31, 78%, 53%);
                    box-shadow: none;
                }
                #mc_embed_signup .button:hover{
                    box-shadow: none;
                    background-color: hsla(31, 78%, 53%, .30);
                    color: hsl(31, 78%, 53%);

                }
                #mc_embed_signup #mce-success-response {
                      color: hsla(31, 78%, 53%, 1);
                 }*/
              /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
          </style>




						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup{background:#fff; clear:left; font:14px 'Roboto Slab',Arial,sans-serif; }
							/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
							   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
						<div id="mc_embed_signup">
						<form action="//nwtcwebworkers.us13.list-manage.com/subscribe/post?u=7e697a70c032ac038787e38b3&amp;id=d67ce0feaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							<h2>Subscribe to our mailing list</h2>
						<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
						<div class="mc-field-group">
							<label for="mce-MMERGE1">First Name </label>
							<input type="text" value="" name="MMERGE1" class="" id="mce-MMERGE1">
						</div>
						<div class="mc-field-group">
							<label for="mce-MMERGE2">Last Name </label>
							<input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2">
						</div>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
						</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7e697a70c032ac038787e38b3_d67ce0feaf" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
						</div>

						<!--End mc_embed_signup-->






          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
