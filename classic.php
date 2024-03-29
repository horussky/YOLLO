<?php

	ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"				=>"Classic Weekend 2023",
		"subtitle"			=>"It's the Classsssssic!",
		"location"			=>"Legion Field | Birmingham, AL",
		"date"				=>"October 26-28, 2023",
        "date_start"		=>"October 26, 2023",
		"img_url"			=>"../../images/slides/splash-mcc-cta.jpg",
		"img_alt"			=>"Magic City Classic"
	);



	$geolocation = array(

		"hotel1"=> array(

			"title" 			=>"La Quinta Inn & Suites",
			"address"			=>"1207 Boots Blvd",
			"location"			=>"Fultondale, Alabama 35068",
			"soldout"           => false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/08/65/86/02/la-quinta-inn-suites.jpg"

		)

	);



	$people = array(

			"diamond"=> array(

				"Group of 4" 			=>"$285",
				"Group of 3"			=>"$305",
				"Group of 2"			=>"$330",
				"Individual"			=>"$450"

			),

			"emerald"=> array(

				"Group of 4" 			=>"$245",
				"Group of 3"			=>"$285",
				"Group of 2"			=>"$300",
				"Individual"			=>"$415"

			)
	);



	$package_items = array(

		"diamond_items" => array(

			"Hotel Accommodations (Fri-Sun)"		=> "checked",
			"Game Tickets"							=> "checked",
			"Sunshine and Wine Day Party Tickets"	=> "checked",
			"After Game Party Pass"					=> "checked",
			"YOLLO Gift Bag"						=> "checked"

		),

		"emerald_items" => array(

			"Hotel Accommodations (Fri-Sun)"		=> "checked",
			"Game Tickets"							=> "checked",
			"Sunshine and Wine Day Party Tickets"	=> "ex",
			"After Game Party Pass"					=> "ex",
			"YOLLO Gift Bag"						=> "checked"

		)

	);

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['mcc']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['mcc']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['mcc']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['mcc']['canonical']; ?>" rel="canonical" />
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
      
    </div>
    <!-- end of left -->
    
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
            <div class="col"><?php echo $event["location"]; ?></div>
        </div>
        
        <div class="colfull">
        
        
        <div id="responsive-tabs">
			<?php echo $responsive_tabs["overview"]; ?>
			<div class="tab" aria-label="overview">
				<h2 class="h4">It's Classic Weekend</h2>
                <div style="max-height:300px; overflow:hidden;" class="mediummargin">
                	<img src="images/mcc-thumb<?php echo(rand(1,4)); ?>.jpg" width="100%" />
                </div>
               
                <p>This is the #1 HBCU football Classic in the nation attracting over 100,000 fans annually! The Magic City Classic offers a family environment that produces new bonds and memories for years to come.</p>
                <p>This annual clash of the titans was delayed in 2020 due to COVID-19 so they have decided to have this exciting game TWICE in one year! The results handed the Alabama A&M Bulldogs bragging rights TWICE in 2021.</p>
                <p>During the fall editon of this exciting football classic the Alabama A&M Bulldogs came away with the victory as they entered the game as favorites and delivered a decisive win for the Bulldog faithful as well as the MOST important part of the this historic rivalry which is retaining BRAGGING rights until October 2022! </p>
                <p>YOLLO Group Services, Inc. wants to provide your travel package for this historic and exciting weekend. Lock in your package today as space is limited and our packages go fast.</p>
			</div><!-- ./ overview -->

	  	
		  	<?php echo $responsive_tabs["price"]; ?>
		  	<div class="tab" aria-label="price">
			
			  	<h2 class="h4">Hotels</h2>

				
				<?php foreach($geolocation as $hotel) :?>
				<div class="hotel-grid">
                    <div class="hg-img">
                        <figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
                    </div>
                    <div class="hg-body">
                        <p class="hg-title"><?php echo $hotel["title"]; ?> 
                        <?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>
                           
                        <address>
                            <i class="fa fa-location-arrow" aria-hidden="true"></i> 
                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                            <?php echo $hotel["location"]; ?></a>
                        </address>
                    </div>
                </div><!-- ./hotel-grid -->
				<?php endforeach; ?>
				
				

              	<hr />
              
              	<h2 class="h4">Price</h2>
              
              	<div class="price-table-container">
					<div class="price-table">
					<ul class="price">
					  <li class="header">Diamond <span>Package</span></li>
					  <?php foreach($package_items['diamond_items'] as $key=>$value): ?>
					  <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
					  <?php endforeach; ?>
					  <li class="people-price">
						<ul class="priceblock">
						  <?php foreach($people['diamond'] as $key=>$value): ?>
						  <li><?php echo $key; ?> <span><?php echo $value ?>
							<?php if($key != "Individual"):?>
							<em>/per person</em>
							<?php endif;?>
							</span></li>
						  <?php endforeach; ?>
						</ul>
					  </li>
					  <li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
					</ul>
					</div>
					<!-- price table -->

					<div class="price-table">
					<ul class="price">
					  <li class="header">Emerald <span>Package</span></li>
					  <?php foreach($package_items['emerald_items'] as $key=>$value): ?>
					  <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
					  <?php endforeach; ?>
					  <li class="people-price">
						<ul class="priceblock">
						  <?php foreach($people['emerald'] as $key=>$value): ?>
						  <li><?php echo $key; ?> <span><?php echo $value ?>
							<?php if($key != "Individual"):?>
							<em>/per person</em>
							<?php endif;?>
							</span></li>
						  <?php endforeach; ?>
						</ul>
					  </li>
					  <li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
					</ul>
					</div>
					<!-- price table --> 
				</div><!-- price table container-->
			
		  	</div><!-- ./ price -->

	  	
		  	<?php echo $responsive_tabs["faqs"]; ?>
		  	<div class="tab" aria-label="faqs">
				
			  	<h2 class="h4">Frequently Asked Questions</h2>
             	
             	<div data-accordion-group>	
										
					<div class="accordion open" data-accordion>

					  <div data-control>When are the payments due?</div>
					  <div data-content>
						<p>After registration the 1st payment of $50 is due on or before due June 20, 2022. The second and final payment is due September 03, 2022.</p>
					  </div>

					</div><!-- end of accordion-->


					<div class="accordion" data-accordion>

					  <div data-control>Can I make payments before my due date?</div>
					  <div data-content>
						<p>Yes. Our payment plans are designed to help you pay over time. If you want to pay more frequent than the established dates that's great.</p>
					  </div>

					</div><!-- end of accordion-->


					<div class="accordion" data-accordion>

					  <div data-control>What would you recommend for parking on gameday?</div>
					  <div data-content>
						<p> Gameday parking is extremely limited at Legion Filed and the price is $20 per vehicle in most cases. We recommend utilizing the shuttle system from one of three convenient locations for areas near you. Parking at each of the three convenient locations is FREE, and a round trip shuttle ride is just $5 per person (ages 10 and under are free).</p>
					  </div>

					</div><!-- end of accordion-->


					<div class="accordion" data-accordion>

					  <div data-control>Which team is the home team?</div>
					  <div data-content>
						<p> Home team honors alternate each year between Alabama State and Alabama A&M.  Alabama A&M will be the home team for 2022! Regardless of home team, ASU bench is always on the east side and AAMU is on the west side of the stadium.</p>
					  </div>

					</div><!-- end of accordion-->


					<div class="accordion" data-accordion>

					  <div data-control>When do they start selling tailgating spots?</div>
					  <div data-content>
						<p>Legion Field controls all tailgating which includes RV and tent spaces. The time when spaces will be available for purchase has not been determined.  For all questions regarding tailgating please contact 205-254-2391.</p>
					  </div>

					</div><!-- end of accordion-->


					<div class="accordion" data-accordion>

					  <div data-control>What is Legion Field bag policy and what items are prohibited?</div>
					  <div data-content>
						<p>All bags must be clear. Prohibited items includeWeapons of any kind, umbrellas, purses and bags larger than 1"x4.5"x6.5", non-see thru cinch bags, diaper bags, fanny packs, backpacks, briefcases, computer bags, luggage (all types), seat cushions with compartments, selfie sticks, tripods, video cameras and recorders, cameras with 12" lenses or greater, all camera cases, remote controlled drones or devices, tobacco products of any kind, cigarettes and e-cigarettes, illegal drugs, alcoholic beverages, outside food or drinks, fireworks and smoke producing devices, all types of radios, all animals (except certified, leashed service animals), helium filled balloons, inflated balls, frisbees, rollerblades, heelies, skateboards and scooters, *any other item deemed dangerous or inappropriate by staff. VIOLATION OF THIS POLICY WILL BE SUBJECT TO EJECTION WITHOUT REFUND. </p>
					  </div>

					</div><!-- end of accordion-->

					<div class="accordion" data-accordion>

					  <div data-control>Is there an ATM located at the stadium?</div>
					  <div data-content>
						<p>An ATM will be provided by Regions Bank and will be located on the south side of the stadium.</p>
					  </div>

					</div><!-- end of accordion-->


					<div class="accordion" data-accordion>

					  <div data-control>Must the entire group pay the $29.99 reservation fee?</div>
					  <div data-content>
						<p>Yes. All prices are per person. The reservation fee secures your spot on the package, and is independent from the package price.</p>
					  </div>

					</div><!-- end of accordion-->



				</div><!-- end of accordion group-->
				
		  	</div><!-- ./ faqs -->
		  
		  
		  	<?php echo $responsive_tabs["photos"]; ?>
		  	<div class="tab" aria-label="photos">
			  	<h2 class="h4">Classic Weekend</h2>
            	<div id="nanoGallery"></div>
		  	</div><!-- ./ photos -->
		  
		  
		  	<?php echo $responsive_tabs["buynow"]; ?>
		  	<div class="tab" aria-label="buy">
			  	<h2 class="h4">Buy Now</h2>
                <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                
                <div class="cognito"></div>
		  	</div><!-- ./ buy now -->
		  
		  
		  
		</div><!-- end of #responsive-tabs-->
        
        
 
        </div><!-- end of contentfull -->
        
      </div><!-- end of content -->
      
      <div class="disclosure">
        <?php include 'includes/package-info-generic.inc.php'; ?>
        <br/>
        <strong>Disclaimer</strong> | The terms Magic City Classic, and The Magic City Classic, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the Magic City Classic and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Magic City Classic productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources. </div>
      <!-- end of disclosure --> 
      
    </div>
    <!--end of right-->
    
    <aside id="social">
      <?php include 'includes/twitter.inc.php'; ?>
    </aside>
  </div>
  <!--end of container--> 
  
</div>
<!-- end of wrap --> 

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
			   photoset:'72157632961614148',
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
<script>Cognito.load("forms", { id: "6" });</script>

<!--google analytics-->

<?php include 'includes/analytics.inc.php'; ?>
</body>
</html>
