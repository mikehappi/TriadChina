<?php
/**
 * Template Name: SlideShow page
 *
 * A custom page template without sidebar.
 *
 */
get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
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
flex-direction: column;
justify-content: center;
background-color: #e3e3e3 !important;
line-height: unset !important;
}

.sssection{
display: flex;
justify-content: center;
width: 1200px !important;
font-family:AP !important;
padding-top: 15em !important;
padding-bottom: 150px !important;
}



.sscontent {
display: inline-block !important;
}

* {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
  width: 100%;
  overflow: hidden;
}

body {
  background-color: #000;
  font-family: 'industry';
}

.slideShow {
  height: 100%;
  width: 75%;
  min-width: 750px;
  margin: 0 auto;
  overflow: visible;

  &__container {
    height: 100%;
    width: 100%;
    list-style: none;
    display: block;
    margin: 0;
    padding: 0;
    white-space: nowrap;
    font-size: 0;
    line-height: 0;
    position: relative;
  }

  &__slide {
    height: 100%;
    width: 100%;
    display: inline-block;
    position: relative;
  }

  &__image {
    display: block;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
    transform: scale(0.8);

    &::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(225deg, rgba(0,0,0,0.00) 0%, rgba(0,0,0,0.5) 100%);
    }
  }

  &__titleWrap {
    font-size: 1rem;
    position: absolute;
    left: 4rem;
    bottom: 4rem;
    padding-bottom: 2rem;
    padding-left: 2rem;
    color: #fff;
  }

  &__slideTitle {
    font-weight: 300;
    z-index: 500;
    color: #fff;
    font-size: 5em;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 1;
    margin: 0 0 .5rem;
    opacity: 0;
  }

  &__slideSubTitle {
    font-size: 1.5em;
    text-transform: uppercase;
    font-family: sans-serif;
    padding-left: .5rem;
    font-weight: 300;
    letter-spacing: 1px;
    opacity: 0;
  }

  &__next,
  &__prev {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 5em;
    line-height: 1em;
    color: #fff;

    i {
      display: block;
      float: left;
    }
  }

  &__next {
    right: 1rem;

    cursor: pointer;
  }

  &__prev {
    left: 1rem;
    cursor: pointer;
    transition: opacity 0.3s ease;
    transform-origin: center;

    &.is-inactive {
      opacity: 0.3;
      cursor: default;
    }
  }
}

/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 500px) {

}
</style>

<
<?php
if (have_posts()):
  while (have_posts()) : the_post();
    the_content();
  endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>

<script  src="<?php echo get_template_directory_uri(); ?>/js/slideshow.js"></script>
 <?php get_footer ()?>
