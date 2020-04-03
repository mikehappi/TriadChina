<?php
/**
 * Template Name: Landing page
 *
 * A custom page template without sidebar.
 *
 */
get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/landing.css" type="text/css" media="screen" />

<div class="lsection">

<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=about-us' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>



<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=our-work' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>


<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=our-services' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>

<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=our-clients' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>



<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=people' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>



<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=our-awards' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>



<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=contact-us' );
    // "loop" through query (even though it's just one page)
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>

</div>

<script>$(".navitem").click(function(e){
  e.preventDefault();

  var this_offset = $(this).offset();
  var that_id     = $(this).attr("href");
  var that_offset = $(that_id).offset();
  var offset_diff = Math.abs(that_offset.top - this_offset.top);

  var base_speed  = 100; // Time in ms per 1,000 pixels
  var speed       = (offset_diff * base_speed) / 1000;

  $("html,body").animate({
    scrollTop: that_offset.top
  }, speed);
});
