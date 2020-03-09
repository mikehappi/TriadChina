<?php /* Template Name: About and Portfolio page */ ?>
 
<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    
#main {
}
/*--------------------------------------------------------------
## About & Portofolio
--------------------------------------------------------------*/ 

.wrap{
    margin-top: 14.2%;
}
       
 .wrap {
    display: -webkit-flex;
    display:flex;
    
     -webkit-flex-wrap: wrap;
    flex-wrap:wrap;

    -webkit-flex-direction:row;
    flex-direction:row;

    -webkit-justify-content: space-between;
   justify-content: space-between;

    -webkit-align-items:center;
     align-items:center;
}
  

@media only screen and (max-width: 500px) {
   .wrap{
 display : flex !important;
    flex-direction: column !important;
       align-content: space-between !important;
       } 
 .wed{
    margin-bottom:10px !important;
}
 .dest{
    margin-bottom:10px !important;
}
 .eve{
    margin-bottom:6em !important;
}
 .phi{
    margin-bottom:10px !important;
}
 .ser{
    margin-bottom:10px !important;
}

 .team{
    margin-bottom:10px !important;
}
 .det{
    margin-bottom:6em !important;
}
    }

@media screen and (min-width:600px) {
   .wrap { 
 
       flex-wrap:nowrap;
     
   } 
   
    .phi{
    flex-basis:1;
        order:1;
  margin-left:5%;   
    
    }
    
    .ser{
        flex-basis:1;
        order:2;
       
       }
        
        .team{
        flex-basis:1;
            order:2;
          
    }
     .det{
        flex-basis:1;
            order:2;
         margin-right:5%;      

 }
    
    
      .wed{
    flex-basis:1;
        order:1;
margin-left:13%;

    }
    
    .dest{
        flex-basis:1;
        order:2;
       
       }
        
        .eve{
        flex-basis:1;
            order:2;
margin-right:13%
    }


}



/*--------------------------------------------------------------
## our philosophy 
--------------------------------------------------------------*/
    
    .Pwrap{
margin-top:11.7%}
          
 .Pwrap {
    display: -webkit-flex;
    display:flex;
     align-items: center;
     -webkit-flex-wrap: wrap;
    flex-wrap:wrap;

    -webkit-flex-direction:row;
    flex-direction:row;

    -webkit-justify-content: space-between;
   justify-content: space-between;
   

}
@media only screen and (max-width: 500px) {
   .Pwrap{
 
    flex-direction: column;
   
       } 
.phipng{ margin-bottom: 10px !important; padding-left: 0px !important;}

.phitransbox{width: 100% !important; height: auto !important; text-align: center !important; margin-right: 10px !important; margin-left: 10px !important;
    margin-bottom: 6em !important; padding-top: 10px !important; padding-bottom: 10px !important}


.phitextin{
width:auto !important;
height:auto !important;
border: 1px solid black;
line-height:90%;
margin-left: 0px !important;
padding-top:1em !important;
padding-bottom:1em !important;}
.phitexten{
width:auto !important;
height:auto !important;
border: 1px solid black;
line-height:90%;
margin-left: 0px !important;
padding-top:1em !important;
padding-bottom:1em !important;
}  

 }

@media screen and (min-width:600px) {
   .Pwrap {
       flex-wrap:nowrap;
   } 
   
    .phipng{
    flex-basis:1;
        order:1;
    
    }
    
    .line{
        flex-basis:1;
          order:2;
    } 
    
    .phitransbox{
        flex-basis:1;
        order:3;
      
    }
    
}
    
.phipng{
    padding-left: 18%}


.phitext{
        text-align: center;
letter-spacing: 0px; }
   
.phitext{
    margin: 0% 5% 0% 5% }
.phitexten{
width:180px;
height:220px;
border: 1px solid black;
line-height:90%;
margin-left:13.2em;
padding-top:1em;
}
.phitextin{
width:150px;
height:200px;
border: 1px solid black;
line-height:90%;
margin-left:13.2em;
padding-top:1em;
}

.phitransbox {
width: 620px;
height: 370px;
background-color: #ffffff;
border: 1px solid white;
opacity: 0.7;
filter: alpha(opacity=60); /* For IE8 and earlier */
  
}
.phitransbox {
font-family:BR;
font-size: 15px;
color: #000000; 
display: flex;
  align-items: center;
   margin-right: 5%;} 



/*--------------------------------------------------------------
##our services
--------------------------------------------------------------*/
.Pwrap1{
margin-top:11.7%
}
          
 .Pwrap1 {
    display: -webkit-flex;
    display:flex;
     align-items: center;
     -webkit-flex-wrap: wrap;
    flex-wrap:wrap;

    -webkit-flex-direction:row;
    flex-direction:row;

    -webkit-justify-content: space-between;
   justify-content: space-between;
   

}

@media only screen and (max-width: 500px) {
   .Pwrap1 {
 
    flex-direction: column;
   
       } 
.serpng{ margin-bottom: 10px !important; padding-left: 0px !important;}

.sertransbox{width: 100% !important; height: auto !important; text-align: center !important; margin-right: 10px !important; margin-left: 10px !important;margin-bottom: 6em !important; 
    padding-top: 10px !important;
}
    
.sertextin{
padding-top: 10px !important; 
padding-bottom:10px !important;
margin:10px 0px 10px 0px !important;
width: auto !important;
height: auto !important;
}
.sertextin1 {
    float: left !important;
    margin: 10px 0px 0px 5px !important;
}

.sertextin2 {
float: none !important;
margin: 10px 0px 0px 0px !important;
}


.sertextincn1 {
    float: left !important;
    margin: 5px 0px 30px 30px!important;
}

.sertextincn2 {
float: none !important;
 margin: 5px -10px 40px 0px!important;
}


}


