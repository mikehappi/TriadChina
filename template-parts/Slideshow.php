<?php
/**
 * Template Name: SlideShow page
 *
 * A custom page template without sidebar.
 *
 */
get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.bxslider.css" type="text/css" media="screen" />
<style type="text/css">
@font-face{
    font-family:AP;
     src:url("<?php echo get_template_directory_uri(); ?>/css/AltoPro.OTF");
}
@font-face{
    font-family:APM;
     src:url("<?php echo get_template_directory_uri(); ?>/css/AltoProM.OTF");
}
body {
display: flex;
flex-direction: column;
justify-content: center;
background-color: #e3e3e3 !important;
line-height: unset !important;
letter-spacing: 0.05em;
}

.sssection{
display: flex;
justify-content: center;
font-family:AP !important;
padding-top: 180px !important;
padding-bottom: 150px !important;
}



.sscontent {
display: inline-block !important;
}

div.bxslider {
  position: relative;
  text-align: center;
  color: #fff;
  font-size: 60px;

  }
  div.slide {
      margin-left: 5px;
      margin-right: 5px;
      width: 1000px !important;
  }

  .wp-caption .wp-caption-text {
      margin: 0 !important;}


  .wp-caption-text {
    text-align: left!important;
    position: absolute!important;
    top: 78px!important;
    left: 100px!important;
}

.wp-caption {
    margin-bottom: 1.5em !important;
    max-width: 100% !important;
    width: 1000px !important;
}
.active-slide {
      transition-duration: 1s;
      transition-timing-function: ease-in;
      transform: scale(1.14);
      z-index: 9999999;
    }

</style>

<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
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
 <?php get_footer ()?>
