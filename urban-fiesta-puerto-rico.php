<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"				=>"Urban Fiesta",
	"location"		   	=>"San Juan, Puerto Rico",
	"date"				=>"May 24-26, 2024",
    "date_start"        =>"May 24, 2024",
	"img_url"			=>"../../images/slides/splash-urban-fiesta-puerto-rico-cta.jpg",
	"img_alt"			=>"Urban Fiesta"
);

$geolocation = array(

	"hotel1"=> array(
		"title" 			=>"Embassy Suites & Casino",
		"address"			=>"8000 Tartak Street, San Juan, Carolina, 00979",
		"location"			=>"San Juan, Puerto Rico",
		"soldout"	        => false,
		"img_url"			=>"https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/2c/0c/15/exterior.jpg?w=600"
	),
);


$people = array(
		"diamond"=> array(
			//"Group of 4" 			=>"$780",
			"Group of 3"			=>"$1275",
			"Group of 2"			=>"$1325",
			"Individual"			=>"$2575"
		),

		"emerald"=> array(
			//"Group of 4" 			=>"$680",
			"Group of 3"			=>"$825",
			"Group of 2"			=>"$1,075",
			"Individual"			=>"$1,875"
		),

);


$package_items = array(

	"diamond_items" => array(
		"Delicious Breakfast Buffet each day"     => "checked",
        "Open Bar from 4 pm to 6 pm daily"           	=> "checked",
		"Hotel Accommodations (3 days/2 nights)"		=> "checked",
		"Welcoming Reception"							=> "checked",
		"Complimentary Night Stay"				        => "checked",
		"All-Access Event Weekend Passes"				=> "checked",
		"Unlimited Drinks on-site all weekend"			=> "checked",
		"Complimentary Room Mini Bar Restocked Daily"	=> "checked",
		"Unlimited Dining on-site all weekend"			=> "checked",
		"FREE Guest Room Mini Bar Restocked Daily"		=> "checked",
		"Add'l Night - $350/plus tax and resort fees"	=> "checked",
		"YOLLO Swag Bag"								=> "checked"
	),

	"emerald_items" => array(
		"Upgraded Accommodations - Oceanfront View"     => "ex",
        "Upgraded Liquor Options All Weekend"           => "ex",
		"Hotel Accommodations (3 days/2 nights)"		=> "checked",
		"Welcoming Reception"							=> "checked",
		"Complimentary Night Stay"				        => "checked",
		"All-Access Event Weekend Passes"				=> "checked",
		"Unlimited Drinks on-site all weekend"			=> "checked",
		"Complimentary Room Mini Bar Restocked Daily"   => "checked",
		"Unlimited Dining on-site all weekend"			=> "checked",
		"FREE Guest Room Mini Bar Restocked Daily"		=> "checked",
		"Add'l Night - $350/plus tax and resort fees"	=> "checked",
		"YOLLO Swag Bag"								=> "checked"
	)
	
	
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['urbanfiestaPR']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['urbanfiestaPR']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['urbanfiestaPR']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <meta property="fb:pages" content="117420764961518" />
    <link href="<?php echo $metas['urbanfiestaPR']['canonical']; ?>" rel="canonical" />
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

								<h2 class="h4">Discover Paradise: Urban Fiesta Puerto Rico Travel Package - Book Now!</h2>

								<p>Don't miss out on the chance to explore the stunning beauty of Puerto Rico with YOLLO Group Services! Our travel packages for Urban Fiesta: Puerto Rico are waiting for you.  Our exclusive trip to this Caribbean paradise is filled with adventure, culture, and unforgettable memories. Don't wait! Experience the vibrant streets, delicious cuisine, pristine beaches, and local culture of Old San Juan. Immerse yourself in this tropical paradise and create unforgettable memories. <a data-href="#tabs-5" class="open-tab">Book your adventure now!</a><p> 

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
												<li>Airport Transportation: $75 Roundtrip</li>
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
										<p>After registration the first payment of $125 is due December 6, 2023 after registration. The second payment of $250 is due by January 16, 2023. The final payment (remaining balance) is due on or before March 04, 2023. If you would like to make payments between due dates that is fine also.</p>
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
								
								<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="77"></script>

							</div> <!-- ./buynow -->

						</div> <!-- ./responsive-tabs -->

					</div>
					<!-- end of col1 -->

					<div class="disclosure">
						<?php include 'includes/package-info-generic.inc.php'; ?>
						<strong>Disclaimer</strong> | The terms Urban Fiesta, and Urban Fiesta Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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

               <!--google analytics-->

               <?php
					include 'includes/analytics.inc.php';
					ob_end_flush();
				?>

</body>
</html>