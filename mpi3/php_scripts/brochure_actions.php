<?php

	if((sizeof($_POST) <= 0) && (sizeof($_GET) <= 0)) {
		header("Location: /");
		exit();
	}

	$needle = "http://";
	$haystack = $_REQUEST["design_interest-other_explain"];
	$check = strpos($haystack, $needle);

	if($check === false) {
		$toMail = "phuong@robertanthony.com";
	}
	else {
		$toMail = "junkmail@robertanthony.com";
	}

	if(!preg_match('/^([A-Za-z0-9]|\.|_|-)+@(([A-Za-z0-9]||_|-)+\.)+[A-Za-z]{2,4}$/i', $_REQUEST["email"])) {
		$fromEmail = 'no-reply@martinperri.com';
	} else {
		$fromEmail = $_REQUEST["email"];
	}

	if($_REQUEST["hearAboutUsOther"] != "") {
		$hear = $_REQUEST["hearAboutUsOther"];
	}
	else {
		$hear = $_REQUEST["hearAboutUs"];
	}

	if($_REQUEST["designer_contact"] == "Yes") {
		$contact = "They would like a designer to contact them regarding their needs.";
	}
	else {
		$contact = "No designer contact was requested.";
	}

	$subject = "Brochure & CD Request";

	$msg =  "Below is the result of your feedback form.\nIt was submitted by ".$_REQUEST["firstname"]." ".$_REQUEST["lastname"]." on ".strftime('%m/%d/%Y')." at ".strftime('%H:%M:%S')."\n";
	$msg .=	"-------------------------------------------------------------------\n\n";

	$msg .= "Name: ".$_REQUEST["firstname"]." ".$_REQUEST["lastname"]."\n";
	$msg .= "Address:\n".$_REQUEST["address"]."\n";
	$msg .= $_REQUEST["city"].", ".$_REQUEST["state"]." ".$_REQUEST["zip"]."\n\n";

	$msg .= "Email: ".$_REQUEST["email"]."\n";
	$msg .= "Phone: ".$_REQUEST["phone"]."\n";
	$msg .= "How did they hear about us? ".$hear."\n\n";

	$msg .= "Design Interest(s):\n";
	if($_REQUEST["design_interest-enhancements"] == "yes") {
		$msg .= "Furnishings, Window Treatments, Accessories or other enhancements to current home\n";
	}
	if($_REQUEST["design_interest-new_construction"] == "yes") {
		$msg .= "New construction project\n";
	}
	if($_REQUEST["design_interest-renovation"] == "yes") {
		$msg .= "Renovation of existing home\n";
	}
	if($_REQUEST["design_interest-other"] == "yes" && $_REQUEST["design_interest-other_explain"] != "") {
		$msg .= "Other: ".$_REQUEST["design_interest-other_explain"]."\n";
	}

	$msg .= "\n".$contact."\n\n";

	$msg .= "===================================================================\n";

	mail($toMail, $subject, $msg, 'From: '.$fromEmail."\r\n");

	header("Location: brochure_confirm");
	exit();
?>