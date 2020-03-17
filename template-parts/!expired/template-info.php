<?php 
/*
Template Name: Contact Validation
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

.postid-189 {
background-image: url("<?php echo $upload_dir['baseurl'] . '/bg-contact.jpg'; ?>") !important; 
background-position: center center !important; 
background-size: cover !important; 
background-repeat: no-repeat !important; 
background-attachment: fixed !important;
}
/* For mobile devices */
@media only screen and (max-width: 767px) {
.postid-189 {
    /* The file size of this background image is 93% smaller
     * to improve page load speed on mobile internet connections */
   background-image: url("<?php echo $upload_dir['baseurl'] . '/bg-contact.jpg'; ?>") !important;
  }
	}
.pagination{
text-align:left !important;
text-transform: uppercase;
font-family:BR !important;
text-decoration: none !important;
font-size: 15px;
margin:6em 0 0 0em;
display: inherit !important;
}

 </style> 
 <body class="single single-post postid-189 single-format-standard">
<div class="cvwrap">
             
<div class="cvtransbox">
  
 <!-- pagination and call post parent php -->
          
              <ul class="pagination">
<a href="<?php echo get_permalink( $post->post_parent ); ?>"><img class="left" src="<?php echo $upload_dir['baseurl'] . '/arrows/left.png'; ?>" style="width:40px;height:40px;">

BACK TO <?php echo get_the_title( $post->post_parent )?></a></ul>
        
<div class="cvtext1">Thank you</div>
<div class="cvtext2">Your Enquiry</Br> have been submitted</div>
</div>
</div>
   </body>
    </head> 

<?php get_footer(); ?>