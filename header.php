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

        <nav id=nav class="navbar navbar-default navbar-fixed-top" role="navigation"

<div class="row row-header-1">
<div class="container-fluid">
            <div id=lang class="hidden-xs hidden-md hidden-sm" style="font-size:10px;">
              <a href="">DE</a>
              <a href="">中文</a>
              <a href="">한국어</a>
            </div>

    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>

 <a id=logo class="navbar-brand" href="<?php echo home_url(); ?>">

   <svg height="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 103.3 30" style="enable-background:new 0 0 103.3 30;" xml:space="preserve">
<title>Asset 1</title>
<g id="Layer_2_1_">
<g id="Layer_5">
<polygon points="10.8,12.4 10.8,30 5.6,30 5.6,12.4 0,12.4 0,7.7 16.4,7.7 16.4,12.4 		"/>
<path d="M82.7,14.8c0-1.8-0.6-2.7-3.1-2.7h-3v13.4h3c2.5,0,3.1-1,3.1-2.7V14.8z M80.2,30h-8.7V7.7h8.7c5.5,0,7.6,2.8,7.6,5.8v10.7
C87.8,27.2,85.8,30,80.2,30"/>
<path d="M30.6,16.2c0,1.7-0.5,2.5-2.7,2.5h-4v-6.5h4c2.2,0,2.7,0.7,2.7,2.3V16.2z M37.8,30l-5.4-7.6c2.2-0.9,3.2-2.8,3.2-5.6V14
c0-4.2-2-6.3-7.5-6.3h-9.3V30h5v-7h1.7c0.9,0,1.6,0.5,2.1,1.2l4.1,5.7H37.8z"/>
<path d="M56.2,21.4l2.6-9.4l2.5,9.4H56.2z M62.2,7.7h-6.7L48.6,30h5.2l0.9-3.2c0.3-0.8,1.1-1.3,2-1.2h5.9l1.2,4.4H69L62.2,7.7z"/>
<path d="M88.6,0c-0.8,0-1.1,0.5-0.6,1.2l6.8,10.4c0.2,0.4,0.7,0.6,1.1,0.4c0.2-0.1,0.3-0.2,0.4-0.4l6.8-10.4
c0.4-0.6,0.1-1.2-0.6-1.2L88.6,0z"/>
<rect x="40.6" y="7.7" width="5.3" height="22.4"/>
</g>
</g>
</svg>
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
