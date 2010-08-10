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
    <li class="about"><a href="about">About</a></li>
    <li class="services"><a href="services">Services</a></li>
    <li class="ourwork"><a href="ourwork">Our Work</a></li>
    <li class="news"><a href="news">News</a></li>
  </ul>
</div>

</div>
<hr />


</body>
</html>
