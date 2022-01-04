<?php

    ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"				=>"London To Paris Takeover",
		"subtitle"			=>"Bring in your 2023 New Year In London With Us!",
		"location"			=>"London and Paris",
		"date"				=>"Dec 31, 2022 – Jan 5, 2023",
        "date_start"		=>"Dec 31, 2022",
		"img_url"			=>"../../images/slides/splash-london-to-paris-cta.jpg",
		"img_alt"			=>"London to Paris Takeover 2022"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Varies Per Location",
			"soldout"           =>false,
			"img_url"			=>"../../images/slides/splash-london-to-paris.jpg",
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
				"Group of 3"			=>"$2550",
				"Group of 2"			=>"$2550",
				"Individual"			=>"$2850"
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
			"All Hotel Accommodations"					=> "checked",
			"All Ground Transfers (except Airport)"		=> "checked",
			"3 Dinners | 2 Lunch’s (Optional Meals Are Done As A Group)"=> "checked",
			"Travel Headsets (For Tours)"				=> "checked",
			"London Eye Optional Boat Takeover"			=> "checked",
			"Optional Hookah Food Break"				=> "checked",
			"Group Trip To Piccadilly Circus"			=> "checked",
			"Visit the Big Ben"							=> "checked",
			"Visit the Buckingham Palace"				=> "checked",
			"Lunch in the Eiffel Towers Of Paris"		=> "checked",
			"Visit the Louvre Museum"					=> "checked",
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
						<h3>We are taking you to London to Paris! </h3>

						<p>Trendy boutiques, stylish hotels, world-class theater, and regal history are just a few of the things to see in both London and Paris. What's a better way to bring in the new year than in the most historic and luxury destinations in Europe!</p>

						<p>This all-inclusive package has something for everyone. Whether you're looking for upscale boutiques or historic landmarks, there are plenty of options to choose. You won't want to miss out on its famous theatre productions or historic landmarks. <strong>Passports are required. Vaccinations will be required. </strong></p>

						<p><a data-href="#tabs-5" href="#" class="open-tab">Secure this vacation package now</a> to enjoy this amazing Italian experience.</p>

						<table class="itinerary">
							<caption>Destination and Sightseeing Itinerary</caption>
							<tbody>
								<tr>
									<td>Day 1: Arrive in London</td>
									<td>Meet up with other travelers. A group dinner is included. An optional group trip to the London Eye for a fireworks show.</td>
								</tr>
								<tr>
									<td>Day 2: London Sights & Sounds of the Day</td>
									<td>A trip on the London Eye is truly captivating. The attraction is one of the world's tallest observation wheels and has been London's number one visitor experience for over a decade. End the evening with an optional Hookah Food Break, Group Trip to Piccadilly Circus - The Mecca of the West End of London, and Shopping, Eating, and Live Music - includes transfers to location.</td>
								</tr>
								<tr>
									<td>Day 3: London + Free Day to Explore</td>
									<td>Visit Big Ben and Buckingham Palace. Feel the magic of the monarchy at the Queen's official address. Group Dinner is included. This is also a Free Day to explore London.</td>
								</tr>
								<tr>
									<td>Day 4: London to Paris</td>
									<td>We will travel to Paris by Eurostar (included). Group dinner is included. Another free day to explore the city.</td>
								</tr>
								<tr>
									<td>Day 5: Paris and the Eiffel Tower</td>
									<td>During the day, we will do a hop-on hop-off city bus tour. Group Tour of Paris by Boat. Group Lunch at the Eiffel Tower is included.</td>
								</tr>
								<tr>
									<td>Day 6: Paris and the Mona Lisa</td>
									<td>Start the day with an optional hop-on, hop-off bus tour. Visit the Louvre Museum and see the Mona Lisa. Group dinner is included.</td>
								</tr>
								<tr>
									<td>Day 7: Departing</td>
									<td>Going home. We will see you again next trip.</td>
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


								<h3>Hotels</h3>
                                
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
					    <h3>Frequently Asked Questions</h3>
                       	
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
					   	<h3>Photos</h3>
                        		<div id="nanoGallery"></div>
                        </div>  <!-- ./photos -->




						<?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
                        	<h3>Buy Now</h3>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
							<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="69"></script>
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
<script>Cognito.load("forms", { id: "69" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
