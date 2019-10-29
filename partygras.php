<?php

ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"						=>"Party Gras: Bottles and Beads",
	"subtitle"					=>"Come Party For Those BEADS!",
	"location"					=>"Chattanooga, TN",
	"date"						=>"October 12, 2019",
    "date_start"				=>"October 12, 2019",
	"img_url"				 	=>"../../images/slides/splash-partygras-cta.jpg",
	"img_alt"				 	=>"Day Getaway Cruise"
);

$geolocation = array(
	"cruise1"=> array(
		"title" 		=>"Southern Belle Riverboat",
		"ship"			=>"https://media-cdn.tripadvisor.com/media/photo-s/05/21/4d/e3/southern-belle-riverboat.jpg",
		"soldout"		=> false,
		"img_url"		=>"https://media-cdn.tripadvisor.com/media/photo-s/05/21/4d/e3/southern-belle-riverboat.jpg",
        "address"		=>"1620, 151 Riverfront Pkwy",
        "location"		=>"Chattanooga, TN 37402",

	)

);

$people = array(
		"diamond"=> array(
			"Cruise/Live Performances/Transportation" 	=>"$99",
			"Cruise/Live Performances"			        =>"$75",
			"Cruise Only"			                    =>"$45",
			"Live Performances Only"			        =>"$35"
		),

		"options"=>array(
			"Hotel Only" =>"$150 (One night)"
		),

);


