<?php
date_default_timezone_set('America/Chicago');
$feature_event = array(

	array(
		"title" 	=> "Cincinnati Music Festival",
		"date" 		=> "July 22-24, 2022",
		"end"		=> strtotime("July 24, 2022"),
		"img" 		=> "images/featured-events/featured-event-cmf.jpg",
		"link" 		=> "/nati-music-festival"
	),
	array(
		"title" 	=> "Essence Festival",
		"date" 		=> "July 1-3, 2022",
		"end"		=> strtotime("July 3, 2022"),
		"img" 		=> "images/featured-events/featured-event-efw.jpg",
		"link" 		=> "/essence-festival"
	),
	array(
		"title" 	=> "Magic City Classic",
		"date" 		=> "October 29 - 31, 2021",
		"end"		=> strtotime("October 31, 2021"),
		"img" 		=> "images/featured-events/featured-event-mcc.jpg",
		"link" 		=> "/classic"
	),
	array(
		"title" 	=> "NBA All-Star Weekend",
		"date" 		=> "February 18, 2022",
		"end"		=> strtotime("February 18, 2022"),
		"img" 		=> "images/featured-events/featured-event-nba.jpg",
		"link" 		=> "/nba-allstar"
	),
	array(
		"title" 	=> "Party Gras Cruise",
		"date" 		=> "August 14, 2021",
		"end"		=> strtotime("August 14, 2021"),
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
		"date" 		=> "September 4-5, 2020",
		"end"		=> strtotime("September 05, 2020"),
		"img" 		=> "images/featured-events/featured-event-ufc.jpg",
		"link" 		=> "/urban-fantasy"
	),
	array(
		"title" 	=> "Urban Fiesta Weekend",
		"date" 		=> "May 27-30, 2022",
		"end"		=> strtotime("May 30, 2022"),
		"img" 		=> "images/featured-events/featured-event-ufw.jpg",
		"link" 		=> "/urban"
	),
	array(
		"title" 	=> "Urban Ski Weekend",
		"date" 		=> "Feb 4-6, 2022",
		"end"		=> strtotime("February 6, 2022"),
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
		"title" 	=> "Spring Fling Music Fest",
		"date" 		=> "May 30, 2020",
		"end"		=> strtotime("May 30, 2020"),
		"img" 		=> "images/featured-events/featured-event-springfling.jpg",
		"link" 		=> "/spring-fling-festival"
	),
	array(
		"title" 	=> "Alumni Getaway Cruise",
		"date" 		=> "Dec 6-11, 2021",
		"end"		=> strtotime("December 11, 2021"),
		"img" 		=> "images/featured-events/featured-event-agc.jpg",
		"link" 		=> "/alumni-getaway-cruise"
    ),
    array(
		"title" 	=> "Get on the Bus",
		"date" 		=> "Aug 27-29, 2020",
		"end"		=> strtotime("August 29, 2020"),
		"img" 		=> "images/featured-events/featured-event-gob.jpg",
		"link" 		=> "/get-on-the-bus"
    ),
    array(
		"title" 	=> "CIAA Weekend",
		"date" 		=> "Feb 24-27, 2022",
		"end"		=> strtotime("February 27, 2022"),
		"img" 		=> "images/featured-events/featured-event-tourney.jpg",
    ),
    array(
		"title" 	=> "Spring Breakaway",
		"date" 		=> "March 25-29, 2021",
		"end"		=> strtotime("March 29, 2021"),
		"img" 		=> "images/featured-events/featured-event-sba.jpg",
		"link" 		=> "/spring-breakaway-cruise"
	),
    array(
		"title" 	=> "Black Beach Weekend Cruise",
		"date" 		=> "August 28, 2021",
		"end"		=> strtotime("August 28, 2021"),
		"img" 		=> "images/featured-events/featured-event-bbw.jpg",
		"link" 		=> "/black-beach"
	)

);

usort(
	$feature_event,function($a,$b){

		return $a['end']-$b['end'];

	}
);
?>