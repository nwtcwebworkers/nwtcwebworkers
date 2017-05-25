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
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
