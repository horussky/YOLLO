<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

// Load the event configuration
$event_config = require 'config/events/conf_partygras.php';

// Access configuration data
$event = $event_config['event'];
$geolocation = $event_config['geolocation'];
$people = $event_config['people'];
$package_items = $event_config['package_items'];

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $metas['partygras']['title']; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $metas['partygras']['desc']; ?>" />
	<meta name="keywords" content="<?php echo $metas['partygras']['keywords']; ?>" />
	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
	<link href="<?php echo $metas['partygras']['canonical']; ?>" rel="canonical" />
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
						<div id="responsive-tabs">
							<?php echo $responsive_tabs["overview"]; ?>
							<div class="tab" aria-label="overview">
								<h2 class="h4">Party Gras coming home to Montgomery </h2>
								<p>We are excited to announce that our 11th Edition of Party Gras: Bottles & Beads is now a Weekend Event! This will be a weekend of good music, adult beverages, mingling, and fun for all attendees. Our inaugural Mardi Gras ball will bring the festivities to life, with bright decor, traditional costumes and lively music. Guests can enjoy the festivities by dressing up and embracing the festive atmosphere.<p>

								<p>The comedy show with headliner Mario Tory is always a hit, delivering plenty of laughter, while the Spoken word performances add an artistic element to the event. Live music is a staple of most YOLLO events, and Party Gras is no exception. With DJ Dre Smoove and DJ Meek on crowd control, you know it's going to be a rocking atmosphere! A cruise on the Harriott II adds a special touch to any weekend event, making it an unforgettable experience for guests. Guests can enjoy the scenery, relax, and socialize in a unique setting with this experience.</p>

								<p>Don't forget that giveaways are a must during Party Gras! Enjoy an awesome getaway and the chance to win door prizes all weekend. The 11th annual Party Gras: Bottles and Beads weekend is sure to be an unforgettable experience for all who attend.</p>

								The 11th annual Party Gras: Bottles and Beads weekend is sure to be an unforgettable experience for everyone attending. <strong>As history has shown us this event WILL SELL OUT quickly</strong>, so purchase your tickets today. <a data-href="#tabs-5" class="open-tab">Purchase your tickets online now.</a></p>

								<h5>Highlights from PartyGras 2022</h5>
								<iframe height="400" src="https://www.youtube.com/embed/yBHYUCnni5k"
									style="aspect-ratio: 16/9; margin-bottom: 2.4rem; width: 100%;"></iframe>

								<table class="itinerary" style="table-layout: fixed; margin-bottom: 16px">
									<caption>Event Itinerary</caption>
									<tbody>
										<tr>
											<th colspan="2" class="gray-200">Friday Events (Aug 08)</th>
										</tr>

										<tr>
											<td><span class="fw-bold">Welcome to Party Gras Kick-off Event</span><br>
										
													<ul class="small">
														<li>Comedy Show: with headliner Mario Tory</li>
														<li>Spoken Word: Featuring J.P. da Poet</li>
														<li>Live Performances: Musical acts, dance performances, and more.</li>
													</ul>
										
											</td>
											<td><span class="fw-bold">5:00PM - 8:00PM</span>
											<p class="small">Renaissance Montgomery Hotel & Spa (Host Property)<br/>201 Tallapoosa St, Montgomery, AL 36104</p>
												
											</td>
										</tr>

										<tr>
											<td><span class="fw-bold">The Party Gras Skate Party</span><br>
												<p class="small">
												 We are taking it back for this R&B skate party!
												</p>
											</td>
											<td><span class="fw-bold">10:00PM - 2:00AM</span>
											<p class="small">TBA</p>
											</td>
											
										</tr>

									</tbody>

									<tbody>
										<tr>
											<th colspan="2" class="gray-200">Saturday Events (Aug 09)</th>
										</tr>

										<tr>
											<td><span class="fw-bold">Daytopia</span><br>
												<ul class="small">
													<li>A Bowling Day Party to start your Saturday right.</li>
													<li> DJ Dre Smoove and DJ Meek on the 1's and 2's</li>
													<li>Party and Bowl while we create a fun vibe atmosphere.</li>
													<li>Event sponsored by:
														<ul> 
															<li><a href="https://king79vodka.com/" target="_blank">King 79 Vodka</a></li>
															<li><a href="https://www.facebook.com/thelionsdenbham/" target="_blank">The Lions Den Mobile Lounge</a></li>
														</ul>
													</li>
												</ul>
											</td>
											<td><span class="fw-bold">12:00PM - 4:00PM</span>
												<p class="small">Bama Lanes<br>3020 Atlanta Hwy, Montgomery, AL 36109</p>
											</td>
										</tr>

										<tr>
											<td><span class="fw-bold">Cruise Boarding</span>
												<p class="small">Boat leaves dock @ 9:00PM. Parking 11:30PM @ dockside</p>
											</td>
											<td><span class="fw-bold">8:30PM-9:00PM</span> 
												<p class="small">Harriott II Riverboat<br>200 Coosa St, Montgomery, AL 36104</p>
												
											</td>
										</tr>

										<tr>
											<td><span class="fw-bold">Cruise Party</span> 
												<ul class="small">
													<li>Music provided by DJ Dre Smoove and DJ Meek</li>
													<li>DRESS CODE: Mardi Gras Themed. Classy and fun! No sneakers, ball caps, jeans, tees, etc.</li>
												</ul>
											</td>

											<td><span class="fw-bold">9:00PM-11:00PM</span>
												<p class="small">Harriott II Riverboat<br>200 Coosa St, Montgomery, AL 36104</p>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2">*All times are based on Central Time Zone. **All events and times are subject to change.</td>
										</tr>
									</tfoot>
								</table>


								<p>We are also providing hotel accommodations via the 
									<?php if (!empty($event["hotel_link"])): ?>
									<a href="<?php echo $event["hotel_link"]; ?>" target="_blank">Renaissance Montgomery Hotel & Spa.</a>
									<?php else: ?>
									<span>Renaissance Montgomery Hotel & Spa (Link unavailable)</span>
									<?php endif; ?>
								</p>

							</div> <!-- ./ overview -->


							<?php echo $responsive_tabs["price"]; ?>

							<div class="tab" aria-label="price">

								<h2 class="h4">Hotel and Cruise</h2>
								<?php foreach ($geolocation as $hotel): ?>

									<div class="hotel-grid <?php if ($hotel['host'] == true): ?>hotel-grid--host<?php endif; ?>">

										<div class="hg-img">
											<figure
												style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;">
											</figure>
										</div>

										<div class="hg-body">
											<p class="hg-title">
												<?php echo $hotel["title"]; ?>

												<?php if ($hotel["soldout"] == true): ?><span class="sold">** Sold Out
														**</span>
												<?php endif ?>
											</p>

											<address> 
												Departing from:<br>
												<i class="fa fa-location-arrow" aria-hidden="true"></i>
												<a title="<?php echo $hotel["title"]; ?>" target="_blank"
													href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,

													<?php echo $hotel["location"]; ?></a>
											</address>

										</div>

									</div><!-- ./hotel-grid -->

								<?php endforeach; ?>

								<hr />

								<h2 class="h4">Price</h2>

								<div class="price-table-container">

									<?php if (count($geolocation["cruise1"]) > 1): ?>
										<div class="price-table">
											<ul class="price">
												<li class="header">Diamond <span>Package</span></li>

												<?php foreach ($package_items['diamond_items'] as $key => $value): ?>
													<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
												<?php endforeach; ?>

												<li class="people-price">
													<ul class="priceblock">
														<?php foreach ($people['diamond'] as $key => $value): ?>
															<li>
																<?php echo $key; ?> <span>
																	<?php echo $value ?>
																	<?php if ($key != "Individual"): ?><em>/per person</em>
																	<?php endif; ?>
																</span>
															</li>

														<?php endforeach; ?>
													</ul>
												</li>

												<li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a>
												</li>

											</ul>

										</div><!-- price table -->

									<?php endif; ?>

								</div><!-- price table container-->

							</div><!-- ./ price -->


							<?php echo $responsive_tabs["faqs"]; ?>

							<div class="tab" aria-label="faqs">
								<h2 class="h4">Frequently Asked Questions</h2>

								<div data-accordion-group>

									<div class="accordion open" data-accordion>
										<div data-control>What is the official host property for the Party Gras?</div>

										<div data-content>
											<p>While we do not have a host property we do recommend the DoubleTree, Embassy, and Hilton properties in downtown Montgomery.</p>
										</div>

									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>Where is the cruise being hosted? </div>
										<div data-content>
											<p>The cruise is being hosted on the Harriett II riverboat. It's located at 1620, 151 Riverfront Pkwy, Montgomery, AL </p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>Will refreshments be served during any of the events?</div>
										<div data-content>
											<p>Yes, there will be light food served at the bowling party! There is a full service bar for adult beverages and hookahs/cigars will be available for purchase.</p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>After I purchase tickets online how do I receive my tickets?
										</div>
										<div data-content>
											<p>Your tickets are sent directly to the email address provided during the purchasing process. </p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>What time is boarding for the cruise and when does the cruise start?</div>

										<div data-content>
											<p>Boarding starts at 8:30PM. The boat will leave at 9:00PM </p>
											<p style="color:dimgrey">*All times are based on Central Time Zone.</p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>What time is the comedy/poetry and live performances show? </div>
										<div data-content>
											<p>The live shows will be from 2PM - 5PM </p>
											<p style="color:dimgrey">*All times are based on Central Time Zone.</p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>What is the address for boarding the boat?</div>
										<div data-content>
											<p>1620, 151 Riverfront Pkwy, Montgomery, AL</p>
										</div>
									</div><!-- end of accordion-->



									<div class="accordion" data-accordion>
										<div data-control>What kind of event is Colors and Cocktails?</div>

										<div data-content>
											<p>Colors and Cocktails will allow participants to paint and sip Bottomless Signature Cocktails by Pour Crazy Bartending. The format follows Sip and Paint titled events. </p>

											<p style="color:dimgrey">*All times are based on Central Time Zone.</p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>

										<div data-control>What form of entertainment will be provided during the cruise? </div>

										<div data-content>
											<p>The cruise will feature DJ's on 2 decks of the boat with the top deck being left for your river viewing pleasure.</p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>Are all events one combined event?</div>

										<div data-content>
											<p>Yes, individual event tickets are NOT available. One ticket covers ALL weekend events! Armbands are issued and must be worn for entrance. Any armband that has been tampered with will result in denied entry. If you lose the armband you will have to purchase another one.</p>

											<p style="color:dimgrey">*All times are based on Central Time Zone.</p>
										</div>
									</div><!-- end of accordion-->

									<div class="accordion" data-accordion>
										<div data-control>Are group discounts available?</div>

										<div data-content>
											<p>Yes, if you have a group of 25  or more send us an email. </p>
										</div>
									</div><!-- end of accordion-->
								</div><!-- end of accordion group-->

							</div> <!-- ./ faqs -->


							<?php echo $responsive_tabs["photos"]; ?>
							<div class="tab" aria-label="photos">
								<div id="nanoGallery"></div>
							</div><!-- ./ photos -->


							<?php echo $responsive_tabs["buynow"]; ?>

							<div class="tab" aria-label="buy">

								<h2 class="h4">Buy Now</h2>

								<?php /* ?>
								 <div class="pay-form">
								 <p>Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
								 
								 <div class="cognito"></div>
								 </div>
								 <!-- end of pay-form -->
								 <?php */?>

								<div class="mb-20" id="eventbrite-widget-container-588666606667"></div>

								<hr class="mt-20" />


								<h4>Hotel Accommodations</h4>

								<img style="width:15rem; float:left; margin-right:2rem; object-fit: cover;     aspect-ratio: 4/3;"
									src="<?php echo $geolocation["hotel1"]["img_url"]; ?>" />

								<p class="mb-10"><strong>Renaissance Montgomery Hotel & Spa</strong></p>

								<a href="<?php echo $event["hotel_link"]; ?>" target="_blank">Reserve Your Room.</a>

							</div><!-- ./ buy now -->

						</div><!-- end of responsive-tabs -->

					</div><!-- end of colfull -->

					<div class="disclosure">

						<?php include 'includes/package-info-generic.inc.php'; ?><br />

						<strong>Disclaimer</strong> | The term Party Gras and Bottles and Beads, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Southern Belle Riverboat, Harriot II Riverboat, and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Southern Belle Riverboat, or Harriot II Riverboat productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
	<script type="text/javascript">
		$(document).ready(function () {

			//nano

			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',
				//uncomment this line to display one specific album:
				photoset: '72157657872517631',
				// uncomment this line to display full photostream (v5.0.0):
				// photoset:'none',

				thumbnailWidth: 115,
				thumbnailHeight: 'auto',
				thumbnailAlignment: 'left',
				thumbnailLabel: {
					display: false,
					displayDescription: false,
					position: 'overImageOnBottom'
				},
				thumbnailHoverEffect: 'borderLighter'

			});

		});

	</script>
	<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
	<script>Cognito.load("forms", { id: "11" });</script>
	<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
	<script type="text/javascript">
		var exampleCallback = function () {
			console.log('Order complete!');
		};

		window.EBWidgets.createWidget({
			// Required
			widgetType: 'checkout',
			eventId: '588666606667',
			iframeContainerId: 'eventbrite-widget-container-588666606667',
			// Optional
			iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
			onOrderComplete: exampleCallback  // Method called when an order has successfully completed
		});

	</script>

	<!--google analytics-->

	<?php include 'includes/analytics.inc.php'; ?>

</body>

</html>