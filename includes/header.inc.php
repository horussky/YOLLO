<?php
$current_url = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$active = "active-nav";

//array for top links
$top_links = array('home' => 'Home', 'about'=>'About Us', 'faq'=>'FAQs', 'contact'=>'Contact');
?>

<div class="header">
    <span class="left"><?php include 'includes/logo.inc.php'; ?></span>
    <span class="right">
		<ul class="top-nav">
		<?php foreach($top_links as $top_link => $link_name): ?>
			<li class="<?php echo $top_link ?>">
				<a class="hvr-underline-from-center <?php if($current_url === $top_link){echo $active;} ?>" title="<?php echo $link_name ?>" href="/<?php echo $top_link ?>"><?php echo $link_name ?></a>
			</li>
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