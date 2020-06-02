<?php
$current_url = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$active = "active-nav";

//array for top links
$top_links = array(
    'home'      =>  'Home',
    //'events'    =>  'Events',
    'about'     =>  'About Us', 
    'faq'       =>  'FAQs', 
    'contact'   =>  'Contact', 
    'subscribe' =>  'Subscribe'
);

?>

<div class="header">
    <span class="left"><?php include 'includes/logo.inc.php'; ?></span>
    <span class="right">
		<ul class="top-nav">
		<?php foreach($top_links as $top_link => $link_name): ?>
			<?php if($top_link === 'subscribe'): ?>
			<li class="<?php echo $top_link ?>">
				<a class="hvr-underline-from-center <?php if($current_url === $top_link){echo $active;} ?>" title="<?php echo $link_name ?>" href="http://eepurl.com/bgY6P"><?php echo $link_name ?></a>
			</li>
			<?php elseif($top_link === 'events'): ?>
			<li class="events dropdown">
            
                <a data-href="#" class="hvr-underline-from-center <?php if($current_url === $top_link){echo $active;} ?>"><span>Events</span></a>
                <div class="dropdown-content">
                    <?php 
                    sort($event_nav);
                    ?>

                    <ul class="event-nav">
                        <?php foreach($event_nav as $links=>$value): ?>
                            <li class="<?php echo $value['class']?>"><a href="<?php echo $value['link']?>" class="<?php if ($_SERVER['REQUEST_URI'] == rtrim($value['link'], "/")){ echo "active";} ?>"><?php echo $value['title']?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
            </li>
			
			<?php else: ?>
			<li class="<?php echo $top_link ?>">
				<a class="hvr-underline-from-center <?php if($current_url === $top_link){echo $active;} ?>" title="<?php echo $link_name ?>" 
				href="/<?php echo $top_link ?>"><?php echo $link_name ?></a>
			</li>
			<?php endif; ?>
			
		<?php endforeach; ?>

		</ul>
   
   		<div id="nav-icon" class="toggle-panel menu-btn">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <p>Menu</p>
		</div>

    </span>
</div>
