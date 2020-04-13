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
}

.sssection{
display: flex;
justify-content: center;
font-family:AP !important;
padding-top: 135px !important;
padding-bottom: 150px !important;
}



.sscontent {
display: inline-block !important;
}

body {
  letter-spacing: 0.05em;}

div.bxslider {
    position: absolute;
    width:100%;

  }
  div.slide {
      margin-left: 5px;
      margin-right: 5px;
      width: 1000px !important;
  }


/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
margin-left: 25%;
  margin-right: 25%;
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

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
<script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script><script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
    slideWidth: 1000,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    pager: true,
    auto: true,
moveSlides: 1,
    displaySlideQty: 2,
    responsive: false,
    infiniteLoop: true,
  });
});

</script>
 <?php get_footer ()?>
