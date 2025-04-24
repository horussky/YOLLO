<h5 class="event-title h6" style="text-transform:uppercase; letter-spacing: 0;"> 
    <i class="fa-solid fa-calendar-days"></i> YOLLO Events
</h5>

<ul class="event-nav">
    <?php foreach ($active_nav as $value): ?>
        <li><a href="<?php echo $value['link']?>" class="hvr-bounce-to-right <?php if ($_SERVER['REQUEST_URI'] == rtrim($value['link'], "/")){ echo "active";} ?>"><?php echo $value['title']?></a></li>
    <?php endforeach; ?>
</ul>

