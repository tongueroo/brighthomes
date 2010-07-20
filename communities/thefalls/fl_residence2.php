<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php $thisPage="homestyles"; ?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			Bright Homes
		</title>
		<link href="../../scripts/base.css" rel="stylesheet" type="text/css" />
		<link href="../../scripts/secondary.css" rel="stylesheet" type="text/css" />
		<link href="../../scripts/floorplan.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" charset="utf-8" src="http://code.jquery.com/jquery-1.4.2.min.js">
</script>
		<script type="text/javascript" charset="utf-8" src="../../javascripts/floorplan.js">
</script>
		<script type="text/javascript">
//<![CDATA[
		<!--
		function MM_preloadImages() { //v3.0
		var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}

		function MM_swapImgRestore() { //v3.0
		var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		}

		function MM_findObj(n, d) { //v4.01
		var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		if(!x && d.getElementById) x=d.getElementById(n); return x;
		}

		function MM_swapImage() { //v3.0
		var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		}
		//-->
		//]]>
		</script>
		<script src="../../javascripts/AC_RunActiveContent.js" type="text/javascript">
</script>
	</head>
	<body onload="MM_preloadImages('.../../../images///cbt_fallsb.png','.../../../images///nav_02.gif','.../../../images///nav_03.gif','.../../../images///cbt_tbellab.png','.../../../images///cbt_bonitab.png','.../../../images///cbt_cimarronb.png','.../../../images///nav_04.gif','.../../../images///nav_05.gif','../../images/moveinsm_down.png','../../images/nav_01.gif')">
		<div id="container">
			<?php include_once("../../includes/headersec.php"); ?>
			<div class="clearfix"></div>
			<div id="nav">
				<a href="#"><img src="../../images///navover_01.gif" width="192" height="32" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','../../images/nav_01.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="../../images///navover_02.gif" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','../../images///nav_02.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="../../images///navover_03.gif" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','../../images///nav_03.gif',1)" onmouseout="MM_swapImgRestore()" /></a><a href="#"><img src="../../images///navover_04.gif" id="Image4" onmouseover="MM_swapImage('Image4','','../../images///nav_04.gif',1)" onmouseout="MM_swapImgRestore()" /></a><img src="../../images///navover_05.gif" id="Image5" onmouseover="MM_swapImage('Image5','','../../images///nav_05.gif',1)" onmouseout="MM_swapImgRestore()" />
			</div><?php include_once("../../includes/secnav.php"); ?>
			<div id="maincontentsec">
				<div id="leftcontent2">
					<div class="topleftimage">
						<img src="../../images/sideimage_falls_homestyles.png" width="222" height="358" />
					</div><?php include_once("../../includes/sidebar_falls.php"); ?>
				</div>
				<div id="rightsecholder">
					<div id="secpagetitle">
						<img src="../../images/title_homestyles_rs2.png" width="459" height="45" alt="A Bright Community - Homestyles" />
					</div>
					<div id="homestyles_container">
						<div id="floorplan">
							<div id="demo">
								<img class="floor" id="floor1" src="../../images/floorplan/floor1.png" /> 
								<img class="floor" id="floor2" src="../../images/floorplan/floor2.png" /> 
								<img class="option_floor1" id="option_floor1-super_family_bedroom" src="../../images/floorplan/option_super_family_bedroom.png" /> 
								<img class="option_floor1" id="option_floor1-bedroom5" src="../../images/floorplan/option_bedroom5.png" /> 
								<img class="option_floor2" id="option_floor2-loft" src="../../images/floorplan/option_loft.png" /> 
								<!-- homestyles -->
								<img class="style" id="homestyleA" src="../../images/fl_fallsres2_ea.png" /> 
								<img class="style" id="homestyleB" src="../../images/fl_fallsres2_eb.png" /> 
								<img class="style" id="homestyleC" src="../../images/fl_fallsres2_ec.png" />
							</div>
						</div>
						<div id="floorplanoptions">
							<div id="controls">
								<span class="secondlevel">SELECT A FLOOR</span>
								<div class="flooroption">
									<a href="#" id="make-floor1" rel="floor1">First Floor<br /></a>
									<a href="#" id="make-floor2" rel="floor2">Second Floor</a>
								</div><span class="secondlevel">SELECT AN OPTION</span>
								<div class="floor-options floor1-options">
									<a href="#" class="make checked" rel="optionA">Super Family Room</a><br />
									<a href="#" class="make" rel="optionB">Bedroom 5</a><br />
								</div>
								<div class="floor-options floor2-options">
									<a class="loft" rel="loft">Loft</a>
									<!-- option for second floor-->
								</div>
								<span class="secondlevel">SELECT HOMESTYLE</span>
								<div class="homestyle">
									<a href="#" class="make" rel="homestyleA">
										<img src="../../images/fl_fallsres2_ea_sm.png" height="62" class="homestyle" />
									</a>
									<a href="#" class="make" rel="homestyleB">
										<img src="../../images/fl_fallsres2_eb_sm.png" height="62" class="homestyle" />
									</a>
									<a href="#" class="make" rel="homestyleC">
										<img src="../../images/fl_fallsres2_ec_sm.png" height="62" class="homestyle" />
									</a>
								</div>
							</div>
							<img src="../../images/dotted_floorplans.png" width="215" height="3" style="padding-bottom:5px" />
							<img src="../../images/printbrochure.png" />
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="footer">
				<div id="copyright">
					© 2010 Bright Homes<br />
					Site Designed by <a href="http://www.robertanthony.com" target="_blank">Robert Anthony</a>
				</div>
			</div>
		</div>
	</body>
</html>
