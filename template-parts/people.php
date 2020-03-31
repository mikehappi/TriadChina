<?php
/**
 * Template Name:People Page

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

.psection{
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


.pcontent {
display: inline-block !important;
height: 510px;
width:  1200px;
background-color: white;
padding-top: 110px;
}

.pcontainer{
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.pitem img{
  border: 1px;
    height: 200px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    width: 200px;
}

.pcap{
  font-size:28px !important;
  text-align: center !important;
  margin-top: 30px;
  margin-bottom: 47px;

}



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
