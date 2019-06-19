<?php

ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"						=>"Daytox Party Cruise",
	"subtitle"					=>"Black Beach Weekend 2019",
	"location"					=>"Biloxi, MS",
	"date"						=>"April 13, 2019",
    "date_start"                =>"April 13, 2019",
	"img_url"				 	=>"../../images/slides/splash-bbw-cta.jpg",
	"img_alt"				 	=>"Daytox Party Cruise"
);

$geolocation = array(
	"cruise1"=> array(
		"title" 		=> "Betsy Ann Riverboat",
		"address"		=> "173 Beach Blvd",
		"ship"			=> "//media.graytvinc.com/images/690*552/betsy+ann1.jpg",
		"location"		=> "Biloxi, MS",
		"soldout"		=> false,
		"img_url"		=> "//media.graytvinc.com/images/690*552/betsy+ann1.jpg"

	),

);

$people = array(
		"diamond"=> array(
			"Early Bird Tickets" 		=>"$25",
			"General Admission"			=>"$40",
			"Day of Tickets"			=>"$65",
		),

		"emerald"=> array(
			""
		),

		"options"=>array(
			"Hotel Only" =>"$150 (One night)"
		),

);


$package_items = array(
	"diamond_items" => array(
		"Crowd Control by: DJ Dre Smoove"		=> "checked",
		" Bikini Contest"							=> "checked",
		"Cruise the Gulf"						=> "checked"
		
	),

	"emerald_items" => array(
		""
	)

);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['blackbeach']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['blackbeach']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['blackbeach']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['blackbeach']['canonical']; ?>" rel="canonical" />
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
                        <h3>Daytox Party Cruise during Black Beach Weekend in Biloxi, MS</h3>

						<p>Biloxi will be LIT this Spring because YOLLO is taking over Black Beach Weekend with the Daytox Party Cruise! This event is the Drip of Drop edition, the an ultimate party cruise experience. This cruise will be so LIT we are cruising twice the same day to accommodate the crowds.</p>
							
						<p>Ladies and gentlemen come dressed to impress and ready for a LIT event as we will be giving away $400 in cash prizes! Come partake in 26 miles of beach, vendors, drinks, special guests, and the livest one-of-a-kind cruise on the Gulf Coast during Black Beach Weekend.</p>
                       	
						<p>Don't wait to get your tickets because both cruises will fill up fast. You will sail with the livest from across the country. This boat is located at 173 Beach Blvd, Biloxi, MS 39530. Please pay attention to the cruise time you selected.</p>
						
						<p class="mb-10"><strong>Cruise #1: Mid-Day</strong></p>
						<ul>
							<li>Boarding: 11:45AM</li>
							<li>Cruise Times: 12PM - 2PM</li>
						</ul>
				
						<p class="mb-10"><strong>Cruise #2: GET LIT Part 2</strong></p>
						<ul>
							<li>Boarding: 3:45PM</li>
							<li>Cruise Times: 4PM - 6PM</li>
						</ul>
						
						<p class="mb-10"><strong>Tickets</strong></p>
						<ul>
							<li>Early Bird Tickets: $25</li>
							<li>General Admission: $40</li>
							<li>Day of Tickets: $65</li>
						</ul>

						<p style="color:dimgrey">*All times are based on Central Time Zone.</p>
    

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


						<?php if(isset($geolocation["cruise2"])) :?>
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

                    </div><!-- ./ price -->



                    <?php echo $responsive_tabs["faqs"]; ?>
					<div class="tab" aria-label="faqs">

                        <h3>Frequently Asked Questions</h3>
                        
                        
                        <div data-accordion-group>
                        
							<div class="accordion" data-accordion>

							  <div data-control>Are there ID requirements or an age limit to enter the event? </div>
							  <div data-content>
								<p> Yes, you have to be 19 to enter 21 to drink.</p>
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

							  <div data-control>Do I have to bring my printed ticket to the event?</div>
							  <div data-content>
								<p> Yes, print your ticket and bring it with you for fast boarding.</p>
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

							  <div data-control>What is the refund policy?</div>
							  <div data-content>
								<p> All sales are final and non-refundable.</p>
							  </div>

							</div><!-- end of accordion-->
							
										
							<div class="accordion" data-accordion>

							  <div data-control>Where is the cruise being hosted? </div>
							  <div data-content>
								<p>The cruise is being hosted on the Betsy Ann riverboat.</p>
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
								<p class="mb-10"><strong>Cruise #1: Mid-Day</strong></p>
								<ul>
									<li>Boarding: 11:45AM</li>
									<li>Cruise Times: 12PM - 2PM</li>
								</ul>

								<p class="mb-10"><strong>Cruise #2: GET LIT Part 2</strong></p>
								<ul>
									<li>Boarding: 3:45PM</li>
									<li>Cruise Times: 4PM - 6PM</li>
								</ul>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What is the address for boarding the boat?</div>
							  <div data-content>
								<p>173 Beach Blvd, Biloxi MS</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What form of entertainment will be provided during the cruise?</div>
							  <div data-content>
								<p>The cruise will feature DJ Dre Smooth on the 1's and 2's and various contest totaling to $400 prize money.</p>
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
                
				
                
                <div class="mb-20" id="eventbrite-widget-container-53575414507"></div>
                

    		</div><!-- ./ buy now -->

			</div><!-- end of responsive-tabs -->



		</div><!-- end of colfull -->


	     <div class="disclosure">

	     		<?php include 'includes/package-info-generic.inc.php'; ?><br/>

	          <strong>Disclaimer</strong> | The term Black Beach Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Southern Belle Riverboat and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Southern Belle Riverboat productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
		eventId: '53575414507',
		iframeContainerId: 'eventbrite-widget-container-53575414507',

		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>