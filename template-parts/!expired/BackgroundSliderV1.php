<?php 
/*
Template Name: Background Slider V1
*/
 ?>
 <!doctype html>
 <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
<?php
/**
 * Move the styles below into your stylesheet
 */
?>

<style type="text/css">
body{ 
overflow: hidden !important; 
background-color: black !important;
}    

.full-screen {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


.carousel-inner > .item {
 transition-timing-function:ease-in-out !important;
transition-duration: 0.9s !important;
 }


 </style> 
    
 <body>
  <div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
    <li data-target="#mycarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="<?php echo $upload_dir['baseurl'] . '/bgs0.jpg'; ?>" alt="First Image">

    </div>
    <div class="item">
        <img src="<?php echo $upload_dir['baseurl'] . '/bgs1.jpg'; ?>" alt="Second Image">
        
    </div>
    <div class="item">
        <img src="<?php echo $upload_dir['baseurl'] . '/bgs2.jpg'; ?>" alt="Third Image">
        
    </div>
    <div class="item">
        <img src="<?php echo $upload_dir['baseurl'] . '/bgs3.jpg'; ?>"  alt="Fourth Image">
        
    </div>
    <div class="item">
        <img src="<?php echo $upload_dir['baseurl'] . '/bgs4.jpg'; ?>"  alt="Fifth Image">
        
    </div>
     <div class="item">
        <img src="<?php echo $upload_dir['baseurl'] . '/bgs5.jpg'; ?>"  alt="sixth Image">
        
    </div>
  </div>

</div>
<!-- Javascript that manage slider  -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script  src="<?php echo get_template_directory_uri(); ?>/js/bgs.js"></script>

</body>
</head> 

<?php get_footer(); ?>