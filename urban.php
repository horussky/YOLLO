<?php

	include 'includes/functions.inc.php';
	include 'includes/meta.config.inc.php';

	// Load the event configuration
	$event_config = require 'config/events/conf_urban-fiesta-jamaica.php';

	// Access configuration data
	$event = $event_config['event'];
	$geolocation = $event_config['geolocation'];
	$people = $event_config['people'];
	$package_items = $event_config['package_items'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['urbanfiesta']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['urbanfiesta']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['urbanfiesta']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <meta property="fb:pages" content="117420764961518" />
    <link href="<?php echo $metas['urbanfiesta']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
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
						<p class="fst-italic"><?php echo $event["subtitle"]; ?></p>
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

								<h2>Your Jamaica Escape: The Urban Fiesta Weekend Awaits</h2>

								<p>Imagine this: Jamaica's vibrant energy is calling your name, promising a weekend getaway filled with joy, connection, and celebration. This is the perfect getaway for those who work hard and love to play even harder. Urban Fiesta Weekend 2026 is rolling out the red carpet in Montego Bay from May 22nd to 24th, and you'll want to be there.</p>

								<p>But let's be real, this is more than just a tropical vacation. It's a celebration of culture  and pure, unapologetic fun. Picture yourself basking in the sun on Jamaica's beautiful beaches, discovering hidden gems during the day, and then dancing all night to the hottest DJs and live performances. You might even find yourself rubbing shoulders with a few celebrities. This weekend is your chance to unwind, recharge, and create memories with people who truly understand your vibe.</p>

								<p>And here's the best part: we've taken care of every detail. Our premium packages at the stunning 5-star Riu Montego Bay make everything easy. Whether you choose the Diamond or Emerald option, you'll enjoy all-access event passes, unlimited gourmet dining and drinks, a complimentary mini-bar, and a stylish YOLLO swag bag. All you need to do is show up and enjoy every moment.</p>

								<p>So, are you ready to make this your moment? This is your personal invitation to connect, celebrate, and create unforgettable travel stories with women who share your passion for adventure. Join us for a weekend where every beat brings excitement and every memory is yours to cherish. <a data-href="#tabs-5" href="#" class="open-tab">Book this fantastic package</a> right now!</p>

									
							</div><!-- ./overview -->


							<?php echo $responsive_tabs["price"]; ?>
							<div class="tab" aria-label="price">

								<h2 class="h4">Hotels</h2>

								<?php foreach($geolocation as $hotel) :?>
								<div class="hotel-grid">
									<div class="hg-img">
										<figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
									</div>
									<div class="hg-body">
										<p class="hg-title"><?php echo $hotel["title"]; ?> 
										<?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>

										<address>
											<i class="fa fa-location-arrow" aria-hidden="true"></i> 
											<a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
											<?php echo $hotel["location"]; ?></a>
										</address>
									</div>
								</div><!-- ./hotel-grid -->
								<?php endforeach; ?>

								<hr />

								<h2 class="h4">Price</h2>
								
								<div class="price-table-container">

									<?php if(count($people["diamond"]) > 1) :?>
										<div class="price-table">
											<ul class="price">
												<li class="header">Diamond <span>Package</span></li>
												
												<?php foreach($package_items['diamond_items'] as $key=>$value): ?>
													<li class="<?php echo $value; ?>">
														<?php echo $key; ?>
													</li>
													<?php endforeach; ?>

													<li class="people-price">
														<ul class="priceblock">
															<?php foreach($people['diamond'] as $key=>$value): ?>
																	<li> <?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
																<?php endforeach; ?>
														</ul>
													</li>

													<li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
											</ul>
										</div>
										<!-- price table -->

										<?php endif; ?>


										<?php if(count($people["emerald"]) > 1) :?>
											<div class="price-table">
												<ul class="price">
														<li class="header">Emerald <span>Package</span></li>

														<?php foreach($package_items['emerald_items'] as $key=>$value): ?>
															<li class="<?php echo $value; ?>">
																<?php echo $key; ?>
															</li>
														<?php endforeach; ?>

														<li class="people-price">
															<ul class="priceblock">
																	<?php foreach($people['emerald'] as $key=>$value): ?>
																		<li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
																		<?php endforeach; ?>
															</ul>
														</li>

														<li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
												</ul>
											</div>
											<!-- price table -->

											<?php endif; ?>
											
								</div>
								<hr />
								
								<h2 class="h4">Additional Options</h2>
								<ul>
									<li>Airport Transportation: $150 Roundtrip</li>
									<li>Dunn's River Falls Excursion: $75pp</li>
									<li>Tour of Ocho Rios: $80pp</li>
									<li>Tour Of Montego Bay: $85pp</li>
									<li>Luminous Lagoon: $85pp</li>
								</ul>	
											
							</div><!-- ./price -->

							<?php echo $responsive_tabs["faqs"]; ?>
							<div class="tab" aria-label="faqs">

								<h2 class="h4">Frequently Asked Questions</h2>
									
								<div data-accordion-group>	
							
									<div class="accordion open" data-accordion>

										<div data-control>When are the payments due?</div>
										<div data-content>
										<p>After registration the first payment of $125 is due July 10, 2025 after registration. The second payment of $250 is due by October 10, 2025. The final payment (remaining balance) is due on or before January 10, 2026. If you would like to make payments between due dates that is fine also.</p>
										</div>

									</div><!-- end of accordion-->


									<div class="accordion" data-accordion>

										<div data-control>Is this trip all inclusive?</div>
										<div data-content>
										<p>Yes, while at the hotel, you can eat and drink to your fill.</p>
										</div>

									</div><!-- end of accordion-->



									<div class="accordion" data-accordion>

										<div data-control>Anything I should know before I arrive?</div>
										<div data-content>
										<p>Passports are required for this event. Also, bring another valid form of photo ID, and photocopies of both in case of loss or theft. Lastly, stay in our recommended hotels, you will save yourself a lot of aggravation.</p>
										</div>

									</div><!-- end of accordion-->


									<div class="accordion" data-accordion>

										<div data-control>Is the money the same or do I have to convert?</div>
										<div data-content>
										<p>In Jamaica they mostly use the Jamaican dollar as currency. It will have to be converted and the exchange rate can vary form day to day. However, in some places, USD is accepted and preferred.</p>
										</div>

									</div><!-- end of accordion-->


									<div class="accordion" data-accordion>

										<div data-control>Where does the shuttle provide transpotation?</div>
										<div data-content>
										<p>The shuttle provides transportation to events that are not within walking distance to the HOST hotel. The shuttle service starts with the Friday night event and ends with the Sunday night event. Shuttles will not provide transportation to the mall, sightseeing, etc.</p>
										</div>

									</div><!-- end of accordion-->


									<div class="accordion" data-accordion>

										<div data-control>Do I need a rental car?</div>
										<div data-content>
										<p>Yes, if you would like to go see different parts of the island, go to the mall, etc. No rental car is needed if you booked with us and worried about how you are going to get to the events!  We have several tours and excursion planned that will accommodate you during the weekend.</p>
										</div>

									</div><!-- end of accordion-->


									<div class="accordion" data-accordion>

										<div data-control>Why did Urban Fiesta leave San Juan, Puerto Rico?</div>
										<div data-content>
										<p>The event outgrew the island and most attendees are repeat clients. We wanted to celebrate the event with a new destinantion and provide fresh experiences for our attendees!</p>
										</div>

									</div><!-- end of accordion-->


									<div class="accordion" data-accordion>

										<div data-control>Where exactly is Montego Bay, Jamaica?</div>
										<div data-content>
										<p>Montego Bay, the capital of Saint James Parish on Jamaica’s north coast, is a major cruise ship port with numerous beach resorts and golf courses outside its commercial core.</p>
										</div>

									</div><!-- end of accordion-->

								</div><!-- end of accordion group-->

							</div> <!-- ./faqs -->


							<?php echo $responsive_tabs["photos"]; ?>
							<div class="tab" aria-label="photos">
									<div id="nanoGallery"></div>
							</div> <!-- ./photos -->


							<?php echo $responsive_tabs["buynow"]; ?>
							<div class="tab" aria-label="buy">

								<h2 class="h4">Buy Now</h2>
								<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
								
								<div class="cognito"></div>

							</div> <!-- ./buynow -->

						</div> <!-- ./responsive-tabs -->

					</div>
					<!-- end of col1 -->

					<div class="disclosure">

						<?php include 'includes/package-info-generic.inc.php'; ?>
							<p><strong>Disclaimer</strong> | The terms Urban Fiesta, and Urban Fiesta Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.</p>
					</div>
					<!-- end of disclosure -->

				</div>
				<!--end of content-->

			</div>
			<!--end of right-->

			<aside id="social">
					<?php include 'includes/twitter.inc.php'; ?>
			</aside>

		</div>
		<!--end of container-->

	</div>
	<!--end of wrap-->

	<!-- Footer  -->
	<?php include 'includes/footer.inc.php'; ?>
	<!-- End of Footer  -->

	<?php include 'includes/scripts.inc.php'; ?>

		<script type="text/javascript">
			$(document).ready(function() {

					//nano
					$("#nanoGallery").nanoGallery({

						kind: 'flickr',
						userID: '50836209@N03',

						//uncomment this line to display one specific album:
						photoset: '72157661030952496',

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
		<script>Cognito.load("forms", { id: "47" });</script>

		<!--google analytics-->

		<?php
			include 'includes/analytics.inc.php';
		?>

</body>
</html>