
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

/*--------------------------------------------------------------
## Footer
--------------------------------------------------------------*/

.navbar {margin-bottom: 0px !important;}
.footer{
    background: #F2F2F2!important;
    font-family:AP !important;
    font-size: 18px !important;
    text-decoration: none;
    height: 550px;
    display: flex;
    justify-content: center;

}

.footer a{
    color:black !important;
    }

  .footer a:hover {
    color: #E74011 !important;
    }

.rfooter{
  padding-top: 100px;
  position: relative;
  display: inline-flex;
  justify-content: space-between;
}

svg:hover {
  fill: #E74011 !important;
}

.fheader {
    display: flex;
		height: 30px ;
		align-items: baseline;
		justify-content: space-between;
}

.menutitlecn {
font-size:22px ;
padding-bottom: 28px;
font-family:CN !important;
}

.fcontent{
margin-top: 7px;
height: 200px ;
display: inline-flex;
}

.fcontent:before {
  content: '';
  width: 100%;
  border-bottom: solid 1px #000;
  position: absolute;
  left: 0;
  bottom: 100px;
  z-index: 1;
}
.navbar-collapse {
    padding-right: 0px;
    padding-left: 0px;
    }

  .fmenu{
padding-right: 150px;
  }

#fmenulist {
  text-align: left;
}

.fbar-nav{
    margin-bottom: 0;
    list-style: none;}

 .fbar-nav > li {
  height: 18px !important;
  margin-bottom: 18px;
 }
 .fbar-nav > li > a {
    position: relative;
    display: -webkit-box;
    padding: 0px 0px !important;
    text-decoration: none !important;

}

.fsocialicon {
  width: auto;
  height: 30px !important;
  float: right;
  margin-right: 110px;
}

.ficp{
  width: 100% !important;
  height:auto;
  position: absolute!important;
bottom: 40px;
}

.ficp > ul {
      display: inline!important;
      float:right ;
    list-style: none!important;}

   .ficp li {
       display: inline;
       float:right !important;
   }

   #fitem{
text-decoration: none !important;
}

   #fitems{
text-decoration: none !important;
margin-left: 50px;
}
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 140px;
  color: #fff;
  text-align: center;
  position: absolute;
  z-index: 1;
  top: 4vh;
  left: 251%;
  margin-left: -80px;
}



/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}




/*--------------------------------------------------------------
# Media Qeries  Mobile CSSS adapation
--------------------------------------------------------------*/
@media only screen and (max-width: 1024px) {
  .footer{
    height:624px;
  text-align: left;}

  .rfooter {
      padding-top: 64px;
display: block;
  }

.fbrand  svg { height: 24px;}


  .fcontent{

    display: block;
  }
  .fmenu{
padding-right: 0px;
  }

  .fsocialicon {
      text-align: left;
      float: left;
      margin-right: 0;
    }


  #fmenulist{
    margin:0;
    padding-bottom: 46px;
  }
  .fcontent {
    margin-top: 64px;}
.popup {
  margin-right: 16px}

  .popup .popuptext {
  top: -9vh;
  margin-left: 25vw;
  }

  .ficp > ul {
      float: left;
      padding-top: 20px;
}
.ficp{
width: 50% !important;
/* bottom: 20px; */
}



}

@media only screen and (max-width: 736px) {
  .ficp{
    width: 100% !important;
  }

  }

</style>


  <nav class="footer navbar">

		<div class="rfooter default-width">


		 <div class="fheader">

		 <a id=logo class="fbrand" href="<?php echo home_url(); ?>">

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




				</div>

        <div class="fcontent">


		        <div class="fmenu hidden-sm hidden-md hidden-xs">
              <div class="fmenutitle menutitlecn hidden-sm hidden-md hidden-xs">发现</div>
              <ul id="fmenulist">
		            <?php wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		                'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'fbar-nav',
		                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'            => new WP_Bootstrap_Navwalker())
		            );
		        ?>

		        </ul>
