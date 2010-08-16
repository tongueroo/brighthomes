<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php $thisPage="ourwork"; ?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Martin Perri Interiors</title>
<link href="../scripts/menu.css" rel="stylesheet" type="text/css" />
<link href="../scripts/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script><script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script><script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
    <script type='text/javascript' src='../js/jquery.color-RGBa-patch.js'></script>
    <script type='text/javascript' src='../js/example.js'></script>
    <script type="text/javascript" src="../js/bgstretcher.js"></script>
<link rel="stylesheet" href="../scripts/bgstretcher.css" />

<!--[if IE]>
<style type="text/css">.menu {position:relative;width:630px;height:200px;overflow:hidden;margin-left:20px;}</style>
<![endif]-->

<!-- slide navigation code -->
<script type="text/javascript">
$(document).ready(function () {

  // find the elements to be eased and hook the hover event
  $('div.menu ul li a').hover(function() {
    
    // if the element is currently being animated (to a easeOut)...
    if ($(this).is(':animated')) {
      $(this).stop().animate({width: "670px"}, {duration: 450, easing:"easeOutQuad"});
    } else {
      // ease in quickly
      $(this).stop().animate({width: "670px"}, {duration: 400, easing:"easeOutQuad"});
    }
  }, function () {
    // on hovering out, ease the element out
    if ($(this).is(':animated')) {
      $(this).stop().animate({width: "99px"}, {duration: 400, easing:"easeInOutQuad"})
    } else {
      // ease out slowly
      $(this).stop('animated:').animate({width: "99px"}, {duration: 450, easing:"easeInOutQuad"});
    }
  });
});
</script>


<!--background stretcher -->
<script type="text/javascript">
	$(document).ready(function(){
        //  Initialize Backgound Stretcher	   
		$(document).bgStretcher({
			images:  ['../images/bg_livingroom.jpg'], imageWidth: 1080, imageHeight: 849
			
		});
		
		$('#toggleAnimation').click(function(){
	       if($(this).val() == "Pause Animation"){
	           $(this).val("Resume Animation");
	           $(document).bgStretcher.pause();
	       } else {
	           $(this).val("Pause Animation");
	           $(document).bgStretcher.play();
	       }
		});
	});
</script>


<!--services -->
<script type="text/javascript">
			$(document).ready(function(){

				$('.idealist.captionidea').hover(function(){
					$(".coveridea", this).stop().animate({left:'146px'},{queue:false,duration:200});
				}, function() {
					$(".coveridea", this).stop().animate({left:'0px'},{queue:false,duration:200});
				});
				
				
			});
			
			
			
</script>



</head>




<body>
<div id="page">

<?php include_once("../includes/nav.php"); ?>

<div class="clearfix"></div>

<div id="container">
      
      		<div id="content">
            	
              
              <div class="fullcolumn">
              <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_diningrooms.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Dining Rooms</h3>
				</div>
			   </div>
              <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_wine.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Wine<br />
			      Rooms</h3>
				</div>
			   </div>
              <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_childrensroom.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Childrens<br />
			      Rooms</h3>
				</div>
			   </div>
                  <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_kitchen.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Kitchens</h3>
				</div>
			   </div>           
                    <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_homeoffices.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Home<br />
			      Offices</h3>
				</div>
			   </div>                 
                   <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_mediaroom.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Media<br />
			      Rooms</h3>
				</div>
			   </div>      
               
                   <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_bathrooms.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Bathrooms</h3>
				</div>
			   </div>      
                   <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_livingrooms.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Living<br />
			      Rooms</h3>
				</div>
			   </div>     
                    <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_familyrooms.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Family Rooms</h3>
				</div>
			   </div>         
                    <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_specialty.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Specialty <br />
			      Spaces</h3>
				</div>
			   </div>     
                    <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_bedrooms.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Master <br />
			      Bedrooms</h3>
				</div>
			   </div>     
                    <div class="idealist captionidea">
				<a href="#"><img src="../images/idea_outdoor.jpg" border="0"/></a>
				<div class="coveridea boxcaptionidea">
				  <h3>Outdoor <br />
			      Spaces</h3>
				</div>
			   </div>   
               <div class="clearfix"></div>
                   
            
            </div>
      </div>  	



</div>
</body>
</html>
