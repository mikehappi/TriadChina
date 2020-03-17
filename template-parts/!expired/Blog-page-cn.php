<?php
/**
 * Template Name: Blog Page CN
 */

get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
 <!doctype html>
    <html <?php language_attributes(); ?>>
   <meta name="viewport" content="width=device-width,initial-scale=1">
<?php
/**
 * Move the styles below into your stylesheet
 */
?>
<html>
<head>
<style type="text/css">

@font-face{
    font-family:BR;
     src:url("<?php echo get_template_directory_uri(); ?>/css/BRYANTPRO-REGULAR.OTF");
}
  @font-face{ 
    font-family:FL;
     src:url("<?php echo get_template_directory_uri(); ?>/css/FLATLAND.OTF");
}
 @font-face{ 
    font-family:SAVOYE;
    src:url("<?php echo get_template_directory_uri(); ?>/css/SAVOYE.OTF");
}

  body {
    height: 100%;
    margin: 0;

}

 .post-list {
        padding-bottom: 20px;
    }

#myBtn {
 display: none;
  position: fixed;
  bottom: 8%;
  right: 10%;
  z-index: 99;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
     }
body, html {
    height: 100%;
    margin: 0;
 color: black !IMPORTANT;

}

.bg {
    /* The image used */
    background-image: url("<?php echo $upload_dir['baseurl'] . '/blog-banner.jpg'; ?>");

    /* Full height */
    height: 60%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
 /* blog pic fix size */
.bpic {width:850px; height:600px;}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {
   .bpic {
    width: 100% !important;
    height: auto !important;
}
.post-list{
    margin: 0 auto;
     width : auto !important;
}
}

</style>
</head>
<body>
<!--display blog banner -->
<div class="bg"></div>

<?php $debut = 0; //The first article to be displayed ?>

<?php while(have_posts()) : the_post(); ?>

<!-- Create an unordered list to display a list of posts -->
<div>
 <!-- fix size for the content text align and other -->   <div class="post-list" style=" margin: 0 auto;
    width: 950px;text-align: center;font-family:FS;font-size:13px;">
    <?php $myposts = get_posts( 'numberposts=-1&offset=$debut' );
    foreach( $myposts as $post) : setup_postdata( $post ) ?>

<!-- display post categories -->
<h1 style="font-family:FS!important;font-weight: bold!important;font-size: 22px !important;">
<?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></h1>
<!-- Display post title-->
<?php single_tag_title(); ?> 
       <h1 style="font-family:FS !important;font-weight: bold!important;font-size: 27px !important;"><?php the_title(); ?></h1>

        <!-- Display the Whole content -->
     
       <?php the_content(); ?>
     
    <?php endforeach; ?>
</div>
</div>

<?php endwhile; ?>

<!--go to the top bottom -->
 <div class="row text-right hidden-xs hidden-md hidden-sm">
           
              <button onclick="topFunction()" id="myBtn" title="Go to top" type="image" style="border: 0; background: transparent"><img class="top" src="<?php echo $upload_dir['baseurl'] . '/arrows/top.png'; ?>" style= "text-center;width:60px;height:60px;"></button>       
 </div>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<!-- add classe bpic to all image other post-list -->
<script>
jQuery(document).ready(function($){
$('.post-list').find('img').addClass('bpic')
});
</script>
</body>
</html>
<?php get_footer("X"); ?>