</div>
<div class="fsocialicon">
<div class="fsocialtitle menutitlecn">关注我们</div>
  <div class="popup" onclick="myFunction()"><svg  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 width="30px" height="30px" viewBox="0 0 768 768" enable-background="new 0 0 768 768" xml:space="preserve" style="
    margin-right: 2px;">
  <g>
  	<path d="M254.5127,266.0757c-13.3193,0-24.1064,10.7871-24.1064,24.0952c0,13.3076,10.7871,24.0947,24.1064,24.0947
  		c13.2959,0,24.083-10.7871,24.083-24.0947C278.5957,276.8628,267.8086,266.0757,254.5127,266.0757z"/>
  	<path d="M374.9844,266.0757c-13.3076,0-24.1025,10.7871-24.1025,24.0952c0,13.3076,10.7949,24.0947,24.1025,24.0947
  		s24.1006-10.7871,24.1006-24.0947C399.085,276.8628,388.292,266.0757,374.9844,266.0757z"/>
  	<path d="M433.2178,391.5801c-11.0918,0-20.083,8.998-20.083,20.0801c0,11.0918,8.9912,20.0781,20.083,20.0781
  		c11.0898,0,20.0811-8.9863,20.0811-20.0781C453.2988,400.5781,444.3076,391.5801,433.2178,391.5801z"/>
  	<path d="M533.623,391.5801c-11.0879,0-20.0811,8.998-20.0811,20.0801c0,11.0918,8.9932,20.0781,20.0811,20.0781
  		s20.084-8.9863,20.084-20.0781C553.707,400.5781,544.7109,391.5801,533.623,391.5801z"/>
  	<path d="M384.0195,0c-212.0781,0-384,171.9229-384,384s171.9219,384,384,384c212.0762,0,384-171.9229,384-384
  		S596.0957,0,384.0195,0z M314.7383,488.9736c-20.6191,0-40.5293-2.9561-58.9883-8.2676c-1.6787-0.5068-3.4648-0.7881-5.3125-0.7881
  		c-3.4746,0-6.6182,1.0596-9.5898,2.7793l-39.5654,22.835c-1.1064,0.6357-2.1729,1.1182-3.4873,1.1182
  		c-3.3203,0-6.0234-2.6963-6.0234-6.0176c0-1.4961,0.5898-2.9805,0.9717-4.4043c0.2363-0.8486,5.1006-19.0195,8.1387-30.3721
  		c0.3535-1.2949,0.6484-2.5088,0.6484-3.8389c0-4.0518-2.0039-7.6318-5.0635-9.8223
  		c-38.1045-27.6045-62.4473-68.4473-62.4473-113.834c0-83.168,80.9121-150.6016,180.7188-150.6016
  		c90.1631,0,164.8926,55.021,178.502,126.9653c-3.2578-0.1528-6.5254-0.2593-9.8164-0.2593
  		c-91.0283,0-164.8223,61.498-164.8223,137.3525c0,12.8008,2.1367,25.167,6.0654,36.9199
  		C321.3809,488.8809,318.0713,488.9736,314.7383,488.9736z M581.9854,546.6797c-2.5518,1.8145-4.2178,4.8047-4.2178,8.1855
  		c0,1.1064,0.2363,2.1191,0.5352,3.1904c2.5391,9.458,6.5898,24.6025,6.7832,25.3096c0.3066,1.1895,0.8076,2.4375,0.8076,3.6865
  		c0,2.7549-2.2441,5.0049-5.0234,5.0049c-1.0889,0-1.9775-0.4004-2.9033-0.9307l-32.9629-19.0322
  		c-2.4863-1.4355-5.0986-2.3203-7.998-2.3203c-1.54,0-3.0254,0.2373-4.4209,0.6729c-15.3906,4.416-31.9844,6.8779-49.168,6.8779
  		c-83.1748,0-150.5996-56.1885-150.5996-125.5059c0-69.3179,67.4248-125.4927,150.5996-125.4927
  		c83.1807,0,150.6025,56.1748,150.6025,125.4927C634.0195,489.6338,613.7393,523.668,581.9854,546.6797z"/>
  </g>
