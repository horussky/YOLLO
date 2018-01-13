<?php

	$event = array(
		"title"				=>"Essence Music Festival 2018",
		"subtitle"			=>"Make your own Girl's Trip come true!",
		"location"			=>"New Orleans, LA",
		"date"				=>"July 6 - 8, 2018",
		"img_url"			=>"../../images/slides/splash-essence-cta.jpg",
		"img_alt"			=>"Essence Festival 2017"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Sheraton New Orleans Hotel",
			"hotel1_soldout"    =>false,
			"img_url"			=>"//cdn.hotelplanner.com/Common/Images/Hotels/8832_1.jpg"
		),

		"hotel2"=> array(
			"title" 			=>"Hilton New Orleans",
			"hotel2_soldout"	=>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/oyster/1180/08/e1/6c/7f/hallways--v8652118.jpg"
		),
		
		"hotel3"=> array(
			"title" 			=>"Residence Inn Downtown",
			"hotel3_soldout"	=>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-o/06/8c/e3/e4/residence-inn-new-orleans.jpg"
		)

	);

	$people = array(
			"diamond"=> array(
				"Group of 4" 			=>"$910",
				"Group of 3"			=>"$975",
				"Group of 2"			=>"$1140",
				"Individual"			=>"$1785"
			),

			"emerald"=> array(
				"Group of 4" 			=>"$760",
				"Group of 3"			=>"$850",
				"Group of 2"			=>"$995",
				"Individual"			=>"$1530"
			),

			"Hotel Only" =>"$1245 (Weekend)"
	);

	$package_items = array(
		"diamond_items" => array(
			"Hotel Accommodations (Fri-Sun)"			=> "checked",
			"One night concert ticket (Lodge Section)"	=> "checked",
			"All White Boat Cruise "			=> "checked",
			"Mid-Day Comedy Show (Sunday)"				=> "checked",
			"Fashion Show (Sunday)"				=> "checked",
			"Speak Easy Poetry Show (Sunday)"				=> "checked",
			"Welcome to NOLA party (Friday)"				=> "checked",
			"Complimentary Additional Night*"			=> "checked",
			"Additional nights: $349 plus tax and fees"	=> "checked",
			"Additional concert nights (Loge Section): $150"	=> "checked",
			"YOLLO Gift Bag"							=> "checked"
		),

		"emerald_items" => array(
			"Hotel Accommodations (Fri-Sun)"			=> "checked",
			"One night concert ticket (Lodge Section)"	=> "ex",
			"All White Boat Cruise "			=> "ex",
			"Mid-Day Comedy Show (Sunday)"				=> "checked",
			"Fashion Show (Sunday)"				=> "checked",
			"Speak Easy Poetry Show (Sunday)"				=> "checked",
			"Welcome to NOLA party (Friday)"				=> "checked",
			"Complimentary Additional Night*"			=> "checked",
			"Additional nights: $349 plus tax and fees"	=> "checked",
			"Additional concert nights (Loge Section): $150"	=> "checked",
			"YOLLO Gift Bag"							=> "checked"
		)
	);

	include 'includes/functions.inc.php';


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

