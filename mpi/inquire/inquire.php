<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php $thisPage="inquire"; ?>


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
            	<div id="fullcolumn">
            	  <p>Peruse twelve pages filled with photographs of our most distinctive work, plus a full description of our design philosophy, our team approach, our customer service ethic and our full range of design and remodeling services.
</p>
            	  <p>
Call us at 1-800-515-1156 or 925-735-9718 to request a copy, or use the form below. (all fields required)</p>

                  <h2>Mail Brochure to:</h2>

<form name="request" method="post" action="brochure_actions.php" onSubmit="return validateForm(this);">
              <input type="hidden" name="recipient">
              
              <div id="inquireformleft">
			  <table width="400px" border="0" cellspacing="3" cellpadding="3">
              
                <tr> 
                  <td width="50%" valign="top" class="formtext"> First Name<br> 
                    <input type="text" name="firstname"></td>
                  <td width="50%" valign="top" class="formtext">Last Name<br> 
                    <input type="text" name="lastname">
                  </td>
                </tr>
                <tr> 
                  <td colspan="2" valign="top" class="formtext">Street Address<br> 
                    <input name="address" type="text" id="address" size="40"></td>
                </tr>
                <tr> 
                  <td valign="top" class="formtext">City<br> <input type="text" name="city"> 
                  </td>
                  <td width="50%" valign="top" class="formtext">State<br> <select name="state">
                      <option value=""></option>
                      <option Value="AK">Alaska 
                      <option Value="AL">Alabama 
                      <option Value="AZ">Arizona 
                      <option Value="AR">Arkansas 
                      <option Value="CA">California 
                      <option Value="CO">Colorado 
                      <option Value="CT">Connecticut 
                      <option Value="DC">D.C. 
                      <option Value="DE">Delaware 
                      <option Value="FL">Florida 
                      <option Value="GA">Georgia 
                      <option Value="HI">Hawaii 
                      <option Value="ID">Idaho 
                      <option Value="IL">Illinois 
                      <option Value="IN">Indiana 
                      <option Value="IA">Iowa 
                      <option Value="KS">Kansas 
                      <option Value="KY">Kentucky 
                      <option Value="LA">Louisiana 
                      <option Value="ME">Maine 
                      <option Value="MD">Maryland 
                      <option Value="MA">Massachusetts 
                      <option Value="MI">Michigan 
                      <option Value="MN">Minnesota 
                      <option Value="MS">Mississippi 
                      <option Value="MO">Missouri 
                      <option Value="MT">Montana 
                      <option Value="NE">Nebraska 
                      <option Value="NV">Nevada 
                      <option Value="NH">New Hampshire 
                      <option Value="NJ">New Jersey 
                      <option Value="NM">New Mexico 
                      <option Value="NY">New York 
                      <option Value="NC">North Carolina 
                      <option Value="ND">North Dakota 
                      <option Value="OH">Ohio 
                      <option Value="OK">Oklahoma 
                      <option Value="OR">Oregon 
                      <option Value="PA">Pennsylvania 
                      <option Value="PR">Puerto Rico 
                      <option Value="RI">Rhode Island 
                      <option Value="SC">South Carolina 
                      <option Value="SD">South Dakota 
                      <option Value="TN">Tennessee 
                      <option Value="TX">Texas 
                      <option Value="UT">Utah 
                      <option Value="VT">Vermont 
                      <option Value="VA">Virginia 
                      <option Value="WA">Washington 
                      <option Value="WV">West Virginia 
                      <option Value="WI">Wisconsin 
                      <option Value="WY">Wyoming </select></td>
                </tr>
                <tr> 
                  <td valign="top" class="formtext">Zip Code<br> <input type="text" name="zip"> 
                  </td>
                  <td width="50%" valign="top" class="formtext"> E-Mail<br> <input type="text" name="email"></td>
                </tr>
                <tr> 
                  <td valign="top" class="formtext">Phone 
                    <input type="text" name="phone"> </td>
                  <td width="50%" valign="top" class="formtext"> How did you
                      hear about us?<br>
                      <select name="hearAboutUs" id="hearAboutUs" onChange="showHideField(this,'hearAboutUsOther','Other')">
                          <option value="">Please Select</option>
                          <option value="Personal Recomendation">Relative or
                          Friend</option>
                          <option value="Search Engine">Search Engine</option>
                          <option value="Magazine">Magazine</option>
                          <option value="Direct Mail">Direct Mail</option>
                          <option value="Visited Showroom">Visited Showroom</option>
                          <option value="Other">Other</option>
                      </select>
                      <input type="text" name="hearAboutUsOther" id="hearAboutUsOther" value="" style="display: none;"></td>
                </tr>
              </table>
              
              </div>
             <div id="inquireformright">
  <table width="400px" border="0" cellspacing="3" cellpadding="3">
                <tr>
                  <td height="20" colspan="3" class="formtopic"><strong>Design Interest:</strong></td>
        </tr>
                <tr>
                  <td><input type="checkbox" name="design_interest-enhancements" value="yes"></td>
                  <td colspan="2" class="formtext">Furnishings, Window Treatments, Accessories
                    or other enhancements to current home</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="design_interest-new_construction" value="yes"></td>
                  <td colspan="2" class="formtext">New construction project</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="design_interest-renovation" value="yes"></td>
                  <td colspan="2" class="formtext">Renovation of existing home</td>
                </tr>
                <tr>
                  <td valign="bottom"> <input type="checkbox" name="design_interest-other" value="yes">
                  </td>
                  <td colspan="2" valign="bottom" class="formtext">Other
                    <textarea name="design_interest-other_explain" rows="2"></textarea> </td>
                </tr>
				<tr>
                  <td ><input type="checkbox" name="designer_contact" value="Yes"></td>
				  <td colspan="2" class="formtext">Please have a designer contact me.</td>
                </tr>
                <tr>
                  <td colspan="3"><div align="right"><input type="submit" value="Submit"></div></td>
                </tr>
              </table>
              </form>
				</div>



            	</div>
                
            
            
            
            
            </div>
      </div>  	
       
   
 </div>
    
</body>
</html>