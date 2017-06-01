<?php
ob_start("ob_gzhandler");

$event = array(
	"title"					=>"The Tourney Weekend 2018",
	"location"			=>"Charlotte, NC",
	"date"					=>"March 2 - 4, 2018",
	"img_url"				=>"../../images/slides/splash-tourney.jpg",
	"img_alt"				=>"The Tourney"
);

$geolocation = array(

	"hotel1"=> array(
		"title" 				=>"Embassy Suites Charlotte",
		"address"				=>"4800 South Tryon Street",
		"location"				=>"Charlotte, North Carolina 28217",
		"geolocation"			=>"35.180122,-80.89066",
		"hotel1_soldout"		=>false,
		"img_url"				=>"https://media.expedia.com/hotels/1000000/30000/21400/21398/21398_100_y.jpg"
	),

	"hotel2"=> array(
		""
	)


);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$365",
			"Group of 3"			=>"$425",
			"Group of 2"			=>"$550",
			"Individual"			=>"$1020"
		),

		"emerald"=> array(
			"Group of 4" 			=>"$310",
			"Group of 3"			=>"$375",
			"Group of 2"			=>"$490",
			"Individual"			=>"$895"
		),

		"options"=>array(
			"Party Bus" 			=> "$150",
			"Hotel Only"			=> "$550/per person"
		),

);

$package_items = array(
	"diamond_items" => array(
		"Hotel Accommodations (Thurs-Sun)"				=> "checked",
		"Friday Night Celebrity Party Pass"				=> "checked",
		"Saturday Night Party Pass"								=> "checked",
		"Saturday Day Party"											=> "checked",
		"One Bottle of flavored Ciroc per group"	=> "checked",
		"YOLLO Gift Bag"													=> "checked"
	),

	"emerald_items" => array(
		"Hotel Accommodations (Thurs-Sun)"				=> "checked",
		"Friday Night Celebrity Party Pass"				=> "ex",
		"Saturday Night Party Pass"								=> "ex",
		"Saturday Day Party"											=> "checked",
		"One Bottle of flavored Ciroc per group"	=> "checked",
		"YOLLO Gift Bag"													=> "checked"
	),

	"Hotel Only" =>"$550/per person"
);

include 'includes/functions.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="We can provide you with all inclusive arrangements and tickets for the Tourney." />
<meta name="keywords" content="The Tourney, CIAA Charlotte, Basketball, CIAA Tournament, CIAA, CIAA Party Passes" />
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

			<div class="topcontent">
					<img src="<?php echo $event["img_url"]; ?>" alt="<?php echo $event["img_alt"]; ?>" >
			</div>


			<div class="content">

					<h2 class="title"><?php echo $event["title"]; ?></h2>

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

		              <h3>Get ready for <?php echo $event["title"]?> in Charlotte, North Carolina. </h3>

		              <p>The BIG CIAA tournament is taking over North Carolina again in 2018. YOLLO Group Services is making the Tourney a fun-filled weekend for you to remember. This basketball tournament has become one of the most attended events among HBCU’s in the nation. </p>
									<p>Fans will get their basketball fix during the day-time, while others enjoy all the night-time events. This means parties galore! You may spot a celebrity or two crashing and/or hosting several of these parties. You cannot go wrong booking with YOLLO Group Services for the Tourney Weekend 2018. </p>
									<p>If parties and celebrities are what you are looking for this weekend's events are definitely what you want to attend. Make sure you explore our Hotel and Pricing options and reserve your spot today before it's too late! </p>

							</div><!-- end of tab1-->


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

											<?php if(count($geolocation["hotel1"]) > 1) :?>
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



											<?php if(count($geolocation["hotel2"]) > 1) :?>
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

								</div><!-- end of Tab 2 -->


								<div id="tabs-3">

									<h3>Frequently Asked Questions</h3>
									<div id="accordion" class="nodisp">

											<section>
													<h2>When are the payments due? <span></span></h2>
													<p>After registration the first payment of $125 is due July 13, 2017. The final payment (remaining balance) is due on or before November 09, 2017.</p>
											</section>

											<section>
													<h2>Can I make payments before my due date? <span></span></h2>
													<p>Yes. All prices are per person. The reservation fee secures your spot on the package, and is independent from the package price.</p>
											</section>

											<section>
													<h2>Must the entire group pay the $19.99 Reservation fee? <span></span></h2>
													<p>A celebrity party ticket is a party that will be hosted by some of the biggest names in movie, music, sports, and entertainment.  Past celebrities whom have hosted parties have been the likes of P. Ditty, Mary J. Blige, Jamie Foxx, and Kevin Durant. Who knows who will host parties at this annual sporting event that draws thousands from all over the globe.</p>
											</section>

											<section>
													<h2>Does the price take care of hotel reservation for all 4 members in either package or only one person? <span></span></h2>
													<p>All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per person.  That means the group will share one room, but receive individual party passes and other amenities included in the package. </p>
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


							</div><!-- end of Tabs -->




    		</div><!-- end of col1 -->



      </div><!--end of content-->


      <div class="disclosure">
            <?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> | The terms Central Intercollegiate Athletic Association, CIAA, and CIAA Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the Central Intercollegiate Athletic Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Central Intercollegiate Athletic Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
			   photoset:'72157632957250953',

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
<script>Cognito.load("forms", { id: "10" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
