<?php
/**
 * Template Name:About Template

 */

?>

<html>
 <head>
   <link rel="stylesheet" type="text/css" href="about.css" />
 </head>

<body>
 <div id="page-container">
   <div id="content-wrap">
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
   <footer id="footer">
   <?php get_footer(); ?></footer>
 </div>
</body>

</html>