</svg><span class="popuptext" id="myPopup"><img class="alignnone size-full wp-image-343" src="https://triadchina.keyidev.com/wp-content/uploads/2020/04/wechat-qr.png" alt="" width="140" height="140" /></span>
</div>
<a id=logo class="ig" href="https://www.instagram.com/triadchina.asia/">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 width="30px" height="30px" viewBox="0 0 768 768" enable-background="new 0 0 768 768" xml:space="preserve">
  <g>
  	<path d="M384,0C172.0649,0,0,172.0649,0,384c0,211.9346,172.0649,384,384,384c211.9346,0,384-172.0654,384-384
  		C768,172.0649,595.9346,0,384,0z M622.5557,482.9521c-1.166,25.5449-5.2236,42.9912-11.1543,58.2568
  		c-6.1338,15.7812-14.3398,29.166-27.6826,42.5098c-13.3438,13.3428-26.7285,21.5488-42.5098,27.6826
  		c-15.2656,5.9307-32.7119,9.9883-58.2568,11.1543C457.3535,623.7236,449.1797,624,384,624s-73.3535-0.2764-98.9521-1.4443
  		c-25.5449-1.166-42.9912-5.2236-58.2583-11.1543c-15.7817-6.1338-29.166-14.3398-42.5088-27.6826
  		c-13.3423-13.3438-21.5488-26.7285-27.6821-42.5098c-5.9326-15.2656-9.9888-32.7119-11.1558-58.2568
  		C144.2759,457.3535,144,449.1797,144,384s0.2759-73.3535,1.4429-98.9521c1.167-25.5449,5.2231-42.9912,11.1558-58.2568
  		c6.1333-15.7812,14.3398-29.166,27.6821-42.5083c13.3428-13.3428,26.7271-21.5493,42.5088-27.6826
  		c15.2671-5.9326,32.7134-9.9902,58.2583-11.1558C310.6465,144.2759,318.8203,144,384,144s73.3535,0.2759,98.9521,1.4443
  		c25.5449,1.1655,42.9912,5.2231,58.2568,11.1558c15.7812,6.1333,29.166,14.3398,42.5098,27.6826
  		c13.3428,13.3423,21.5488,26.7271,27.6826,42.5083c5.9307,15.2656,9.9883,32.7119,11.1543,58.2568
  		C623.7236,310.6465,624,318.8203,624,384S623.7236,457.3535,622.5557,482.9521z"/>
  	<circle cx="384" cy="384.0002" r="79.9998"/>
  	<path d="M579.3574,287.019c-1.0674-23.3999-4.9775-36.1064-8.2637-44.5635c-4.3535-11.2021-9.5537-19.1987-17.9541-27.5957
  		c-8.3965-8.3984-16.3916-13.6006-27.5947-17.9536c-8.457-3.2861-21.1641-7.1953-44.5645-8.2632
  		c-25.3076-1.1553-32.8975-1.3994-96.9805-1.3994s-71.6729,0.2446-96.9805,1.3994c-23.4004,1.0679-36.1069,4.9771-44.564,8.2637
  		c-11.2036,4.353-19.1987,9.5547-27.5972,17.9531c-8.3984,8.397-13.5986,16.3936-17.9517,27.5957
  		c-3.2866,8.457-7.1973,21.1636-8.2651,44.5635c-1.1553,25.3081-1.3979,32.8979-1.3979,96.981s0.2427,71.6729,1.3979,96.9814
  		c1.0679,23.3994,4.9785,36.1064,8.2651,44.5635c4.353,11.2031,9.5532,19.1982,17.9517,27.5947
  		c8.3984,8.4004,16.3936,13.6006,27.5972,17.9541c8.457,3.2861,21.1636,7.1963,44.564,8.2637
  		c25.3047,1.1543,32.8926,1.3994,96.9805,1.3994s71.6777-0.2451,96.9805-1.3994c23.4004-1.0674,36.1074-4.9775,44.5645-8.2637
  		c11.2031-4.3535,19.1982-9.5537,27.5947-17.9541c8.4004-8.3965,13.6006-16.3916,17.9541-27.5947
  		c3.2861-8.457,7.1963-21.1641,8.2637-44.5635c1.1543-25.3086,1.3994-32.8984,1.3994-96.9814S580.5117,312.3271,579.3574,287.019z
  		 M384,507.2432c-68.0654,0-123.2432-55.1777-123.2432-123.2432S315.9346,260.7568,384,260.7568S507.2432,315.9346,507.2432,384
  		S452.0654,507.2432,384,507.2432z M512.1123,284.6865c-15.9053,0-28.7988-12.8926-28.7988-28.7983
  		c0-15.9062,12.8936-28.8003,28.7988-28.8003s28.8008,12.894,28.8008,28.8003
  		C540.9131,271.7939,528.0176,284.6865,512.1123,284.6865z"/>
  </g>
  </svg>
 </a>
</div>

</div>

<div class="ficp">
<span style="float: left;">   © 2020 Triad China Ltd. All rights reserved.</span>
<ul>
  <!-- <li class="fitemsicp"><a id="fitems" href="" >京ICP备XXXXXXXX号</a></li>
  <li class="fitemsicp"><a id="fitems" href="" >Imprint</a></li>
<li class="fitemsicp"><a id="fitem" href="" >Privacy policy</a></li>-->
</ul>
</div>
</div>

  </nav>
</div><!-- #page -->
<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

</script>
<?php wp_footer(); ?>
</body>
</html
