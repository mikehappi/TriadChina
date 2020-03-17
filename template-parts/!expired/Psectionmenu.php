<?php
/**
 * Template Name: Portfolio menu
 * Description: A four-column grid page template.
 * Tutorial: http://graphpaperpress.com/tips/create-four-column-grid-template/
 */

get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
<?php
/**
 * Move the styles below into your stylesheet
 */
?>
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
  
button:focus {outline:0 !important;}
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
  

/**
     * header title
     */

    .entry-header {
    text-align: center;
    margin:8em 0 0 0;
    font-family:BR !important;
    text-transform: uppercase;
    }
    
     /**
     * centerer les images
     */
    .columns { 
   float: right;
   position: relative;
  left: -50%;
  text-align: left;
margin: 0 0 0 0em; }
   
    .columns > .column {
  position: relative;
  left: 50%;
    }
    .columns:before, .columns:after { content: " "; display: table; }
    .columns:after { clear: both; }
    .column { float: left;margin: 0 0 0 0;  }
    .column:nth-child(3n) { margin-right: 0; }
    .column:nth-child(3n+1) { margin-left: 0; clear: left; }
    .column img { max-width: 260px; height:300px }
    h2.entry-title { font-size: 12px; font-weight: bold; line-height: 2; }
    
.column{width:260px; height:300px}

    /**
     *hover image 
     */  



.img-responsive{
opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
     
 }  
.column:hover .img-responsive{
  outline: 3px solid white;
outline-offset: -1em;
  opacity: 0.6;
}
    
.pmiddle {

 transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}    
   
.column:hover .pmiddle {
opacity: 1;

}
.ptext {
background-color: transparent;
font-family:SAVOYE !important;
color: black;
font-size: 30px; 
}
.ptext {
text-align:center;
text-decoration: none !important;
}  
     
 .page{
     padding:2em 0;
}

.pleft {margin-right:30em};
.pright{margin-right:30em};

 /*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

#menucontent{ 
    padding-right: 15px!important;
    padding-left: 15px!important;
    margin-right: auto!important;
    margin-left: auto!important;
width:260px !important;
}
}
</style>

<div id="primary" class="site-content">

    <?php
    /**
     * Show page title and content
     */
    ?>
    <?php if ( have_posts() ) : ?>e
        <?php while ( have_posts() ) : the_post(); ?>
            <header class="entry-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content" id="menucontent">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

        <div class="entry-content columns">

        <?php
        /**
         * Create a new WP_Query
         * Set $wp_query object to temp
         * Grab $paged variable so pagination works
         */
        ?>
        <?php
            global $wp_query; $post; $post_id = $post-> ID;
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            rewind_posts();
            $temp = $wp_query;
            $wp_query = NULL;

            $post_type = 'post'; // change this to the post type you want to show
            $show_posts = '12'; // change this to how many posts you want to show

        ?>
        <?php $wp_query = new WP_Query( 'post_type=' . $post_type . '&posts_per_page=' . $show_posts . '&paged=' . $paged ); ?>
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </div><!-- .columns -->

        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>

        <?php $wp_query = NULL; $wp_query = $temp; ?>

    <?php else : ?>
<article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title">Nothing Found</h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
                <?php get_search_form(); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-0 -->

    <?php endif; ?>
</div><!-- .site-content -->
<!-- got to the top -->
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
<!-- add class img-responsive to all img under column  -->
<script>
jQuery(document).ready(function($){
$('.column').find('img').addClass('img-responsive')
});
</script>

 <div class="row text-center">
            <div class="page">
              
              <div style="clear: both;"></div>
            </div>
        </div>

<?php get_footer("X"); ?>