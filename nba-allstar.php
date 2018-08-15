<?php
ob_start("ob_gzhandler");

$event = array(
	"title"					=>"All-Star Weekend 2019",
	"subtitle"				=>"Book your package today!",
	"location"				=>"Charlotte, NC",
	"date"					=>"February 15 – 17, 2019",
	"img_url"				=>"../../images/slides/splash-nba-cta.jpg",
);

$geolocation = array(

	"hotel1"=> array(
		"title" 			=>"Sheraton Charlotte",
		"address"			=>"555 S. McDowell Street, South Tower",
		"location"			=>"Charlotte, NC 28204",
		"soldout"	        => false,
		"img_url"			=>"//www.charlottefive.com/wp-content/uploads/2016/05/IMG_SheratonABC_1.JPG.JP_2_1_BD214V64_L47744109.jpg"
	),

	"hotel2"=> array(
		"title" 			=>"LeMeridian Charlotte",
		"address"			=>"555 S. McDowell Street, North Tower",
		"location"			=>"Charlotte, NC 28204",
		"soldout"	        => false,
		"img_url"			=>"//t-ec.bstatic.com/images/hotel/max1280x900/848/84804859.jpg"
	)
);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$890",
			"Group of 3"			=>"$955",
			"Group of 2"			=>"$1065",
			"Individual"			=>"$2465"
		),

		"emerald"=> array(
			"Group of 4" 			=>"$765",
			"Group of 3"			=>"$845",
			"Group of 2"			=>"$945",
			"Individual"			=>"$1950"
		),

		"options"=>array(
			"Celebrity Game" 		=> "$200",
			"Practice Game" 		=> "$150",
			"Rising Star Challenge Game" 	=> "$100",
			"Jam Session" 			=> "$50",
			"Hotel Only"			=> "$2000/room"
		),

);
$package_items = array(
	"diamond_items" => array(
		"Hotel Accommodations (Fri-Sun)"					=> "checked",
		"Complimentary Night"								=> "checked",
		"Celebrity Hosted Party Ticket (Friday)"			=> "checked",
		"Celebrity Hosted Party Ticket (Sunday)"			=> "checked",
		"Jam Sessions Tickets"								=> "checked",
		"Rising Star Game Ticket (Friday)"			=> "checked",
		"Mid-Day Party"										=> "checked",
		"YOLLO Live City Tour"								=> "checked",
		"Lavish Life Yacht Cruise"					=> "checked",
		"YOLLO Gift Bag"									=> "checked"
	),

	"emerald_items" => array(
		"Hotel Accommodations (Fri-Sun)"					=> "checked",
		"Complimentary Night"								=> "checked",
		"Celebrity Hosted Party Ticket (Friday)"			=> "ex",
		"Celebrity Hosted Party Ticket (Sunday)"			=> "checked",
		"Jam Sessions Tickets"								=> "checked",
		"Rising Star Game Ticket (Friday)"			=> "ex",
		"Mid-Day Party"										=> "checked",
		"YOLLO Live City Tour"								=> "ex",
		"Lavish Life Yacht Cruise"					=> "ex",
		"YOLLO Gift Bag"									=> "checked"
			),

	"Hotel Only" =>"$2000/room"
);

