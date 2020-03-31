<?php
/**
 * Template Name: Landing page
 *
 * A custom page template without sidebar.
 *
 */
get_header(); ?>

<div class="lsection">

<?php get_template_part('template-parts/about.php'); ?>
<?php get_template_part('template-parts/ourwork.php'); ?>
<?php get_template_part('template-parts/ourservices.php'); ?>
<?php get_template_part('template-parts/ourclients.php'); ?>
<?php get_template_part('template-parts/people.php'); ?>
<?php get_template_part('template-parts/ourawards.php'); ?>
<?php get_template_part('template-parts/contactus.php'); ?>


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
