<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"					=> "HBCU Alumni Getaway 2024",
	"subtitle"				=> "The LIVEST HBCU Alumni party at SEA!",
	"location"				=> "Cabo San Lucas & Ensenada",
	"date"					=> "Dec 2-7 2024",
    "date_start"			=> "December 2, 2024",
	"img_url"				=> "../../images/slides/splash-alumni-cta.jpg",
	"img_alt"				=> "Alumni Getaway"
);

$geolocation = array(
	"cruise1"=> array(
		"title" 			=> "Carnival Firenze",
		"ship"				=> "https://media-cdn.tripadvisor.com/media/photo-m/1280/2a/56/6b/92/caption.jpg",
		"location"		    => "(Long Beach) Los Angeles",
        "address"			=> "231 Windsor Way, Long Beach, CA 90802",
		"soldout"			=> false,
		"img_url"			=> "https://media-cdn.tripadvisor.com/media/photo-m/1280/2a/56/6b/92/caption.jpg"

	),

);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=> "SOLD-OUT",
			"Group of 3"			=> "$975",
			"Group of 2"			=> "$1,200",
			"Individual"			=> "$1,450"
		),

		"emerald"=> array(
			""
		),

		"options"=>array(
			"Hotel Only" => "$1245 (Weekend)"
		),

);

