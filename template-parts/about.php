
<?php
/*
 * Template Name: About Template
 * description: >-
 * underneath the page content
 */


 get_header(); ?>

 <div id="primary" class="site-content">
   <div id="content" role="main">

     <?php while ( have_posts() ) : the_post(); ?>
       <header class="entry-header">
         <?php the_post_thumbnail(); ?>
         <h1 class="entry-title"><?php the_title(); ?></h1>
       </header>

       <div class="entry-content">
         <?php the_content(); ?>
       </div><!-- .entry-content -->

       <?php comments_template( ’, true ); ?>
     <?php endwhile; // end of the loop. ?>

   </div><!-- #content -->
 </div><!-- #primary -->


 <?php get_footer(); ?>
