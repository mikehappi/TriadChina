<?php 
/*
Template Name: Contact page 7
*/
 ?>
 <!doctype html>
 <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>


<style type="text/css">

.postid-91 {
  /* Location of the image */
background-image: url("<?php echo $upload_dir['baseurl'] . '/bg-contact.jpg'; ?>") !important;
  
  /* Image is centered vertically and horizontally at all times */
  background-position: center center;
  
  /* Image doesn't repeat */
  background-repeat: no-repeat;
  
  /* Makes the image fixed in the viewport so that it doesn't move when 
     the content height is greater than the image height */
  background-attachment: fixed;
  
  /* This is what makes the background image rescale based on its container's size */
  background-size: cover;
  
  /* Pick a solid background color that will be displayed while the background image is loading */
  background-color:#464646;
  
  /* SHORTHAND CSS NOTATION
   * background: url(background-photo.jpg) center center cover no-repeat fixed;
   */
}

/* For mobile devices */
@media only screen and (max-width: 767px) {
.postid-91 {
    /* The file size of this background image is 93% smaller
     * to improve page load speed on mobile internet connections */
  background-image: url("<?php echo $upload_dir['baseurl'] . '/bg-contact.jpg'; ?>") !important;
  }
	}

 </style> 

 <body class="single single-post postid-91 single-format-standard">
<!-- wp  body container -->
<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- Redirect contact for to validation page -->
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  	location = 'http://www.spectrum-agency.com/contact/contact-validation/';
}, false );
</script>
   </body>
    </head> 

<?php get_footer(); ?>