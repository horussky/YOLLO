<?php

	ob_start("ob_gzhandler");
	include 'includes/functions.inc.php';
	include 'includes/meta.config.inc.php';

	$eventbriteID = "761511430187";

	$event = array(

		"title" => "Daytopia: <br>Bowling Party",
		"subtitle" => "Come Party with YOLLO",
		"location" => "Montgomery, AL",
		"date" => "April 13, 2024",
		"date_start" => "April 13, 2024",
		"img_url" => "../../images/slides/splash-daytopia-cta.jpg",
		"img_alt" => "Daytopia Day Party",
		"hotel_link" => ""

	);

	$geolocation = array(
		"hotel1" => array(
			"title" => "Renaissance Montgomery Hotel & Spa",
			"address" => "201 Tallapoosa Street",
			"location" => "Montgomery, Alabama 36104",
			"geolocation" => "201 Tallapoosa Street Montgomery, Alabama 36104",
			"soldout" => false,
			"img_url" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/da/8c/6f/photo0jpg.jpg?w=1200&h=-1&s=1",
			"host" => true

		)
	);

	$package_items = array(
		"diamond_items" => array(
			"Crowd Control by: DJ Dre Smoove" => "checked",
			"Poets: TBA 2p-5p" => "checked",
			"Comedians: TBA" => "checked",
			"Live Performances by:T.B.A." => "checked",
			"Meet and Greet with Cocktails by Pour Crazy Bartending" => "checked",
			"Colors and Cocktails" => "checked",
			"Party Gras: Kick Off Party" => "checked",
			"Bottles and Beads Cruise 8:30p -12:30a" => "checked"
		),
		"emerald_items" => array(
			""
		)
	);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $metas['daytopia']['title']; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $metas['daytopia']['desc']; ?>" />
	<meta name="keywords" content="<?php echo $metas['daytopia']['keywords']; ?>" />
	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
	<link href="<?php echo $metas['daytopia']['canonical']; ?>" rel="canonical" />
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
		
						<h2 class="h4">Welcome to Daytopia: Your Ultimate Day Party Experience!</h2>
						<p>Get ready to embark on an extraordinary journey of excitement and celebration at YOLLO's Daytopia Day Party - the ultimate day party extravaganza in Gumptown. This isn't just any ordinary party - it's an all-day adventure packed with unforgettable moments, hosted at Bama Lanes.</p>

						<p>What awaits you at Daytopia includes bowling, partying, food, drinks, music, and more. Additionally, The Lion's Den Mobile lounge and King 79 Vodka will be sponsoring this event. Secure your spot at Daytopia before tickets sell out. Gather your friends, get your bowling shoes ready, and be prepared to dance the day away. </p>

					


						<h2 class="h5">Buy Now</h2>
						<div class="mb-20" id="eventbrite-widget-container-<?php echo $eventbriteID ?>"></div>
						<hr class="mt-20" />

				

					</div><!-- end of colfull -->

					<div class="disclosure">

						<?php include 'includes/package-info-generic.inc.php'; ?><br />

						<strong>Disclaimer</strong> | The term <?php echo $event["title"]; ?>, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
					</div>

				</div><!--end of content-->

			</div><!--end of right-->

			<aside id="social">
				<?php include 'includes/twitter.inc.php'; ?>
			</aside>

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