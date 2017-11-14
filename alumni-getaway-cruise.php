<?php

ob_start("ob_gzhandler");

$event = array(
	"title"						=>"Alumni Getaway Cruise",
	"subtitle"					=>"Grab your alumni shirts and book today!",
	"location"					=>"Cozumel, Mexico",
	"date"						=>"December 7-11, 2017",
	"img_url"				 	=>"../../images/slides/splash-alumni-cta.jpg",
	"img_alt"				 	=>"Alumni Getaway Cruise"
);

$geolocation = array(
	"cruise1"=> array(
		"title" 		=>"Fantasy Cruise Ship",
		"ship"			=>"https://directlinecruises.com/images/carnival_ecstacy_slider1.jpg",
		"location"		=>"Cozumel, Mexico",
		"soldout"		=>"false",
		"img_url"		=>"https://www.cruisin.me/images/cruise-ships/carnival-cruise-lines/carnival-fantasy.jpg"

	),

	"cruise2"=> array(
		""
	)

);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$450",
			"Group of 3"			=>"$515",
			"Group of 2"			=>"$650",
			"Individual"			=>"$1100"
		),

		"emerald"=> array(
			""
		),

		"options"=>array(
			"Hotel Only" =>"$1245 (Weekend)"
		),

);

$package_items = array(
	"diamond_items" => array(
		"4 Day/3 Night Cruise Departing From Port of Mobile"		=> "checked",
		"All You Can Eat aboard Ship"								=> "checked",
		"Bust a Gut Comedy Series"									=> "checked",
		"80's vs 90's Party"										=> "checked",
		"Word Easy Spoken Word Show"								=> "checked",
		"Alumni Getaway Welcome Reception"							=> "checked",
		"Rep My Set Party"											=> "checked",
		"Alumni Getaway Beach Retreat"								=> "checked",
		"Alumni Getaway Ocean Blue Fun and Sexy Party"				=> "checked",
		"Farewell Party"											=> "checked",
		"Black Film Review"											=> "checked",
		"YOLLO Gift Bag"											=> "checked"
	),

	"emerald_items" => array(
		""
	),

	"Hotel Only" =>""
);

