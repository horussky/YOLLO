<?php 

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
<h5 class="event-title h6" style="text-transform:uppercase; letter-spacing: 0;"> <i class="fa-solid fa-calendar-days"></i> YOLLO Events</h5>

<ul class="event-nav">
<?php foreach ($active_nav as $value): ?>
        <li><a href="<?php echo $value['link']?>" class="hvr-bounce-to-right <?php if ($_SERVER['REQUEST_URI'] == rtrim($value['link'], "/")){ echo "active";} ?>"><?php echo $value['title']?></a></li>
    <?php endforeach; ?>
</ul>

