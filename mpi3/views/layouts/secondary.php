<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Martin Perri Interiors</title>
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script><script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script><script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
<script type='text/javascript' src='../js/jquery.color-RGBa-patch.js'></script>
<script type='text/javascript' src='../js/example.js'></script>
<script type="text/javascript" src="../js/bgstretcher.js"></script>
<link rel="stylesheet" href="../css/bgstretcher.css" />
<script type="text/javascript" src="../js/stretch.js"></script>
</head>

<body>
<div id="page">
	
<div id="header_container">
<div id="header">
	<div id="logo"><img src="../images/spacer.gif" /></div>
    <div id="navcontainer">
   	  <div id="nav-wrap">
       	  <ul class="group" id="example-two">
            <li <?php if ($router->page=="about") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_about" rel="#8d5917" href="about">About</a></li>
            <li <?php if ($router->page=="services") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_services" rel="#274967" href="services">Services</a></li>
            <li <?php if ($router->page=="ourwork") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_ourwork" rel="#ab4c20" href="ourwork">Our Work</a></li>
            <li <?php if ($router->page=="news") 
      echo " class=\"current_page_item_two\""; ?>><a id="colorbar_news" rel="#593e29" href="news">News</a></li>
       	  </ul>
      </div>
		<div id="inquire"><a href="inquire">INQUIRE</a></div>
    </div>
</div>
</div>
<div class="clearfix"></div>

<div id="container">
	<?php page($router) ?>
</div>
       
</div>
</body>
</html>