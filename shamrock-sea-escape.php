<?php

    ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	// Load the event configuration
	$event_config = require 'config/events/conf_shamrock.php';

	// Access configuration data
	$event = $event_config['event'];
	$geolocation = $event_config['geolocation'];
	$people = $event_config['people'];
	$package_items = $event_config['package_items'];
	$metas = $event_config['metas'];

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
						<h2>Join us for St. Patricks Day in Cozumel, Mexico</h2>
						<!--new copy start-->
						<p>St. Patrick's Day is a celebrated holiday in many countries throughout the world. Those who do celebrate find it to be a wonderful day for socialization, camaraderie, and relaxation. What better way to celebrate such an occasion than with an all inclusive St. Patrick's Day cruise from YOLLO Group Services?</p>
						<p>With great drinks, cuisine, and entertainment during the later hours, you and your group are sure to have the time of your lives when you decide to embark on a St. Patrick's Day cruise. And being all-inclusive means that you get everything you could ever want on such a cruise at an incredibly competitive, one-time price.</p>
						<p>Celebrate a major holiday in style when you <a data-href="#tabs-5" class="open-tab">book this trip</a> with the team at YOLLO Group Services. Browse further on this page to learn more details about our cruise itinerary. For any questions, reach out to us today by filling out our convenient <a href="https://goyollo.com/contact">online contact form</a>.</p>

						<h3>Looking for an easy payment option?</h3>
						<p class="mb-40">Don't let budget constraints hold you back - take advantage of our convenient Flex Pay option to finance this great package with easy monthly payments. From fun-filled days at sea to thrilling port adventures, this cruise promises to be the best cruise experience.  <a data-href="#tabs-5" href="#" class="open-tab">Book this fantastic cruise package</a> right now!</p>
						<!--new copy end-->

						<?php include 'includes/uplift-onpage.inc.php'; ?>

						<table class="itinerary">
							<caption>Cruise Itinerary</caption>
							<tbody>
								<tr>
									<td>Monday</td>
									<td>Departure: Carnival Port, New Orleans, LA |  3:30PM</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Cozumel, Mexico | 8AM-4PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Progreso, Yucatan | 8AM-4AM</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: Carnival Port, New Orleans, LA | 8AM</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">*All times are based on Central Time Zone.</td>
								</tr>
							</tfoot>
						</table>



                        </div> <!-- ./overview -->




                        <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">


								<h2>Cruise</h2>
                                
                                <?php foreach($geolocation as $hotel) :?>
                                <div class="hotel-grid">
                                    <div class="hg-img">
                                        <figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
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
								
								<table class="itinerary">
									<caption>Cruise Itinerary</caption>
									<tbody>
										<tr>
											<td>Monday</td>
											<td>Departure: Carnival Port, New Orleans, LA | 3:30PM</td>
										</tr>
										<tr>
											<td>Tuesday</td>
											<td>Fun Day At Sea</td>
										</tr>
										<tr>
											<td>Wednesday</td>
											<td>Cozumel, Mexico | 8AM-4PM</td>
										</tr>
										<tr>
											<td>Thursday</td>
											<td>Progreso, Yucatan | 8AM-4PM</td>
										</tr>
										<tr>
											<td>Friday</td>
											<td>Fun Day At Sea</td>
										</tr>
										<tr>
											<td>Saturday</td>
											<td>Return: Carnival Port, New Orleans, LA | 8AM</td>
										</tr>
									
									
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2">*All times are based on Central Time Zone.</td>
										</tr>
									</tfoot>
								</table>

                            	<hr />

                                <h2>Price</h2>
                                
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




                        </div><!-- ./price -->



                        <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
					    <h2>Frequently Asked Questions</h2>
                       	
						<div data-accordion-group>
						
							<div class="accordion open" data-accordion>

								<div data-control>Do I need a Passport?</div>
								<div data-content>
									<p>No, a passport is not required to go on the cruise. If you DO NOT have a passport and would like one please visit the your local Post Office for more information on obtaining one.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What are some things you suggest I buy for this trip? </div>
								<div data-content>
									<p>Relaxed casual wear, motion sickness medicine (just in case), swim wear, sun block lotion/spray, deet bug spray, and a sexy classy white outfit.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is there a charge for sodas on the cruise? </div>
								<div data-content>
								<p>Yes, beverages at the bar will require purchasing. However, there is an unlimited soda program provided by Carnival called Bottomless Bubbles. Pay one flat price for fountain soda and juice all cruise long. Prices are per day with an automatic 18% gratuity added at time of purchase of the program. Children 17 years and younger are $5.95 USD per day. Adults are $8.50 USD per day. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/3836/~/bottomless-bubbles-%28unlimited-soda-program" target="_blank"> Carnival Cruise FAQs</a></p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is there an open bar or Bottomless Bubbles for alcohol on the ship? </div>
								<div data-content>
								<p>Yes, there is an option called CHEERS, but it's limited to 15 drinks per day. CHEERS is an all-inclusive beverage program that allows guests to enjoy a wide range of alcoholic and non-alcoholic beverages by paying a flat daily rate. Great news is it's included in your package price! The cost prior to your cruise is $69.95 USD per person, per day plus 18% gratuity. If you decide you want the program once on board, you can sign up for CHEERS at a bar the cost is $74.95 USD per person, per day plus 18% gratuity. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/1106" target="_blank"> Carnival Cruise FAQs</a></p>  
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How do I pay for this package?</div>
								<div data-content>
									<p>Navigate to the <a data-href="#tabs-5" class="open-tab">Buy Now tab</a> and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>
								</div>

							</div><!-- end of accordion-->	
										
							<div class="accordion" data-accordion>

								<div data-control>When are the payments due? </div>
								<div data-content>
								<p>After registration the first payment of $250 is due <strong>July 15, 2025</strong>. The second payment of $250 is due <strong>September 15, 2025</strong>. The final payment (remaining balance) is due on or before <strong>December 28, 2025</strong> . If you the announced payment dates have passed contact us for our current payment plan. All prices and payments due are per person.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Are there any other charges associated with the cruise?</div>
								<div data-content>
								<p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $13.99 per day, but you may want to leave more depending on your service. Sometimes gratuity is added to your final bill, so check with the cruiseline front desk on the ship before coming back to Miami.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What port are we departing from and what time do I need to be there?</div>
								<div data-content>
								<p>The Carnival Valor sails from the Port of New Orleans. We suggest arriving no later than 2PM.</p>
								</div>

							</div><!-- end of accordion-->



						</div><!-- end of accordion group-->
                        	

                        </div><!-- ./faqs -->




                        <?php echo $responsive_tabs["photos"]; ?>
						<div class="tab" aria-label="photos">
					   	<h2>Photos</h2>
                        		<div id="nanoGallery"></div>
                        </div>  <!-- ./photos -->




						<?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
                        	<h2>Buy Now</h2>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                        	<div class="cognito"></div>

                    	</div><!-- ./buynow -->



                    </div><!-- end of tabs -->

                </div><!-- end of colfull -->



		</div><!-- end of content -->


      	<section id="disclosure">
            <div class="disclosure">
            	<?php include 'includes/package-info-generic.inc.php'; ?>
                <p><strong>Disclaimer</strong> | The term Shamrock Sea Escape, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. </p>
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
<script>Cognito.load("forms", { id: "87" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
