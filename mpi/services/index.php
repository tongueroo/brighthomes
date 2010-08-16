<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $thisPage="services"; ?>
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

				$('.serviceslist.caption').hover(function(){
					$(".cover", this).stop().animate({top:'120px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'255px'},{queue:false,duration:160});
				});
			});
		</script>

</head>




<body>
<div id="page">

<div id="header_container">
<div id="header">
	<div id="logo"><img src="../images/spacer.gif" /></div>
    <div id="navcontainer">
   	  <div id="nav-wrap">
       	  <ul class="group" id="example-two">
            <li <?php if ($thisPage=="about") 
      echo " class=\"current_page_item_two\""; ?>><a rel="#8d5917" href="about.php">About</a></li>
            <li <?php if ($thisPage=="services") 
      echo " class=\"current_page_item_two\""; ?>><a rel="#274967" href="services.php">Services</a></li>
            <li <?php if ($thisPage=="ourwork") 
      echo " class=\"current_page_item_two\""; ?>><a rel="#ab4c20" href="ourwork.php">Our Work</a></li>
            <li <?php if ($thisPage=="news") 
      echo " class=\"current_page_item_two\""; ?>><a rel="#593e29" href="news.php">News</a></li>
       	  </ul>
      	</div>
		<div id="inquire"><a href="inquire.php">INQUIRE</a></div>
    </div>
</div>
</div>

<div class="clearfix"></div>

<div id="container">
      
      		<div id="content">
            	<div id="leftcontent">
            	  <p>Are you contemplating a design or remodeling project? Would you like some professional assistance in selecting accessories, a few distinctive furnishing pieces, or custom window treatments?</p>
            	  <p>If you’re considering professional design services to help you update, enhance, expand or beautify your home, you’ll find that when it comes to your home -- how it looks, feels and lives -- there’s hardly a visible inch that’s beyond our creative touch.</p>
           	    </div>
                <div id="rightcontent">
                	<div class="rightcontent_quote q_services"></div>
                </div>
              <div class="clearfix"></div>
              
              <div id="fullcolumn">
              	<div class="serviceslist caption">
                <img src="../images/services_image1.jpg"/>
                	<div class="cover boxcaption">
					<h3>Interior<br />
					  Furnishings</h3>
					<ul>
					  	<li>Distinctive Furnishings</li>
					    <li>Window Treatments</li>
					    <li>Custom Bedding & Pillows</li>
					    <li>Artwork & Accessories</li>
					    <li>Decorative Lighting</li>
					 </ul>
				  </div>
                </div>
                <div class="serviceslist caption">
                <img src="../images/services_image2.jpg"/>
                	<div class="cover boxcaption">
					<h3>Architectural Detailing</h3>
					<ul>
					  	<li>Pre-Construction Planning</li>
					    <li>Space Planning</li>
					    <li>Lighting Design</li>
					    <li>Interior Specifications</li>
					    <li>Computerized Drafting</li>
					  </ul>
				  </div>
                </div>
                <div class="serviceslist caption">
                <img src="../images/services_image3.jpg"/>
                	<div class="cover boxcaption">
					<h3>Specialty Design Services</h3>
					<ul>
					  <li>Custom & Built-in Cabinetry</li>
					    <li>Custom Furnishings</li>
					    <li>Fireplace Design</li>
					    <li>Kitchen & Bath</li>
					   <li> Home Theater & Automation</li>
					  </ul>
				  </div>
                </div>
                <div class="serviceslist caption">
                <img src="../images/services_image4.jpg"/>
                	<div class="cover boxcaption">
					<h3>Exterior Design Services</h3>
					<ul>
                    	<li>Texture, Balance & Color Studies</li>
                        <li>Roof, Trim & Wall Recommendations</li>
                       <li> Decorative Ironwork & Railings</li>
                        <li>Exterior Lighting & Entries</li>
					</ul>
                </div>
              </div>
            
            
            
            
            </div>
      </div>  	



</div>
</body>
</html>
