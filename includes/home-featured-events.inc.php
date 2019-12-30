<?php
date_default_timezone_set('America/Chicago');
$feature_event = array(

	array(
		"title" 	=> "Cincinnati Music Festival",
		"date" 		=> "July 24-26, 2020",
		"end"		=> strtotime("July 26, 2020"),
		"img" 		=> "images/featured-events/featured-event-cmf.jpg",
		"link" 		=> "/nati-music-festival"
	),
	array(
		"title" 	=> "Black Beach Weekend Cruise",
		"date" 		=> "April 4, 2020",
		"end"		=> strtotime("April 4, 2020"),
		"img" 		=> "images/featured-events/featured-event-bbw.jpg",
		"link" 		=> "/black-beach"
	),
	array(
		"title" 	=> "Essence Festival",
		"date" 		=> "July 3-5, 2020",
		"end"		=> strtotime("July 5, 2020"),
		"img" 		=> "images/featured-events/featured-event-efw.jpg",
		"link" 		=> "/essence-festival"
	),
	array(
		"title" 	=> "Magic City Classic",
		"date" 		=> "Oct 30 - Nov 1 2020",
		"end"		=> strtotime("October 27, 2020"),
		"img" 		=> "images/featured-events/featured-event-mcc.jpg",
		"link" 		=> "/classic"
	),
	array(
		"title" 	=> "NBA All-Star Weekend",
		"date" 		=> "February 14-16, 2020",
		"end"		=> strtotime("February 16, 2020"),
		"img" 		=> "images/featured-events/featured-event-nba.jpg",
		"link" 		=> "/nba-allstar"
	),
	array(
		"title" 	=> "Party Gras Cruise",
		"date" 		=> "October 12, 2019",
		"end"		=> strtotime("October 13, 2019"),
		"img" 		=> "images/featured-events/featured-event-pg.jpg",
		"link" 		=> "/partygras"
	),
	array(
		"title" 	=> "Groove Cruise",
		"date" 		=> "July 21, 2018",
		"end"		=> strtotime("July 21, 2018"),
		"img" 		=> "images/featured-events/featured-event-groove-cruise.jpg",
		"link" 		=> "/groove-cruise"
	),
	array(
		"title" 	=> "Urban Fantasy Cruise",
		"date" 		=> "September 7-12, 2020",
		"end"		=> strtotime("September 12, 2020"),
		"img" 		=> "images/featured-events/featured-event-ufc.jpg",
		"link" 		=> "/urban-fantasy"
	),
	array(
		"title" 	=> "Urban Fiesta",
		"date" 		=> "May 22-25, 2020",
		"end"		=> strtotime("May 26, 2020"),
		"img" 		=> "images/featured-events/featured-event-ufw.jpg",
		"link" 		=> "/urban"
	),
	array(
		"title" 	=> "Urban Ski Weekend",
		"date" 		=> "Jan 31 - Feb 3, 2020",
		"end"		=> strtotime("February 3, 2020"),
		"img" 		=> "images/featured-events/featured-event-usw.jpg",
		"link" 		=> "/urban-ski-weekend"
	),
	array(
		"title" 	=> "Day Getaway Cruise",
		"date" 		=> "May 5, 2018",
		"end"		=> strtotime("May 5, 2018"),
		"img" 		=> "images/featured-events/featured-event-dgc.jpg",
		"link" 		=> "/day-getaway-cruise"
	),
	array(
		"title" 	=> "Alumni Getaway Cruise",
		"date" 		=> "Nov 30 - Dec 5, 2019",
		"end"		=> strtotime("December 5 ,2019"),
		"img" 		=> "images/featured-events/featured-event-agc.jpg",
		"link" 		=> "/alumni-getaway-cruise"
	)

);

usort(
	$feature_event,function($a,$b){

		return $a['end']-$b['end'];

	}
);
?>