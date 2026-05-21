<?php
	include 'includes/functions.inc.php';
	include 'includes/bootstrap.inc.php';
	$config = loadEvent('conf_urban-ski.php');
	extract($config);
?>

<!doctype html>
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
					<p class="event-hero__subtitle"><?php echo $event["subtitle"]; ?></p>
					<p class="event-hero__location"><?php echo $event["location"]; ?></p>
					<div class="event-hero__buttons">
						<a data-href="#tabs-5" class="btn btn-red event-hero__btn open-tab">Book Now</a>
						<a class="btn btn-outlined btn--round event-hero__btn" href="/urban-ski-events">View Events</a>
					</div>
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
						<h2>A Perfect Retreat for First-Time Skiers</h2>

						<p>Experience the thrill of skiing and nightlife at Urban Ski Weekend 2026 in Gatlinburg, Tennessee. This event caters to both beginners and seasoned skiers, offering an unforgettable blend of slope action and after-dark excitement.</p>

						<h3>What Makes This Experience Irresistible:</h3>

						<div class="ratio ratio-16x9 mb-20">
								<iframe src="https://www.youtube.com/embed/5WuK1wDeBaI?rel=0" 
								title="YouTube video" 
								allowfullscreen></iframe>
						</div>

						<p>You'll enjoy a very accommodating 4-day, 3-night stay at our premium host hotel. Start each morning with a delicious sponsored breakfast that fuels your mountain adventures. Indulge in up to 28 hours of sponsored bar drinks that keep the energy high and the memories flowing. Your exclusive party passes unlock VIP access to the most sought-after events, while our headline comedy show guarantees non-stop laughter. </p>

						<p>This isn't just a ski trip - it's a life-changing adventure that will create stories you'll tell for years. Limited spots are available, and our 2025 event sold out in record time. Don't miss your chance to transform your winter and create memories that will last a lifetime. <a data-href="#tabs-5" class="open-tab">Register and reserve your spot today!</a></p>

					</div> <!-- ./overview -->


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


							<h2>Price & What's Included</h2>
                                
                                <div class="price-table-container">
								<?php if(isset($people["diamond"]) && !empty($people["diamond"])): ?>
                                <div class="price-table">
								<h3 class="price-table__type"> Diamond Package</h3>
								
								<?php 
									$first_key     = array_key_first($people['diamond']);
									$first_value   = $people['diamond'][$first_key]['price'];
									$first_soldout = $people['diamond'][$first_key]['sold_out'];
								?>
								
								<div>
									<p class="large-price mb-0"><em>Starting at</em> <?php echo $first_value; ?><em> / person</em></p>
									<p><small><?php echo $first_key; ?> &bull; see all pricing tiers below</small></p>
								</div> 
								<hr />
								
								<ul class="price">
									<?php foreach($package_items['diamond_items'] as $key=>$value): ?>
										<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
									<?php endforeach; ?>		
								</ul>
								<p class="tier-label">Pricing by group size</p>
								<ul class="priceblock">
								<?php foreach($people['diamond'] as $key=>$tier): ?>
									<li class="<?php echo $tier['sold_out'] ? 'sold-out' : ''; ?>">
										<?php echo $key; ?>
										<span>
											<?php echo $tier['price']; ?>
											<?php if($key != "Individual"): ?>
												<em> / person</em>
											<?php endif; ?>
											<?php if($tier['sold_out']): ?>
												<span class="sold-out-badge">Sold Out</span>
											<?php endif; ?>
										</span>
									</li>
								<?php endforeach; ?>
								</ul>
					
                        	</div><!-- price table -->
                            <?php endif; ?>



                                <?php if(isset($people["emerald"]) && !empty($people["emerald"])): ?>
                                <div class="price-table">
                                    <h3 class="price-table__type"> Emerald Package</h3>
                                    
                                    <?php 
										$first_key     = array_key_first($people['emerald']);
										$first_value   = $people['emerald'][$first_key]['price'];
										$first_soldout = $people['emerald'][$first_key]['sold_out'];
                                    ?>
                                    
                                    <div>
                                        <p class="large-price mb-0"><em>Starting at</em> <?php echo $first_value; ?><em> / person</em></p>
                                        <p><small><?php echo $first_key; ?> &bull; see all pricing tiers below</small></p>
                                    </div> 
                                    <hr />
                                    
                                    <ul class="price">
                                        <?php foreach($package_items['emerald_items'] as $key=>$value): ?>
                                            <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                        <?php endforeach; ?>		
                                    </ul>
                                    <p class="tier-label">Pricing by group size</p>
                                    <ul class="priceblock">
                                        <?php foreach($people['emerald'] as $key=>$value): ?>
                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em> / person</em><?php endif;?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                        
                                </div><!-- price table -->
                                <?php endif; ?>
                                <div class="mt-20"><a data-href="#tabs-5" class="btn btn-success btn--round open-tab">Reserve My Spot</a></div>
                            </div><!-- price table container -->



					</div><!-- ./price -->


					<?php echo $responsive_tabs["faqs"]; ?>

					<div class="tab" aria-label="faqs">

						<h2 class="h4">Frequently Asked Questions</h2>

						<div data-accordion-group>	
							<div class="accordion open" data-accordion>
								<div data-control>When are the payments due?</div>
								<div data-content>
								<p>Following registration the first payment of $125 is due on or before July 20, 2025.  The second payment of $300 is due on or before September 20, 2025. The final payment (remaining balance) is due on or before November 20, 2025. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts.</p>

								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is the ski excursion included in with the package?</div>

								<div data-content>

								<p>No, it's not included in the package and can't be added to your package in advance. The cost of the ski excursion is $175 that can be paid as you are checking in with the on-site staff. If purchased once you arrive at the resort up the mountain the cost is $250.</p>

								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>
								<div data-control>Why isn't the ski excursion included the package? </div>

								<div data-content>

								<p>One word, PARTY! Some people just can't get up early Sunday morning so to avoid a client missing out we do not include it in your package price. We have experienced better attendance when clients purchase the ski excurion upon arrival.</p>

								</div>
							</div><!-- end of accordion-->

							
							<div class="accordion" data-accordion>

								<div data-control>What if I don't want to ski?</div>

								<div data-content>

								<p>While we encourage everyone to "at least try", since it is a "Ski Trip", YOU CAN try another excursion such as Lazer Tag, Ropes Challenge Course, Horse Back Riding, Shopping Excursions, Mountain Tours, Ice Skating and a few others. Regardless of what you do, you will still get everything else in the package and the exchange options will NOT over lap the other events. Its going to be fun for everyone.</p>

								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

								<div data-control>Do I need a rental car?</div>

								<div data-content>

								<p>YES, because there is so much to do while in the area!</p>

								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

								<div data-control>What are some things you suggest I buy for this trip?</div>

								<div data-content>

								<p>Relaxed casual winter wear, sweaters,  thermal wears, ski gloves, ski bib, a hat, goggles or shades, swim wear, and a sexy classy black outfit</p>

								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

								<div data-control>Do I need any extra money?</div>

								<div data-content>

								<p> Yes, please bring money for parking on Saturday and lunch on Saturday on the mountain, for shopping at the outlet malls and for your souvenirs.</p>

								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Can I bring my children on this trip?</div>

								<div data-content>

								<p> No. This event includes all adult festivities and alcohol not meant for minors.</p>

								</div>

							</div><!-- end of accordion-->

						</div><!-- end of accordion group-->

					
					</div> <!-- ./faqs -->


					<?php echo $responsive_tabs["photos"]; ?>

					<div class="tab" aria-label="photos">

							<div id="nanoGallery"></div>

					</div><!-- ./photos -->


					<?php echo $responsive_tabs["buynow"]; ?>

					<div class="tab" aria-label="buy">

						<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>

						<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="33"></script>


					</div><!-- ./buynow -->

				</div><!-- ./responive-tabs -->

			</div><!-- end of colfull -->


		</div><!--end of content-->


		<div class="disclosure">

			<?php include 'includes/package-info-generic.inc.php'; ?><br/>

			<strong>Disclaimer</strong> | The term Urban Ski, Urban Ski Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.

	</div>


		</div><!--end of right-->



		<aside id="social">
			<?php include 'includes/twitter.inc.php'; ?>
		</aside>



		</div><!--end of container-->



	</div><!--end of wrap-->

<!-- Footer  -->

<?php include 'includes/footer.inc.php'; ?>

<!-- End of Footer  -->



<?php include 'includes/scripts.inc.php'; ?>



<script type="text/javascript">

	$(document).ready(function(){

			//nano
			$("#nanoGallery").nanoGallery({

				kind: 'flickr',
				userID: '50836209@N03',
				 //uncomment this line to display one specific album:
			   photoset:'72157662464262434',
				// uncomment this line to display full photostream (v5.0.0):
				// photoset:'none',
				thumbnailWidth: 115,
				thumbnailHeight: 'auto',
				thumbnailAlignment: 'left',
				thumbnailLabel: {
					display:false,
					displayDescription: false,
					position: 'overImageOnBottom'

				},
				thumbnailHoverEffect:'borderLighter'

			});

	});

</script>
<!--google analytics-->

<?php include 'includes/analytics.inc.php'; ?>
</body></html>