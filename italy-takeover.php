<?php

    ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"				=>"Italy Takeover",
		"subtitle"			=>"Taking You To the Most Romantic Places on Earth",
		"location"			=>"Rome | Pisa | Florence | Venice",
		"date"				=>"Oct 31 - Nov 5, 2022",
        "date_start"		=>"Oct 31, 2022",
		"img_url"			=>"../../images/slides/splash-italy-cta.jpg",
		"img_alt"			=>"Italy Takeover 2022"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Varies Per Location",
			"soldout"           =>false,
			"img_url"			=>"../../images/slides/splash-italy.jpg",
           // "address"			=>"Sheikh Zayed Road Business Bay",
          //  "location"			=>"Italy 121000 United Arab Emirates",
		)/*,

		"hotel2"=> array(
			"title" 			=>"Sheraton New Orleans Hotel",
			"soldout"	        =>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/10/0b/10/bf/sheraton-new-orleans.jpg",
            "address"			=>"500 Canal St",
            "location"			=>"New Orleans, LA 70130",
		),
		
		"hotel3"=> array(
			"title" 			=>"DoubleTree by Hilton",
			"soldout"	        =>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/13/5f/f0/b0/exterior.jpg",
            "address"			=>"300 Canal Street",
            "location"			=>"New Orleans, LA 70130",
		)*/


	);

	$people = array(
			"diamond"=> array(
				//"Group of 4" 			=>"$1325",
				"Group of 3"			=>"$2250",
				"Group of 2"			=>"$2250",
				"Individual"			=>"$2699"
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
			"All Venue Transportation with Wifi"				=> "checked",
			"Most Meals Included"								=> "checked",
			"Rome Tour: Vatican Museums and Sistine Chapel"		=> "checked",
			"Rome Tour: Visit St. Peter’s Square and Basilica"	=> "checked",
			"Rome Tour: Visit the Colosseum"					=> "checked",
			"Florence Tour: Michelangelo’s David"				=> "checked",
			"Florence Tour: Signoria Square Vistas"				=> "checked",
			"Pisa Tour: Mini-train ride to the SQUARE OF MIRACLES"	=> "checked",
			"Pisa Tour: Visit the Leaning Tower of Pisa"		=> "checked",
			"Venice Tour: Roman Arena, Private boat ride" 		=> "checked",
			"Venice Tour: St. Mark’s Square" 					=> "checked",
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
    <title><?php echo $metas['essence']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['essence']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['essence']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['essence']['canonical']; ?>" rel="canonical" />
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
						<h2 class="h4">We are making an Italian Takeover </h2>

						<p>YOLLO is taking you to Italy. From the grandeur of Pisa, to the medieval mystique of Venice, to the rich heritage and old world charm of Florence - Italy delivers a dream-come-true experience</p>

						<p>There’s a lot of reasons to fall in love with Italy, and it really doesn’t take much. It could be the phenomenal historical landmarks. The lush vineyards and delicious cuisine. Or even the wonderful aromas of the country - who knows! And some say one visit wouldn't be enough. That's why we are visiting a variety of places in Italy. </p>

						<p>Airfare is not included. Airport Transfer are FREE with ontime payments, $55 without. <strong>Passports are required. Vaccinations will be required. </strong></p>

						<p><a data-href="#tabs-5" href="#" class="open-tab">Secure this vacation package now</a> to enjoy this amazing Italian experience.</p>

						<table class="itinerary">
							<caption>Destination and Sightseeing Itinerary</caption>
							<tbody>
								<tr>
									<td>Day 1: Arrive in Rome, Italy</td>
									<td>Check into your hotel, then explore this ancient capital. Tonight, meet your Tour Director and fellow travelers for an included welcome dinner.</td>
								</tr>
								<tr>
									<td>Day 2: Rome w / Free Time</td>
									<td>The "Eternal City" is vibrantly alive and exciting! Guided sightseeing, visit the Vatican Museums and Sistine Chapel, St. Peter's Square and Basilica, and the Colosseum.</td>
								</tr>
								<tr>
									<td>Day 3 - 4: Florence and Pisa</td>
									<td>Travel to Florence Area with Guided Walking Tour, Visit Michelangelo's David and Signoria Square Views of Rolling Hills, Cypress Trees, Terraced Vineyards, Olive Groves, and Charming Villages. Next, stop in Pisa to enjoy a mini-train ride to the Square of Miracles and marvel at the Leaning Tower.</td>
								</tr>
								<tr>
									<td>Day 5 - 6: Florence to Venice</td>
									<td>Travel north and cross the Po River to fabled Verona, setting for Shakespeare's Romeo & Juliet. Marvel at the ancient Roman Arena, built for gladiator fights but now a popular venue for festivals and concerts; shop in Via Mazzini, or sip local Prosecco, Amarone, or Soave wine in one of the many bars of the center. Continue to the Venice area for two overnights. Private boat ride, guided walking tour, visit St. Mark's Square and Basilica, Doges' Palace and the Bridge of Sighs; glassblower demonstration; farewell dinner at a local restaurant.</td>
								</tr>
								
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">*Times and Locations may vary and change at any time.</td>
								</tr>
							</tfoot>
						</table>

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
											
										<?php if(isset($geolocation["location"])) :?>		
                                        <address>
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i> 
                                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                                            <?php echo $hotel["location"]; ?></a>
                                        </address>
										<?php endif; ?>
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

							  <div data-control>When are the payments due?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $29.99 per person fee. The first payment is due on or before Jan 25, 2021. The second payment of $250 per person is due on or before Feb 22, 2022. The final payment (remaining balance) is due on or before Mar 22, 2022. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts.</p>
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
								<p>Yes.</p>
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
							<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="68"></script>
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
<script>Cognito.load("forms", { id: "68" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
