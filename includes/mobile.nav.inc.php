<?php

define("EVENT", serialize ($nav = array(
			array(
					"title"	=>	"Alumni Getaway Cruise",
				  	"class"	=>	"alumni",
				  	"link"	=>	"/alumni-getaway-cruise"
				  
			),
			array(
					"title"	=>	"Black Beach Weekend Cruise",
				  	"class"	=>	"bbw",
				  	"link"	=>	"/black-beach"
				  
			),
			array(
					"title"	=>	"College BeachFest",
				  	"class"	=>	"cbf",
				  	"link"	=>	"/college-beachfest"
				  
			),
	
			/*array(
					"title"	=>	"Groove Cruise",
				  	"class"	=>	"groove",
				  	"link"	=>	"/groove-cruise"
				  
			),*/
			
			array(
					"title"	=>	"Classic Weekend",
				  	"class"	=>	"classic",
				  	"link"	=>	"/classic"
				  
			),
			array(
					"title"	=>	"Essence Festival",
				  	"class"	=>	"essence",
				  	"link"	=>	"/essence-festival"
				  
			),
			array(
				"title"	=>	"Party Gras Cruise",
				  "class"	=>	"partygras",
				  "link"	=>	"/partygras"
				  
			),
			array(
					"title"	=>	"Cincinnati Music Festival",
				  	"class"	=>	"nati",
				  	"link"	=>	"/nati-music-festival"
				  
			),
			array(
					"title"	=>	"All-Star Weekend",
				  	"class"	=>	"nba",
				  	"link"	=>	"/nba-allstar"
				  
			),
			array(
					"title"	=>	"The Tourney",
				  	"class"	=>	"tourney",
				  	"link"	=>	"/the-tourney"
				  
			),
			/*array(
				"title"	=>	"80 vs 90 Throwback Cruise",
				  "class"	=>	"throwback",
				  "link"	=>	"/throwback-cruise"
				  
			),*/
			array(
				  	"title"	=>	"Urban Fiesta Weekend",
					"class"	=>	"urban",
				  	"link"	=>	"/urban"		  	
			),
			/*array(
				  	"title"	=>	"Day Getaway Cruise",
					"class"	=>	"day",
				  	"link"	=>	"/day-getaway-cruise"		  	
			),
			
			array(
					"title"	=>	"Urban Reunion Cruise",
				 	"class"	=>	"urc",
				  	"link"	=>	"/urban-reunion"
				  
			),*/
            array(
					"title"	=>	"Urban Fantasy Cruise",
				  	"class"	=>	"ufw",
				 	"link"	=>	"/urban-fantasy"
				  
			),
			array(
					"title"	=>	"Urban Ski Weekend",
					"class"	=>	"bsw",
				  	"link"	=>	"/urban-ski-weekend"
				  
			)))

);


$event_nav = unserialize (EVENT);
sort($event_nav);
?>

<nav class="pushy pushy-right">
	<div class="event-nav-mobile pushy-content">
		<a href="#" class="menu-btn close-x"></a>
		<h4 class="mobile-nav-title">Our Events</h4>
		<ul>
			<?php foreach($event_nav as $links=>$value): ?>
				<li><a href="<?php echo $value['link']?>"><?php echo $value['title']?></a></li>
			<?php endforeach; ?>
		</ul>
		<hr />
		<ul>
			<li class="home"><a title="Home" href="/home">Home</a></li>
			<li class="about"><a title="About Us" href="/about">About Us</a></li>
			<li class="faq"><a title="FAQs" href="/faq">FAQs</a></li>
			<li class="contact"><a title="Contact" href="/contact">Contact</a></li>
			<li class="subscribe"><a title="Subscribe" href="//eepurl.com/bgY6P">Subscribe to Newsletter</a></li>
		</ul>
	</div>
</nav>


<div class="site-overlay"></div>