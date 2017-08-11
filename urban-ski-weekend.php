<?php
if(!ob_start("ob_gzhandler")) ob_start();
$event = array(
	"title"						=>"Urban Ski Weekend 2018",
	"location"				=>"Gatlinburg, Tennessee",
	"date"						=>"February 2 - 5 2018",
	"img_url"				 	=>"../../images/slides/splash-urban-ski.jpg",
	"img_alt"				 	=>"Urban Ski Weekend"
);

$geolocation = array(
	"hotel1"=> array(
		"title" 					=> "Music Road Resort",
		"address"					=> "303 Henderson Chapel Rd",
		"location"				=> "Pigeon Forge, TN 37868",
		"geolocation"			=> "303 Henderson Chapel Rd, Pigeon Forge, TN 37868",
		"hotel1_soldout"	=> false,
		"img_url"					=> "https://media-cdn.tripadvisor.com/media/photo-s/04/9d/9d/57/music-road-resort-making.jpg"
	),

	"hotel2"=> array(
			""
	)


);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$515",
			"Group of 3"			=>"$545",
			"Group of 2"			=>"$575",
			"Individual"			=>"$725"
		),

		"emerald"=> array(
			"Group of 4" 			=>"$375",
			"Group of 3"			=>"$405",
			"Group of 2"			=>"$450",
			"Individual"			=>"$580"
		),

		"options"=>array(
			"Hotel Only" =>"$525 (Weekend)",
			"Ski Excursions" => "$100"
		),

);

$package_items = array(
	"diamond_items" => array(
		"4 Days / 3 Nights Hotel Accommodations"						=> "checked",
		"Party Bus Access"																	=> "checked",
		"The Best of the Best Fashion Shows"								=> "checked",
		"6th Annual Winter White Party"											=> "checked",
		"6th Annual \"LOL\" Comedy Show"										=> "checked",
		"The Rep Your City Super Bowl Party"								=> "checked",
		"Freaky Friday PJ Party"														=> "checked",
		"Access To The Exclusive Super Lounges Each Night"	=> "checked",
		"Access To The Love Jones Poets Corner Lounge"			=> "checked",
		"The \"Mid-Night Mountain\" Indoor Pool Party"			=> "checked",
		"Access To The Caribbean Lounge"										=> "checked",
		"Access To The 80's & 90's Old School Lounge"				=> "checked",
		"Tickets To All Additionally Added Events"					=> "checked",
		"Breakfast Daily"																		=> "checked",
		"YOLLO Gift Bag"																		=> "checked"
	),

	"emerald_items" => array(
		"4 Days / 3 Nights Hotel Accommodations"						=> "checked",
		"Party Bus Access"																	=> "ex",
		"The Best of the Best Fashion Shows"								=> "checked",
		"6th Annual Winter White Party"											=> "checked",
		"6th Annual \"LOL\" Comedy Show"										=> "checked",
		"The Rep Your City Super Bowl Party"								=> "checked",
		"Freaky Friday PJ Party"														=> "checked",
		"Access To The Exclusive Super Lounges Each Night"	=> "checked",
		"Access To The Love Jones Poets Corner Lounge"			=> "checked",
		"The \"Mid-Night Mountain\" Indoor Pool Party"			=> "checked",
		"Access To The Caribbean Lounge"										=> "checked",
		"Access To The 80's & 90's Old School Lounge"				=> "checked",
		"Tickets To All Additionally Added Events"					=> "checked",
		"Breakfast Daily"																		=> "checked",
		"YOLLO Gift Bag"																		=> "checked"
	),

	"Hotel Only" =>"$525 (Weekend)"
);

