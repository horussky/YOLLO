<?php

    ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"				=>"Fade to May",
		"subtitle"			=>"We are taking you to Beale Street",
		"location"			=>"Memphis, TN",
		"date"				=>"May 3 - May 5",
        "date_start"		=>"May 3, 2024",
		"img_url"			=>"../../images/slides/splash-fade-to-may-cta.jpg",
		"img_alt"			=>"Fade to May"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Sheraton Memphis Downtown",
			"soldout"           =>false,
			"img_url"			=>"//dynamic-media-cdn.tripadvisor.com/media/photo-o/21/9d/c2/21/outdoor-fountain.jpg?w=600&h=-1&s=1",
            "address"			=>"250 N Main St, Memphis, TN 38103",
         	"location"			=>"250 N Main St, Memphis, TN 38103",
		)/*,

		"hotel2"=> array(
			"title" 			=>"Sheraton New Orleans Hotel",
			"soldout"	        =>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/10/0b/10/bf/sheraton-new-orleans.jpg",
            "address"			=>"500 Canal St",
            "location"			=>"New Orleans, LA 70130",
		),
		
		"hotel3"=> array(
			"title" 			=>"DoubleTree by Hilton",
			"soldout"	        =>false,
			"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/13/5f/f0/b0/exterior.jpg",
            "address"			=>"300 Canal Street",
            "location"			=>"New Orleans, LA 70130",
		)*/


	);

	$people = array(
			"diamond"=> array(
				"Quad" 					=>"750",
				"Triple"				=>"$855",
				"Double"				=>"$1.075",
				"Individual"			=>"$1,350"
			)/*,
			"emerald"=> array(
				"Group of 4" 			=>"$1075",
				"Group of 3"			=>"$1205",
				"Group of 2"			=>"$1310",
				"Individual"			=>"$1945"
			)*/

	);

	$package_items = array(
		"diamond_items" => array(
			"Hotel Accommodations"						=> "checked",
			"The May Mix"								=> "checked",
			"Fade 2 May Mid-Day Cruise"								=> "checked",
			"Colors and Cocktails"						=> "checked",
			"May Dayz Live"								=> "checked",
			"Single Night Beale Street Music Festival Ticket"		=> "checked",
			"YOLLO Swag Bag"							=> "checked"
		)/*,

		"emerald_items" => array(
			"Hotel Accommodations (Fri-Sun)"			      => "checked",
			"One night concert ticket (Loge Section)"	      => "ex",
			"All White Party Cruise "			              => "ex",
			"Mid-Day Comedy Show (Sunday)"				      => "checked",
			"Black Film Review (Sunday)"				      => "checked",
			"Speak Easy Poetry Show (Sunday)"				  => "checked",
			"Welcome to NOLA party (Friday)"				  => "checked",
			"Complimentary Additional Night*"			      => "checked",
			"Additional nights: $349 plus tax and fees"	      => "checked",
			"Additional concert nights (Loge Section): $185" => "checked",
			"YOLLO Swag Bag"							      => "checked"
		)*/
	);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['fade-to-may']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['fade-to-may']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['fade-to-may']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['fade-to-may']['canonical']; ?>" rel="canonical" />
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
						<h2 class="h4">Fade to May: Beale Street Edition</h2>

						<p>Are you impressed by Southern hospitality or looking for a getaway? Get ready for a fun-filled weekend in Memphis, TN. "Fade To May" is a three-day event that features comedy, poetry, concerts, arts, and film.  There will be plenty of outdoor and indoor activities for you to enjoy!</p>

						<p>Our packages include weekend accommodations, exclusive event passes, and tickets to the Beale Street Music Festival, which features over 60 acts. In 2023 this high-powered music festival had  electrifying performances by artist like Glorilla, The Roots, Dru Hill, Greta Van Fleet, 311, Jazmine Sullivan, Mac Saturn, and MORE!</p>

						<p>With a quick trip over to over to Tunica, you can try your luck and play slots and blackjack at one of the many casinos! This is sure to be a weekend you won't forget, filled with amazing food, music, entertainment, and more! And remember, it's all happening during “Fade To May” weekend! Lock in your package today!</p>

						<p><a data-href="#tabs-5" href="#" class="open-tab">Secure this vacation package now</a> to enjoy this amazing Memphis experience.</p>

                        </div> <!-- ./overview -->




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
											
										<?php if(isset($geolocation["location"])) :?>		
                                        <address>
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i> 
                                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                                            <?php echo $hotel["location"]; ?></a>
                                        </address>
										<?php endif; ?>
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
												<li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
												<?php endforeach; ?>
											</ul>
										</li>
										<li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
									  </ul>
									</div><!-- price table -->

									<?php if(isset($geolocation["hotel2"])) :?>
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
										<li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
									  </ul>
									</div><!-- price table -->
									<?php endif; ?>
                                
								</div><!-- price table container-->

								<p>Prices based on (1) room &amp; max # of guest in that room. You can have multiple rooms.</p>				


                        </div><!-- ./price -->





                        <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
					    <h2 class="h4">Frequently Asked Questions</h2>
                       	
                       	<div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

							  <div data-control>Your prices listed are only up to four people max? Can you accommodate groups larger than four? </div>
							  <div data-content>
								<p>Yes, we can accommodate any size group, but due to hotel regulations the max occupancy per room is four. This is why you see pricing up to four.</p>
							  </div>

							</div><!-- end of accordion-->



							<div class="accordion" data-accordion>

							  <div data-control>When are the payments due?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $100 per person fee. The first payment of $125 is due on or before August 05, 2023. The second payment of $250 per person is due on or before October 05, 2023. The final payment (remaining balance) is due on or before December 05, 2023. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation. If you would like to make payments between due dates you may do so by clicking on the BUY NOW tab above and following the prompts.</p>
							  </div>

							</div><!-- end of accordion-->


							<div class="accordion" data-accordion>

							  <div data-control>What age groups are allowed?</div>
							  <div data-content>
								<p>All ages are welcome at Beale Street Music Festival, however there is no age-based discount available. All patrons must have a ticket to enter regardless of age and must pay the same ticket price.</p>
							  </div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

							  <div data-control>Can I leave and reenter the park?</div>
							  <div data-content>
								<p>Festival guests may exit and re-enter once per day. BEFORE YOU LEAVE THE PARK, exchange your ticket for a re-entry ticket and have your hand stamped. You'll see the signs around the entry points. You have to be back in the park two hours before the gates close (10:30 pm Friday and Saturday; 8:30 pm on Sunday).</p>
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

							  <div data-control>Must the entire group pay the $100 Reservation payment?</div>
							  <div data-content>
								<p>Yes. All prices are per person. The Reservation fee secures your spot on the packageand goes toward the package price.</p>
							  </div>

							</div><!-- end of accordion-->



							</div><!-- end of accordion group-->
                        	
                       


                        </div><!-- ./faqs -->




                        <?php /* ?><?php echo $responsive_tabs["photos"]; ?> <?php */ ?>
						<div class="tab" aria-label="photos">
					   	<h2 class="h4">Photos</h2>
                        		<div id="nanoGallery"></div>
                        </div>  <!-- ./photos -->




						<?php echo $responsive_tabs["buynow"]; ?>
						<div class="tab" aria-label="buy">
                        	<h2 class="h4">Buy Now</h2>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
							<script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="71"></script>
                        	<!-- <div class="cognito"></div> -->

                    	</div><!-- ./buynow -->



                    </div><!-- end of tabs -->

                </div><!-- end of colfull -->



		</div><!-- end of content -->


      	<section id="disclosure">
            <div class="disclosure">
            	<?php include 'includes/package-info-generic.inc.php'; ?><br/>
                <strong>Disclaimer</strong> | The term <?php echo $event["title"]; ?>
, Beale Street Music Festival, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by <?php echo $event["title"]; ?> and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any <?php echo $event["title"]; ?> productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
<script>Cognito.load("forms", { id: "71" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