</head>
<body>

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
						<a data-href="#tabs-5" class="btn btn-red open-tab">Buy Now</a>
					</div>
			</div>

            <div class="content">

                    <div class="date-location">
                        <div class="col"><?php echo $event["date"]; ?></div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                    </div>

                   <div class="colfull">


                     <div id="responsive-tabs">

                        
                        <?php echo $responsive_tabs["overview"]; ?>
						<div class="tab" aria-label="overview">
						<h3>Get ready for Essence Festival 2018</h3>

						<p>The 24th annual Essence Music Festival is an annual mega music event filled with concerts, seminars and celebrities, sponsored by Essence Magazine. This summer concert series once again will be held in New Orleans, Louisiana. 2018 promises to bring in the largest crowd this festival has ever seen. Concerts rock the New Orleans Superdome each night and the variety of parties have been added to highlight the daylight hours!</p>

						<h4>The Mid-Day Cruise Party</h4>

						<p>This cruise was such a HUGE success in 2017 that we had to add two cruises to accommodate the demand! The 13th annual Mid-Day Party Boat Cruise will happen on the famous Creole Queen and will be featured with 4 options for you cruising delight! Enjoy a multi-level paddle-wheel boat cruising the Mighty Mississippi River, while listening to the livest Hip-Hop and R&B music. This cruise will be "All White" theme preferred, but not required for this event.</p>

						<h4>The Mid-Day Comedy Show</h4>
						<p>Needless to say, the comedy show was bigger and better than ever! The food was great, drinks were on point, and the jokes had everyone in stitches! If you are in need of some serious laughter, this is the event for you. Last year's headliner Steve Brown had tears in EVERYBODY'S eyes! Don't think we are going to let you down with our 2018 lineup! The 8th annual Comedy Show will happen on July 8th, 2018. Join us to hear some of the funniest comedians to ever hit the main circuit.</p>

						<p>Do the right thing and <a data-href="#tabs-5" class="open-tab">Book now</a> with YOLLO Group Services Inc. and allow us to give you the best travel experience while in New Orleans!</p>



                        </div> <!-- ./overview -->




                        <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">


								<h3>Hotels</h3>
                                <div class="hotel-box-container">

                                    <div class="hotel-box">
                                        <img src="<?php echo $geolocation['hotel1']['img_url']; ?>" />
                                        <div class="hotel-title">
                                            <h3><?php echo $geolocation["hotel1"]["title"]; ?></h3>
                                        </div>
                                    </div>

                                    <div class="hotel-box">
                                    	 <img src="<?php echo $geolocation['hotel2']['img_url']; ?>" />
                                        <div class="hotel-title">
                                            <h3><?php echo $geolocation["hotel2"]["title"]; ?></h3>
                                        </div>
                                    </div>
                                    
                                    <div class="hotel-box">
                                    	 <img src="<?php echo $geolocation['hotel3']['img_url']; ?>" />
                                        <div class="hotel-title">
                                            <h3><?php echo $geolocation["hotel3"]["title"]; ?></h3>
                                        </div>
                                    </div>



                                </div>

                            	<hr />

                                <h3>Price</h3>
                                
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
                                
								</div><!-- price table container-->




                        </div><!-- ./price -->





                        <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
					    <h3>Frequently Asked Questions</h3>
                       	
                       	<div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

							  <div data-control>Does the price listed take care of hotel reservations for all members in either the Diamond or Emerald package or only one person?</div>
							  <div data-content>
								<p>All prices listed are per person. Under the package prices description, all amenities included in your package are per person and includes one (1) room for the group.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>How is the one night concert ticket chosen for my group?</div>
							  <div data-content>
								<p>After Essence releases the performer’s lineup we send an email notifying everyone of the daily lineups. Each person in the group has the freedom to choose which night they would like to attend. In the event we don’t hear from anyone in the group we will secure Saturday night tickets for the group or group members whom haven’t confirmed their concert night.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What are the payment due dates for Essence Packages?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $19.99 per person fee. The first payment of $125 is due on or before January 14, 2018. The final payment (remaining balance) is due on or before March 13, 2018. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by cliocking on the BUY NOW tab above and following the prompts.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Your prices listed are only for up to four people max? Can you accommodate groups larger than four?</div>
							  <div data-content>
								<p>Yes, we can accommodate any size group, but due to hotel regulations the max occupancy per room is four. This why you see pricing up to four.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Can I purchase additional concert nights?</div>
							  <div data-content>
								<p>Yes, additonal night concert tickets are $150 per night. Just let us know and we can add it to your invoice.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Are there restrictions to what I can bring into the Superdome?</div>
							  <div data-content>
								<p>The following items are prohibited: animals (with the exception of service dogs), backpacks/knapsacks, banners, containers of any kind, contraband, glass, laser pointers, noise makers, projectiles, sticks, bats, poles or clubs; video and audio recording devices with lenses that are longer than six (6) inches); weapons of any kind and other items deemed inappropriate by SMG/Landmark</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Will there be any bag checks at the event?</div>
							  <div data-content>
								<p>Yes, all large bags will be thoroughly checked upon entry to all venues, including the Superdome, Convention Center and many other locations held during the weekend events.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Do you offer transportation for/with your travel packages?</div>
							  <div data-content>
								<p>No. Transportation is the responsibility of the client for this event.</p>
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

							  <div data-control>How does the complimentary night work?</div>
							  <div data-content>
								<p>Your base package includes check-in on Friday with check-out on Sunday. If you make your first payment ($125) on time you earn the complimentary night. You can use it to arrive a day early on Thursday or depart a day later on Monday.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What kind of access do I get with my concert ticket?</div>
							  <div data-content>
								<p>With your concert ticket, you gain entry into the Louisiana Superdome. You will have a designated seat to experience the Main Stage performances. Once you are in the Superdome, you can experience all the performances that night in the Superlounges on the Lounge level for no additional fee or ticket. Everyone MUST have a ticket to get into the Superdome.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>If I wait until the lineup is complete before I book my hotel room will you still have packages available?</div>
							  <div data-content>
								<p>In most cases you will be out of luck! This event breaks attendance records every year. Some people may attend the festival for the concerts, while others may attend for the surrounding activities and mingling opportunities. Regardless, you will need to book your package now. With our payment plans it helps you to reserve your package today and pay over time.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Must the entire group pay the $19.99 Reservation fee?</div>
							  <div data-content>
								<p>Yes. All prices are per person. The Reservation fee secures your spot on the package, and is separate from the package price.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What is included with V.I.P. vs V.V.I.P admission to the Boat Party?</div>
							  <div data-content>
								<p>V.I.P. tickets are general admission tickets to the cruise and only cover entrance to the cruise with no food or drinks included. V.V.I.P. includes a speedy admission onto the boat party, delicious food, and an open bar to get you right all while partying on the boat. Our packages include the V.I.P ticket. You can upgrade to the V.V.I.P. ticket for an additional $55 per person. The V.V.I.P. option is SOLD OUT!</p>
							  </div>

							</div><!-- end of accordion-->


							</div><!-- end of accordion group-->
                        	
                       


                        </div><!-- ./faqs -->




                        <?php echo $responsive_tabs["photos"]; ?>
						<div class="tab" aria-label="photos">
					   	<h3>Photos</h3>
                        		<div id="nanoGallery"></div>
                        </div>  <!-- ./photos -->




						<?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
                        	<h3>Buy Now</h3>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                        	<div class="cognito"></div>

                    	</div><!-- ./buynow -->



                    </div><!-- end of tabs -->

                </div><!-- end of colfull -->



		</div><!-- end of content -->


      	<section id="disclosure">
            <div class="disclosure">
            	<?php include 'includes/package-info-generic.inc.php'; ?><br/>
                <strong>Disclaimer</strong> | The term Essence Music Festival, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Essence Music Festival and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Essence Music Festival productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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


		//form validation
		$('#paypal_frm').validate({
			rules: {
				terms: {required: true},
				os3: {required: true},
				os2: {required: true},
				os5: {required: true}
			},
			messages: {
				terms: "You must agree to terms!",
				os3: "must add group size",
				os2: "must add group leader",
				os5: "must choose a package type"

			}
  		});


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
<script>Cognito.load("forms", { id: "5" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
