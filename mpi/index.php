<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Martin Perri Interiors</title>
<link href="scripts/menu.css" rel="stylesheet" type="text/css" />
<link href="scripts/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script><script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script><script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>

<!--[if IE]>
<style type="text/css">.menu {position:relative;width:630px;height:200px;overflow:hidden;margin-left:20px;}</style>
<![endif]-->


<script type="text/javascript">
$(document).ready(function () {
	// EASING CODE
	function callback(hovering) {
		return function() {
			console.log("%%% hovering1 %o", hovering);
			var img_url;
			$('.ease').each(function(idx, el) {
				if (hovering.href == el.href) {
					// brighten current element
					$(this).removeClass('dark').addClass('bright');
					// img_url = $(this).css('background-image').replace('-dark.jpg', '-bright.jpg');
					// $(this).css("background-image", img_url);
				} else {
					// darken other elements
					$(this).removeClass('light').addClass('dark');
					// img_url = $(this).css('background-image').replace('-bright.jpg', '-dark.jpg');
					// $(this).css("background-image", img_url);
				}
			});
			console.log("%%% hovering %o", hovering);
		}
	}
	
	// find the elements to be eased and hook the hover event
	$('div.menu ul li a').hover(function() {
	  // ease in quickly
		var hovering = this; // hovering element
		$('.ease').each(function(idx, el) {
			if (hovering.href == el.href) {
				// reveal the current hovering element
			  $(this).stop().animate(
					{width: "670px"}, 
					{duration: 450, easing:"easeOutQuad", complete: callback(hovering)}
				);
			} else {
				// conceal the other elements
			  $(this).stop().animate(
					{width: "99px"}, 
					{duration: 450, easing:"easeInOutQuad", complete: callback(hovering)}
				);
			}
		});
	});
	
	// starting 
	// $('.news a').animate({width: "670px"}, {duration: 450, easing:"easeOutQuad"});
	console.log("test");
	
	// FADE EFFECT CODE
	// $('.news a').css("background-image", "url(images/menu_ourworkb.jpg)");
});
</script>


</head>




<body>

<div id="header_container">

<ul id="header">
	<li id="logo"><img src="images/spacer.gif" /></li>
	<li id="inquire"><a href="inquire" class="inquire_over">INQUIRE</a></li>
</ul>
<hr />
</div>

<div id="wrap">

<div class="menu">
  <ul>
    <li class="about"><a class="ease" href="about">About</a></li>
    <li class="services"><a class="ease" href="services">Services</a></li>
    <li class="ourwork"><a class="ease" href="ourwork">Our Work</a></li>
    <li class="news"><a class="ease" href="news">News</a></li>
  </ul>
</div>

</div>
<hr />


</body>
</html>
