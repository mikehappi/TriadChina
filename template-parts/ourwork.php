<?php
/**
 * Template Name:Our Work Page

 */

 get_header(); ?>

<?php $upload_dir = wp_upload_dir(); ?>
 <!doctype html>
    <html <?php language_attributes(); ?>>
   <meta name="viewport" content="width=device-width,initial-scale=1">

<head>
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
justify-content: center;
background-color: #e3e3e3 !important;}

.wsection{
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


.wcontent {
display: inline-block !important;
margin-top: 80px;
}

hr {
  margin-top: 20px !important;
margin-bottom: 60px !important;
border: 0;
border-top: 2px solid #E74011 !important;
float: left !important;
width: 50% !important;
}

/* work items displaying */
.iifcont {
  display: flex;
   flex-direction: row ;
  justify-content: flex-end;
}

.iifitems img{
width:592px !important;
height:333px !important;
vertical-align: super!important;
}
.iiifcont {
  display: flex;
  flex-direction: row ;
  justify-content:space-between;

}
.iiifitems  img{
  width:390px !important;
  height:220px !important;
  vertical-align: super!important;
}



/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>
</head>

<div id="primary" class="site-content">
<div class="wsection">

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
