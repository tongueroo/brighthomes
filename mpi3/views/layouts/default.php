<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Martin Perri Interiors</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="js/modernizr-1.5.js"></script>
<script type="text/javascript" src="js/logger.js"></script>
<script type="text/javascript" src="js/jquery.cross.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
</head>

<script type="text/javascript" charset="utf-8">
$(function() {
	$('#swap').click(function(e) {
		var a = $('li.ourwork a');
		if (a.is(':visible')) {
			a.hide();
			$('li.ourwork img').css({'margin-left': '0'});
		} else {
			a.show();
			$('li.ourwork img').css({'margin-left': '-1000px'});
		}
		
		// $('li.ourwork img.fade:visible').css({'opacity' : 1});
		
		console.log("swapped");
		var a2 = $('li.ourwork a:visible');
		console.log("a2 %o", a2);
	});
});
</script>

<body>
<!--[if IE 8]><div class="ie ie8 ie78"><![endif]-->
<!--[if IE 7]><div class="ie ie7 ie67 ie78"><![endif]-->
<!--[if IE 6]><div class="ie ie6 ie67"><![endif]-->
<div id="header_container">
	<ul id="header">
		<li id="logo"><img src="images/spacer.gif" /></li>
		<li id="inquire"><a href="secondary/inquire" class="inquire_over">INQUIRE</a></li>
	</ul>
	<hr />
</div>
<div id="wrap">
	<div class="menu">
	  <ul>
	    <li class="about">
				<a class="start ease" href="secondary/about">About</a>
				<img class="fade narrow" src="images/menu_about-dark.jpg" style="background: url(images/menu_about-bright.jpg);" alt="About" />
			</li>
	    <li class="services">
				<a class="ease" href="secondary/services">Services</a>
				<img class="fade narrow" src="images/menu_services-dark.jpg" style="z-index:99;background: url(images/menu_services-bright.jpg);" alt="About" />
			</li>
	    <li class="ourwork">
				<a class="ease" href="secondary/ourwork">Our Work</a>
				<img class="fade narrow" src="images/menu_ourwork-dark.jpg" style="background: url(images/menu_ourwork-bright.jpg);" alt="About" />
			</li>
	    <li class="news">
				<a class="ease" href="secondary/news">News</a>
				<img class="fade narrow" src="images/menu_news-dark.jpg" style="background: url(images/menu_news-bright.jpg);" alt="About" />
			</li>
	  </ul>
	</div>
</div>
<hr />
<!--[if IE]></div><![endif]-->
</body>
</html>