include 'includes/functions.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="YOLLO Group Services is a travel company specializing in offering affordable travel to amazing events for everyone." />
<meta name="keywords" content="Urban Fantasy 2017, Carnival Cruise, Bahamas, YOLLO Group Services, student travel, bahamas, Cruise Travel packages" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
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
					<a href="#tabs-5" class="btn btn-red open-tab" data-tab-index="4">Buy Now</a>
				</div>
			</div>
        
            <div class="content">
        
               
        
                <div class="date-location">
                        <div class="col"><?php echo $event["date"]; ?></div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                </div>
        
        
        
                <div class="colfull">
        
                    <div id="tabs" class="yollo-tabs nodisp">
                    <ul>
                             <?php
                                        foreach($tabnavcruise as $tabs => $item){
                                             echo "<li><a href=\"#$tabs\">$item</a></li>";
                                        };
    
                                ?>
                    </ul>


                    <div id="tabs-1">
                        <h3>Alumni Getaway Cruise is going to Cozumel, Mexico!</h3>

                        <p>Calling all old, new, and almost alums, this Alumni Getaway Cruise is the weekend vacation for you. We are bringing together HBCU alums from all over the country to rep their university. What better way to meet and mingle than cruising aboard the Carnival Fantasy to the beautiful island of Cozumel, Mexico. Not a product of a HBCU? No worries, this cruise isn't exclusive to only HBCU alumni. Everyone's invited to rep their university on this getaway cruise to Mexico. </p>
                        
                        <p>While you cruise over the Caribbean, we have plenty of entertainment to keep you occupied. Look forward to comedy shows, a talent show, spades tournament, and more activities. Our DJ's are working the 1's and 2's for a variety of onboard clubs and decks. Our theme night parties, “Greek Life or Nah” and “Rep Your University” will also keep the camaraderie going all weekend.</p> 
                        
                        <p>Don't believe the hype, Mexico is a very beautiful place to visit. Cozumel has plenty of excursions and shopping areas to explore. If time permits, tour the Mayan ruins or cruise the island and enjoy the scenery. So do not hesitate on this package. Book this great cruise package today!</p>


                    </div> <!-- end of tab 1 -->


                    <div id="tabs-2">

                        <h3>Cruise</h3>
						<div class="hotel-box-container">

								<?php if(count($geolocation["cruise1"]) > 1) :?>
								<div class="hotel-box">
										<img src="<?php echo $geolocation['cruise1']['img_url']; ?>" />
										<div class="hotel-title">
												<h3><?php echo $geolocation["cruise1"]["title"]; ?></h3>
										</div>
								</div>
								<?php endif; ?>

								<?php if(count($geolocation["cruise2"]) > 1) :?>
								<div class="hotel-box">
									 <img src="<?php echo $geolocation['cruise2']['img_url']; ?>" />
										<div class="hotel-title">
												<h3><?php echo $geolocation["cruise2"]["title"]; ?></h3>
										</div>
								</div>
								<?php endif; ?>


						</div><!-- hotel box container -->

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
								<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
							</ul>
						</div><!-- price table -->
						<?php endif; ?>



						<?php if(count($geolocation["cruise2"]) > 1) :?>
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
								<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
							</ul>
						</div><!-- price table -->
						<?php endif; ?>
                                
						</div><!-- price table container-->

                    </div><!-- end of Tab 2 -->



                    <div id="tabs-3">

                        <h3>Frequently Asked Questions</h3>
                        
                        
                        <div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

							  <div data-control>Do I need a Passport?</div>
							  <div data-content>
								<p>It is not required for US citizens and departing from a US port, but it's recommended to bring. We recommend if you DO NOT have a passport, to bring a birth certificate issued by the department of vital statistics and your driver’s license for boarding.</p>
								<p>If you are planning to get a Passport before the trip, make sure you give yourself ample time before the cruise to purchase. It normally takes 6 to 8 weeks, however you can request to experdite for faster processing time. There is a extra fee applied to expedited requests. Check your local USPS for more information on requesting a passport. </p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What are some things you suggest I buy for this trip?</div>
							  <div data-content>
								<p>Here are a some suggested items to consider:</p>
									
								<ul>
									<li>Light and Casual clothing. Linen and breathable cotton is best. Mexico is hot!</li>
									<li>Swimming trunks and bikini's</li>
									<li>Sun Block and Lotions</li>
									<li>Bug Repellant with DEET</li>
									<li>Medicines such as: Motion Sickness/Nausea (Dramamine), Tylenol/Advil, and Pepto Bismal/Imodium</li>
									<li>Light Walking Shoes and Sandals</li>
									<li>White party outfit</li>
									<li>A night formal dinner outfit</li>
								</ul>
								
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>How do I pay for this package?</div>
							  <div data-content>
								<p>Navigate to the Buy Now tab and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>When are the payments due?</div>
							  <div data-content>
								<p>After registration of $19.99 per person the first payment of $200 is due <strong>by October 31, 2017</strong> . The final payment (remaining balance) is due on or before <strong>November 07, 2017</strong> . If the announced payment dates have passed contact us for our current payment plan.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>Are there any other charges associated with the cruise?</div>
							  <div data-content>
								<p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $11.25 per day, but you may want to leave more depending on your service. Sometimes gratuity is added to your final bill, so check with the cruiseline front desk on the ship before returning back to Mobile.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What port are we departing from and what time do I need to be there?</div>
							  <div data-content>
								<p>The Carnival Fantasy sails from the Port of Mobile. We suggest arriving no later than 2:30 PM.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What type of currency do I need in Cozumel?</div>
							  <div data-content>
								<p>In Cozumel you may use USD or the Mexican Peso. Be aware, rates for the MX Peso vary shop to shop. We suggest downloading a Currency app to have at least a ball park amount of what things cost in Cozumel. </p>
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

							  <div data-control>I do not speak Spanish, will this be a problem?</div>
							  <div data-content>
								<p>No. Though everyone may not speak English, most tourist parts of Mexico do speak or understand rudimentary English. Knowing some Spanish will definitely help, however, Cozumel is a large tourist island, and many of the shop owners and cab drivers are Bilingual. We recommend downloading the <a href="https://translator.microsoft.com/apps/" target="_blank">Microsoft Translate app</a> on your smartphone. It can translate Spanish to English and vice versa, translate words from images/signs/etc, and listen to conversation and translate in real-time. It's an app for both Android and iOS phones. </p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>Are there anything to be aware of while on the island?</div>
							  <div data-content>
								<ul>
									<li>Make sure you visit multiple shops before buying anything. Cozumel has many shops on the island and many of them sell the exact same items or similiar. Make sure you are getting the best price and quality for your money.</li>
									<li>Don't venture too far from the port. Many of the big name shops are closer to the main strip.</li>
									<li>If buying tequila, we highly recommend buying the local brands. You are in Mexico, so engulf the culture. Yes, you can probably get Patron for much cheaper there than in the States, but you may be missing out on one of Mexico's best products. Many shops do free tastings for their liquor. Even if you don't buy, you can get a good buzz without spending a dime.</li>
								</ul>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>I want to buy liquor, any recommendations?</div>
							  <div data-content>
								<ul>
									<li>Buy local tequila!</li>
									<li>Tequila come in different qualities. White/Silver, Gold, Resposado, Anejo, Extra Anejo. The latter two being the most aged and smoothest.</li>  
									<li>We recommend finding a good Anejo [AN-YE-HO] (3 years aged) or Extra Anejo (3+ years aged) sipping Tequila; (most look and taste like a brandy). The older the Tequila, the smoother and sweeter the taste. Once you taste one of these fine spirits, you may throw out all your Patron's at home. Some brands to ask for: Cava de Oro, Adictivo, Milagro. Anejo tequila are more premium in price, but the taste is well worth the cost. </li>
									<li>Outside of sipping tequila, there are some liqueur and creams you may be interested in such as: Sheridan coffee liqueur, and Almond flavored tequila.</li>
								</ul>
							  </div>

							</div><!-- end of accordion-->


						</div><!-- end of accordion group-->


            </div> <!-- end of Tab 3 -->



            <div id="tabs-4">
                 <div id="nanoGallery"></div>
            </div><!-- end of tabs 4 -->


            <div id="tabs-5">

                <div class="pay-form">
                        <p >Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>



                            <div class="cognito"></div>

                </div><!-- end of pay-form -->


    </div><!-- end of tabs 5 -->

								</div><!-- end of tabs -->



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
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>