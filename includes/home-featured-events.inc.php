<?php
$feature_event = array(

	array(
		"title" 	=> "Cincinnati Music Festival",
		"date" 		=> "July 28-30, 2017",
		"end"		=> strtotime("July 28, 2017"),
		"img" 		=> "images/featured-events/featured-event-cmf.jpg",
		"link" 		=> "/nati-music-festival"
	),
	array(
		"title" 	=> "Essence Festival",
		"date" 		=> "June 30 - July 2, 2017",
		"end"		=> strtotime("July 2, 2017"),
		"img" 		=> "images/featured-events/featured-event-efw.jpg",
		"link" 		=> "/essence-festival"
	),
	array(
		"title" 	=> "Magic City Classic",
		"date" 		=> "October 27-29 2017",
		"end"		=> strtotime("October 29, 2017"),
		"img" 		=> "images/featured-events/featured-event-mcc.jpg",
		"link" 		=> "/classic"
	),
	array(
		"title" 	=> "NBA All-Star Weekend",
		"date" 		=> "February 16–18, 2018",
		"end"		=> strtotime("February 18, 2018"),
		"img" 		=> "images/featured-events/featured-event-nba.jpg",
		"link" 		=> "/urban-ski-weekend"
	),
	array(
		"title" 	=> "Party Gras Cruise",
		"date" 		=> "August 20, 2016",
		"end"		=> strtotime("August 20, 2016"),
		"img" 		=> "images/featured-events/featured-event-pg.jpg",
		"link" 		=> "/partygras"
	),
	array(
		"title" 	=> "Urban Fantasy Cruise",
		"date" 		=> "October 28 - 31, 2016",
		"end"		=> strtotime("October 31, 2016"),
		"img" 		=> "images/featured-events/featured-event-ufc.jpg",
		"link" 		=> "/urban-fantasy"
	),
	array(
		"title" 	=> "Urban Fiesta",
		"date" 		=> "May 25-27, 2018",
		"end"		=> strtotime("May 27, 2017"),
		"img" 		=> "images/featured-events/featured-event-ufw.jpg",
		"link" 		=> "/urban"
	),
	array(
		"title" 	=> "Urban Ski Weekend",
		"date" 		=> "February 2-5 2018",
		"end"		=> strtotime("February 5, 2018"),
		"img" 		=> "images/featured-events/featured-event-usw.jpg",
		"link" 		=> "/urban-ski-weekend"
	),
	array(
		"title" 	=> "Alumni Getaway Cruise",
		"date" 		=> "December 7-11 ,2017",
		"end"		=> strtotime("December 7-11 ,2017"),
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