<?php
    include 'includes/functions.inc.php';
    include 'includes/bootstrap.inc.php';

    $config = loadEvent('conf_essence.php');
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

        <div id="left">
            <!--Nav-->
            <?php include 'includes/nav.inc.php'; ?>
            <!--End of Nav-->
        </div><!-- end of left -->


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
							<h2>Join YOLLO for Essence Festival Weekend 2027!</h2>
 
							<p>Experience the energy, culture, and excitement of Essence Festival Weekend 2027—the nation's premier celebration of Black music, culture, empowerment, and community. Each year, thousands of visitors from around the world gather in New Orleans for an unforgettable weekend filled with world-class concerts, inspiring speakers, empowering experiences, and nonstop entertainment.</p>
            
							<p>From electrifying performances by today's biggest artists to engaging daytime experiences focused on business, wellness, and culture, there's something for everyone during this iconic weekend.</p>
            
							<p>When you travel with YOLLO Group Services, Inc., you'll enjoy a seamless travel experience, exciting exclusive events, and the opportunity to celebrate with an amazing community of travelers who return year after year. <a href="#tabs-5" class="cta-link open-tab">Reserve your 2027 package today!</a></p>


							<h3>Experience the Legendary All-White Mid-Day Cruise Party – Essence Festival Weekend 2027! </h3>

							<p>Get ready for one of the most anticipated events of Essence Festival Weekend 2027 aboard the legendary 22nd Annual All-White Mid-Day Cruise Party aboard the iconic Creole Queen! More than just a cruise, this unforgettable experience has become a signature tradition and one of the most talked about celebrations of the entire Essence weekend. Set sail on the historic Mississippi River while surrounded by incredible views of New Orleans, amazing people, and an atmosphere filled with nonstop energy.</p>
        
        					<p>Dance across multiple decks as top DJs keep the party going with the hottest Hip-Hop, R&B, Southern Soul, and party anthems. Connect with friends, meet new people from across the country, and enjoy an afternoon filled with music, laughter, and unforgettable memories. While all-white attire is strongly encouraged for the ultimate Essence Weekend experience and stunning photo opportunities, it is not required—just bring your best energy and be ready to celebrate!</p>

							<p>Our carefully curated Essence Festival 2027 Hotel & Party Packages are designed to help you enjoy the very best of New Orleans, including world-class entertainment, cultural experiences, networking opportunities, exciting parties, and exclusive events throughout the weekend.

