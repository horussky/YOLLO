<?php
    include 'includes/functions.inc.php';
    include 'includes/bootstrap.inc.php';

    $config = loadEvent('conf_fadetomay.php');
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
							<h2>Join us for Fade to May 2027</h2>
 
							<p>Fade 2 May is our return to Memphis with purpose, pride, and presence,a weekend built for the culture, set against one of the city's biggest spring music weekends. As downtown fills with concerts, crowds, and riverfront energy, we're carving out a space that centers Black joy, Black artistry, and Black community.</p>
            
							<p>Memphis has always been a heartbeat city, a place where our music, our movement, and our history echo through every block. Fade 2 May taps into that legacy with curated events that blend celebration and connection. From our signature mixers to live entertainment, from a Mid-day Cruise on the Mississippi to a reflective moment at the Lorraine Motel, this weekend honors both our joy and our journey.</p>
							<style>
								.highlight-card .card-text {
									font-size: .875rem;
									line-height: 1.2;
								}
							</style>
							<div class="row highlight-card text-center mb-20 mt-20">
								<div class="col-md-4 col-sm-12 mb-20">
									<div class="card shadow h-100">
										<div class="card-body">
											<i class="fa-solid fa-ship fa-lg"></i>
											<h5 class="card-title">Cruising Vibes</h5>
											<p class="card-text">A Mid-Day Party Cruise over the Mississippi River.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 mb-20">
								
									<div class="card shadow h-100">
										<div class="card-body">
											<i class="fa-solid fa-font-awesome fa-lg"></i>
											<h5 class="card-title">Lorraine Tour</h5>
											<p class="card-text">Honoring History Before the Party and Night life.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 mb-20">
								
									<div class="card shadow h-100">
										<div class="card-body">
											<i class="fa-solid fa-music fa-lg"></i>
											<h5 class="card-title">Concerts and More</h5>
											<p class="card-text">Big Performances Happening All Weekend.</p>
										</div>
									</div>
								</div>
							</div>
            
							<p>While the city lights up with major performances and riverfront festivities, Fade 2 May is your invitation to experience Memphis our way, intentionally, culturally, and unapologetically Black. <a href="#tabs-5" class="cta-link open-tab">Secure Your Spot Today!</a></p>

                        </div> <!-- ./overview -->




                        <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">

							<h2>Price & What's Included</h2>
							
							<div class="price-table-container">

								<div class="price-table">
										<h3 class="price-table__type"> Diamond Package</h3>
										
										<?php 
											$starting_key = null;
											$starting_tier = null;
											foreach($people['diamond'] as $key=>$tier) {
												if(!$tier['sold_out']) {
													$starting_key = $key;
													$starting_tier = $tier;
													break;
												}
											}
										?>
										
										<div>
											<?php if($starting_tier): ?>
											<p class="large-price mb-0"><em>Starting at</em> <?php echo $starting_tier['price']; ?><em> / person</em></p>
											<p><small><?php echo $starting_key; ?> &bull; see all pricing tiers below</small></p>
											<?php else: ?>
											<p class="large-price mb-0">All Tiers Sold Out</p>
											<?php endif; ?>
										</div> 
										<hr />
										
										<ul class="price">
											<?php foreach($package_items['diamond_items'] as $key=>$value): ?>
												<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
											<?php endforeach; ?>		
										</ul>
										<p class="tier-label">Pricing by group size</p>
										<ul class="priceblock">
											<?php foreach($people['diamond'] as $key=>$tier): ?>
												<li class="<?php if($tier['sold_out']):?>sold-out<?php endif;?>">
													<?php echo $key; ?>
													<span>
														<?php if($tier['sold_out']): ?>
															<span class="sold">** Sold Out **</span>
														<?php else: ?>
															<?php echo $tier['price']; ?><?php if($key != "Individual"):?><em> / person</em><?php endif;?>
														<?php endif; ?>
													</span>
												</li>
											<?php endforeach; ?>
										</ul>
							
									</div><!-- price table -->
								
								</div>

								<hr />

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

                            	

                        </div><!-- ./price -->

                        <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
							<h2>Frequently Asked Questions</h2>
							
					
							<div data-accordion-group>
								<div class="accordion open" data-accordion>
								<div data-control>Are the concerts and citywide festivities included in my Fade 2 May package?</div>
								<div data-content>
								<p>Your package includes one (1) night of major riverfront entertainment during Memphis' spring music weekend. While the city will be full of concerts and events, only the items listed in your Fade 2 May package are included.</p>
								</div>
								</div><!-- end of accordion-->

								<div class="accordion" data-accordion>
								<div data-control>Does the price listed cover hotel accommodations for everyone in my group?</div>
								<div data-content>
								<p>All prices are per person. Each package includes one (1) hotel room for your group, based on the room type selected.</p>
								</div>
								</div><!-- end of accordion-->

								<div class="accordion" data-accordion>
								<div data-control>Which hotel will I stay in during the weekend?</div>
								<div data-content>
								<p>You may choose between Courtyard by Marriott (Two Queen Beds) or Residence Inn by Marriott (Single Queen Bed), both located in downtown Memphis and close to all Fade 2 May activities.</p>
								</div>
								</div><!-- end of accordion-->

								<div class="accordion" data-accordion>
								<div data-control>Is transportation included between events?</div>
								<div data-content>
								<p>Transportation is not included. Most Fade 2 May activities are located within the downtown area, making it easy to walk, rideshare, or use local transit.</p>
								</div>
								</div><!-- end of accordion-->

								<div class="accordion" data-accordion>
								<div data-control>Will the Lorraine Motel tour be listed on my itinerary?</div>
								<div data-content>
								<p>The Lorraine Motel experience is included as a cultural highlight. It may be listed on your itinerary or offered as a special bonus at check-in.</p>
								</div>
								</div><!-- end of accordion-->

								<div class="accordion" data-accordion>
								<div data-control>What should I expect from the weekend atmosphere in Memphis?</div>
								<div data-content>
								<p>Memphis will be alive with concerts, crowds, and riverfront festivities. Fade 2 May events are designed to complement the energy of the weekend while giving you curated, culturally centered experiences.</p>
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
                        	<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="79"></script>
                    	</div><!-- ./buynow -->

                    </div><!-- end of tabs -->

                </div><!-- end of colfull -->

		</div><!-- end of content -->


      	<section id="disclosure">
            <div class="disclosure">
            	<?php include 'includes/package-info-generic.inc.php'; ?>
                <p><strong>Disclaimer</strong> | The term Fade to May, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Fade to May and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Fade to May productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.</p>
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

<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include 'includes/scripts.inc.php'; ?>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>