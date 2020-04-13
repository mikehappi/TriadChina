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

body {
  letter-spacing: 0.05em;
}

.btn {
  display: inline-block;
  padding: 13px 20px;
  color: #fff;
  text-decoration: none;
  position: relative;
  background: transparent;
  border: 1px solid #e1e1e1;
  font: 12px/1.2 "Oswald", sans-serif;
  letter-spacing: 0.4em;
  text-align: center;
  text-indent: 2px;
  text-transform: uppercase;
  transition: color 0.1s linear 0.05s;

  &::before {
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background: #e1e1e1;
    z-index: 1;
    opacity: 0;
    transition: height 0.2s ease, top 0.2s ease, opacity 0s linear 0.2s;
  }

  &::after {
    transition:border 0.1s linear 0.05s;
  }

  .btn-inner {
    position: relative;
    z-index: 2;
  }

  &:hover {
    color: #373737;
    transition: color 0.1s linear 0s;

    &::before {
      top: 0;
      height: 100%;
      opacity: 1;
      transition: height 0.2s ease, top 0.2s ease, opacity 0s linear 0s;
    }

    &::after {
      border-color: #373737;
      transition:border 0.1s linear 0s;
    }
  }
}

.slideshow {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100vh;
  z-index: 1;

  .slideshow-inner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .slides {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
  }

  .slide {
    display: none;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s ease;

    &.is-active {
      display: block;
    }

    &.is-loaded{
      opacity: 1;
    }

    .caption {
      padding: 0 100px;
    }

    .image-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center;
      z-index: 1;
      background-size: cover;
      image-rendering: optimizeQuality;

      &::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
      }
    }

    .image {
      width: 100%;
      width: 100%;
      object-fit: cover;
      height: 100%;
    }

    &-content {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
      color: #fff;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .title {
      margin: 0 auto 15px;
      max-width: 1000px;
      font: 300 50px/1.2 "Oswald", sans-serif;
      letter-spacing: 0.35em;
      text-transform: uppercase;
    }

    .text {
      margin: 0 auto;
      max-width: 1000px;
      font-size: 18px;
      line-height: 1.4;
    }

    .btn {
      margin: 15px 0 0;
      border-color: #fff;

      &::before {
        background:#fff
      }
    }
  }

  .pagination {
    position: absolute;
    bottom: 35px;
    left: 0;
    width: 100%;
    height: 12px;
    cursor: default;
    z-index: 2;
    text-align: center;

    .item {
      display: inline-block;
      padding: 15px 5px;
      position: relative;
      width: 46px;
      height: 32px;
      cursor: pointer;
      text-indent: -999em;
      z-index: 1;

      + .page {
        margin-left: -2px;
      }

      &::before {
        content: "";
        display: block;
        position: absolute;
        top: 15px;
        left: 5px;
        width: 36px;
        height: 2px;
        background: rgba(255, 255, 255, 0.5);
        transition: background 0.2s ease;
      }

      &::after {
        width: 0;
        background: #fff;
        z-index: 2;
        transition: width 0.2s ease;
      }

      &:hover::before,
      &.is-active::before {
        background-color: #fff;
      }
    }
  }

  .arrows {
    .arrow {
      margin: -33px 0 0;padding: 20px;position: absolute;top: 50%;cursor: pointer;z-index: 3;
    }

    .prev {
      left: 30px;

      &:hover .svg {
        left: -10px;
      }
    }

    .next {
      right: 30px;

      &:hover .svg {
        left: 10px;
      }
    }

    .svg {
      position: relative;
      left: 0;
      width: 14px;
      height: 26px;
      fill: #fff;
      transition: left 0.2s ease;
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
