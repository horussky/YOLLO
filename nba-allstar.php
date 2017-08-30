<?php
ob_start("ob_gzhandler");

$event = array(
	"title"					=>"NBA All-Star Weekend 2018",
	"subtitle"				=>"Book your package today!",
	"location"				=>"Los Angeles, Ca",
	"date"					=>"February 16 – 18, 2018",
	"img_url"				=>"../../images/slides/splash-nba-cta.jpg",
	"img_alt"				=>"NBA All-Star 2018"
);

$geolocation = array(

	"hotel1"=> array(
		"title" 			=>"Hilton Garden Inn Hollywood",
		"address"			=>"2005 North Highland Avenue",
		"location"			=>"Los Angeles, CA 90068",
		"geolocation"		=>"2005 North Highland Avenue, Los Angeles, CA 90068",
		"hotel1_soldout"	=> false,
		"img_url"			=>"//media-cdn.tripadvisor.com/media/photo-s/0b/51/06/3c/hotel-exterior.jpg"
	),

	"hotel2"=> array(
		"title" 			=>"DoubleTree by Hilton Downtown",
		"address"			=>"120 S Los Angeles St",
		"location"			=>"Los Angeles, CA 90012",
		"geolocation"		=>"120 S Los Angeles St, Los Angeles, CA 90012",
		"hotel1_soldout"	=> false,
		"img_url"			=>"https://media-cdn.tripadvisor.com/media/photo-o/0c/df/e5/a4/hotel-exterior.jpg"
	)
);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$790",
			"Group of 3"			=>"$855",
			"Group of 2"			=>"$965",
			"Individual"			=>"$2365"
		),

		"emerald"=> array(
			"Group of 4" 			=>"$665",
			"Group of 3"			=>"$745",
			"Group of 2"			=>"$845",
			"Individual"			=>"$1850"
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
		"Celebrity Hosted Party Ticket (Saturday)"			=> "checked",
		"Jam Sessions Tickets"								=> "checked",
		"Mid-Day Party"										=> "checked",
		"YOLLO Live City Tour"								=> "checked",
		"All Star Celebrity Game Tickets"					=> "checked",
		"YOLLO Gift Bag"									=> "checked"
	),

	"emerald_items" => array(
		"Hotel Accommodations (Fri-Sun)"					=> "checked",
		"Complimentary Night"								=> "checked",
		"Celebrity Hosted Party Ticket (Saturday)"			=> "ex",
		"Jam Sessions Tickets"								=> "checked",
		"Mid-Day Party"										=> "checked",
		"YOLLO Live City Tour"								=> "checked",
		"All Star Celebrity Game Tickets"					=> "ex",
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
<meta name="description" content="YOLLO Group Services is providing you all-inclusive packages for NBA All-Star Weekend 2018 in Los Angeles." />
<meta name="keywords" content="NBA All-Star, All-Star game 2018, YOLLO Group Services, NBA All-Star Weekend packages 2018, los angeles, california" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
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
										foreach($tabsdefault as $tabs => $item){
											 echo "<li><a href=\"#$tabs\">$item</a></li>";
										};
									?>

								</ul>


								<div id="tabs-1">
									<h3><?php echo $event["title"]?></h3>

									<p>In 2018, the the City of Angels, Los Angeles is hosting the 67th  annual NBA All-Star game! With a lively fan base and Hollywood serving as the backdrop, this weekend event is sure to be lit. All-Star Weekend attracts the biggest celebrities around, and most already live in LA. YOLLO has the all-inclusive package to get you face-to-face with these celebrities. From party passes, hotel stay, and the Celebrity game, YOLLO is here for your turn up!  </p>


									<p>Allow us to give you an exciting travel experience during the NBA All-Star Weekend. Make sure you explore our hotel and pricing options and book with YOLLO Group Services today!</p>

								</div> <!-- end of tab 1 -->

								<div id="tabs-2">


									<h3>Hotels</h3>

									<div class="hotel-box-container">

											<?php if(count($geolocation["hotel1"]) > 1) :?>

											<div class="hotel-box">
													<img src="<?php echo $geolocation['hotel1']['img_url']; ?>" />
													<div class="hotel-title">
															<h3><?php echo $geolocation["hotel1"]["title"]; ?></h3>
													</div>
											</div>


											<?php endif; ?>

											<?php if(count($geolocation["hotel2"]) > 1) :?>

											<div class="hotel-box">
												 <img src="<?php echo $geolocation['hotel2']['img_url']; ?>" />
													<div class="hotel-title">
															<h3><?php echo $geolocation["hotel2"]["title"]; ?></h3>
													</div>
											</div>

											<?php endif; ?>


									</div>

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
														<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="5">Book Today</a></li>
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
														<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="5">Book Today</a></li>
													</ul>
												</section>
											<?php endif; ?>
											
											</div><!-- price table container -->
											

											<div class="clearfix">
												<h4>Party Pass Options: </h4>

												<p class="lead">Rookie - $250</p>
												<ul>
													<li>Friday Night Party</li>
													<li>Jam Sessions Ticket</li>
													<li>YOLLO Live City Tour</li>
													<li>Comedy Show - acts announced closer to event</li>
													<li>Saturday Night Party (Celebrity Hosted)</li>
													<li>Gift Bag</li>

												</ul>

												<p class="lead">Rising Star - $350</p>
												<ul>										
													<li>Jam Sessions Ticket</li>
													<li>YOLLO Live City Tour</li>
													<li>Comedy Show - acts announced closer to event</li>
													<li>Saturday Night Party (Celebrity Hosted)</li>
													<li>Sunday Night Party</li>
													<li>All Star Celebrity Game Ticket</li>
													<li>All Star Pratice Game ticket</li>										
													<li>Gift Bag</li>

												</ul>

												<p class="lead">All-Star - $450 (best seller)</p>
												<ul>

													<li>Friday Night Party (Celebrity Hosted)</li>
													<li>Jam Sessions Ticket</li>
													<li>YOLLO Live City Tour</li>
													<li>Comedy Show - acts announced closer to event</li>
													<li>Saturday Night Party (Celebrity Hosted)</li>
													<li>Sunday Night Party</li>
													<li>All Star Celebrity Game Ticket</li>
													<li>All Star Pratice Game ticket</li>	
													<li>All Star Rising Star Challenge</li>									
													<li>Gift Bag</li>
												</ul>
											</div>



								</div><!-- end of Tab 2 -->


								<div id="tabs-3">

									<h3>Frequently Asked Questions</h3>
									<div id="accordion" class="nodisp">

											<section>
													<h2>What is included with the Jam Session Tickets <span></span></h2>
													<p>Jam Session tickets grant you access to meet and greet with NBA and WNBA players and legends. You can also get basketball tips, free autographs from NBA All Stars, and more. This gives you the opportunity to gain access to the NBA like never before.</p>
											</section>

											<section>
													<h2>When are the payments due? <span></span></h2>
													<p>The first payment of $125 is due on or before July 07, 2017. The final payment (remaining balance) is due on or before October 11, 2017.</p>
											</section>

											<section>
													<h2>What are Celebrity Party Tickets? <span></span></h2>
													<p>A celebrity party ticket is a party that will be hosted by some of the biggest names in movie, music, sports, and entertainment.  Past celebrities whom have hosted parties have been the likes of P. Ditty, Young Jezzy, Pooch Hall, Floyd Mayweather, Jamie Foxx, and Kevin Durant. Who knows who will host parties at this annual sporting event that draws thousands from all over the globe.</p>
											</section>

											<section>
													<h2>What are Celebrity Game Tickets? <span></span></h2>
													<p>Celebrity Games tickets allow you to see the biggest stars from movie, music, and the NBA play a friendly game of roundball.</p>
											</section>

												<section>
													<h2>I would like to bring my child to the NBA All Star Weekend Games, does he/she need a ticket?
			 <span></span></h2>
													<p>Children under the age of 2 are admitted free of charge. Children under 2 years of age are not guaranteed a seat and may be required to sit on a parent's/guardian's lap. Children 2 and over must have ticket.</p>
											</section>							

											<section>
													<h2>Where is the NBA All Star Weekend in 2018? <span></span></h2>
													<p>The NBA All Star Weekend is in LOS ANGELES and will be on February 16-18, 2018!</p>
											</section>

											<section>
													<h2>What is so special about the NBA All Star Game?  <span></span></h2>
													<p>Where else do you have the oppurtunity to witness the best basketball players in the world on ONE court. This is it!</p>
											</section>


									</div><!-- accordion -->

								</div> <!-- end of Tab 3 -->


								<div id="tabs-4">
									 <div id="nanoGallery"></div>
								</div><!-- end of tabs 4 -->



								<div id="tabs-5">

									<h3>Buy Now</h3>
									<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>

									<div class="cognito"></div>


								</div><!-- end of tabs 5 -->


							</div><!-- end of tabs -->



					</div><!-- end of colfull -->



			</div><!--end of content-->


			<div class="disclosure">
				      		<?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> | The terms NBA All-Star, NBA All-Star Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the National Basketball Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any National Basketball Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