Whether you're a first-time visitor or returning for another incredible Essence Weekend, YOLLO Group Services is committed to providing exceptional customer service, seamless travel planning, and memories you'll cherish long after the music ends. <a data-href="#tabs-5" class="open-tab">Reserve your 2027 package today</a> and experience Essence Festival Weekend the YOLLO way—because You Only Live Life Once!</p>

                        </div> <!-- ./overview -->




                        <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">


							<h2>Hotels</h2>
                                
                                <?php foreach($geolocation as $hotel) :?>
                                <div class="hotel-grid">
                                    <div class="hg-img">
                                        <figure style="<?php if($hotel["soldout"] == true) :?>filter:grayscale(1);<?php endif ?> background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
                                    </div>
                                    <div class="hg-body">
                                        <p class="hg-title"><?php echo $hotel["title"]; ?> 
                                        <?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>

										<p class="hg-desc"><?php echo $hotel["description"]; ?></p>	

                                        <address>
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i> 
                                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                                            <?php echo $hotel["location"]; ?></a>
                                        </address>
                                    </div>
                                </div><!-- ./hotel-grid -->
                                <?php endforeach; ?>  

                            	<hr />

                                <h2>Price & What's Included</h2>
                                
                                <div class="price-table-container">

                                <?php if(isset($people["diamond"])) :?>
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
                            <?php endif; ?>



                                <?php if(isset($people["emerald"])) :?>
                                <div class="price-table">
                                    <h3 class="price-table__type"> Emerald Package</h3>
                                    
                                    <?php 
                                        $first_key = array_key_first($people['emerald']);
                                        $first_value = $people['emerald'][$first_key];
                                    ?>
                                    
                                    <div>
                                        <p class="large-price mb-0"><em>Starting at</em> <?php echo $first_value; ?><em> / person</em></p>
                                        <p><small><?php echo $first_key; ?> &bull; see all pricing tiers below</small></p>
                                    </div> 
                                    <hr />
                                    
                                    <ul class="price">
                                        <?php foreach($package_items['emerald_items'] as $key=>$value): ?>
                                            <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                        <?php endforeach; ?>		
                                    </ul>
                                    <p class="tier-label">Pricing by group size</p>
                                    <ul class="priceblock">
                                        <?php foreach($people['emerald'] as $key=>$value): ?>
                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em> / person</em><?php endif;?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                        
                                </div><!-- price table -->
                                <?php endif; ?>
                                <div class="mt-20"><a data-href="#tabs-5" class="btn btn-success btn--round open-tab">Reserve My Spot</a></div>
                            </div><!-- price table container -->

                        </div><!-- ./price -->

                        <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
							<h2>Frequently Asked Questions</h2>
							
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

									<div data-control>What are the payment due dates for Essence Packages 2027 Early Bird special for two people?</div>
									<div data-content>
										<p>To reserve a package each group member pays the registration fee $100.00 per person. The first payment of $300 per person is due on or before July 20, 2026. The second payment of $400 per person is due on or before September 10, 2026. The final payment (remaining balance) is due on or before November 10, 2027. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts to partial payments.</p>
									</div>


								</div><!-- end of accordion-->
								
									<div class="accordion" data-accordion>

									<div data-control>What happens if I can't make the payments for the Essence Packages 2027 Early Bird special for two people by the payment due dates?</div>
									<div data-content>
										<p>If you can't make the payments as scheduled, you have an opportunity to convert your Early Bird special to normal package price. This can only be done if we receive notification prior to your due date or you will forfeit all payments made on the account. There are no extensions available for this package.  If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts to partial payments.</p>
									</div>

								</div><!-- end of accordion-->


								<div class="accordion" data-accordion>

									<div data-control>What are the payment due dates for Essence 2027 Packages?</div>
									<div data-content>
										<p>To reserve a package each group member pays the registration fee $100.00 per person. The first payment of $250 per person is due on or before August 15, 2026. The second payment of $300 per person is due on or before November 10, 2026. The final payment (remaining balance) is due on or before February 01, 2027. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts to partial payments.</p>
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
										<p>Yes, additonal night concert tickets are $210 per night. Just let us know and we can add it to your invoice.</p>
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
										<p>Your base package includes check-in on Friday with check-out on Sunday. If you make your first payment ($250) on time you earn the complimentary night. You can use it to arrive a day early on Thursday or depart a day later on Monday.</p>
									</div>

								</div><!-- end of accordion-->


								<div class="accordion" data-accordion>

									<div data-control>What kind of access do I get with my concert ticket?</div>
									<div data-content>
										<p>With your concert ticket, you gain entry into the Louisiana Superdome. You will have a designated seat to experience the Main Stage performances. Everyone MUST have a ticket to get into the Superdome.</p>
									</div>

								</div><!-- end of accordion-->


								<div class="accordion" data-accordion>

									<div data-control>If I wait until the lineup is complete before I book my hotel room will you still have packages available?</div>
									<div data-content>
										<p>In most cases you will be out of luck! This event breaks attendance records every year. Some people may attend the festival for the concerts, while others may attend for the surrounding activities and mingling opportunities. Regardless, you will need to book your package now. With our payment plans it helps you to reserve your package today and pay over time.</p>
									</div>

								</div><!-- end of accordion-->


								<div class="accordion" data-accordion>

									<div data-control>Must the entire group pay the $100.00 reservation payment?</div>
									<div data-content>
										<p>Yes. All prices are per person. The registration payment secures your package and also goes toward your package price.</p>
									</div>

								</div><!-- end of accordion-->


								<div class="accordion" data-accordion>

									<div data-control>What is included with V.I.P. vs V.V.I.P admission to the Boat Party?</div>
									<div data-content>
										<p>V.I.P. tickets are general admission tickets to the cruise and only cover entrance to the cruise with no food or drinks included. V.V.I.P. includes a speedy admission onto the boat party, delicious food, and an open bar to get you right all while partying on the boat. Our packages include the V.I.P ticket. You can upgrade to the V.V.I.P. ticket for an additional $125 per person.</p>
									</div>

								</div><!-- end of accordion-->


							</div><!-- end of accordion group-->

                        </div><!-- ./faqs -->


													
                        <?php echo $responsive_tabs["photos"]; ?>
						<div class="tab" aria-label="photos">
							<h2>Photos</h2>
                        	<div id="nanoGallery" data-photoset="72157632729673352"></div>
                        </div>  <!-- ./photos -->



						<?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
                        	<h3>Buy Now</h3>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                        	<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="76"></script>
                    	</div><!-- ./buynow -->

                    </div><!-- end of tabs -->

                </div><!-- end of colfull -->

		</div><!-- end of content -->


      	<section id="disclosure">
            <div class="disclosure">
            	<?php include 'includes/package-info-generic.inc.php'; ?>
                <p><strong>Disclaimer</strong> | The term Essence Music Festival, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Essence Music Festival and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Essence Music Festival productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.</p>
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

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
