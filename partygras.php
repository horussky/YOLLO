<?php

	ob_start("ob_gzhandler");

	$event = array(
		"title"					=>"Party Gras Cruise",
		"location"			=>"Aboard the Harriott II Riverboat",
		"date"					=>"August 20, 2016",
		"img_url"				=>"../../images/slides/splash-partygras.jpg",
		"img_alt"				=>"Party Gras Cruise"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Alabama River",
			"address"			=>"200 Coosa Street, Montgomery, AL 36104",
			"location"		=>"Montgomery, AL 36104",
			"geolocation"	=>"200 Coosa Street, Montgomery, AL 36104",
			"hotel1_soldout"    =>false,
			"img_url"			=>"http://visitingmontgomery.com/images/uploads/images/HarriotII-Riverboat.jpg"
		),

		"hotel2"=> array(
			""
		)
	);

	$people = array(
			"diamond"=> array(
				"Early Bird" 					=>"$25",
				"General Admission"		=>"$35",
				"VIP"									=>"$55"
			),
			"emerald"=> array(
				""
			),

	);
	$package_items = array(
		"diamond_items" => array(
			"Multi-Level Music and DJs"				=> "checked",
			"Spoken Word Session"							=> "checked",
			"Live Entertainment"							=> "checked"
		),

		"emerald_items" => array(
			""
		)
	);

	include 'includes/functions.inc.php';


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="Party Gras is the livest River Boat Cruise event in Montgomery, Alabama." />
<meta name="keywords" content="Party Gras Cruise, Bottles and Beads, Montgomery Alabama, Harriott II Riverboat" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div id="wrap">
    <div id="container">
        <?php include 'includes/header.inc.php'; ?>

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

													<h3>It's Back. <?php echo $event["title"]?>! </h3>
													<p>Party Gras IV is returning from a successful 2015 party cruise, and ramping up to do it all again. YOLLO presents Bottles and Beads: Party Gras Cruise Part IV. After turning up to the max last year, this year we are making everything bigger and better than ever! Come party aboard the Harriott II for an exclusive Riverboat cruise. This will be a night of good music, adult drinks, mingling, and fun for everyone onboard. The boat features three (3) party decks, multiple DJ's, live entertainment, spoken word artists, and some of the strongest adult beverages you can handle. <strong>This cruise WILL SELL OUT quickly</strong>, so purchase your tickets today. For questions and tickets call: <strong>(888) 946-9655 </strong> or <strong>(334) 531-5650</strong>, or purchase your tickets online now.</p>



													<p><strong>Tickets:</strong> EARLY BIRD: $25 |  Gen Adm. $35 | VIP*: $55 </p>
						              <p class="disclosure">*VIP Access includes Priority First Boarding, Light Appetizers and Open Bar for the first hour</p>

                        </div><!-- End of Tab 1-->


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
																		<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="5">Book Today</a></li>
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
																		<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="5">Book Today</a></li>
																	</ul>
																</div><!-- price table -->
															<?php endif; ?>


                        </div><!-- end of tab 2-->




												<div id="tabs-3">

														<h3>Frequently Asked Questions</h3>
														<div id="accordion" class="nodisp">

																<section>
																		<h2>Where is the cruise being hosted? <span></span></h2>
																		<p>The cruise is being hosted on the Harroitt II riverboat. It's located on the riverwalk in downtown Montgomery, AL.</p>
																</section>

																<section>
																		<h2>After I purchase tickets online how do I receive my tickets? <span></span></h2>
																		<p>Your tickets are mailed to the address provided during the purchasing process.</p>
																</section>

																<section>
																		<h2>What time is boarding and what time does the boat cruise? <span></span></h2>
																		<p>Boarding starts at 9:30PM. The boat will not cruise until 10:30PM. Because tickets purchasers are traveling from as far
											away as Atlanta we want to give everyone a chance to board.</p>
																</section>

																<section>
																		<h2>What is included with VIP admission to the Boat Party? <span></span></h2>
																		<p>VIP includes a speedy admission onto the boat party, delicious food, and an open bar for the 1st hour of the event to start
				                            you off right all while partying on the boat.</p>
																</section>

																<section>
																		<h2>What is the address for boarding the boat? <span></span></h2>
																		<p>The entrance to the boarding area is 213 Commerce Street. Parking is available at any street-level meter, in front of or behind
																		Union Station, and in the Commerce or Coosa Street parking decks.</p>
																</section>

																<section>
																		<h2>What form of entertainment will be provided during the cruise? <span></span></h2>
																		<p>The cruise will feature two DJ's, live performances, and spoken word and poetry. Entertainment will be on each deck of the Harriott II.</p>
																</section>



														</div><!-- accordion -->

                        </div><!-- End of Tab 3-->



												<div id="tabs-4">
													 <h3>Party Gras 2015</h3>
													 <div id="nanoGallery"></div>
											 	</div><!-- End of Tab 4-->


												<div id="tabs-5">

                         	<div class="pay-form">
                             	<p >Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>



                                 <form  action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                 <input type="hidden" name="cmd" value="_s-xclick">
                                 <input type="hidden" name="hosted_button_id" value="WKYE6TUV2TE7E">


                                <div class="form-col">
                                 <input type="hidden" name="on0" value="Package Selection">
                                <label>Admission Tickets</label>
                                 <select name="os0" id="paypal_select" class="form-control">
                                     <optgroup label="Package Reservation Fee">
																			 		<option value="Early Bird">Early Bird: $25</option>
																					<option value="VIP Access">VIP Access: $55</option>
																					<option value="General Admission">General Admission: $35</option>
                                     </optgroup>
                                 </select>
                                 </div>


                                 <div class="form-col">
                                 <input type="hidden" name="on2" value="Group Leader Name">
                                 <label for="os2">* Group Leader Name</label>
                                 <input id="os2" class="group form-control" type="text" name="os2" maxlength="60" >
                                 </div>


                                 <div class="form-col">
                                 <input  type="hidden" name="on4" value="Referral" >
                                 <label for="os4">Referral Code</label>
                                 <input name="os4" type="text" class="group form-control" id="os4" size="10" maxlength="10" >
                                 </div>


                           		<div class="checkbox">
                                     <input name="terms" type="checkbox" value="agree" id="terms">
                                     <label for="terms">
                                         <p>* Check below for
                                             <a class="terms-box fancybox.ajax" href="/includes/termsofagreement.inc.php">Terms</a>
                                         </p>
                                     </label>
                          		</div>


                                 <input type="hidden" name="currency_code" value="USD">
                                 <input class="btn btn-success" type="submit" border="0" name="submit" value="Complete Booking">

                                 <p class="small"><strong>Important:</strong> You will be redirected to PayPal's website to securely complete your payment. Rates are quoted in US dollars.</p>

                        		</form>

                     	</div><!-- Pay form -->


										</div> <!-- End of tab5-->


									</div><!-- tabs -->



    					</div><!-- colfull -->



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
				os1: {required: true}
			},
			messages: {
				os3: "must add group size",
				os2: "must add group leader",
				os1: "must choose a package type",
				terms: "You must agree to terms!"
			}
  		});


			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157657872517631',

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


<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
