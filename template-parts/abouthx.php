<?php
/**
 * Template Name:About Page

 */

?>

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
    font-family:AP;
     src:url("AltoPro.OTF");
}
@font-face{
    font-family:APM;
     src:url("AltoProM.OTF");
}
body {
display: flex;
justify-content: center;
background-color: #e3e3e3 !important;}

.asection{
  width: 1200px !important;
  font-family:AP !important;
  padding-top: 15em !important;
  padding-bottom: 150px !important;
}
.page-title{
  font-family:AP !important;
font-size: 20px !important;
margin: 0 !important;
}
.page-title:before {
  content: '';
  width: 35vw;
  border-bottom: solid 2px #E74011;
  position: absolute;
  z-index: 1;
}
.asection p {
  margin:0px !important;

}

.Acontent h3 {
  font-family:AP !important;
  font-size:38px !important;
}

.Acontent p {
  font-size:30Px !important;

}

.Acontent img {
width: 800px;
    height: auto;
    margin: 0 !important; }


/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>
</head>
<!--display  banner x Menu RED WHITE -->
<?php get_header(); ?>

<div class="asection">

  <h1 class="page-title"><?php the_title(); ?></h1>
<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>
</div>
<?php get_footer(); ?>
