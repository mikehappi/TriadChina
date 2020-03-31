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

.lsection{
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

.lcontent {
display: inline-block !important;
}

h1 span {
border-bottom: 2px solid #E74011 !important;
display: inline;
padding-bottom: 20px;
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

<div class="lsection">
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
