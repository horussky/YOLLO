<?php
date_default_timezone_set('America/Chicago');
$feature_event = array(

	array(
		"title" 	=> "Cincinnati Music Festival",
		"date" 		=> "July 27-29, 2018",
		"end"		=> strtotime("July 29, 2018"),
		"img" 		=> "images/featured-events/featured-event-cmf.jpg",
		"link" 		=> "/nati-music-festival"
	),
	array(
		"title" 	=> "Essence Festival",
		"date" 		=> "July 6-8, 2018",
		"end"		=> strtotime("July 8, 2018"),
		"img" 		=> "images/featured-events/featured-event-efw.jpg",
		"link" 		=> "/essence-festival"
	),
	array(
		"title" 	=> "Magic City Classic",
		"date" 		=> "October 26-28 2017",
		"end"		=> strtotime("October 28, 2017"),
		"img" 		=> "images/featured-events/featured-event-mcc.jpg",
		"link" 		=> "/classic"
	),
	array(
		"title" 	=> "NBA All-Star Weekend",
		"date" 		=> "February 16-18, 2018",
		"end"		=> strtotime("February 18, 2018"),
		"img" 		=> "images/featured-events/featured-event-nba.jpg",
		"link" 		=> "/nba-allstar"
	),
	array(
		"title" 	=> "Party Gras Cruise",
		"date" 		=> "August 11, 2018",
		"end"		=> strtotime("August 11, 2018"),
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
		"date" 		=> "October 28-31, 2016",
		"end"		=> strtotime("October 31, 2016"),
		"img" 		=> "images/featured-events/featured-event-ufc.jpg",
		"link" 		=> "/urban-fantasy"
	),
	array(
		"title" 	=> "Urban Fiesta",
		"date" 		=> "May 25-27, 2018",
		"end"		=> strtotime("May 27, 2018"),
		"img" 		=> "images/featured-events/featured-event-ufw.jpg",
		"link" 		=> "/urban"
	),
	array(
		"title" 	=> "Urban Ski Weekend",
		"date" 		=> "February 2-5, 2018",
		"end"		=> strtotime("February 5, 2018"),
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
		"date" 		=> "December 6-10, 2018",
		"end"		=> strtotime("December 10 ,2018"),
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