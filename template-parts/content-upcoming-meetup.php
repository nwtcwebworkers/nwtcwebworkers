<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webworkers-2016v2
 */


$meetupDate = get_post_meta( get_the_ID(), 'date', true );
// Check if the custom field has a value.
if ( ! empty( $meetupDate ) ) {
    $meetupDate = date("M dS", strtotime($meetupDate) );  
}
$meetupTime = get_post_meta( get_the_ID(), 'time', true );
$meetupLocation = get_post_meta( get_the_ID(), 'location', true );
    
?>
<section class="widget widget_text">
    
    <h2 class="widget-title text-center">Next Meetup</h2>
    <div class="date text-center">
        <p><?php if( $meetupDate ){ echo $meetupDate; }?></p>
        <p><?php if( $meetupTime ){ echo $meetupTime; }?></p>
        <p><?php if ( $meetupLocation ) { ?>Room: <?php echo $meetupLocation; } ?></p>
    </div>

</section>
