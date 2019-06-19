<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"				=>"Urban Fantasy 2019",
	"subtitle"			=>"Passport is REQUIRED for this cruise",
	"location"		   	=>"Miami, Grand Turks, and Cuba",
	"date"				=>"Sept 09 - 14, 2019",
    "date_start"        =>"September 09, 2019",
	"img_url"			=>"../../images/slides/splash-ufw-cta.jpg",
	"img_alt"			=>"Urban Fantasy"
);


$geolocation = array(
	"cruise1"=> array(
		"title" 		=>"Carnival Sensation",
		"ship"          =>"//s.krfb.de/library/original/aussenansicht.61wqmlou.jpg",
		"soldout"		=> false,
		"img_url"		=>"//s.krfb.de/library/original/aussenansicht.61wqmlou.jpg",
        "address"		=>"1015 North America Way",
        "location"		=>"Miami, Fl",

	),

);


$people = array(

	"diamond" => array(
		"Group of 4" => "$575",
		"Group of 3" => "$700",
		"Group of 2" => "$770",
		"Individual" => "$1125"
	),


	"options" => array(
		"Hotel Only" => "$1245 (Weekend)"
	)

);


$package_items = array(

	"diamond_items" => array(

		"5 Day/4 Night Cruise Departing From Miami, Florida"  => "checked",
		"All You Can Eat All Weekend Long"                    => "checked",
		"Cuban Nights Party - Break out your LINEN or FESTIVE colors theme night"                    => "checked",
		"Grown and Sophisticated - Theme party (dress to impress night) All You Can Drink First Hour"             => "checked",
		"The All-Stars Of Comedy Private Show "           => "checked",
		"The Speak Easy Live Private Concert "                    => "checked",
		"Open Bar Captains \"Fantasy\" Reception"             => "checked",
		"The Black Film Fest Private Screening"           => "checked",
		"Urban Fantasy Private Welcome Reception 
All You Can Drink"                    => "checked",
		"YOLLO Gift Bag"                                      => "checked"
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
    <title><?php echo $metas['urbanfantasy']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['urbanfantasy']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['urbanfantasy']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['urbanfantasy']['canonical']; ?>" rel="canonical" />
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

                       <div class="col">
                            <?php echo $event["location"]; ?>
                       </div>

                    </div>
					
					
					<div class="colfull">
        
                    <div id="responsive-tabs">
                    


                    <?php echo $responsive_tabs["overview"]; ?>
					<div class="tab" aria-label="overview">
                        <h3>An Urban Fantasy from Grand Turks to Cuba!</h3>
						
                        <p>Endulge in the larger-than-life culture of Miami, Grand Turks and Cuba, while exploring their historic attractions on this Urban Fantasy cruise. You will cruise aboard the Carnival Sensation, a highly rated cruise ship  that is filled with top notch amenities. Once reaching your destinations, enjoy exploring or fill your day with shore excursions.</p>
                       				
                        <p>Urban Fantasy was created to offer a cruise experience that welcomes and actively includes African Americans. If you’re seeking great networking opportunities, or to mix and mingle, maybe meeting new friends is your thing, or just cruising this is your event! Prices listed include all of your cabin accommodations, taxes, all meals (including 24 hour room service) juice, coffee, and tea, and ALL Urban Fantasy Events both on and off the boat! </p>
                        


						<table class="itinerary">
							<caption>Cruise Itinerary</caption>
							<tbody>
								<tr>
									<td>Monday</td>
									<td>Departure: Miami, Fl 4PM</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Grand Turk, 8AM-5PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Havana, Cuba	7AM-5PM</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: Miami, FL 8AM</td>
								</tr> 
							
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">*All times are based on Eastern Time Zone.</td>
								</tr>
							</tfoot>
						</table>
						

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
                        
                        <table class="itinerary">
							<caption>Cruise Itinerary</caption>
							<tbody>
								<tr>
									<td>Monday</td>
									<td>Departure: Miami, Fl 4PM</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>Grand Turk, 8AM-5PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Havana, Cuba	7AM-5PM</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Return: Miami, FL 8AM</td>
								</tr> 
							
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">*All times are based on Eastern Time Zone.</td>
								</tr>
							</tfoot>
						</table>
                       
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

								<div data-control>Do I need a Passport?</div>
								<div data-content>
									<p>Yes, a passport is required to go on the cruise. If you DO NOT have a passport please visit the your local Post Office for more information on obtaining one.</p>
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
								<p>Yes, there is an option called CHEERS, but it's limited to 15 drinks per day. CHEERS is an all-inclusive beverage program that allows guests to enjoy a wide range of alcoholic and non-alcoholic beverages by paying a flat daily rate. The cost prior to your cruise is $51.95 USD per person, per day plus 18% gratuity. If you decide you want the program once on board, you can sign up for CHEERS at a bar the cost is $56.95 USD per person, per day plus 18% gratuity. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/1106" target="_blank"> Carnival Cruise FAQs</a></p>  
								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

								<div data-control>How do I pay for this package?</div>
								<div data-content>
									<p>Navigate to the Buy Now tab and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>
								</div>

							</div><!-- end of accordion-->	
										
				
							<div class="accordion" data-accordion>

								<div data-control>When are the payments due? </div>
								<div data-content>
								<p>After registration the first payment of $125 is due <strong>March 06, 2019</strong> . The final payment (remaining balance) is due on or before <strong>June 20, 2019</strong> . If you the announced payment dates have passed contact us for our current payment plan.</p>
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
								<p>The Carnival Sensation sails from the Port of Miami. We suggest arriving no later than 2PM.</p>
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

                <h3>Buy Now</h3>
                <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>

                <div class="cognito"></div>

            </div> <!-- ./buynow -->

								</div><!-- end of responsive-tabs -->



					</div><!-- end of colfull -->




					<div class="disclosure">



						<?php include 'includes/package-info-generic.inc.php'; ?><br/>

						<strong>Disclaimer</strong> | The term Urban Fantasy, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.

					</div>



				</div>
				<!--end of content-->

			</div>
			<!--end of right-->


			<aside id="social">
				<?php include 'includes/twitter.inc.php'; ?>
			</aside>



		</div>
		<!--end of container-->



	</div>
	<!--end of wrap-->



	<!-- Footer  -->

	<?php include 'includes/footer.inc.php'; ?>

	<!-- End of Footer  -->



	<!-- Global Scripts -->

	<?php include 'includes/scripts.inc.php'; ?>

	<script type="text/javascript">
		$( document ).ready( function () {


			//nano
			$( "#nanoGallery" ).nanoGallery( {
				kind: 'flickr',
				userID: '50836209@N03',
				//uncomment this line to display one specific album:
				photoset: '72157660233463388',
				// uncomment this line to display full photostream (v5.0.0):
				// photoset:'none',
				thumbnailWidth: 115,
				thumbnailHeight: 'auto',
				thumbnailAlignment: 'left',
				thumbnailLabel: {
					display: false,
					displayDescription: false,
					position: 'overImageOnBottom'
				},

				thumbnailHoverEffect: 'borderLighter'
			});

		});
	</script>
   
    <script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
	<script>Cognito.load("forms", { id: "59" });</script>

	<!--google analytics-->
	<?php include 'includes/analytics.inc.php'; ?>
</body>
</html>