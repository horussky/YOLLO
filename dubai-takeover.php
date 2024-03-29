<?php

    ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"				=>"Dubai Takeover",
		"subtitle"			=>"Taking You International",
		"location"			=>"Dubai, United Arab Emirates",
		"date"				=>"Aug 31 - Sept 5, 2023",
        "date_start"		=>"Aug 31, 2023",
		"img_url"			=>"../../images/slides/splash-dubai-cta.jpg",
		"img_alt"			=>"Dubai Takeover 2023"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"JW Marriott Marquis Hotel Dubai",
			"soldout"           =>false,
			"img_url"			=>"//dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/de/d6/14/exterior.jpg?w=500&h=-1&s=1",
            "address"			=>"Sheikh Zayed Road Business Bay",
            "location"			=>"Dubai 121000 United Arab Emirates",
		)


	);

	$people = array(
			"diamond"=> array(
				//"Group of 4" 			=>"$1325",
				"Group of 3"			=>"$2,875",
				"Group of 2"			=>"$3,075",
				"Individual"			=>"$3,299"
			)/*,

			"emerald"=> array(
				"Group of 4" 			=>"$1075",
				"Group of 3"			=>"$1205",
				"Group of 2"			=>"$1310",
				"Individual"			=>"$1945"
			)*/

	);

	$package_items = array(
		"diamond_items" => array(
			"Luxury Hotel Accommodations: JW Marriott"	=> "checked",
			"Airport Transfers To Hotel"				=> "checked",
			"Breakfast Daily + (3) Dinners"				=> "checked",
			"Tickets To Dinner In The Sky"				=> "checked",
			"Water Taxi Experience To The Gold Souk"	=> "checked",
			"Get All Your Dubai Take Home Items"		=> "checked",
			"Ticket Entry To Burj Khalifa 124 Floor" 	=> "checked",
			"Ticket To The Dubai Frame"					=> "checked",
			"Ticket To Desert Safari Takeover" 			=> "checked",
			"Dinner and Show plus Hookah" 				=> "checked",
			"All White w/ splash of UAE colors (black, green, or red) Yacht Party" 				=> "checked",
			"All Venue Transportation with Wifi"		=> "checked",
			"YOLLO Swag Bag"							=> "checked"
		)/*,

		"emerald_items" => array(
			"Hotel Accommodations (Fri-Sun)"			      => "checked",
			"One night concert ticket (Loge Section)"	      => "ex",
			"All White Party Cruise "			              => "ex",
			"Mid-Day Comedy Show (Sunday)"				      => "checked",
			"Black Film Review (Sunday)"				      => "checked",
			"Speak Easy Poetry Show (Sunday)"				  => "checked",
			"Welcome to NOLA party (Friday)"				  => "checked",
			"Complimentary Additional Night*"			      => "checked",
			"Additional nights: $349 plus tax and fees"	      => "checked",
			"Additional concert nights (Loge Section): $185" => "checked",
			"YOLLO Swag Bag"							      => "checked"
		)*/
	);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['dubai']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['dubai']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['dubai']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['dubai']['canonical']; ?>" rel="canonical" />
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

        <div id="left">
            <!--Nav-->
            <?php include 'includes/nav.inc.php'; ?>
            <!--End of Nav-->
        </div><!-- end of left -->


        <div id="right">

            <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
					<div class="overlay"></div>
					<div class="title">
						<h1><?php echo $event["title"]; ?></h1>
						<p class="subtitle"><?php echo $event["subtitle"]; ?></p>
						<a data-href="#tabs-5" class="btn btn-red open-tab">Pay or Register Now</a>
					    <div id="event-timer"></div>
					</div>
			</div>

            <div class="content">

                    <div class="date-location">
                        <div id="event_start" data-time='<?php echo $event["date_start"]; ?>' class="col">
                            <?php echo $event["date"]; ?>
                        </div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                    </div>

                   <div class="colfull">


                     <div id="responsive-tabs">

                        
                        <?php echo $responsive_tabs["overview"]; ?>
						<div class="tab" aria-label="overview">
						<h2 class="h4">We are taking over Dubai during Labor Day!</h2>

						<p>YOLLO is taking you to Dubai. With gorgeous, glittering skyscrapers, cultural wonders, and a landscape of desert and ocean, Dubai is the definition of what a 21st century city should be.</p>

						<p>Dubai is vibrant and full of life, with iconic skyline, miles of beaches, family friendly water and theme parks. The city has something for everyone. With a short drive from the city, you can open up a new world of outdoor activities, including helicopter rides, hot air balloon tours, desert safaris, and camping trips.</p>

						<p>Our Dubai package includes a private All-White Yacht party, Dinner in the sky, Jet ski excursion, massage and day spa, and more. Airfare is not included. Airport Transfer are FREE with ontime payments, $80 without. <strong>Passports are required. Vaccinations will not be required, but is subject to change in the future. </strong></p>

						<p><a data-href="#tabs-5" href="#" class="open-tab">Secure this vacation package now</a> to enjoy an unforgettable international experience.</p>

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

                                <h2 class="h4">Price</h2>
                                
                                <div class="price-table-container">
                                
									<div class="price-table">
									  <ul class="price">
										<li class="header">Diamond <span>Package</span></li>
										<?php foreach($package_items['diamond_items'] as $key=>$value): ?>
											<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
										<?php endforeach; ?>
										<li class="people-price">
											<ul class="priceblock">
												<?php foreach($people['diamond'] as $key=>$value): ?>
												<li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
												<?php endforeach; ?>
											</ul>
										</li>
										<li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
									  </ul>
									</div><!-- price table -->

									<?php if(isset($geolocation["hotel2"])) :?>
									<div class="price-table">
									  <ul class="price">
										<li class="header">Emerald <span>Package</span></li>
										<?php foreach($package_items['emerald_items'] as $key=>$value): ?>
											<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
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
									</div><!-- price table -->
									<?php endif; ?>
                                
								</div><!-- price table container-->

								<p>Prices based on (1) room &amp; max # of guest in that room. You can have multiple rooms.</p>				


                        </div><!-- ./price -->





                        <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
					    <h2 class="h4">Frequently Asked Questions</h2>
                       	
                       	<div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

							  <div data-control>Does the price listed take care of hotel reservations for all members in either package or only one person?</div>
							  <div data-content>
								<p>All prices listed are per person. Under the package prices description, all amenities included in your package are per person and includes one (1) room for the group.</p>
							  </div>

							</div><!-- end of accordion-->



							<div class="accordion" data-accordion>

							  <div data-control>What are the payment due?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $29.99 per person fee. The first payment of $450 is due on or before March 05, 2023. The second payment of $450 per person is due on or before April 16, 2023. The final payment (remaining balance) is due on or before May 16, 2023. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Your prices listed are only for up to four people max? Can you accommodate groups larger than four?</div>
							  <div data-content>
								<p>Yes, we can accommodate any size group, but due to hotel regulations the max occupancy per room is four. This why you see pricing up to four.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Are vaccinations required for this trip?</div>
							  <div data-content>
								<p>While vaccinations are strongly recommended, they are no longer required to travel with us internationally, as long as the country does not require it. Should a country change its policy and you choose not to comply please note we DO NOT offer refunds. We strongly suggest you purchase traveler insurance. You can make that purchase by clicking on the Travel Guard link in the lower right corner of the website. This is not a change in our policy and does not mean that negative test and perhaps health registrations will not be required, however you are now responsible for being informed on this matter. If a country does not require vaccinations vaccination cards may be required and that can with the airlines you are traveling with. The airline can confirm that requirement with you. We recommend that you confirm these requirements prior to your arrival to the airport so that you are informed. You are encouraged to plan responsibly.</p>
							  </div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

							  <div data-control>Are Passports needed?</div>
							  <div data-content>
								<p>Yes.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>How do I make my first payment?</div>
							  <div data-content>
								<p>You follow the same procedure as you did for registration. You will select the First Payment option under package options. </p>

							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>How do I make additional payments on my account? </div>
							  <div data-content>
								<p>You follow the same procedure as you did for registration. You will select the Partial Payment option under package options.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Must the entire group pay the $29.99 Reservation fee?</div>
							  <div data-content>
								<p>Yes. All prices are per person. The Reservation fee secures your spot on the package, and is separate from the package price.</p>
							  </div>

							</div><!-- end of accordion-->



							</div><!-- end of accordion group-->
                        	
                       


                        </div><!-- ./faqs -->




                        <?php /* ?><?php echo $responsive_tabs["photos"]; ?> <?php */ ?>
						<div class="tab" aria-label="photos">
					   	<h2 class="h4">Photos</h2>
                        		<div id="nanoGallery"></div>
                        </div>  <!-- ./photos -->




						<?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
                        	<h2 class="h4">Buy Now</h2>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
							<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="67"></script>
                        	<!-- <div class="cognito"></div> -->

                    	</div><!-- ./buynow -->



                    </div><!-- end of tabs -->

                </div><!-- end of colfull -->



		</div><!-- end of content -->


      	<section id="disclosure">
            <div class="disclosure">
            	<?php include 'includes/package-info-generic.inc.php'; ?><br/>
                <strong>Disclaimer</strong> | The term <?php echo $event["title"]; ?>
, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by <?php echo $event["title"]; ?> and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any <?php echo $event["title"]; ?> productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
          </div><!-- end of disclosure -->

      </section>

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
		    photoset:'72157632729673352',

			// uncomment this line to display full photostream (v5.0.0):
			// photoset:'none',

			thumbnailWidth: 100,
			thumbnailHeight: 100,
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

<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "67" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
