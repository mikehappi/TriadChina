<?php
/**
 * Template Name: Landing page
 *
 * A custom page template without sidebar.
 *
 */
get_header(); ?>
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

.wsection{
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

.wcontent {
display: inline-block !important;
}

h1 span {
border-bottom: 2px solid #E74011 !important;
display: inline;
padding-bottom: 20px;
}


/*Two  frame blocks */

/* work items displaying */
.iifcont {
  display: inline-flex;
   flex-direction: row ;
  justify-content: flex-end;
  height: 700px;
}

 .iifitem {
/* To correctly align image, regardless of content height: */
   vertical-align: top;
   display: inline-block;
   /* To horizontally center images and caption */
   text-align: center;
 background-color: #F2F2F2;}

 .iifitem img{
 width:592px !important;
 height:333px !important;

 }
 .iifitemR {
background-color: #F2F2F2;
    margin-left: 15px;
 }
 .iifitemR img{
 width:592px !important;
 height:333px !important;

 }

 .iicat {
 font-size:14px !important;
 color:#E74011!important;
 margin-bottom: 7px;
 }
 .iipr {
 line-height: 40.8px !important;
 font-size:34px !important;
 }
 .iipd {
 line-height: 26.4px !important;
 font-size:22px !important;
 }
 .iilo{
 font-size:14px !important;
 line-height: 16.8px !important;
 margin-top: 20px;
 }

/*three case blocks */

.iiifcont {
  display:flex;
  flex-direction: row ;
  justify-content:space-between;
  height: 620px;
  margin-top: 15px;
  margin-bottom: 15px;
}
.iiifitems  img{
  width:390px !important;
  height:220px !important;
}

.iiifitems {
  /* To correctly align image, regardless of content height: */
     vertical-align: top;
     display: inline-block;
     /* To horizontally center images and caption */
     text-align: center;
     background-color: #F2F2F2;
 }

 .iicaption {
     /* Make the caption a block so it occupies its own line. */
     display: block;
     text-align: left;
     height: 310px;
     width: 472.5px;
     margin-left: 60px;
     margin-top: 40px;
   }


   .iiicaption {
       /* Make the caption a block so it occupies its own line. */
      display: block;
       text-align: left;
       height: 400px!important;
       width: 330px!important;
       margin-left: 60px;
       margin-top: 40px;
     }


/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}

</style>


<?php get_template_part('template-parts/about.php'); ?>
<?php get_template_part('template-parts/ourwork.php'); ?>
<?php get_template_part('template-parts/ourservices.php'); ?>
<?php get_template_part('template-parts/ourclients.php'); ?>
<?php get_template_part('template-parts/people.php'); ?>
<?php get_template_part('template-parts/ourawards.php'); ?>
<?php get_template_part('template-parts/contactus.php'); ?>

<div class="wsection">
<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
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
