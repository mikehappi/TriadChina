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

<script>
/*
	Smooth scroll functionality for anchor links (animates the scroll
	rather than a sudden jump in the page)
*/
$('.navitem').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});
</script>
<script>
/*
	Smooth scroll functionality for anchor links (animates the scroll
	rather than a sudden jump in the page)
*/
$('.navitemf').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});
</script>
