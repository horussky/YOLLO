<?php

	define("EVENT", serialize ($nav = array(
		[
			"title"	=>	"Alumni Getaway Cruise",
			"link"	=>	"/alumni-getaway-cruise",
			"active"=> true
		],
		[
			"title"	=>	"Pier Pressure Cruise",
			"link"	=>	"/pier-pressure",
			"active"=> true
		],
		[
			"title"	=>	"Fade to May",
			"link"	=>	"/fade-to-may",
			"active"=> true
		],
		[
			"title"	=>	"Classic Weekend",
			"link"	=>	"/classic",
			"active"=> true
		],
		[
			"title"	=>	"Ghana Takeover",
			"link"	=>	"/ghana-takeover",
			"active"=> false
		],
		[
			"title"	=>	"Daytopia",
			"link"	=>	"/daytopia",
			"active"=> false
		],
		[
			"title"	=>	"Essence Festival",
			"link"	=>	"/essence-festival",
			"active"=> true
		],
		[
			"title"	=>	"Party Gras Weekend",
			"link"	=>	"/partygras",
			"active"=> false
		],
		[
			"title"	=>	"Cincinnati Music Festival",
			"link"	=>	"/nati-music-festival",
			"active"=> true
		],
		[
			"title"	=>	"All-Star Weekend",
			"link"	=>	"/allstar-weekend",
			"active"=> true
				
		],
		[
			"title"	=>	"CIAA Tourney",
			"link"	=>	"/the-tourney",
			"active"=> true
		],
		[
			"title"	=>	"Urban Fiesta: Jamaica",
			"link"	=>	"/urban-fiesta-jamaica",
			"active"=> false	  	
		],
		[
			"title"	=>	"Urban Fiesta: Puerto Rico",
			"link"	=>	"/urban-fiesta-puerto-rico",
			"active"=> false		  	
		],
		[
			"title"	=>	"Day Getaway Cruise",
			"link"	=>	"/day-getaway-cruise",
			"active"=> false		  	
		],
		[
			"title"	=>	"Urban Reunion Cruise",
			"link"	=>	"/urban-reunion",
			"active"=> false
		],
		[
			"title"	=>	"Urban Fantasy Cruise",
			"link"	=>	"/urban-fantasy",
			"active"=> false
		],
		[
			"title"	=>	"Urban Ski Weekend",
			"link"	=>	"/urban-ski-weekend",
			"active"=> true
		],
		[
			"title"	=>	"Shamrock Sea Escape",
			"link"	=>	"/shamrock-sea-escape",
			"active"=> false
		],
		[
			"title"	=>	"Spring Fling Festival",
			"link"	=>	"/spring-fling-festival",
			"active"=> false
		],
		[
			"title"	=>	"Spring Breakway Cruise",
			"link"	=>	"/spring-breakaway-cruise",
			"active"=> false
		],
		[
			"title"	=>	"Get on the Bus",
			"link"	=>	"/get-on-the-bus",
			"active"=> false
		]
	))
);


	$event_nav = unserialize(EVENT);

	// Filter active items
	$active_nav = array_filter($event_nav, function($item) {
		return isset($item['active']) && $item['active'] === true;
	});

	// Sort active items by title (optional)
	usort($active_nav, function ($a, $b) {
		return strcmp($a['title'], $b['title']);
	});
?>

<nav class="pushy pushy-right">
    <div class="event-nav-mobile pushy-content">
        <a href="#" class="menu-btn close-x"></a>
        <h5 class="mobile-nav-title h6">YOLLO Events</h5>
        <ul class="event-nav-mobile__nav">
            <?php foreach ($active_nav as $value): ?>
                <li><a href="<?php echo htmlspecialchars($value['link']); ?>"><?php echo htmlspecialchars($value['title']); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <hr />
        <ul class="event-nav-mobile__nav-primary">
            <li class="home"><a title="Home" href="/home">Home</a></li>
            <li class="about"><a title="About Us" href="/about">About Us</a></li>
            <li class="faq"><a title="FAQs" href="/faq">FAQs</a></li>
            <li class="contact"><a title="Contact" href="/contact">Contact</a></li>
            <li class="subscribe"><a title="Subscribe" href="//eepurl.com/bgY6P">Subscribe to Newsletter</a></li>
        </ul>
    </div>
</nav>

<div class="site-overlay"></div>