@media screen and (min-width:600px) {
   .Pwrap1 {
       flex-wrap:nowrap;
   } 
   
    .serpng{
    flex-basis:1;
        order:1;
    
    }
    
    .line1{
        flex-basis:1;
          order:2;
    } 
    
    .sertransbox{
        flex-basis:1;
        order:2;
      
    }
}
.serpng{
    padding-left: 18%}


.sertext{
        text-align: center;

   
}


.sertextin{
width:400px;
height:200px;
border: 1px solid black;
line-height:90%;
margin-left: 6em;
}

.sertextin1{float:left;
 margin:10px 0px 0px 10px;
}

.sertextin2{float:right;
 margin:10px 10px 0px 0px}

.sertextincn1{float:left;
 margin:10px 0px 0px 60px;
}

.sertextincn2{float:right;
 margin:10px 60px 0px 0px}


.sertext{
    margin:0% 3% 0% 3% !important;}


.sertransbox {
width: 620px;
height: 370px;
background-color: #ffffff;
border: 1px solid white;
opacity: 0.7;
filter: alpha(opacity=60); /* For IE8 and earlier */
}
.sertransbox {
font-family:BR;
font-size: 15px;
color: #000000; 
display: flex;
  align-items: center;
   margin-right: 5%;}  




/*--------------------------------------------------------------
##our Team
--------------------------------------------------------------*/

.Pwrap2{
margin-top:11.7%
}
          
 .Pwrap2 {
   display: -webkit-flex;
    display:flex;
     align-items: center;
     -webkit-flex-wrap: wrap;
    flex-wrap:wrap;

    -webkit-flex-direction:row;
    flex-direction:row;

    -webkit-justify-content: space-between;
   justify-content: space-between;
   

}
@media only screen and (max-width: 500px) {
   .Pwrap2 {
 
    flex-direction: column;
   
       } 
.teampng{ margin-bottom: 10px !important; padding-left: 0px !important;}

.teamtransbox{width: 100% !important; height: auto !important; text-align: center !important; margin-right: 10px !important; margin-left: 10px !important; margin-bottom: 6em !important; padding-top: 10px !important; padding-bottom: 10px !important}
    }



@media screen and (min-width:600px) {
   .Pwrap2 {
       flex-wrap:nowrap;
   } 
   
    .teampng{
    flex-basis:1;
        order:1;
    
    }
    
    .line2{
        flex-basis:1;
          order:2;
    } 
    
    .teamtransbox{
        flex-basis:1;
        order:2;
      
    }
}

.teampng{
    padding-left: 18%;}

 .teamtext{
        text-align: center;
   
}
.teamtext{
    margin: 0% 5% 0% 5%; }


.teamtransbox {
width: 620px;
height: 370px;
background-color: #ffffff;
border: 1px solid white;
opacity: 0.7;
filter: alpha(opacity=60); /* For IE8 and earlier */
}

.teamtransbox {
 font-family:BR;
font-size: 15px;
color: #000000; 
display: flex;
  align-items: center;
   margin-right: 5%;} 



/*--------------------------------------------------------------
##our Details
--------------------------------------------------------------*/


.Pwrap3{
margin-top:11.7%
}
          
 .Pwrap3 {
    display: -webkit-flex;
    display:flex;
     align-items: center;
     -webkit-flex-wrap: wrap;
    flex-wrap:wrap;

    -webkit-flex-direction:row;
    flex-direction:row;

    -webkit-justify-content: space-between;
   justify-content: space-between;
   

}
@media only screen and (max-width: 500px) {
   .Pwrap3 {
 
    flex-direction: column;
   
       } 
.detpng{ margin-bottom: 10px!important; padding-left: 0px!important;}

.dettransbox{width: 100% !important; height: auto !important; text-align: center!important; margin-right: 10px !important; margin-left: 10px !important; margin-bottom: 6em !important; padding-top: 10px !important; padding-bottom: 10px !important}
    }

@media screen and (min-width:600px) {
   .Pwrap3 {
       flex-wrap:nowrap;
   } 
   
    .detpng{
    flex-basis:1;
        order:1;
    
    }
    
    .line3{
        flex-basis:1;
          order:2;
    } 
    
    .dettransbox{
        flex-basis:1;
        order:2;
      
    }

    }
.detpng{
    padding-left: 18%}


.dettext{
    text-align: center; 
   
}
.dettext{
    margin: 0% 5% 0 5% }


.dettransbox {
width: 620px;
height: 370px;
background-color: #ffffff;
border: 1px solid white;
opacity: 0.7;
filter: alpha(opacity=60); /* For IE8 and earlier */
}
.dettransbox {
font-family:BR;
font-size: 15px;
color: #000000; 
display: flex;
  align-items: center;
   margin-right: 5%;} 

.post-id-89 {
background-image: url("<?php echo $upload_dir['baseurl'] . '/bg-about-portfolio.jpg'; ?>") !important; 
background-position: center center !important; 
background-size: cover !important; 
background-repeat: no-repeat !important; 
background-attachment: fixed !important;
}


.postid-108 {
background-image: url("<?php echo $upload_dir['baseurl'] . '/bg-about-portfolio.jpg'; ?>") !important; 
background-position: center center !important; 
background-size: cover !important; 
background-repeat: no-repeat !important; 
background-attachment: fixed !important;
}

 </style> 
 
  <body class="single single-post postid-108 post-id-89 single-format-standard">  
<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</body>

<?php get_footer(); ?>