<?php
	include 'includes/functions.inc.php';

	// Load the event configuration
	$event_config = require 'config/events/conf_home.php';

	// Access configuration data
	$metas = $event_config['metas'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $metas['title']; ?></title>
<meta name="viewport" content="width=device-width">
<meta name="description" content="<?php echo $metas['description']; ?>" />
<meta name="keywords" content="<?php echo $metas['keywords']; ?>" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="<?php echo $metas['canonical']; ?>" rel="canonical" />
<meta name="author" content="YOLLO Group Services" />
<meta property="fb:pages" content="117420764961518" />
<link rel="icon" href="favicon-192.png" sizes="192x192">
<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="wrap">

	<!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav-->
	 
	<div id="container">
    		<?php include 'includes/header.inc.php'; ?>

			<div id="left">
                <?php include 'includes/nav.inc.php'; ?>
			</div>  <!-- end of LEFT -->

      <div id="right">
            
            <section id="intro">

                <h1>Live the Moment. Experience More.</h1>
				<p>At YOLLO Group Services, we turn travel into lifetime unforgettable experiences. As a premier full-service travel company in the Southeast, we create and stylize all-inclusive event packages that go beyond just the main attraction. From electrifying concerts to themed parties and exclusive kickback day events, we bring the fun wherever you go.</p>
				<p>Learn more <a title="read more about YOLLO" href="/about">about YOLLO</a> and discover your next adventure below.</p>
            </section>
           
            <section id="upcoming-events">


			
				<h2 class="h3">Upcoming Events</h2>	
				<div class="upcoming-events__wrapper">
				<?php
					function isEventHappeningNow($eventStart, $eventEnd) {
						$now = time();
						return ($now >= $eventStart && $now <= $eventEnd);
					}

					$now = time(); $i = 0;
					foreach ($feature_event as $event):
						if ($i == 4) break;
						if ($event->end > $now):
							$i++;
				?>
        
				<div class="event"> 
					
					<?php
						$start_date = $event->start;
						$end_date = $event->end;

						// Calculate the difference in days
						$diff = ($end_date - $start_date) / 86400; // 86400 seconds in a day

						// Days is the rounded difference + 1
						$days = round($diff) + 1;

						// Nights is the rounded difference
						$nights = round($diff);

						// Check if the event is happening now
						$isHappeningNow = isEventHappeningNow($start_date, $end_date);
					?>

					<a href="<?php echo $event->link; ?>" title="<?php echo $event->title; ?>"> 
						<img src="<?php echo $event->img; ?>" alt="<?php echo $event->title; ?>" /> 
					</a> 
					<p class="upcoming-events__title">
						<?php echo $event->title; ?>
						<?php if ($isHappeningNow): ?>
							<span class="happening-now">Live Now!</span>
						<?php endif; ?>
					</p> 
					<p class="upcoming-events__location">
						<i class="fa fa-location-arrow" style="color: #222;"></i>
						<?php echo $event->location; ?>
					</p> 
					<p class="upcoming-events__date">
						<?php
							$date_start = new DateTime('@' . (int)$event->start);
							$date_end = new DateTime('@' . (int)$event->end);
						?>
						<i class="fa fa-calendar"></i> 
						<?php 
							if ($event->start == $event->end) { 
								echo $date_start->format('M d, Y') . "\n"; 
							} else { 
								echo $date_start->format('M d, Y') . " - " . $date_end->format('M d, Y') . "\n";
							} 
						?>
						<span style="font-size: .75rem; display: block; padding-left: 1rem;">
						<?php 
							if($nights <= 0){
								echo "{$days} day event";
							} else {
								echo "{$days} days and {$nights} night(s)"; 
							}
						?>
						</span>
					</p>
					
					<p class="upcoming-events__desc">
						<?php echo $event->desc; ?>
					</p> 
					<a class="learnmore btn" href="<?php echo $event->link ?>" title="Book <?php echo $event->title ?>">
						<?php echo $isHappeningNow ? "Join Now" : "Book Now"; ?>
					</a>
					
					
					<?php if (!empty($event->link2)): ?>
						<a class="btn learnmore" style="background: #000; color: #fff;" target=_blank href="<?php echo $event->link2 ?>" title="View <?php echo $event->title ?> Booklet">
							View Booklet
						</a>
					<?php endif; ?>
					
				</div>

			<?php endif;
		endforeach; ?>

				</div>
            </section>

            <div class="disclosure">
			<p>
				<strong>Disclaimer</strong> | All logos, trademarks, and images referenced on this website are the property of their respective owners and are used solely for informational and illustrative purposes. YOLLO Group Services is an independent travel provider and is not affiliated with or endorsed by any third-party brands, venues, or events unless explicitly stated.</p>
				
				<p>All travel packages, events, and services are subject to availability and may change without notice. Prices, itineraries, and inclusions are not guaranteed until full payment is received. YOLLO Group Services is not responsible for cancellations, delays, or changes made by airlines, hotels, venues, or other third-party providers.</p>
				
				<p>Links to external websites are provided for convenience and do not imply endorsement. We do not control third-party sites and are not responsible for their content, security, privacy policies, or accessibility standards. Travelers are encouraged to review all terms and conditions before making any bookings. </p>
      		</div><!-- end of disclosure -->

     	</div><!--end of right-->


         <aside id="social">
		 	<?php include 'includes/twitter.inc.php'; ?>
         </aside>


	</div><!-- end of container -->


</div><!-- end of wrap -->


<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<!-- Global Scripts -->
<?php include 'includes/scripts.inc.php'; ?>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>