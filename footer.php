
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Triad_China
 */

?>
<?php $upload_dir = wp_upload_dir(); ?>
	<div> <!-- .site-info -->

<footer id="colophon" role="content info">

  <nav class="navbar-default navbar-fixed-bottom">

    <section id="lab_social_icon_footer">
    
      <div class="container">
    
        <div class="text-center center-block">
        
        <img src="<?php echo $upload_dir['baseurl'] . '/social-icons/wechat.png'; ?>" class="popmake-169 popmake-qr-code" style="width:20px;height:18px;border:0;" />
             
           <a href="http://weibo.com/2990440951/profile" target="_blank"> <img src="<?php echo $upload_dir['baseurl'] . '/social-icons/weibo.png'; ?>" style="width:20px;height:18px;"></a>
           
          <img src="http://spectrum-agency.com/wp-content/uploads/2017/08/phone.png" class=" popmake-172 popmake-phone-number" style="width:20px;height:18px;border:0;">
          
          <a href="mailto:info@spectrum-agency.com" target="_blank">
            <img src="<?php echo $upload_dir['baseurl'] . '/social-icons/email.png'; ?>"  style="width:20px;height:18px;border:0;">
          </a>
          <a href="https://www.instagram.com/spectrumagency" target="_blank"> <img src="<?php echo $upload_dir['baseurl'] . '/social-icons/instagram.png'; ?>"   style="width:20px;height:18px;border:0;">
          </a>
          <a href="https://www.facebook.com/SpectrumEventsChina" target="_blank"> <img src="<?php echo $upload_dir['baseurl'] . '/social-icons/facebook.png'; ?>"   style="width:10px;height:18px;border:0;">
          </a>
          <a href="https://www.pinterest.com/spectrum_agency/" target="_blank"> <img src="<?php echo $upload_dir['baseurl'] . '/social-icons/pinterest.png'; ?>"  style="width:20px;height:18px;border:0;"></a>
        
        </div>
      
      </div>
    
    </section>		

  </nav>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body> 
</html






