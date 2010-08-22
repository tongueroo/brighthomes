<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Martin Perri Interiors</title>
<link href="../css/base.css" rel="stylesheet" type="text/css" />
<link href="../css/nav.css" rel="stylesheet" type="text/css" />
<link href="../css/bgstretcher.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="../js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
<script type='text/javascript' src='../js/jquery.color-RGBa-patch.js'></script>
<script type='text/javascript' src='../js/nav.js'></script>
<script type="text/javascript" src="../js/bgstretcher.js"></script>
<script type="text/javascript" src="../js/stretch.js"></script>
</head>

<body>
<!--[if IE 8]><div class="ie ie8 ie78"><![endif]-->
<!--[if IE 7]><div class="ie ie7 ie67 ie78"><![endif]-->
<!--[if IE 6]><div class="ie ie6 ie67"><![endif]-->
<div id="page">
	
<div id="header_container">
<div id="header">
	<div id="logo"><img src="../images/spacer.gif" /></div>
    <div id="navcontainer">
   	  <div id="nav-wrap">
       	  <ul class="group" id="nav">
            <li <?php current_class("about"); ?>><a class="about" rel="#8d5917" href="about">About</a></li>
            <li <?php current_class("services"); ?>><a class="services" rel="#274967" href="services">Services</a></li>
            <li <?php current_class("ourwork"); ?>><a class="ourwork" rel="#ab4c20" href="ourwork">Our Work</a></li>
            <li <?php current_class("news"); ?>><a class="news" rel="#593e29" href="news">News</a></li>
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
<!--[if IE]></div><![endif]-->
</body>
</html>