$package_items = array(
	"diamond_items" => array(
		"Crowd Control by: DJ Dre Smoove"		=> "checked",
		"Poets: Georgia Me and Friends"						    => "checked",
		"Comedians: Bennie Mac and Friends"		=> "checked",
		"Live Performances by: R&B Artist Charles Reed and Friends"		=> "checked",
		"Meet and Greet with Free Margaritas while they last"						=> "checked",
		"Cruise the Tennessee River"							=> "checked"
		
	),

	"emerald_items" => array(
		""
	),

	"Hotel Only" =>""
);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['partygras']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['partygras']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['partygras']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['partygras']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

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
                        <h3>Party Gras is BACK and in Tennessee</h3>

                        <p>After an amazing 2018 party cruise, Party Gras: Bottles and Bead is returning for a sixth installment. Last year we turned it up to the max, but this year we are making everything bigger and better than ever. We are taking this party on the road. Come party aboard the Southern Belle for an exclusive Riverboat cruise with amazing views of Chattanooga, TN.</p> 
                          
                        <p>This will be a FULL day of good music, adult drinks, mingling, and fun for everyone attending. The boat features three (3) party decks with multiple DJ's. Live entertainment will feature spoken word artists, comedians, and performances by R&amp;B/Hip Hop artist! FREE margaritas will be on deck at our welcome reception! <strong>This event WILL SELL OUT quickly</strong>, so purchase your tickets today. For questions and tickets call: <strong>(888) 946-9655 </strong> or <a data-href="#tabs-5" class="open-tab">purchase your tickets online now.</a></p>
                       	
						<p>Don't wait as this event will fill up fast, book this event today. We are also providing hotel accommodations via the Holiday Inn and Suites Downtown Chattanooga at a special discounted rate of <strong>$129</strong>. You can <a target="_blank" href="https://www.ihg.com/holidayinn/hotels/us/en/chattanooga/chadt/hoteldetail?fromRedirect=true&qSrt=sBR&qIta=99801505&icdv=99801505&qSlH=CHADT&qGrpCd=PG2&setPMCookies=true&qDest=434%20Chestnut%20Street,%20Chattanooga,%20TN,%20US&srb_u=1">secure your hotel room</a> today by visiting the host properties website. </p>
                        
                        <p><strong>Live show:</strong> 2PM- 5PM<br>
						<strong>Cruise Boarding:</strong> 10:30PM<br> 
						<strong>Party time:</strong> 11PM - 1:00AM</p>
						<p style="color:dimgrey">*All times are based on Eastern Time Zone.</p>
    

                    </div> <!-- ./ overview -->


                    <?php echo $responsive_tabs["price"]; ?>
					<div class="tab" aria-label="price">

                        <h3>Cruise</h3>
						
                        <?php foreach($geolocation as $hotel) :?>
                        <div class="hotel-grid">
                            <div class="hg-img">
                                <figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
                            </div>
                            <div class="hg-body">
                                <p class="hg-title"><?php echo $hotel["title"]; ?> 
                                <?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>

                                <address>
                                    Departing from:<br>
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

						<?php if(count($geolocation["cruise1"]) > 1) :?>
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
						<?php endif; ?>

                                
						</div><!-- price table container-->

                    </div><!-- ./ price -->



                    <?php echo $responsive_tabs["faqs"]; ?>
					<div class="tab" aria-label="faqs">

                        <h3>Frequently Asked Questions</h3>
                        
                        
                        <div data-accordion-group>
                        
                        	
                        	<div class="accordion open" data-accordion>

							  <div data-control>What is the official host property for the Party Gras?</div>
							  <div data-content>
								  <p>The host property is the Holiday Inn and Suites Downtown Chattanooga. The address is 434 Chestnut Street Chattanooga, TN, 37402. You can <a target="_blank" href="https://www.ihg.com/holidayinn/hotels/us/en/chattanooga/chadt/hoteldetail?fromRedirect=true&qSrt=sBR&qIta=99801505&icdv=99801505&qSlH=CHADT&qGrpCd=PG2&setPMCookies=true&qDest=434%20Chestnut%20Street,%20Chattanooga,%20TN,%20US&srb_u=1">book a room at a discounted price</a> of $129 today while roooms are available.</p>
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

							  <div data-control>What time is the bus departing from Birmingham? </div>
							  <div data-content>
								  <p>The charter will depart Birmingham at 9 am Saturday October 12, 2019. The charter will leave Chattanooga, TN at 10 am on Sunday, October 13, 2019. Please note the 10 am departure from Chattanooga is Eastern Standard Time. If you haven’t please secure your room at the host property which is the Holiday Inn and Suites Downtown Chattanooga. Our guest will receive a special rate if you utilize the link on the page. If you travel via the bus YOU will need to reserve a room because the bus does not leav until the next morning.  </p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>Why do I have to secure my own hotel accommodations?</div>
							  <div data-content>
								  <p>We want to give each individual the choice to secure their own accommodations for this exciting event! However we are providing a great <a target="_blank" href="https://www.ihg.com/holidayinn/hotels/us/en/chattanooga/chadt/hoteldetail?fromRedirect=true&qSrt=sBR&qIta=99801505&icdv=99801505&qSlH=CHADT&qGrpCd=PG2&setPMCookies=true&qDest=434%20Chestnut%20Street,%20Chattanooga,%20TN,%20US&srb_u=1">discounted price for booking at the host hotel property</a>. One advantage of booking with the host property is it will grant access to other events for the weekend, such as the meet and greet reception.  </p>
							  </div>

							</div><!-- end of accordion-->	
                        				
										
							<div class="accordion" data-accordion>

							  <div data-control>Where is the cruise being hosted? </div>
							  <div data-content>
								<p>The cruise is being hosted on the Southern Belle riverboat. It's located at 201 Riverfront Pkwy, Chattanooga, TN 37402 </p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Where will the bus depart from?</div>
							  <div data-content>
								<p>We will depart from Birmingham, Alabama at 10AM October 12th and depart from Chattanooga at 10AM on October 13th.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Will refreshments be served on the bus?</div>
							  <div data-content>
								<p>Yes, margaritas will be on DECK!</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>After I purchase tickets online how do I receive my tickets? </div>
							  <div data-content>
								<p>Your tickets are mailed to the email address provided during the purchasing process. </p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What time is boarding for the cruise and when does the cruise start?</div>
							  <div data-content>
								<p>Boarding starts at 10:30PM. The boat will leave at 11PM </p>
								<p style="color:dimgrey">*All times are based on Eastern Time Zone.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>What time is the comedy/poetry and live performances show?</div>
							  <div data-content>
								<p>The live shows will be from 2PM - 5PM </p>
								<p style="color:dimgrey">*All times are based on Eastern Time Zone.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What is the address for boarding the boat?</div>
							  <div data-content>
								<p>201 Riverfront Pkwy, Chattanooga, TN 37402</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What form of entertainment will be provided during the cruise?</div>
							  <div data-content>
								<p>The cruise will feature DJ's on 2 decks of the Southern Belle with the top deck being left for your river viewing pleasure.</p>
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

							  <div data-control>Is the evening cruise and comedy/poetry/live performances one combined event?</div>
							  <div data-content>
								<p>No, you can purchase tickets only for the cruise or live performances. The cruise will begin boarding at 10:30PM while the comedy/poetry/live performances will start at 2PM.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>Do I have to ride the charter bus to attend this event?</div>
							  <div data-content>
								<p>No, you can purchase tickets only for the cruise or comedy show.</p>
							  </div>

							</div><!-- end of accordion-->
							
			


						</div><!-- end of accordion group-->


            </div> <!-- ./ faqs -->


			<?php /* ?>
            <?php echo $responsive_tabs["photos"]; ?>
			<div class="tab" aria-label="photos">
                 <div id="nanoGallery"></div>
            </div><!-- ./ photos -->
			<?php */ ?>

            <?php echo $responsive_tabs["buynow"]; ?>
			<div class="tab" aria-label="buy">
                
                <h3>Buy Now</h3>
                
                <?php /* ?>

                <div class="pay-form">
                	<p>Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                	
                	<div class="cognito"></div>

                </div>
                <!-- end of pay-form -->
                <?php */ ?>
                
				
                
                <div class="mb-20" id="eventbrite-widget-container-53987279406"></div>
                
                <hr class="mt-20" />
                
               
                <h4>Hotel Accommodations</h4>
                <img style="width:15rem; float:left; margin-right:2rem" src="https://t-ec.bstatic.com/images/hotel/max1024x768/191/19191223.jpg" />
				<p class="mb-10"><strong>Holiday Inn &amp; Suites Chattanooga Downtown</strong></p>
               	<p>For anyone needing hotel accommodations you can  <a target="_blank" href="https://www.ihg.com/holidayinn/hotels/us/en/chattanooga/chadt/hoteldetail?fromRedirect=true&qSrt=sBR&qIta=99801505&icdv=99801505&qSlH=CHADT&qGrpCd=PG2&setPMCookies=true&qDest=434%20Chestnut%20Street,%20Chattanooga,%20TN,%20US&srb_u=1">secure your hotel room</a> at a special discounted rate of <strong>$129</strong>. The special rate ends September 15, 2019.</p>
               

				
                
                


    		</div><!-- ./ buy now -->

								</div><!-- end of responsive-tabs -->



							</div><!-- end of colfull -->


	     <div class="disclosure">

	     		<?php include 'includes/package-info-generic.inc.php'; ?><br/>

	          <strong>Disclaimer</strong> | The term Party Gras and Bottles and Beads, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Southern Belle Riverboat and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Southern Belle Riverboat productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
				os3: "must add group size",
				os2: "must add leader",
				os5: "must choose a package type",
				terms: "You must agree to terms!"
			}
  		});


			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157660233463388',

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
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
                            <script>Cognito.load("forms", { id: "11" });</script>
                            
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<script type="text/javascript">
	var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '53987279406',
		iframeContainerId: 'eventbrite-widget-container-53987279406',

		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>