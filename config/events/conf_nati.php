<?php
	return [

		"metas" => [
			"title" => "Cincinnati Music Festival 2026 - YOLLO Group Services",
			"description" => "Join us for the Cincinnati Music Festival 2025! Experience a weekend of music, culture, and unforgettable performances in Cincinnati, Ohio.",
			"keywords" => "Cincinnati Music Festival, Cincinnati, music festival, 2025",
			"canonical" => "https://goyollo.com/nati-music-festival",
		],

		"event" => [
			"title"					=>"Cincinnati Music Festival 2026",
			"subtitle"				=>"Book your package today!",
			"location"				=>"Cincinnati, Ohio",
			"date"					=>"July 24-26, 2026",
			"date_start"            => "July 24, 2026",
			"img_url"				=>"../../images/slides/splash-mmf-cta.jpg",
			"img_alt"				=>"Cincinnati Music Festival"
		],

		"geolocation" =>[

			"hotel1"=> array(
				"title" 			=>"Holiday Inn Cincinnati-Riverfront",
				"address"			=>"600 W 3rd Street",
				"location"			=>"Covington, KY 41011",
				"geolocation"		=>"600 W 3rd Street, Covington, KY 41011",
				"soldout"           =>false,
				"img_url"			=>"https://dynamic-media-cdn.tripadvisor.com/media/photo-o/25/3b/90/8d/hotel-exterior.jpg?w=800&h=-1&s=1",
				"host"              =>true
			),
			"hotel2"=> array(
				"title" 			=>"Comfort Suites Newport - Cincinnati Riverfront",
				"address"			=>"420 Riverboat Row",
				"location"			=>"Newport, KY 41071",
				"geolocation"		=>"420 Riverboat Row, Newport, KY 41071",
				"soldout"           =>false,
				"img_url"			=>"https://media-cdn.tripadvisor.com/media/photo-o/03/51/42/96/comfort-suites.jpg",
				"host"              =>false
			),

		],

		"people" =>[

			"diamond"=> array(
				"Group of 4" 			=>"$985",
				"Group of 3"			=>"$1,025",
				"Group of 2"			=>"$1,195",
				"Individual"			=>"$1,300"
			),

			"emerald"=> array(
				"Group of 4" 			=>"$885",
				"Group of 3"			=>"$925",
				"Group of 2"			=>"$1,095",
				"Individual"			=>"$1,200"
			),

			"options"=>array(
				"Hotel Only" 			=>"$525 (Weekend)",
				"Ski Excursions" 	=> "$100"
			),

		],

		"package_items" =>[
			"diamond_items" => array(
				"Hotel Accommodations (Fri-Sun)"			=> "checked",
				"Weekend Concert Tickets"				    => "checked",
				"Grown and Sophisticated Mid Day Cruise"	=> "checked",
				"Meet and Greet Mixer"						=> "checked",
				"Transportation via motorcoach (Birmingham, AL)"			=> "checked",
				"Breakfast Daily"							=> "checked",
				"Additional Hotel nights $275 per night"	=> "checked",
				"YOLLO Gift Bag"							=> "checked"
			),



			"emerald_items" => array(
				"Hotel Accommodations (Fri-Sun)"			=> "checked",
				"Weekend Concert Tickets"					=> "checked",
				"Grown and Sophisticated Mid Day Cruise"	=> "checked",
				"Meet and Greet Mixer"						=> "checked",
				"Transportation via motorcoach (Birmingham, AL)"			=> "ex",
				"Breakfast Daily"							=> "checked",
				"Additional Hotel nights $275 per night"	=> "checked",
				"YOLLO Gift Bag"							=> "checked"
			)
		], 


	]
?>