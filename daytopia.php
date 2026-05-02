<?php
	include 'includes/functions.inc.php';

	// Load the event configuration
    $event_config = require 'config/events/conf_daytopia.php';

    // Access configuration data
    $event = $event_config['event'];
    $geolocation = $event_config['geolocation'];
    $people = $event_config['people'];
    $package_items = $event_config['package_items'];
	$metas = $event_config['metas'];

	$eventbriteID = "1984762736774";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $metas['title']; ?>
	</title>
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

<body id="event-pg">
	<div id="wrap">
		<!--Mobile Nav-->
		<?php include 'includes/mobile.nav.inc.php'; ?>
		<!--Mobile Nav-->

		<div id="container">

			<?php include 'includes/header.inc.php'; ?>
			
			<!--Left Content-->
			<div id="left">
				<!--Nav-->
				<?php include 'includes/nav.inc.php'; ?>
				<!--End of Nav-->
			</div>

			<!--Right Content-->
			<div id="right">

				<!-- Event Hero -->
				<div class="event-hero" style="background-image:url(<?php echo $event["img_url"]; ?>)">
					<div class="event-hero__details">
						<h1 class="event-hero__title"><?php echo $event["title"]; ?></h1>
						<p class="event-hero__location"><?php echo $event["location"]; ?></p>
						<a data-href="#tabs-5" class="btn btn-red event-hero__btn open-tab">Book Now</a>
						<div id="event_start" data-time='<?php echo $event["date_start"]; ?>' class="event-hero__date"><?php echo $event["date"]; ?> </div>
						<div id="event-timer" class="event-hero__timer"></div>
					</div>	
				</div>
				<!-- Event Hero -->

				<div class="content">

					<div class="colfull">
		
						<h2>Welcome to Daytopia: Your Ultimate Day Party Experience!</h2>

						<p class="lead">Celebrate Father's Day Weekend with the perfect mix of high-energy music, premium cigars, and non-stop bowling. It's not just a party—it's a YOLLO experience.</p>

						<p>Why settle for a typical weekend when you can experience Daytopia? Hosted by YOLLO Group Services, we're taking over Bama Lanes in Montgomery for a high-octane day party designed for those who know how to live life to the fullest. Whether you're a father celebrating your day or just looking for the city's best energy, this is where you need to be on Saturday, June 20th.</p>

						<p><strong>What's waiting for you at Daytopia:</strong></p>
						<ul>
							<li><strong>The Music:</strong> Get ready to dance the day away with a live DJ set curated by the one and only DJ Dre Smoove, ensuring the vibes are on point from start to finish.</li>
							<li><strong>The Competition:</strong> Lace up your bowling shoes and show off your skills on the lanes. Whether you're a pro or just in it for fun, there's a spot for you at Daytopia.</li>
							<li><strong>The Flavors:</strong> Enjoy complimentary food (while supplies last) to keep you fueled up for all the fun.</li>
							<li><strong>The Atmosphere:</strong> Visit our on-site premium cigar vendor for that sophisticated touch to your afternoon.</li>
							<li><strong>The Community:</strong> Connect with friends, family, and the YOLLO crew in a high-energy, welcoming environment.</li>
						</ul>
						<p>Don't miss out on the ultimate Father's Day Weekend celebration. Whether you're celebrating with your dad, your friends, or just treating yourself, Daytopia is the place to be. Secure your spot now and get ready for a day of unforgettable fun!</p>

						<h3>Buy Now</h3>
						<div class="mb-20" id="eventbrite-widget-container-<?php echo $eventbriteID ?>"></div>
						<hr class="mt-20" />

					</div><!-- end of colfull -->

					<div class="disclosure">
						<?php include 'includes/package-info-generic.inc.php'; ?>
						<p><strong>Disclaimer</strong> | The term <?php echo $event["title"]; ?>, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.</p>
					</div>

				</div><!--end of content-->

			</div><!--end of right-->

		</div><!--end of container-->

	</div><!--end of wrap-->



	<!-- Footer  -->
	<?php include 'includes/footer.inc.php'; ?>
	<!-- End of Footer  -->



	<!-- Global Scripts -->
	<?php include 'includes/scripts.inc.php'; ?>
	<div id="eventbrite-widget-container-<?php echo $eventbriteID ?>"></div>


	<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
	<script type="text/javascript">
		var exampleCallback = function () {
			console.log('Order complete!');
		};

		window.EBWidgets.createWidget({
			// Required

			widgetType: 'checkout',
			eventId: '<?php echo $eventbriteID ?>',
			iframeContainerId: 'eventbrite-widget-container-<?php echo $eventbriteID ?>',
			// Optional

			iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided

			onOrderComplete: exampleCallback  // Method called when an order has successfully completed

		});

	</script>

	<!--google analytics-->

	<?php include 'includes/analytics.inc.php'; ?>

</body>

</html>