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

				$('.services.caption').hover(function(){
					$(".cover", this).stop().animate({top:'130px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'255px'},{queue:false,duration:160});
				});
				
				
				$('.work.caption2').hover(function(){
					$(".coverall", this).stop().animate({top:'0px'},{queue:false,duration:160});
				}, function() {
					$(".coverall", this).stop().animate({top:'200px'},{queue:false,duration:160});
				});
				
				
			});
			
			
			
</script>

<!-- rollover image fade -->
<script type="text/javascript">        	
$(document).ready(function(){

    //Set opacity on each span to 0%
    $(".rollover").css({'opacity':'0'});

	$('.image_list a').hover(
		function() {
			$(this).find('.rollover').stop().fadeTo(500, 1);
		},
		function() {
			$(this).find('.rollover').stop().fadeTo(500, 0);
		}
	)
	$('.image_listtwo a').hover(
		function() {
			$(this).find('.rollover').stop().fadeTo(500, 1);
		},
		function() {
			$(this).find('.rollover').stop().fadeTo(500, 0);
		}
	)

});		
</script>

<!-- fading text -->
<script type="text/javascript">  
$(document).ready(function(){
						   $(".fadetext").fadeTo("slow", 0.3); // This sets the opacity of the thumbs to fade down to 30% when the page loads
						   $(".image_list a").hover(function(){
						   $(".fadetext").fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
						   },function(){
						   $(".fadetext").fadeTo("slow", 0.3); // This should set the opacity back to 30% on mouseout
							   	});
						   });
$(document).ready(function(){
						   $(".fadetext2").fadeTo("slow", 0.3); // This sets the opacity of the thumbs to fade down to 30% when the page loads
						   $(".image_listtwo a").hover(function(){
						   $(".fadetext2").fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
						   },function(){
						   $(".fadetext2").fadeTo("slow", 0.3); // This should set the opacity back to 30% on mouseout
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
              <div class="projectbt"><img src="../images/projectbt_01.jpg" alt="Alpine" /></div>
              <div class="projectbt"><img src="../images/projectbt_02.jpg" alt="Alpine" /></div>
              <div class="projectbt"><img src="../images/projectbt_03.jpg" alt="Alpine" /></div>
              <div class="projectbt"><img src="../images/projectbt_04.jpg" alt="Alpine" /></div>
              <div class="projectbt"><img src="../images/projectbt_05.jpg" alt="Alpine" /></div>
              <div class="projectbt"><img src="../images/projectbt_06.jpg" alt="Alpine" /></div>
              	
            <div class="clearfix"></div>
                   
            
            </div>
      </div>  	



</div>
</body>
</html>
