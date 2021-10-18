<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"				=>"Spring Getaway 2020",
	"subtitle"			=>"This cruise will be EPIC",
	"location"		   	=>"Cozumel, MX",
	"date"				=>"March 25 - 29, 2021",
    "date_start"        =>"March 25, 2021",
	"img_url"			=>"../../images/slides/splash-sbc-cta.jpg",
	"img_alt"			=>"Spring Breakaway"
);


$geolocation = array(
	"cruise1"=> array(
		"title" 		=>"Carnival Fantasy",
		"ship"          =>"//www.cruisemapper.com/images/ships/588-large-daca41214b39c5dc66674d09081940f0.jpg",
		"soldout"		=> false,
		"img_url"		=>"//www.cruisemapper.com/images/ships/588-large-daca41214b39c5dc66674d09081940f0.jpg",
        "address"		=>"South, 201 Water St",
        "location"		=>"Mobile, AL 36602"

	),

);


$people = array(

	"diamond" => array(
		"Group of 4" => "$600",
		"Group of 3" => "$700",
		"Group of 2" => "$815",
		"Individual" => "$1275"
	),


	"options" => array(
		"Hotel Only" => "$1245 (Weekend)"
	)

);


$package_items = array(

	"diamond_items" => array(

        "4 Day/3 Night Cruise"                  => "checked",
        "All You Can Eat All"                   => "checked",
        "Cuban Nights Party"                    => "checked",
        "Grown and Sophisticated Theme Party"   => "checked",
        "The All-Stars Of Comedy Private Show"  => "checked",
        "The Speak Easy Live Private Concert"   => "checked",
        "Open Bar Reception"                    => "checked",
        "Welcome Reception"                     => "checked",
        "YOLLO Swag Bag"                        => "checked"
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
    <title><?php echo $metas['springgetaway']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['springbreakaway']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['springbreakaway']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['springbreakaway']['canonical']; ?>" rel="canonical" />
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
                        <h3>An Urban Fantasy from Mobile, AL to Cozumel!</h3>
						
                        <p>Your Spring expectations are going to new heights with this Spring Breakaway cruise. This is the  ultimate all-inclusive cruise event you will attend off American shores.  With themed festivities throughout, open bars, buffet meals, and warm beaches; you will definitely have a fun time! And don't forget the shopping. Cozumel has plenty to offer whether you are getting souvenirs for you or others.</p>

                        <p>Spring Breakaway will fill the void for those looking for a new and refreshing adventure. Party-goers from across the states will meet for this memorable four-day getaway! You don't want to miss this event. Reserve your cabin today. </p>
                        


						<table class="itinerary">
							<caption>Cruise Itinerary</caption>
							<tbody>
								<tr>
									<td>Thursday</td>
									<td>Departure: Mobile, AL 4:00PM</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Cozumel, MX 8:00AM-4:00PM</td>
								</tr>
								<tr>
									<td>Sunday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Monday</td>
									<td>Return: Mobile, AL	8:00AM</td>
								</tr>
								
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">*All times are based on Central Time Zone.</td>
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
									<td>Thursday</td>
									<td>Departure: Mobile, AL 4:00PM</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>Fun Day At Sea</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>Cozumel, MX 8:00AM-4:00PM</td>
								</tr>
								<tr>
									<td>Sunday</td>
									<td>Fun Day at Sea</td>
								</tr>
								<tr>
									<td>Monday</td>
									<td>Return: Mobile, AL	8:00AM</td>
								</tr>
								
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">*All times are based on Central Time Zone.</td>
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
									<p>No, a passport is not required to go on the cruise. If you DO NOT have a passport please visit the your local Post Office for more information on obtaining one.</p>
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
								<p>After registration the first payment of $125 is due <strong>February 20, 2020</strong>. The second payment of $150 is due <strong>April 10, 2020</strong>. The final payment (remaining balance) is due on or before <strong>June 01, 2020</strong> . If you the announced payment dates have passed contact us for our current payment plan. All prices and payments due are per person.</p>
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
								<p>The Carnival Valor sails from the Port of Mobile. We suggest arriving no later than 2PM.</p>
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
	<script>Cognito.load("forms", { id: "61" });</script>

	<!--google analytics-->
	<?php include 'includes/analytics.inc.php'; ?>
</body>
</html>