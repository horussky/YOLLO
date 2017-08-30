<?php
$current_url = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$active = "active-nav";

//array for top links
$top_links = array('home' => 'Home', 'about'=>'About Us', 'faq'=>'FAQs', 'contact'=>'Contact', 'subscribe'=>'Subscribe');
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