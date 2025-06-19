<?php
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

// Load the event configuration
$event_config = require 'config/events/conf_alumni.php';

// Access configuration data
$event = $event_config['event'];
$geolocation = $event_config['geolocation'];
$people = $event_config['people'];
$package_items = $event_config['package_items'];

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
					<p class="event-hero__subtitle"><?php echo $event["subtitle"]; ?></p>
					<p class="event-hero__location"><?php echo $event["location"]; ?></p>
					<div class="event-hero__buttons">
						<a data-href="#tabs-5" class="btn btn-red event-hero__btn open-tab">Book Now</a>
						<a class="btn btn-outlined btn--round event-hero__btn" href="/alumni-getaway-events">View Events</a>
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
                       
						<h2>HBCU Pride. Caribbean Vibes. One Epic Cruise.</h2>
						<p>YOLLO's Alumni Getaway Cruise is more than a vacation — it's an HBCU family reunion at sea, packed with culture, connection, and Caribbean adventure. From the sun-drenched shores of Costa Maya, Belize, and Cozumel, to the unforgettable themed parties, comedy shows, and high-energy events onboard, every moment is made to honor the legacy and spirit of HBCUs.</p> 

						<p>Whether you're a first-timer or a returning cruiser, solo traveler or squad captain, YOLLO has a package for you. This is your chance to create new memories, reconnect with old friends, and be part of something bigger.</p>

						<p> Want a peek at what's in store? <a href="/alumni-getaway-events">Check out the full week of events here.</a></p>

						<h3>Looking for an easy payment option?</h3>
						<p class="mb-40">Don't let budget constraints hold you back - take advantage of our convenient Flex Pay option to finance your dream getaway with easy monthly payments. From fun-filled days at sea to thrilling port adventures, this cruise promises to be the ultimate HBCU reunion experience. Let's celebrate the excellence of HBCUs together! <a data-href="#tabs-5" href="#" class="open-tab">Book this fantastic cruise package</a> right now!</p>

						<?php include 'includes/uplift-onpage.inc.php'; ?>
                        
                        <table class="itinerary mb-40">
							<caption>Cruise Itinerary</caption>
							<thead>
								<tr><th colspan="2" class="small">*All times are based on Central Time Zone.</th></tr>
							</thead>
							<tbody>
								<tr>
									<td>Sunday</td>
									<td>Departure: New Orleans 3:30PM</td>
								</tr>
								<tr>
									<td>Monday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Costa Maya 1PM-8PM</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Belize 8AM-5PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Cozumel 8AM-4PM</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: New Orleans 8AM</td>
								</tr> 
							</tbody>
							<tfoot>
								<tr>
								<td colspan="2"><a href="/alumni-getaway-events">View <?php echo $event["title"]; ?> Events</a></td>
								</tr>
							</tfoot>
						</table>

						
						<?php include 'includes/hbcu-ambass-ad.inc.php'; ?>
						

						


                    </div> <!-- ./ overview -->


                    <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">

                    	<h2 class="h4">Cruise</h2>
                        <?php foreach($geolocation as $hotel) :?>
                            <div class="hotel-grid">
                                    <div class="hg-img">
                                        <figure style="background:url(<?php echo $hotel['ship']; ?>); background-size: cover; background-position: center;"></figure>
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
								<tr><th colspan="2" class="small">*All times are based on Central Time Zone.</th></tr>
							</thead>
							<tbody>
								<tr>
									<td>Sunday</td>
									<td>Departure: New Orleans 3:30PM</td>
								</tr>
								<tr>
									<td>Monday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Costa Maya 1PM-8PM</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Belize 8AM-5PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Cozumel 8AM-4PM</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: New Orleans 8AM</td>
								</tr> 
							</tbody>
							<tfoot>
								<tr>
								<td colspan="2"><a href="/alumni-getaway-events">View <?php echo $event["title"]; ?> Events</a></td>
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
									<li>Light and Casual clothing. Linen and breathable cotton is best. Cozumel, Belize, and Cosya Maya are warm in December!</li>
									<li>Swimming trunks and bikini's</li>
									<li>Sun Block and Lotions</li>
									<li>Bug Repellant with DEET</li>
									<li>Medicines such as: Motion Sickness/Nausea (Dramamine), Tylenol/Advil, and Pepto Bismal/Imodium</li>
									<li>Light Walking Shoes and Sandals</li>
									<li>Various themed party outfit</li>
									<li>A night formal dinner outfit</li>
								</ul>
								
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

								<div data-control>Is there a charge for sodas on the cruise? </div>
								<div data-content>
								<p>Yes, beverages at the bar will require purchasing. However, there is an unlimited soda program provided by Carnival called Bottomless Bubbles. Pay one flat price for fountain soda and juice all cruise long. Prices are per day with an automatic 18% gratuity added at time of purchase of the program. Children 17 years and younger are $8.20 USD per day. Adults are $11.21 USD per day. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/3836/~/bottomless-bubbles-%28unlimited-soda-program" target="_blank"> Carnival Cruise FAQs</a></p>
								</div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

								<div data-control>What is FlexPay? </div>
								<div data-content>
								<p>FlexPay is a financial technology company that offers point-of-sale financing solutions for travel and other large purchases. It allows consumers to spread out the cost of their purchases over time through installment payments, often with fixed interest rates and no hidden fees.</a></p>
								</div>

							</div><!-- end of accordion-->
							
								<div class="accordion" data-accordion>

								<div data-control>How do I apply for FlexPay? </div>
								<div data-content>
								<p>Simply select 'YES' during registration to apply for Flexpay financing. Once your registration is paid and completed, we'll send you an application to spread out the cost of your cruise package with ease through FlexPay!</a></p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is there an open bar or Bottomless Bubbles for alcohol on the ship? </div>
								<div data-content>
								<p>Yes, there is an option called CHEERS, but it's limited to 15 drinks per day. CHEERS is an all-inclusive beverage program that allows guests to enjoy a wide range of alcoholic and non-alcoholic beverages by paying a flat daily rate. The cost is $82.54 USD per person. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/1106" target="_blank"> Carnival Cruise FAQs</a></p>  
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Should I set my watch to match Carnival Liberty's time or what's called SHIP TIME? </div>
								<div data-content>
									<p>Yes, this prevents you from  missing the ship during our port days. Carnival Liberty is on Central or CST.</p>
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
								<p>To reserve a package each group member pays the <strong>$100.00</strong> per person fee <strong> at sign-up</strong>. The first payment of <strong>$200</strong> per person is due on or before  <strong>June 15, 2025</strong>.
								The second payment of <strong>$400</strong> per person is due on or before  <strong>July 15, 2025</strong>.
								The final payment (remaining balance) is due on or before <strong>August 15, 2025</strong>. If the announced payment dates have passed contact us for our current payment plan.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Are there any other charges associated with the cruise?</div>
								<div data-content>
								<p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $16.00 per day, but you may want to leave more depending on your service. In most cases gratuity is added to your final bill, so check with the cruiseline front desk on the ship before returning back to New Orleans.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What port are we departing from and what time do I need to be there?</div>
								<div data-content>
								<p>The Carnival Liberty sails from Port New Orleans. We suggest arriving no later than 2:00 PM.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Must the entire group pay the $100.00 Reservation fee?</div>
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

	     	<?php include 'includes/package-info-generic.inc.php'; ?>

	          <p><strong>Disclaimer</strong> | YOLLO Group Services wishes to clarify that "Alumni Getaway" and "Carnival Cruise Lines," including their respective graphics and logos, are registered trademarks of their owners and are used solely to factually describe the event. YOLLO Group Services is not associated with, authorized by, or acting on behalf of Carnival Cruise Lines. This event is independently organized by YOLLO Group Services, which is not affiliated with any box office, promoter, venue, theatre, stadium, hotel, sporting team, or sporting association mentioned on this website. All copyrights, trademarks, and trade names are used for descriptive purposes only and do not imply endorsement or permission. YOLLO Group Services provides access to tickets and travel packages through its network of contacts and various sources.</p>
			  
			  <p><strong>* Brand Ambassador Program:</strong> Earn $50-$100 per referral and compete for a $400 bonus! Open to 21+ U.S. residents. Ambassadors work as independent contractors and receive payment within 14 days of confirmed bookings. See complete <a title="HBCU Alumni Getaway Cruise Ambassador Program" href="/alumni-ambassador-program">Terms & Conditions</a> for details and to apply.</p>
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
			   photoset:'72177720324731688',

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