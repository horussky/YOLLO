<?php 
sort($event_nav);
?>
<h4 class="event-title" style="text-transform:uppercase"> <i class="fa fa-star" aria-hidden="true"></i> Our Events</h4>

<ul class="event-nav">
	<?php foreach($event_nav as $links=>$value): ?>
        <li class="<?php echo $value['class']?>"><a href="<?php echo $value['link']?>" class="hvr-bounce-to-right <?php if ($_SERVER['REQUEST_URI'] == rtrim($value['link'], "/")){ echo "active";} ?>"><?php echo $value['title']?></a></li>
    <?php endforeach; ?>
</ul>

