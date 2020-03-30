<?php
/**
 * Template Name:Our Clients Page

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
background-color: #e3e3e3 !important;
 line-height: unset !important;
}

.clsection{
  width: 1200px !important;
  font-family:AP !important;
  padding-top: 15em !important;
  padding-bottom: 150px !important;

}

.page-title{
font-family:AP !important;
font-size: 20px !important;
margin-bottom: 80px !important;
}

/*underline title */
h1 span {
border-bottom: 2px solid #E74011 !important;
display: inline;
padding-bottom: 20px;
}


.clcontent {
display: inline-block !important;
height: 720px;
width:  1200px;
}

.clcontainer{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 40px;
}
.awitem img{
  border: 1px;
    height: 100px;
    width: 100px;
}
.clitem p {
  margin:0 !important;
}

.clcontent hr {
  margin-top: 40px!important;
  margin-bottom: 40px!important;
  border: 0 !important;
  border-top: 1px solid #FFF!important;
}

.clitem .blackwhite{
  display:inline;
}

.clitem:hover .blackwhite {
    display: none;
}


.clitem .colored{
  display:none;
}

.clitem:hover .colored{
display:inline;
}



/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>
</head>

<div id="primary" class="site-content">
<div class="clsection">

  <h1 class="page-title"><span> <?php the_title(); ?></span></h1>
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
