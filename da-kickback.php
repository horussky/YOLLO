<?php
	ob_start("ob_gzhandler");
	include 'includes/functions.inc.php';
	include 'includes/meta.config.inc.php';

	$event = array(

		"title" => "Da Kick Back",
		"subtitle" => "AAMU Homecoming Party",
		"location" => "Huntsville, AL",
		"date" => "September 29, 2023",
		"date_start" => "September 29, 2023",
		"img_url" => "../../images/slides/splash-kickback-cta.jpg",
		"img_alt" => "DPartyGras Cruise",
		"hotel_link" => "https://www.marriott.com/event-reservations/reservation-link.mi?id=1678390003164&key=GRP&app=resvlink"

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
		<?php echo $metas['dakickback']['title']; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $metas['dakickback']['desc']; ?>" />
	<meta name="keywords" content="<?php echo $metas['dakickback']['keywords']; ?>" />
	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
	<link href="<?php echo $metas['dakickback']['canonical']; ?>" rel="canonical" />
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
				<div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
					<div class="overlay"></div>
					<div class="title">
						<h1>
							<?php echo $event["title"]; ?>
						</h1>
						<p class="subtitle">
							<?php echo $event["subtitle"]; ?>
						</p>
						
						<div id="event-timer"></div>
					</div>
				</div>

				<div class="content">
					<div class="date-location">
						<div id="event_start" data-time='<?php echo $event["date_start"]; ?>' class="col">
							<?php echo $event["date"]; ?>
						</div>

						<div class="col">
							<?php echo $event["location"]; ?>
						</div>
					</div><!-- end of date-location -->


					<div class="colfull">
		
						<h2 class="h4">Da Kickback: AAMU Homecoming </h2>
						<p>YOLLO Group Services, Inc. and Alumni Legendz are teaming up for an extraordinary event: "Da Kickback: An Upscale Homecoming Experience" at Alabama A&M University (AAMU) during their 2023 homecoming.Good Times Billiards will be transformed into an ultra LIVE space, commemorating the legacies of both Alabama A&M University and Tuskegee University. This historic football rivalry has spanned decades, filled with pride and passion.</p>

						<p>"Da Kickback" is all about celebrating AAMU and Tuskegee while highlighting the importance of HBCUs. These institutions not only deliver top-notch education but also foster strong bonds among students and alumni. The enthusiasm from both schools will blend in a spirit-packed event. Hurry, secure your spot at the booths and tables - they'll be gone before you know it. Grab your friends and brace yourself for an unforgettable bash!</p>

					


						<h2 class="h5">Buy Now</h2>
						<div class="mb-20" id="eventbrite-widget-container-664308934907"></div>
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
	<div id="eventbrite-widget-container-664308934907"></div>


	<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
	<script type="text/javascript">
		var exampleCallback = function () {
			console.log('Order complete!');
		};

		window.EBWidgets.createWidget({
			// Required
			widgetType: 'checkout',
			eventId: '664308934907',
			iframeContainerId: 'eventbrite-widget-container-664308934907',
			// Optional
			iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			onOrderComplete: exampleCallback  // Method called when an order has successfully completed
		});

	</script>

	<!--google analytics-->

	<?php include 'includes/analytics.inc.php'; ?>

</body>

</html>