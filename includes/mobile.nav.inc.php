<?php

define("EVENT", serialize ($nav = array(
			array(
				"title"	=>	"Alumni Getaway Cruise",
				"link"	=>	"/alumni-getaway-cruise"
				  
			),
			/*array(
				"title"	=>	"Black Beach Weekend Cruise",
				"class"	=>	"bbw",
				"link"	=>	"/black-beach"
				  
			),
			array(
				"title"	=>	"College BeachFest",
				"class"	=>	"cbf",
				"link"	=>	"/college-beachfest"
				  
			),
	
			array(
					"title"	=>	"Groove Cruise",
				  	"class"	=>	"groove",
				  	"link"	=>	"/groove-cruise"
				  
			),*/
			
			array(
				"title"	=>	"Classic Weekend",
				"link"	=>	"/classic"
				  
			),
			array(
				"title"	=>	"Essence Festival",
				"link"	=>	"/essence-festival"
				  
			),
			array(
				"title"	=>	"Fade to May",
				"link"	=>	"/fade-to-may"
				  
			),
			array(
				"title"	=>	"Party Gras Weekend",
				"link"	=>	"/partygras"
				  
			),
			array(
				"title"	=>	"Cincinnati Music Festival",
				"link"	=>	"/nati-music-festival"
				  
			),
			array(
				"title"	=>	"All-Star Weekend",
				"link"	=>	"/nba-allstar"
				  
			),
			array(
				"title"	=>	"CIAA Tourney",
				"link"	=>	"/the-tourney"
				  
			),
			array(
				"title"	=>	"Dubai Takeover",
				"link"	=>	"/dubai-takeover"
				  
			),
			array(
				"title"	=>	"Egypt Takeover",
				"link"	=>	"/egypt-takeover"
				  
			),
			array(
				"title"	=>	"Greece Takeover",
				"link"	=>	"/greece-takeover"
				  
			),
			/*array(
				"title"	=>	"Italy Takeover",
				"link"	=>	"/italy-takeover"
				  
			),*/
			array(
				"title"	=>	"London to Paris Takeover",
				"link"	=>	"/london-to-paris"
				  
			),
			/*array(
				"title"	=>	"80 vs 90 Throwback Cruise",
				  "link"	=>	"/throwback-cruise"
				  
			),*/
			array(
				  	"title"	=>	"Urban Fiesta: Jamaica",
				  	"link"	=>	"/urban"		  	
			),
			array(
				"title"	=>	"Urban Fiesta: Puerto Rico",
				"link"	=>	"/urban-fiesta-puerto-rico"		  	
	  		),
			/*array(
				  	"title"	=>	"Day Getaway Cruise",
				  	"link"	=>	"/day-getaway-cruise"		  	
			),
			
			array(
					"title"	=>	"Urban Reunion Cruise",
				  	"link"	=>	"/urban-reunion"
				  
			),
            array(
				"title"	=>	"Urban Fantasy Cruise",
				"link"	=>	"/urban-fantasy"
			),*/
			array(
				"title"	=>	"Urban Ski Weekend",
				"link"	=>	"/urban-ski-weekend"
            ),
            array(
                "title"	=>	"Shamrock Sea Escape",
                "link"	=>	"/shamrock-sea-escape"
            ),
			array(
                "title"	=>	"Spring Fling Festival",
                "link"	=>	"/spring-fling-festival"
            ),
            /*array(
                "title"	=>	"Spring Breakway Cruise",
                "link"	=>	"/spring-breakaway-cruise"
            ),
            array(
                "title"	=>	"Get on the Bus",
                "link"	=>	"/get-on-the-bus"
            )*/
        ))

);


$event_nav = unserialize (EVENT);
sort($event_nav);
?>

<nav class="pushy pushy-right">
	<div class="event-nav-mobile pushy-content">
		<a href="#" class="menu-btn close-x"></a>
		<h5 class="mobile-nav-title h6">YOLLO Events</h5>
		<ul class="event-nav-mobile__nav">
			<?php foreach($event_nav as $links=>$value): ?>
				<li><a href="<?php echo $value['link']?>"><?php echo $value['title']?></a></li>
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