include 'includes/functions.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="YOLLO Group Services is providing you all-inclusive packages for NBA All-Star Weekend 2019 in Charlotte." />
<meta name="keywords" content="NBA All-Star, All-Star game 2019, YOLLO Group Services, NBA All-Star Weekend packages 2019, Charlotte, North Carolina" />
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
						<a data-href="#tabs-5" class="btn btn-red open-tab" >Buy Now</a>
					</div>
				</div>


        <div class="content">

						<div class="date-location">
								<div class="col"><?php echo $event["date"]; ?></div>
								<div class="col"><?php echo $event["location"]; ?></div>
						</div>


						<div class="colfull">

							<div id="responsive-tabs">
	


								<?php echo $responsive_tabs["overview"]; ?>
								<div class="tab" aria-label="overview">
									<h3><?php echo $event["title"]?></h3>
									
                                    <p>In 2019, the Queen City, Charlotte is hosting the 68th annual All-Star game! There will be a lively fanbase hungry to host this exciting weekend. With Charlotte, also known as <em>Party City</em>, serving as the backdrop, this weekend event is sure to be LIT. YOLLO has the all-inclusive package to get you face-to-face with the celebrities that will be in attendance for this weekend. From party passes, hotel stay, and celebrity hosted events, YOLLO is here for your turn up!</p>

                                    <p>Allow us to give you an exciting travel experience during the All-Star Weekend. Make sure you explore our hotel and pricing options and book with YOLLO Group Services today!</p>

								</div> <!-- ./ overview -->

								
								<?php echo $responsive_tabs["price"]; ?>
								<div class="tab" aria-label="price">


									<h3>Hotels</h3>

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

											<h3>Price</h3>
												
												<div class="price-table-container">

												<?php if(count($geolocation["hotel1"]) > 1) :?>
												<section class="price-table">
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
												</section>  
												<?php endif; ?>



												<?php if(count($geolocation["hotel2"]) > 1) :?>
												<section class="price-table">
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
												</section>
											<?php endif; ?>
											
											</div><!-- price table container -->
											

											<div class="clearfix">
												<h4>Party Pass Options: </h4>
                                            <p>These options are not the same and are separate from the all-inclusive options listed above; and are intended for those not in need of hotel accommodations. </p>

												<p class="lead">Rookie - $350 </p>
												<ul>
													<li>Friday Night Party</li>
													<li>Jam Sessions Ticket</li>
													<li>YOLLO Live City Tour</li>
													<li>Comedy Show - acts announced closer to event</li>
													<li>Saturday Night Party (Celebrity Hosted)</li>
													

												</ul>

												<p class="lead">Rising Star - $550 </p>
												<ul>										
													<li>Jam Sessions Ticket</li>
													<li>YOLLO Live City Tour</li>
													<li>Comedy Show - acts announced closer to event</li>
													<li>Saturday Night Party (Celebrity Hosted)</li>
													<li>Sunday Night Party</li>
													<li>All Star Celebrity Game Ticket</li>
													<li>All Star Practice Game ticket</li>							
												</ul>

												<p class="lead">All-Star - $750 (best seller)</p>
												<ul>

													<li>Friday Night Party (Celebrity Hosted)</li>
													<li>Jam Sessions Ticket</li>
													<li>YOLLO Live City Tour</li>
													<li>Comedy Show - acts announced closer to event</li>
													<li>Saturday Night Party (Celebrity Hosted)</li>
													<li>Sunday Night Party</li>
													<li>All Star Celebrity Game Ticket</li>
													<li>All Star Practice Game ticket</li>	
													<li>All Star Rising Star Challenge</li>								
												</ul>
											</div>



								</div><!-- ./ price -->


								<?php echo $responsive_tabs["faqs"]; ?>
								<div class="tab" aria-label="faqs">

									<h3>Frequently Asked Questions</h3>
									
									<div data-accordion-group>	
										
										<div class="accordion open" data-accordion>

										  <div data-control>What is included with the Jam Session Tickets</div>
										  <div data-content>
											<p>Jam Session tickets grant you access to meet and greet with NBA and WNBA players and legends. You can also get basketball tips, free autographs from NBA All Stars, and more. This gives you the opportunity to gain access to the NBA like never before.</p>
										  </div>

										</div><!-- end of accordion-->


										<div class="accordion" data-accordion>

										  <div data-control>When are the payments due?</div>
										  <div data-content>
											<p>After registration the first payment of $125 is due July 17, 2018. The final payment (remaining balance) is due on or before October 23, 2018.</p>
										  </div>

										</div><!-- end of accordion-->


										<div class="accordion" data-accordion>

										  <div data-control>What are Celebrity Party Tickets?</div>
										  <div data-content>
											<p>A celebrity party ticket is a party that will be hosted by some of the biggest names in movie, music, sports, and entertainment.  Past celebrities whom have hosted parties have been the likes of P. Ditty, Young Jezzy, Pooch Hall, Floyd Mayweather, Jamie Foxx, and Kevin Durant. Who knows who will host parties at this annual sporting event that draws thousands from all over the globe.</p>
										  </div>

										</div><!-- end of accordion-->


										<div class="accordion" data-accordion>

										  <div data-control>What are Celebrity Game Tickets?</div>
										  <div data-content>
											<p>Celebrity Games tickets allow you to see the biggest stars from movie, music, and the NBA play a friendly game of roundball.</p>
										  </div>

										</div><!-- end of accordion-->


										<div class="accordion" data-accordion>

										  <div data-control>I would like to bring my child to the NBA All Star Weekend Games, does he/she need a ticket?</div>
										  <div data-content>
											<p>Children under the age of 2 are admitted free of charge. Children under 2 years of age are not guaranteed a seat and may be required to sit on a parent's/guardian's lap. Children 2 and over must have ticket.</p>
										  </div>

										</div><!-- end of accordion-->


										<div class="accordion" data-accordion>

										  <div data-control>Where is the NBA All Star Weekend in 2019?</div>
										  <div data-content>
											<p>The NBA All Star Weekend is in Charlotte, NC and will be on February 15-17, 2019!</p>
										  </div>

										</div><!-- end of accordion-->


										<div class="accordion" data-accordion>

										  <div data-control>What is so special about the NBA All Star Game?</div>
										  <div data-content>
											<p>Where else do you have the oppurtunity to witness the best basketball players in the world on ONE court. This is it!</p>
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


								</div><!-- ./ buy now -->


							</div><!-- end of #responsive-tabs-->



					</div><!-- end of colfull -->



			</div><!--end of content-->


			<div class="disclosure">
			<?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> | The terms NBA All-Star, NBA All-Star Weekend, NBA, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the National Basketball Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any National Basketball Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
      </div><!-- end of disclosure -->



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
			   photoset:'72157632729662634',

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
<script>Cognito.load("forms", { id: "9" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
