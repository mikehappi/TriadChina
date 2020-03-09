<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Triad_China
 */

?>
<?php $upload_dir = wp_upload_dir(); ?>
    <!doctype html>
    <html <?php language_attributes(); ?>>
   <meta name="viewport" content="width=device-width,initial-scale=1">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>

        <nav id=nav class="navbar navbar-default navbar-fixed-top" role="navigation" />
        <div class="container-fluid">
            <div class="row row-header-1">


    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>

 <a id=logo class="navbar-brand" href="<?php echo home_url(); ?>">

                  <img src="<?php echo $upload_dir['baseurl'] . '/logo.svg'; ?>"  style="width:auto;height:30px;" />
                </a>

        <ul id="imenu">
            <?php wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>

        </ul>
           </div>
           </div>


        </nav>
<!-- hide dropdown list -->
<script>
jQuery(document).ready(function($){
$('li').find('ul').addClass('hidden-xs hidden-md hidden-sm')
});
</script>

    </head>
