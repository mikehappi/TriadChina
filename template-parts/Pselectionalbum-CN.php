<?php
/*
 * Template Name: Portfolio album CN
 * Template Post Type:page
 */
 
 get_header();  ?>
  <?php $upload_dir = wp_upload_dir(); ?>
 <!doctype html>
    <html <?php language_attributes(); ?>>
   <meta name="viewport" content="width=device-width,initial-scale=1">
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
 @font-face{ 
    font-family:FS;
    src:url("<?php echo get_template_directory_uri(); ?>/css/AdobeFSStd-Regular.otf");
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

/*back to parent*/
.pagination{
text-align:left !important;
text-transform: uppercase;
font-family:FS !important;
text-decoration: none !important;
font-size: 20px;
margin:6em 0 0 0em;}

/* header style*/
    .entry-header {
text-transform:uppercase !important;
    text-align: center;
    font-family:BR !important;
margin:3em 0 0 0;
}
    
     /**
	 * centerer le content
	 */

.paquote{margin: 0 auto; width: 950px;text-align: center; font-family: FS !important; font-size: 20px; color: #000000;padding-bottom:1%}

.paquotecn{margin: 0 auto; width: 950px;text-align: center; font-family: FS !important; font-size: 20px; color: #000000;padding-bottom:1%}

.pavid { 
text-align:center;
padding-bottom:8.5px;}
.pavid embed {width:850px; height:600px;}
.pavid iframe {width:850px; height:600px;}
.columns { 
    float: right;
   position: relative;
  left: -50%; /* or right 50% */
  text-align: left;
margin: 0 0 0 0em; }
	.columns{ 
    float: right;
   position: relative;
  left: -50%; /* or right 50% */
  text-align: left;
margin: 0 0 0 0em; }
   
    .columns > .column {
  position: relative;
  left: 50%;
    }
	.columns:before, .columns:after { content: " "; display: table; }
	.columns:after { clear: both; }
	.column { float:left;margin: 0 0 0 0;}
	.column:nth-child(1n) { margin-right: 0; }
	.column:nth-child(1n+1) { margin-left: 0; clear: left; padding-bottom:1%; }
	.column img { max-width:850px; height:600px; text-align:center;}
	h2.entry-title { font-size: 12px; font-weight: bold; line-height: 2; }
   
}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {
   .column img{
    width: 100% !important;
    height: auto !important;
     text-align:center;
}

}



</style>


<div id="primary" class="site-content">

<div class="row">
            <div class="col-lg-12">
              <ul class="pagination">
<a href="<?php echo get_permalink( $post->post_parent ); ?>"><img class="left" src="<?php echo $upload_dir['baseurl'] . '/arrows/left.png'; ?>" style="width:40px;height:40px;">

返回</a></ul>
        </div>
	<?php
	/**
	 * Show page title and content
	 */
	?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<header class="entry-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
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

			$post_type = 'wedding'; // change this to the post type you want to show
			$show_posts = '12'; // change this to how many posts you want to show

		?>
		<?php $wp_query = new WP_Query( 'post_type=' . $post_type . '&posts_per_page=' . $show_posts . '&paged=' . $paged ); ?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<div class="column">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'),the_title_attribute('echo=0')); ?>"><?php the_post_thumbnail('medium'); ?></a>
				<!--  <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'),the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2> -->
			</div><!-- .column -->
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
 <div class="row text-right">
           
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

<script>
jQuery(document).ready(function($){
$('.column').find('img').addClass('pinthat')
});
</script>
<?php get_footer("X"); ?>