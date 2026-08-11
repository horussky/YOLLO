<?php
	include 'includes/functions.inc.php';
	include 'includes/bootstrap.inc.php';
	$config = loadEvent('conf_pier-pressure.php');
	extract($config);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['description']; ?>" />
    <meta name="keywords" content="<?php echo $metas['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <meta property="fb:pages" content="117420764961518" />
    <link rel="icon" href="favicon-192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
    <link href="<?php echo asset_url('css/global.css'); ?>" rel="stylesheet" type="text/css" />
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
					<a data-href="#tabs-5" class="btn btn-red event-hero__btn open-tab">Book Now</a>
					<!--<div class="event-hero__buttons">
						<a data-href="#tabs-5" class="btn btn-red event-hero__btn open-tab">Book Now</a>
						<a class="btn btn-outlined btn--round event-hero__btn" href="/alumni-getaway-events">View Events</a>
					</div> -->
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
                       
						<h2>Pier Pressure: The Bahamas Getaway</h2> 
						
						<p>Escape the ordinary with YOLLO Group Services aboard the incredible Carnival Freedom for Pier Pressure! This isn't just a cruise; it's a 5-day experience packed with nonstop nightlife, amazing food, and tropical vibes. Sail away to the beautiful Bahamas and soak up the beachside cocktails at Carnival's stunning new destination, Celebration Key.</p>

						<h3>While Onboard:</h3>
							<ul>
								<li><strong>The Activities:</strong> Comedy Shows, DJs, Theme Parties and Daytime fun.</li>
								<li><strong>The Eats & Drinks:</strong> Endless food options and Tropical Cocktails.</li>
								<li><strong>The Vibe:</strong> Gorgeous Bahamas setting with a high-energy crowd.</li>
							</ul>

						<p>	Our travelers always leave asking, “When's the next cruise?” Grab your crew, pack your fits, and get ready to catch vibes in the Bahamas with YOLLO.</p>

							<p>PIER PRESSURE is calling… are you coming?</p>
						
						<h3>Looking for an easy way to pay?</h3> 
						
						<p>Our Flex Pay option lets you lock in your spot now and enjoy simple monthly payments that fit your budget. Just choose Flex Pay when booking!</p>

						<?php include 'includes/uplift-onpage.inc.php'; ?>
                    
                        <div class="table-card mb-20">
							<div class="tz-note">*All times are based on Central Time Zone.</div>
							<table>
								<tbody>
									<tr class="depart-row">
										<td class="day">Saturday</td>
										<td class="stop"><span class="dot dot-depart"></span>Departure: Canaveral (Orlando) 3:30PM</td>
									</tr>
									<tr class="port-row">
										<td class="day">Sunday</td>
										<td class="stop"><span class="dot dot-port"></span>Celebration Key™ 8AM-4PM</td>
									</tr>
									<tr class="port-row">
										<td class="day">Monday</td>
										<td class="stop"><span class="dot dot-port"></span>Nassau 8AM-4PM</td>
									</tr>
									<tr class="port-row">
										<td class="day">Tuesday</td>
										<td class="stop"><span class="dot dot-port"></span>Relaxaway, Half Moon Cay 8AM-4PM</td>
									</tr>
									<tr class="sea-row">
										<td class="day">Wednesday</td>
										<td class="stop"><span class="dot dot-sea"></span>Fun Day At Sea</td>
									</tr>
									<tr class="depart-row">
										<td class="day">Thursday</td>
										<td class="stop"><span class="dot dot-depart"></span>Departure: Canaveral (Orlando) 8AM</td>
									</tr>
								</tbody>
							</table>
						</div>
						
                    </div> <!-- ./ overview -->


                    <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">

						<h2>Price & What's Included</h2>
					

					  	<div class="price-table-container">

							<div class="price-table">
								<h3 class="price-table__type"> Diamond Package</h3>
								
								<?php 
									$first_key = array_key_first($people['diamond']);
									$first_value = $people['diamond'][$first_key];
								?>
								
								<div>
									<p class="large-price mb-0"><em>Starting at</em> <?php echo $first_value; ?><em> / person</em></p>
									<p><small><?php echo $first_key; ?> &bull; see all pricing tiers below</small></p>
								</div> 
								<hr />
								
								<ul class="price">
									<?php foreach($package_items['diamond_items'] as $key=>$value): ?>
										<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
									<?php endforeach; ?>		
								</ul>
								<p class="tier-label">Pricing by group size</p>
								<ul class="priceblock">
									<?php foreach($people['diamond'] as $key=>$value): ?>
										<li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em> / person</em><?php endif;?></span></li>
										<?php endforeach; ?>
								</ul>
					
                        	</div><!-- price table -->
                        
						</div>

						<h2>The Ship</h2>
                        <?php foreach($geolocation as $hotel) :?>
                            <div class="hotel-grid">
                                    <div class="hg-img">
                                        <figure style="background:url(<?php echo $hotel['ship']; ?>); background-size: cover; background-position: center;"></figure>
                                    </div>
                                    <div class="hg-body">
                                        <p class="hg-title"><?php echo $hotel["title"]; ?> 
                                        <?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>
										
										<p class="hg-desc"><?php echo $hotel["description"]; ?></p>	

                                        <address>
                                            <i class="fa fa-location-dot" aria-hidden="true"></i> 
                                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                                            <?php echo $hotel["location"]; ?></a>
                                        </address>
                                    </div>
                            </div><!-- ./hotel-grid -->
                        <?php endforeach; ?>

					  <hr />  
					  <!-- Price Table -->
                        <h2>Cruise Itinerary</h2>
						<div class="table-card mb-20">
							<div class="tz-note">*All times are based on Central Time Zone.</div>
							<table>
								<tbody>
									<tr class="depart-row">
										<td class="day">Monday</td>
										<td class="stop"><span class="dot dot-depart"></span>Departure: Canaveral (Orlando) 3:30PM</td>
									</tr>
									<tr class="port-row">
										<td class="day">Tuesday</td>
										<td class="stop"><span class="dot dot-port"></span>Celebration Key™ 8AM-4PM</td>
									</tr>
									<tr class="port-row">
										<td class="day">Wednesday</td>
										<td class="stop"><span class="dot dot-port"></span>Nassau 8AM-4PM</td>
									</tr>
									<tr class="port-row">
										<td class="day">Thursday</td>
										<td class="stop"><span class="dot dot-port"></span>Relaxaway, Half Moon Cay 8AM-4PM</td>
									</tr>
									<tr class="sea-row">
										<td class="day">Friday</td>
										<td class="stop"><span class="dot dot-sea"></span>Fun Day At Sea</td>
									</tr>
									<tr class="depart-row">
										<td class="day">Saturday</td>
										<td class="stop"><span class="dot dot-depart"></span>Departure: Canaveral (Orlando) 8AM</td>
									</tr>
								</tbody>
							</table>
						</div>
                    

                                
                        <div class="mt-40"><a data-href="#tabs-5" class="btn btn-success btn--round open-tab">Reserve My Spot</a></div>

                    </div><!-- ./ price -->



                    <?php echo $responsive_tabs["faqs"]; ?>
					<div class="tab" aria-label="faqs">

						<h2>Frequently Asked Questions</h2>
                        
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
									<li>Light and Casual clothing. Linen and breathable cotton is best. Relaxaway, Half Moon Cay, Amber Cove, Grand Turk are warm in December!</li>
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

								<div data-control>Is there a drink package option for those who don't prefer alcohol, but love coffee and mocktails? </div>
								<div data-content>
								<p>Yes, the CHEERS! Zero Proof is Carnival's premium non-alcoholic beverage package, designed to elevate your cruise experience with variety and flavor. It includes everything you love from sodas, juices, premium coffees & teas, bottled water, handcrafted zero proof cocktails, alcohol-free beer, non-alcoholic sparkling wine, milkshakes, and energy drinks. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/3836/~/bottomless-bubbles-%28unlimited-soda-program" target="_blank"> Carnival Cruise FAQs</a></p>
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

								<div data-control>Should I set my watch to match Carnival Magic's time or what's called SHIP TIME? </div>
								<div data-content>
									<p>Yes, this prevents you from  missing the ship during our port days. Carnival Magic is on Eastern or EST.</p>
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
								<p>To reserve a package each group member pays the <strong>$100.00</strong> per person fee <strong> at sign-up</strong>. The first payment of <strong>$200</strong> per person is due on or before <strong>August 25, 2026</strong>. The second payment of <strong>$250</strong> per person is due on or before <strong>October 25, 2026</strong>.
								The final payment (remaining balance) is due on or before <strong>Decemeber 27, 2026</strong>. You can make multiple payments as long as the agreed amount is paid by the scheduled payment due date. You complate this by clicking on the BUY NOW tab above and following the prompts. Another option is to use our Buy Now Pay Later option called Flexpay!</p>
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
								<p>The Carnival Magic sails from Port of Miami. We suggest arriving no later than 1:00 PM.</p>
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
								<div id="nanoGallery" data-photoset="72177720324731688"></div>
					</div><!-- ./ photos -->     


                    <?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
											
							<h2>Buy Now</h2>

                            <div class="pay-form">
                                <p>Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                                
								<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="89"></script>

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

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>

</body>
</html>