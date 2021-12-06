<?php

    ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"				=>"Essence Music Festival 2022",
		"subtitle"			=>"The BEST girls or guys getaway trip!",
		"location"			=>"New Orleans, LA",
		"date"				=>"July 1-3, 2022",
        "date_start"		=>"July 1, 2022",
		"img_url"			=>"../../images/slides/splash-essence-cta.jpg",
		"img_alt"			=>"Essence Festival 2017"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Hilton Riverside",
			"soldout"           =>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/06/45/13/7e/hilton-new-orleans-riverside.jpg",
            "address"			=>"2 Poydras St",
            "location"			=>"New Orleans, LA 70130",
		),

		"hotel2"=> array(
			"title" 			=>"Sheraton New Orleans Hotel",
			"soldout"	        =>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/10/0b/10/bf/sheraton-new-orleans.jpg",
            "address"			=>"500 Canal St",
            "location"			=>"New Orleans, LA 70130",
		)/*,
		
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
				"Group of 4" 			=>"$1325",
				"Group of 3"			=>"$1440",
				"Group of 2"			=>"$1555",
				"Individual"			=>"$2500"
			),

			"emerald"=> array(
				"Group of 4" 			=>"$1075",
				"Group of 3"			=>"$1205",
				"Group of 2"			=>"$1310",
				"Individual"			=>"$1945"
			)

	);

	$package_items = array(
		"diamond_items" => array(
			"Hotel Accommodations (Fri-Sun)"			        => "checked",
			"One night concert ticket (Loge Section)"	        => "checked",
			"All White Party Cruise "			                => "checked",
			"Mid-Day Comedy Show (Sunday)"				        => "checked",
			"Black Film Review (Sunday)"				        => "checked",
			"Speak Easy Poetry Show (Sunday)"				    => "checked",
			"Welcome to NOLA party (Friday)"				    => "checked",
			"Complimentary Additional Night*"			        => "checked",
			"Additional nights: $349 plus tax and fees"	        => "checked",
			"Additional concert nights (Loge Section): $185"	=> "checked",
			"YOLLO Swag Bag"							        => "checked"
		),

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
		)
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
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
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
						<h3>Join us for the 28th Annual Essence Festival Weekend</h3>

                        <p>It's amazing but this year will mark the 28th annual Essence Music Festival. This annual mega event is filled with concerts, seminars and celebrities, all sponsored by Essence Magazine. If you are looking for parties, concerts, party cruise, along with more celebrities than you can handle, then you should <a data-href="#tabs-5" class="open-tab">book with us today!</a> We are the #1 source for Essence Festival Weekend activities in 2022. </p>

						<h4>The Original All-White Mid-Day Cruise Party </h4>

						<p>This is the original All-White cruise party and the event everyone talks about during Essence Fest weekend! This is the 17th annual Mid-Day Cruise Party, happening on the biggest boat in New Orleans, Louis Armstrong, for your cruising delight. Enjoy a multi-level boat cruising the Mighty Mississippi River, while listening to the best Hip-Hop and R&amp;B music. The theme is "All White" attire preferred, but not required for this cruise.</p>

						<h4>The Mid-Day Comedy Show</h4>
						<p>If you are ready to bust a gut, the 10th annual Mid-Day Comedy Show is the event for you. Our comedian's, like years past, will have you in stitches. If you are looking for good food, great drinks, and lots of laugh, this is the event you cannot miss. Don't think we are going to let you down with our 2022 lineup! </p>

						<p>Do the right thing and <a data-href="#tabs-5" class="open-tab">Book now</a> with YOLLO Group Services Inc. and allow us to give you the best travel experience while in New Orleans!</p>



                        </div> <!-- ./overview -->




                        <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">


								<h3>Hotels</h3>
                                
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

							  <div data-control>Does the price listed take care of hotel reservations for all members in either package or only one person?</div>
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

							  <div data-control>Where are the concert tickets located in the Superdome? </div>
							  <div data-content>
								<p>The tickets provided in your package are in the Loge section. This section is in the middle of the Superdome. You can upgrade your seat and get closer for a fee. Please ask an associate for more details.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What are the payment due dates for Essence Packages?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $29.99 per person fee. The first payment of $125 per person is due on or before December 16, 2021. The second payment of $250 per person is due on or before January 16, 2022. The final payment (remaining balance) is due on or before March 01, 2022. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts.</p>
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
								<p>Yes, additonal night concert tickets are $185 per night. Just let us know and we can add it to your invoice.</p>
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

							  <div data-control>Must the entire group pay the $29.99 Reservation fee?</div>
							  <div data-content>
								<p>Yes. All prices are per person. The Reservation fee secures your spot on the package, and is separate from the package price.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What is included with V.I.P. vs V.V.I.P admission to the Boat Party?</div>
							  <div data-content>
								<p>V.I.P. tickets are general admission tickets to the cruise and only cover entrance to the cruise with no food or drinks included. V.V.I.P. includes a speedy admission onto the boat party, delicious food, and an open bar to get you right all while partying on the boat. Our packages include the V.I.P ticket. You can upgrade to the V.V.I.P. ticket for an additional $95 per person.</p>
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
<script>Cognito.load("forms", { id: "58" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
