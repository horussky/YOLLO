<?php
	//tab navigation on event pages
	function tabNav(){
		echo '<li><a href="#tabs-1"><i class="fa fa-file-text-o"></i> Overview</a></li>';
		echo '<li><a href="#tabs-2"><i class="fa fa-h-square"></i> Hotel</a></li>';
		echo '<li><a href="#tabs-3"><i class="fa fa-usd"></i> Prices</a></li>';
		echo '<li><a $nodisp href="#tabs-4"><i class="fa fa-commenting"></i> FAQs</a></li>';
	}

	function cruiseNav(){
		echo '<li><a href="#tabs-1"><i class="fa fa-file-text-o"></i> Overview</a></li>';
		echo '<li><a href="#tabs-2"><i class="fa fa-ship"></i> Ship</a></li>';
		echo '<li><a href="#tabs-3"><i class="fa fa-usd"></i> Prices</a></li>';
		echo '<li><a href="#tabs-4"><i class="fa fa-commenting"></i> FAQs</a></li>';
	}

	function  phoneNumber(){
		echo 'Contact us at (888) 946-9655';
	}

	function tabsDefault(){
		echo '<li><a href="#tabs-1"><i class="fa fa-file-text-o"></i> Overview</a></li>';
		echo '<li><a href="#tabs-2"><i class="fa fa-usd"></i> Prices</a></li>';
		echo '<li><a href="#tabs-3"><i class="fa fa-commenting"></i> FAQs</a></li>';
		echo '<li><a href="#tabs-4"><i class="fa fa-file-text-o"></i></span> Photo Gallery</a></li>';
		echo '<li><a href="#tabs-5"><i class="fa fa-file-text-o"></i></span> Buy Now</a></li>';
	}

	$phonenumber = "Contact us at (888) 946-9655";

	$tabnav = array(
		"tabs-1" => "<i class=\"fa fa-file-text-o\"></i> Overview",
		"tabs-2" => "<i class=\"fa fa-h-square\"></i> Hotel",
		"tabs-3" => "<i class=\"fa fa-usd\"></i> Price",
		"tabs-4" => "<i class=\"fa fa-commenting\"></i> FAQs",

	);

	$tabvenue = array(
		"tabs-1" => "<span class=\"ui-icon ui-icon-tag\"></span>Overview",
		"tabs-2" => "<span class=\"ui-icon ui-icon-image\"></span>Venue",
		"tabs-3" => "<span class=\"ui-icon ui-icon-cart\"></span>Prices",
		"tabs-4" => "<span class=\"ui-icon ui-icon-comment\"></span>FAQs",

	);

	$tabnavcruise = array(
		"tabs-1" => "<i class=\"fa fa-file-text-o fw\"></i> <span>Overview</span>",
		"tabs-2" => "<i class=\"fa fa-usd fw\"></i> <span>Price</span>",
		"tabs-3" => "<i class=\"fa fa-commenting fw\"></i> <span>FAQs</span>",
		"tabs-4" => "<i class=\"fa fa-picture-o fw\"></i> <span>Photos</span>",
		"tabs-5" => "<i class=\"fa fa-shopping-cart fw\"></i> <span>Buy Now</span>"

	);

	$tabsdefault = array(
		"tabs-1" => "<i class=\"fa fa-file-text-o\"></i> <span>Overview</span>",
		"tabs-2" => "<i class=\"fa fa-usd\"></i> <span>Price</span>",
		"tabs-3" => "<i class=\"fa fa-commenting\"></i> <span>FAQs</span>",
		"tabs-4" => "<i class=\"fa fa-picture-o\"></i> <span>Photos</span>",
		"tabs-5" => "<i class=\"fa fa-shopping-cart\"></i> <span>Buy Now</span>"

	);
	
	$responsive_tabs = array(
		"overview" => "<input type=\"radio\" name=\"tabs\" id=\"tab-1\" checked=\"checked\"><label for=\"tab-1\"> <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i> Overview</label>",
		"price" => "<input type=\"radio\" name=\"tabs\" id=\"tab-2\"><label for=\"tab-2\"> <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i> Price</label>",
		"faqs" => "<input type=\"radio\" name=\"tabs\" id=\"tab-3\"><label for=\"tab-3\"><i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i> FAQs</label>",
		"photos" => "<input type=\"radio\" name=\"tabs\" id=\"tab-4\"><label for=\"tab-4\"><i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i> Photos</label>",
		"buynow"=> "<input type=\"radio\" name=\"tabs\" id=\"tab-5\"><label for=\"tab-5\"><i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i> Buy Now</label>",
	);

	$current_url = "$_SERVER[REQUEST_URI]";

include("home-featured-events.inc.php");
$now = strtotime("now");
date_default_timezone_set('America/Chicago');
?>