$package_items = array(
	"diamond_items" => array(
		"5 Day/4 Night Cruise Departing From Long Beach (Los Angeles)"		=> "checked",
		"All You Can Eat aboard Ship"								        => "checked",
		"Bust a Gut Alumni Getaway Comedy Series"					        => "checked",
		"Alumni Getaway Private Toga at Sea Party"		            => "checked",
		"Word Easy Private Spoken Word Show"						        => "checked",
		"Alumni Getaway Private Welcome Reception"					        => "checked",
		"Alumni Getaway Private Meet and Greet Social"					    => "checked",
		"Alumni Getaway Exclusive Boots and Dukes Party"		        	=> "checked",
		"Alumni Getaway Single Port Group Shore Excursion"		        	=> "checked",
				"Alumni Getaway Shades of Chocolate Fun and Sexy Party"				        => "checked",
		"Alumni Getaway Farewell Party"									    => "checked",
		"Alumni Getaway Private Black Film Review"					        => "checked",
		"Alumni Getaway Rep your HBCU Party"					            => "checked",
		"YOLLO Gift Bag"											        => "checked"
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
    <title><?php echo $metas['alumni']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['alumni']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['alumni']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['alumni']['canonical']; ?>" rel="canonical" />
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
                       
						<h2 class="h4">Discover Coastal Paradise: HBCU Alumni Getaway is heading to Cabo San Lucas and Ensenada!</h2>
						<p>Experience the ultimate coastal adventure with our incredible cruise to Cabo San Lucas and Ensenada, Mexico! Embark on a journey filled with white sandy beaches, crystal-clear turquoise waters, and vibrant local culture. Indulge in the breathtaking beauty of the famous El Arco rock formation in Cabo San Lucas, or explore the charming coastal town of Ensenada, known for its delicious cuisine and world-renowned wineries. Whether you're seeking relaxation or adventure, this cruise promises to create lifelong memories. Don't miss out on this unforgettable voyage. Book your ticket today and let us take care of the rest!</p>

						<p>YOLLO offers a variety of seaside activities and entertainment. We have comedy, spoken word, film nights, as well as several theme parties and a spades tournament. For your enjoyment, our DJs can be found playing in various clubs and decks throughout the ship.</p>

						<p>This package should not be overlooked. <a data-href="#tabs-5" href="#" class="open-tab">Book this fantastic cruise package</a> right now! Spaces for this exciting event are limited, so sign up TODAY!</p>

						<?php include 'includes/uplift-onpage.inc.php'; ?>
                        
                        <table class="itinerary">
							<caption>Cruise Itinerary</caption>
							<thead>
								<tr><th colspan="2" class="small">*All times are based on Eastern Time Zone.</th></tr>
							</thead>
							<tbody>
								<tr>
									<td>Monday</td>
									<td>Departure: Long Beach (Los Angeles) 4PM</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Cabo San Lucas 10AM-6PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Ensenada, 8AM-5PM</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: Long Beach (Los Angeles) 8AM</td>
								</tr> 
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2"><a href="/alumni-getaway-events">View Event Listing</a></td>
								</tr>
							</tfoot>
						</table>

						


                    </div> <!-- ./ overview -->


                    <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">

                    	<h2 class="h4">Cruise</h2>
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
                        
                        <table class="itinerary">
							<caption>Cruise Itinerary</caption>
							<thead>
								<tr><th colspan="2" class="small">*All times are based on Eastern Time Zone.</th></tr>
							</thead>
							<tbody>
								<tr>
									<td>Monday</td>
									<td>Departure: Long Beach (Los Angeles) 4PM</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Cabo San Lucas 10AM-6PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Ensenada, 8AM-5PM</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: Long Beach (Los Angeles) 8AM</td>
								</tr> 
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2"><a href="/alumni-getaway-events">View Event Listing</a></td>
								</tr>
							</tfoot>
						</table>

                      <hr />

					  <h2 class="h4">Price</h2>
                                    
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

						<h2 class="h4">Frequently Asked Questions</h2>
                        
                        
                        <div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

							  <div data-control>Does the price listed take care of cruise reservations for all members or only one person?</div>
							  <div data-content>
								
								<p>All prices listed are per person. Under the package prices description, all amenities included in your package are per person and includes one (1) cabin for the group.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What are some things you suggest I buy for this trip?</div>
							  <div data-content>
								<p>Here are a some suggested items to consider:</p>
									
								<ul>
									<li>Light and Casual clothing. Linen and breathable cotton is best. Cabo San Lucas and Ensenada are warm in December!</li>
									<li>Swimming trunks and bikini's</li>
									<li>Sun Block and Lotions</li>
									<li>Bug Repellant with DEET</li>
									<li>Medicines such as: Motion Sickness/Nausea (Dramamine), Tylenol/Advil, and Pepto Bismal/Imodium</li>
									<li>Light Walking Shoes and Sandals</li>
									<li>Ocean Blue party outfit</li>
									<li>A night formal dinner outfit</li>
								</ul>
								
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

								<div data-control>Is there a charge for sodas on the cruise? </div>
								<div data-content>
								<p>Yes, beverages at the bar will require purchasing. However, there is an unlimited soda program provided by Carnival called Bottomless Bubbles. Pay one flat price for fountain soda and juice all cruise long. Prices are per day with an automatic 18% gratuity added at time of purchase of the program. Children 17 years and younger are $6.95 USD per day. Adults are $9.50 USD per day. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/3836/~/bottomless-bubbles-%28unlimited-soda-program" target="_blank"> Carnival Cruise FAQs</a></p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is there an open bar or Bottomless Bubbles for alcohol on the ship? </div>
								<div data-content>
								<p>Yes, there is an option called CHEERS, but it's limited to 15 drinks per day. CHEERS is an all-inclusive beverage program that allows guests to enjoy a wide range of alcoholic and non-alcoholic beverages by paying a flat daily rate. The cost prior to your cruise is $69.95 USD per person, per day plus 18% gratuity. If you decide you want the program once on board, you can sign up for CHEERS at a bar the cost is $65.95 USD per person, per day plus 18% gratuity. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/1106" target="_blank"> Carnival Cruise FAQs</a></p>  
								</div>

							</div><!-- end of accordion-->




							<div class="accordion" data-accordion>

							  <div data-control>How do I pay for this package?</div>
							  <div data-content>
								<p>Navigate to the Buy Now tab and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>
							  </div>

</div><!-- end of accordion-->




							<div class="accordion" data-accordion>

							  <div data-control>What is the difference between a inside versus outside cabin?</div>
							  <div data-content>
								<p>Inside cabins are located on the inside of a cruise ship and have no windows. Outside cabins, often known as ocean view cabins, are almost identical in size and amenities but have either a porthole or picture window. </p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>When are the payments due?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $100.00 per person fee <strong> at sign-up</strong>. The first payment of <strong>$250</strong> per person is due on or before  <strong>February 1, 2024</strong>.
								The second payment of <strong>$300</strong> per person is due on or before  <strong>April 1, 2024</strong>.
								The final payment (remaining balance) is due on or before <strong>June 1, 2024</strong>. If the announced payment dates have passed contact us for our current payment plan.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Are there any other charges associated with the cruise?</div>
							  <div data-content>
								<p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $14.50 per day, but you may want to leave more depending on your service. In most cases gratuity is added to your final bill, so check with the cruiseline front desk on the ship before returning back to Long Beach (Los Angeles).</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What port are we departing from and what time do I need to be there?</div>
							  <div data-content>
								<p>The Carnival Paradise sails from Port Tampa Bay. We suggest arriving no later than 2:00 PM.</p>
							  </div>

							</div><!-- end of accordion-->

							
							<div class="accordion" data-accordion>

							  <div data-control>Must the entire group pay the $29.99 Reservation fee?</div>
							  <div data-content>
								<p>Yes. All prices are per person. The Reservation fee secures your spot on the package, and is separate from the package price. </p>
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


						</div><!-- end of accordion group-->


            </div> <!-- ./ faqs -->



                    <?php echo $responsive_tabs["photos"]; ?>
						<div class="tab" aria-label="photos">
								<div id="nanoGallery"></div>
						</div><!-- ./ photos -->     


                    <?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
											
							<h2 class="h4">Buy Now</h2>

                            <div class="pay-form">
                                <p>Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                                
								<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="81"></script>

                            </div><!-- end of pay-form -->


						</div><!-- ./ buy now -->

			    </div><!-- end of responsive-tabs -->



			</div><!-- end of colfull -->


	     <div class="disclosure">

	     	<?php include 'includes/package-info-generic.inc.php'; ?><br/>

	          <strong>Disclaimer</strong> | The term Alumni Getaway, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157667384081578',

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

</body>
</html>