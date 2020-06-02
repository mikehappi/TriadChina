<?php
/**
 * Template Name:About Page

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
background-color: #e3e3e3 !important;}

.asection{
  max-width: 1200px;
  font-family:AP !important;
  padding-top: 15em !important;
  padding-bottom: 150px !important;
}
.page-title{
  font-family:AP !important;
font-size: 20px !important;
margin-bottom: 80px !important;
}
h1 span {
border-bottom: 2px solid #E74011 !important;
display: inline;
padding-bottom: 20px;
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
  margin: 45px 0 0 0 !important;}


/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
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
</div>