include 'includes/functions.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="We provide all-inclusive arrangements and tickets for Urban Ski Weekend." />
<meta name="keywords" content="Black Ski Weekend 2017, Urban Ski Weekend 2017,gatlinburg, winter skifest 2017, urban ski, urban ski 2017" />
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

										<h3>The best event for first-time skiers</h3>

										<p>YOLLO Group Services has the ultimate ski-weekend package for you. So you have never been skiing? No problem. Nervous about skiing and falling? No worries at all. There will be hundreds of others just like you at the lodge. You may fall, roll, or make the slopes a slave to your skills. Regardless, you will definitely have a great time at Urban Ski Weekend in Gatlinburg, Tennesee.</p>

										<h4>What else?</h4>
										<p>Tired of busting your butt on the slopes? You can enjoy many parties and events going on around the mountain. Don't be surprised to see a Celebrity or two hosting our parties. Last year's event featured Comedian Steve Brown along with Yung Joc and  R&amp;B Diva KeKe Wyatt! </p>

										<h4>The packages</h4>
										<p>Our packages includes hotel stay, party passes, comedy show, breakfast, and plenty of networking oppurtunities. We also have transportation available via one of our exclusive party buses. These buses will be available in Alabama, Tennessee, and Georgia.</p>

										<h4>The Bottom Line</h4>
										<p>Did we mention this is all going down Super Bowl Weekend. Skiing, parties, comedy, relaxation, good food, and football. What more can you ask for. Look forward to a spectacular weekend in Gatlinburg. Register and book a spot today!</p>

									</div> <!-- end of Overview-->


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

												</div><!-- end of hotel box container -->

												<hr />

												<h3>Price</h3>
												
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
														<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
													</ul>
												</div><!-- price table -->


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
												
											</div><!-- price table container-->




										</div><!-- end of tabs 2 -->



										<div id="tabs-3">

											<h3>Frequently Asked Questions</h3>
											<div id="accordion" class="nodisp">

													<section>
															<h2>When are the payments due? <span></span></h2>
															<p>Following registration the first payment of $125 is due on or before May 15, 2017. The final payment (remaining balance) is due on or before September 27, 2017.</p>
													</section>


													<section>
															<h2>What time will the bus depart from Atlanta? <span></span></h2>
															<p>The bus will depart Atlanta at 1pm (EST) on Friday and return to Atlanta Monday at 4 pm (EST).</p>
													</section>


													<section>
															<h2>What cities will the bus depart from? <span></span></h2>
															<p>Montgomery, Birmingham, Huntsville, and Atlanta! Don't see you city or state listed? Email us and let's see what we can work out!</p>
													</section>

													<section>
															<h2>What if I don't want to ski? <span></span></h2>
															<p>While we encourage everyone to "at least try", since it is a "Ski Trip", YOU CAN try another excursion such as Lazer Tag, Ropes Challenge Course, Horse Back Riding, Shopping Excursions, Mountain Tours, Ice Skating and a few others. Regardless of what you do, you will still get everything else in the package and the exchange options will NOT over lap the other events. Its going to be fun for everyone.</p>
													</section>

													<section>
															<h2>Does this trip include any transportation? <span></span></h2>
															<p>Yes. Transportation is provided for this trip if you purchase our Diamond Package. If the party bus is not your thing then the Emerald Package was designed for YOU.</p>
													</section>

													<section>
															<h2>Do I need a rental car? <span></span></h2>
															<p>If you aren't on the party bus, YES, otherwise, no. Just hop on the party bus!</p>
													</section>

													<section>
															<h2>What if I cancel a package? When will I receive a refund? <span></span></h2>
															<p>Please click on our FAQ link located in the upper right corner for full details.</p>
													</section>

													<section>
															<h2>What are some things you suggest I buy for this trip? <span></span></h2>
															<p>Relaxed casual winter wear, sweaters,  thermal wears, ski gloves, ski bib, a hat, goggles or shades, swim wear, and a sexy classy black outfit</p>
													</section>

													<section>
															<h2>Can I bring my children on this trip? <span></span></h2>
															<p> Unfortunately no; this event includes all adult festivities and alcohol not meant for minors.</p>
													</section>

													<section>
															<h2>Do I need any extra money? <span></span></h2>
															<p> Yes, please bring money for parking on Saturday
															and lunch on Saturday on the mountain, for shopping at the outlet malls and for your souvenirs.</p>
													</section>



											</div><!-- accordion -->

						        </div> <!-- end of Tab 3 -->


								<div id="tabs-4">
									 <div id="nanoGallery"></div>
								</div><!-- end of tabs 4 -->


								<div id="tabs-5">
									<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
									<div class="cognito"></div>


								</div><!-- end of tabs 5 -->



                </div><!-- end of tabs -->



    </div><!-- end of colfull -->





      </div><!--end of content-->




    <div class="disclosure">

   		<?php include 'includes/package-info-generic.inc.php'; ?><br/>

        <strong>Disclaimer</strong> | The term Urban Ski, Urban Ski Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
   </div>



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
			   photoset:'72157662464262434',

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
<script>Cognito.load("forms", { id: "33" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
	
<?php ob_end_flush();?>
</body></html>
