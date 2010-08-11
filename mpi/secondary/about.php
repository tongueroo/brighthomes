<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php $thisPage="about"; ?>


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
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_about" rel="#8d5917" href="about.php">About</a></li>
            <li <?php if ($thisPage=="services") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_services" rel="#274967" href="services.php">Services</a></li>
            <li <?php if ($thisPage=="ourwork") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_ourwork" rel="#ab4c20" href="ourwork.php">Our Work</a></li>
            <li <?php if ($thisPage=="news") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_news" rel="#593e29" href="news.php">News</a></li>
       	  </ul>
      </div>
		<div id="inquire"><a href="inquire">INQUIRE</a></div>
    </div>
</div>

</div>
<div class="clearfix"></div>
      <div id="container">
      
      		<div id="content">
            	<div id="leftcontent">
            	  <p>Our client service team is equally competent and creative in ways of their own. Learn more.
        
        If you are interested in joining our professional Design Team, view our current openings. </p>
            	  <p>Admittedly, you can’t see “client service” in any of our portfolio photos. And unfortunately they don’t give trophies for “best order tracking by an interior design firm”. But at Martin Perri, it's been our private crusade to prove that creativity and customer service are not mutually exclusive.</p>
            	  <p>Here are a few examples of what that means for our clients:</p>
            	  <ul>
                    <li>We process orders, follow up with the factories and review confirmations;</li>
            	    <li>We order finish samples, coordinate getting fabrics from the mill to the manufacturer, and make sure fabrics are applied in the correct direction;</li>
            	    <li>We check and update schedules, expedite orders, track shipments, and keep you apprised throughout the process;</li>
            	    <li>Furnishings, artwork and accessories are checked and perfected before they get to your home;</li>
            	    <li>We can warehouse items as they come in and deliver a complete order, meeting deliveries at your home to do a final quality check; and,</li>
            	    <li>We have the support and systems to take care of all the details and any problems that arise – fast.</li>
          	    </ul>
            	  <p>We work hard to provide our clients with efficient project management, budget accountability, and dedicated follow-through. Along the way we’ve earned a reputation for providing exceptional, no-excuses, customer service, and the only way we’ll keep that reputation is by doing the same for you.</p>
            	  <p>&nbsp;</p>
            	</div>
                <div id="rightcontent"></div>
            
            
            
            
            </div>
      </div>  	
       
   
 </div>
    
</body>
</html>