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
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.bxslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/hamburgers.css" type="text/css" media="screen" />
<div class="section">
<div class="lsection">
  <?php
      // query for the about page
      $your_query = new WP_Query( 'pagename=slideshow' );
      // "loop" through query (even though it's just one page)
      while ( $your_query->have_posts() ) : $your_query->the_post();
          the_content();
      endwhile;
      // reset post data (important!)
      wp_reset_postdata();
  ?>


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
</div>
<script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (1200) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1200, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<script>
  $('.bxslider').bxSlider({
    stopAutoOnClick: false,
    slideWidth: 1000,
    minSlides: 1,
     maxSlides: 3,
     moveSlides: 1,
    pager: true,
    auto: true,
    displaySlideQty: 2,
    responsive: true,

});


</script>
<script>
$('.top-slider').bxSlider({
  onSliderLoad: function(currentIndex) {
    $('.top-slider').children().eq(currentIndex).addClass('active-slide');
  },
  onSlideAfter: function($slideElement){
    $('.top-slider').children().removeClass('active-slide');
    $slideElement.addClass('active-slide');
  }
});
</script>
</body>
</html
