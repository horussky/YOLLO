<?php
$nav = array(
			array(
					"title"	=>	"Alumni Getaway Cruise",
				  "class"	=>	"alumni",
				  "link"	=>	"/alumni-getaway-cruise"
				  
			),
			array(
					"title"	=>	"College BeachFest",
				  "class"	=>	"cbf",
				  "link"	=>	"/college-beachfest"
				  
			),
			array(
					"title"	=>	"Magic City Classic",
				  	"class"	=>	"classic",
				  	"link"	=>	"/classic"
				  
			),
			array(
					"title"	=>	"Essence Festival",
				  "class"	=>	"essence",
				  "link"	=>	"/essence-festival"
				  
			),
			/*
			array(
					"title"	=>	"Party Gras Cruise",
				  "class"	=>	"partygras",
				  "link"	=>	"/partygras"
				  
			),*/
			array(
					"title"	=>	"Cincinnati Music Festival",
				  	"class"	=>	"nati",
				  	"link"	=>	"/nati-music-festival"
				  
			),
			array(
					"title"	=>	"NBA All-Star",
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
			array(
					"title"	=>	"Urban Fantasy Cruise",
				  	"class"	=>	"ufw",
				 	"link"	=>	"/urban-fantasy"
				  
			),
			/*array(
					"title"	=>	"Urban Reunion Cruise",
				 	"class"	=>	"urc",
				  	"link"	=>	"/urban-reunion"
				  
			),*/
			array(
					"title"	=>	"Urban Ski Weekend",
					"class"	=>	"bsw",
				  	"link"	=>	"/urban-ski-weekend"
				  
			),

);

sort($nav);

?>

<h4 class="event-title" style="text-transform:uppercase"> <i class="fa fa-star" aria-hidden="true"></i> Our Events</h4>

<div id="nav-icon" class="toggle-panel">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <p>Menu</p>
</div>

<ul class="event-nav">
	<?php foreach($nav as $links=>$value): ?>
        <li class="<?php echo $value['class']?>"><a href="<?php echo $value['link']?>" class="hvr-bounce-to-right <?php if ($_SERVER['REQUEST_URI'] == rtrim($value['link'], "/")){ echo "active";} ?>"><?php echo $value['title']?></a></li>
    <?php endforeach; ?>
</ul>

<div class="event-nav-mobile">
    <ul>
        <?php foreach($nav as $links=>$value): ?>
            <li class="<?php echo $value['class']?>"><a href="<?php echo $value['link']?>" class="<?php if ($_SERVER['REQUEST_URI'] == rtrim($value['link'], "/")){ echo "active";} ?>"><?php echo $value['title']?></a></li>
        <?php endforeach; ?>
        <li class="home"><a title="Home" href="/home">Home</a></li>
        <li class="about"><a title="About Us" href="/about">About Us</a></li>
        <li class="faq"><a title="FAQs" href="/faq">FAQs</a></li>
        <li class="contact"><a title="Contact" href="/contact">Contact</a></li>
    </ul>
</div>