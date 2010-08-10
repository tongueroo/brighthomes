<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
		<style type="text/css">
		
			*{ padding:0px; margin:0px; }
			body{ background:#D5DEE7; }
			a{ color:#C8DCE5; }
			h3{ margin: 10px 10px 0 10px; color:#FFF; font:18pt Arial, sans-serif; letter-spacing:-1px; font-weight: bold;  }
			
			.boxgrid{ 
				width: 325px; 
				height: 260px; 
				margin:10px; 
				float:left; 
				background:#161613; 
				border: solid 2px #8399AF; 
				overflow: hidden; 
				position: relative; 
			}
				.boxgrid img{ 
					position: absolute; 
					top: 0; 
					left: 0; 
					border: 0; 
				}
				.boxgrid p{ 
					padding: 0 10px; 
					color:#afafaf; 
					font-weight:bold; 
					font:10pt "Lucida Grande", Arial, sans-serif; 
				}
				
			.boxcaption{ 
				float: left; 
				position: absolute; 
				background: #000; 
				height: 100px; 
				width: 100%; 
				opacity: .8; 
				/* For IE 5-7 */
				filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
				/* For IE 8 */
				-MS-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
 			}
 				.captionfull .boxcaption {
 					top: 260px;
 					left: 0;
 				}
 				.caption .boxcaption {
 					top: 220px;
 					left: 0;
 				}
				
		</style>
		
		<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
				//Vertical Sliding
				$('.boxgrid.slidedown').hover(function(){
					$(".cover", this).stop().animate({top:'-260px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
				});
				//Horizontal Sliding
				$('.boxgrid.slideright').hover(function(){
					$(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});
				//Diagnal Sliding
				$('.boxgrid.thecombo').hover(function(){
					$(".cover", this).stop().animate({top:'260px', left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
				});
				//Partial Sliding (Only show some of background)
				$('.boxgrid.peek').hover(function(){
					$(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
				});
				//Full Caption Sliding (Hidden to Visible)
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
				});
				//Caption Sliding (Partially Hidden to Visible)
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
				});
			});
		</script>
</head>

<body>
<div class="boxgrid caption">
				<img src="../images/services_image1.jpg"/>
				<div class="cover boxcaption">
					<h3>Kamil Smala</h3>
					<p>Artist<br/><a href="http://www.nonsensesociety.com/2009/03/the-art-of-kamil-smala/" target="_BLANK">More Work</a></p>
				</div>
			</div>
</body>
</html>
