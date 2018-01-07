<?php

ob_start("ob_gzhandler");

$event = array(
	"title"						=>"Groove Cruise",
	"subtitle"					=>"It's time to groove aboard the Creole Queen",
	"location"					=>"New Orleans",
	"date"						=>"July 21, 2018",
	"img_url"				 	=>"../../images/slides/splash-groove-cta.jpg",
	"img_alt"				 	=>"Groove Cruise"
);

$geolocation = array(
	"cruise1"=> array(
		"title" 		=>"Creole Queen Riverboat",
		"ship"			=>"https://media-cdn.tripadvisor.com/media/photo-s/08/3b/cc/55/creole-queen-mississippi.jpg",
		"location"		=>"New Orleans",
		"soldout"		=>"false",
		"img_url"		=>"https://media-cdn.tripadvisor.com/media/photo-s/08/3b/cc/55/creole-queen-mississippi.jpg"

	),

	"cruise2"=> array(
		""
	)

);

$people = array(
		"diamond"=> array(
			
			"General Admission"			=>"$60",
			"Hold Fee"					=>"$19.99",
		
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
		"Multi-level Paddle Wheel Boat Cruise"						=> "checked",
		"Boarding Starts at 6:50 pm"								=> "checked",
		"Party from at 7:00 pm - 10:00 pm"								=> "checked",
		"See the NOLA skyline at night"										=> "checked",
		"Free Giveaways to 4th Annual Grown and Sophiticated Cruise 2018"										=> "checked",
		"Cruise Control by DJ Dre Smoove, DJ Gorgeous, DJ Oktoba"										=> "checked",
		"This cruise will have attendees from across the country"										=> "checked",
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
<meta name="description" content="YOLLO Group Services is grooving and cruising in New Orleans." />
<meta name="keywords" content="Groove Cruise, New Orleans, YOLLO Group Services, Cruise Travel packages" />
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
                        <h3>The Groove Cruise in New Orleans</h3>

                        <p>For the previous 12 years we have rocked the Creole Queen in NOLA during Essence Festival weekend YOLLO decided to return after the party with a purpose and party just because! After the successful cruises hosted in Cincinnati, LA, and Daytona we are now taking the party back to NOLA!  Join us as we turn up to the max and the most anticipated party of the weekend in New Orleans! Come party aboard the Creole Queen for an exclusive Riverboat party cruise on the mighty Mississippi. This will be an exciting night of good music, adult drinks, mingling, and fun for everyone onboard. The boat features three (3) party decks, multiple DJ's, and some of the strongest adult beverages you can handle. This event is a MUST ATTEND so purchase your tickets today.</p> 
                        
						<p>This cruise WILL SELL OUT quickly, so purchase your tickets today. For questions and tickets call: <strong>(888) 946-9655</strong> or purchase your tickets <a href="#tabs-5" class="open-tab" data-tab-index="4">online now.</a></p>
                        
						<p><strong>Tickets:</strong> Gen Adm. $60 | Holding Fee: $19.99</p>


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

								<div data-control>After I purchase tickets online how do I receive my tickets?</div>
								<div data-content>
									<p>Your tickets are mailed to the address provided during the purchasing process.</p>
								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

								<div data-control>What time is boarding and what time does the boat cruise?</div>
								<div data-content>
									<p>Boarding starts at 9:30PM. The boat will not cruise until 10:30PM. Because tickets purchasers are traveling from as far away as Atlanta we want to give everyone a chance to board.</p>
								</div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

								<div data-control>What is included with VIP admission to the Boat Party?</div>
								<div data-content>
									<p>VIP includes a speedy admission onto the boat party, delicious food, and an open bar for the 1st hour of the event to start you off right all while partying on the boat.</p>
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

	          <!--<strong>Disclaimer</strong> | The term Alumni Getaway, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources. -->
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
			   photoset:'72157632729673352',

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
                            <script>Cognito.load("forms", { id: "57" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>