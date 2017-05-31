<?php
$nav = array(
			array(
				  "class"	=>	"home", 
				  "link"	=>	"/home", 
				  "title"	=>	"Home"
			),
			array(
				  "class"	=>	"about", 
				  "link"	=>	"/about", 
				  "title"	=>	"About Us"
			),
			array(
				  "class"	=>	"ciaa", 
				  "link"	=>	"/ciaa", 
				  "title"	=>	"CIAA"
			),
			array(
				  "class"	=>	"collegebeachfest", 
				  "link"	=>	"/college-beachfest", 
				  "title"	=>	"College BeachFest"
			),
			array(
				  "class"	=>	"elite", 
				  "link"	=>	"/elite-weekend", 
				  "title"	=>	"ELITE Weekend"
			),
			array(
				  "class"	=>	"essence", 
				  "link"	=>	"/essence-festival", 
				  "title"	=>	"Essence Festival"
			),
			array(
				  "class"	=>	"funkfest", 
				  "link"	=>	"/funk-fest", 
				  "title"	=>	"Funk Festival"
			),
			array(
				  "class"	=>	"hbcu", 
				  "link"	=>	"/hbcu", 
				  "title"	=>	"HBCU Games"
			),
			array(
				  "class"	=>	"mardigras", 
				  "link"	=>	"/mardigras", 
				  "title"	=>	"Mardi Gras"
			),
			array(
				  "class"	=>	"classic", 
				  "link"	=>	"/classic", 
				  "title"	=>	"Magic City Classic"
			),
			array(
				  "class"	=>	"nba", 
				  "link"	=>	"/nba-allstar", 
				  "title"	=>	"NBA All-Star"
			),
			array(
				  "class"	=>	"springbling", 
				  "link"	=>	"/springbling", 
				  "title"	=>	"Spring Bling"
			),
			array(
				  "class"	=>	"springbreak", 
				  "link"	=>	"/springbreak", 
				  "title"	=>	"Spring Break Bash"
			),
			array(
				  "class"	=>	"urban", 
				  "link"	=>	"/urban", 
				  "title"	=>	"Urban Fiesta"
			),
			array(
				  "class"	=>	"bsw", 
				  "link"	=>	"/black-ski-weekend", 
				  "title"	=>	"Urban Ski Weekend"
			),
			array(
				  "class"	=>	"faqs", 
				  "link"	=>	"/faq", 
				  "title"	=>	"FAQs"
			),
			array(
				  "class"	=>	"contact", 
				  "link"	=>	"/contact", 
				  "title"	=>	"Contact Us"
			),
);
?>
<a name="nav2"></a>
<ul class="nav2">
<?php foreach($nav as $links=>$value): ?>
    <li class="<?php echo $value['class']?>">
        <a href="<?php echo $value['link']?>"><?php echo $value['title']?></a>
    </li>
<?php endforeach; ?>
	<li><a name="top" href="#top" style="background:#000">&#9776 Top</a></li>
    
</ul>



