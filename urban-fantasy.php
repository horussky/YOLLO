<?php
ob_start("ob_gzhandler");
$event = array(
	"title" => "Urban Fantasy 2016",
	"location" => "Nassau, Bahamas",
	"date" => "October 28 - 31, 2016",
	"img_url" => "../../images/slides/splash-ufw.jpg",
	"img_alt" => "Urban Fantasy"
);

$geolocation = array(

	"cruise1" => array(

		"title" => "Fantasy Cruise Ship",
		"ship" => "//directlinecruises.com/images/carnival_ecstacy_slider1.jpg",
		"location" => "Nassau, Bahamas",
		"soldout" => "false",
		"img_url" => "//directlinecruises.com/images/carnival_ecstacy_slider1.jpg"



	),


	"cruise2" => array(

		""

	)

);



$people = array(

	"diamond" => array(
		"Group of 4" => "$450",
		"Group of 3" => "$515",
		"Group of 2" => "$670",
		"Individual" => "$1265"
	),



	"emerald" => array(
		""
	),



	"options" => array(
		"Hotel Only" => "$1245 (Weekend)"
	),

);


$package_items = array(

	"diamond_items" => array(

		"4 Day/3 Night Cruise Departing From Miami, Florida" => "checked",
		"All You Can Eat All Weekend Long" => "checked",
		"Free Non-Motor Excursions Access" => "checked",
		"Open Bar Captains \"Fantasy\" Reception" => "checked",
		"Transportation To Events from Ship & Back" => "checked",
		"10 Hours of Open Bar for Weekend" => "checked",
		"YOLLO Gift Bag" => "checked"
	),



	"emerald_items" => array(
		""
	),

	"Hotel Only" => "$1245 (Weekend)"

);



include 'includes/functions.inc.php';
?>

<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8">

	

	<title>
		<?php echo $event["title"]?> |
		<?php echo $phonenumber ?>
	</title>

	<meta name="description" content="YOLLO Group Services is a travel company specializing in offering affordable travel to amazing events for everyone."/>

	<meta name="keywords" content="Urban Fantasy 2016, Carnival Cruise, Bahamas, YOLLO Group Services, student travel, bahamas, Cruise Travel packages"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE"/>

	<link href="favicon.ico" rel="icon" type="image/x-icon"/>

	<link href="css/global.css" rel="stylesheet" type="text/css"/>

	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>

</head>



<body>



	<div id="wrap">



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

					<img src="<?php echo $event["img_url"]; ?>" alt="<?php echo $event["img_alt"]; ?>">

				</div>



				<div class="content">



					<h2 class="title">
						<?php echo $event["title"]; ?>
					</h2>



					<div class="date-location">

						<div class="col">
							<?php echo $event["date"]; ?>
						</div>

						<div class="col">
							<?php echo $event["location"]; ?>
						</div>

					</div>







					<div class="colfull">



						<div id="tabs" class="yollo-tabs nodisp">

							<ul>

								<?php

								foreach ( $tabnavcruise as $tabs => $item ) {

									echo "<li><a href=\"#$tabs\">$item</a></li>";

								};



								?>

							</ul>





							<div id="tabs-1">

								<h3>Urban Fantasy Weekend in the Bahamas!</h3>



								<p>Urban Fantasy was created to offer a cruise experience that welcomes and actively includes African Americans. If you’re seeking great networking opportunities, or to mix and mingle, maybe meeting new friends is your thing, or just cruising this is your event! This all inclusive cruise aboard Carnival’s Ecstasy is designed for the ultimate party along with ports that will host our spectacular on shore events!</p>



								<p>Prices listed include all of your cabin accommodations, taxes, all meals (including 24 hour room service) juice, coffee, and tea, and ALL Urban Fantasy Events both on and off the boat! Urban Fantasy attendees are going to be treated to the finest music, entertainment, accommodations and service in the world! Additionally, they will be a part of endless activities, private beach parties, comedy shows, sports tournaments, theme night celebrations, and a whole lot more. Reserve your spot today for the best cabin selection!</p>





							</div>
							<!-- end of tab 1 -->





							<div id="tabs-2">



								<h3>Cruise</h3>

								<div class="hotel-box-container">



									<?php if(count($geolocation["cruise1"]) > 1) :?>

									<div class="hotel-box">

										<img src="<?php echo $geolocation['cruise1']['img_url']; ?>"/>

										<div class="hotel-title">

											<h3>
												<?php echo $geolocation["cruise1"]["title"]; ?>
											</h3>

										</div>

									</div>

									<?php endif; ?>



									<?php if(count($geolocation["cruise2"]) > 1) :?>

									<div class="hotel-box">

										<img src="<?php echo $geolocation['cruise2']['img_url']; ?>"/>

										<div class="hotel-title">

											<h3>
												<?php echo $geolocation["cruise2"]["title"]; ?>
											</h3>

										</div>

									</div>

									<?php endif; ?>





								</div>
								<!-- hotel box container -->



								<hr/>



								<h3>Price</h3>



								<?php if(count($geolocation["cruise1"]) > 1) :?>

								<div class="price-table">

									<ul class="price">

										<li class="header">Diamond <span>Package</span>
										</li>

										<?php foreach($package_items['diamond_items'] as $key=>$value): ?>

										<li class="<?php echo $value; ?>">
											<?php echo $key; ?>
										</li>

										<?php endforeach; ?>

										<li class="people-price">

											<ul class="priceblock">

												<?php foreach($people['diamond'] as $key=>$value): ?>

												<li>
													<?php echo $key; ?>
													<span>
														<?php echo $value ?>
														<?php if($key != "Individual"):?><em>/per person</em>
														<?php endif;?>
													</span>
												</li>

												<?php endforeach; ?>

											</ul>

										</li>

										<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a>
										</li>

									</ul>

								</div>
								<!-- price table -->

								<?php endif; ?>







								<?php if(count($geolocation["cruise2"]) > 1) :?>

								<div class="price-table">

									<ul class="price">

										<li class="header">Emerald <span>Package</span>
										</li>

										<?php foreach($package_items['emerald_items'] as $key=>$value): ?>

										<li class="<?php echo $value; ?>">
											<?php echo $key; ?>
										</li>

										<?php endforeach; ?>

										<li class="people-price">

											<ul class="priceblock">

												<?php foreach($people['emerald'] as $key=>$value): ?>

												<li>
													<?php echo $key; ?>
													<span>
														<?php echo $value ?>
														<?php if($key != "Individual"):?><em>/per person</em>
														<?php endif;?>
													</span>
												</li>

												<?php endforeach; ?>

											</ul>

										</li>

										<li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a>
										</li>

									</ul>

								</div>
								<!-- price table -->

								<?php endif; ?>



							</div>
							<!-- end of Tab 2 -->







							<div id="tabs-3">



								<h3>Frequently Asked Questions</h3>

								<div id="accordion" class="nodisp">



									<section>

										<h2>Do I need a Passport? <span></span></h2>

										<p>A passport is not required to go on the cruise if you are a United States citizen and departing from a US port. If you DO NOT have a passport, you can board with a birth certificate issued by the department of vital statistics and your driver’s license.</p>

									</section>





									<section>

										<h2>What are some things you suggest I buy for this trip? <span></span></h2>

										<p>Relaxed casual wear, motion sickness medicine (just in case), swim wear, sun block lotion/spray, deet bug spray, and a sexy classy white outfit.</p>

									</section>





									<section>

										<h2>How do I pay for this package? <span></span></h2>

										<p>Navigate to the Buy Now tab and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>

									</section>



									<section>

										<h2>When are the payments due? <span></span></h2>

										<p>After registration the first payment of $125 is due <strong>May 4, 2016</strong> . The final payment (remaining balance) is due on or before <strong>July 5, 2016</strong> . If you the announced payment dates have passed contact us for our current payment plan.</p>

									</section>



									<section>

										<h2>Are there any other charges associated with the cruise? <span></span></h2>

										<p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $11.25 per day, but you may want to leave more depending on your service. Sometimes gratuity is added to your final bill, so check with the cruiseline front desk on the ship before coming back to Miami.</p>

									</section>



									<section>

										<h2>What port are we departing from and what time do I need to be there? <span></span></h2>

										<p>The Carnival Ecstasy sails from the Port of Miami. We suggest arriving no later than 2:30 pm.</p>

									</section>







								</div>
								<!-- accordion -->



							</div>
							<!-- end of Tab 3 -->







							<div id="tabs-4">

								<div id="nanoGallery"></div>

							</div>
							<!-- end of tabs 4 -->





							<div id="tabs-5">



								<div class="pay-form">

									<p>Please use the form below to complete your booking for
										<?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a>
									</p>







									<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>

										<input type="hidden" name="cmd" value="_s-xclick">

										<input type="hidden" name="hosted_button_id" value="NRJTGWMRHL478">





										<div class="form-col">

											<input type="hidden" name="on0" value="Package Selection">

											<label>Package Selection</label>

											<select name="os0" id="paypal_select" class="form-control">

												<optgroup label="Package Reservation Fee">

													<option value="Inside Cabin Registration">Register: Inside Cabin $19.99 </option>

													<option value="Outside Cabin Registration">Register: Outside Cabin $19.99</option>

													<option value="General Registration">General Registration $19.99</option>

												</optgroup>





												<optgroup label="First Payment">

													<option value="Fantasy 1st Payment">First Payment $125</option>

												</optgroup>



												<optgroup label="Partial Payments">

													<option value="Partial Pay 100">Partial Pay: $100</option>

													<option value="Partial Pay 150">Partial Pay: $150</option>

													<option value="Partial Pay 200">Partial Pay: $200</option>

												</optgroup>



											</select>

										</div>



										<div class="form-col">

											<input type="hidden" name="on1" value="Package Type">

											<label>Package Type</label>

											<select name="os1" class="form-control">

												<option value="Diamond">Diamond </option>



											</select>

										</div>



										<div class="form-col">

											<input type="hidden" name="on2" value="Group Leader Name">

											<label for="os2">* Group Leader Name</label>

											<input id="os2" class="group form-control" type="text" name="os2" maxlength="60">

										</div>



										<div class="form-col">

											<input type="hidden" name="on3" value="Group Size">

											<label for="os3">* Number of people in group?</label>

											<input data-required="true" name="os3" type="text" class="group-size form-control" id="os3" size="2" maxlength="2">

										</div>



										<div class="form-col">

											<input type="hidden" name="on4" value="Referral">

											<label for="os4">Referral Code</label>

											<input name="os4" type="text" class="group form-control" id="os4" size="10" maxlength="10">

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



										<p class="small"><strong>Important:</strong> You will be redirected to PayPal's website to securely complete your payment.Rates are quoted in US dollars.</p>



									</form>



								</div>
								<!-- end of pay-form -->





							</div>
							<!-- end of tabs 5 -->



						</div>
						<!-- end of tabs -->







					</div>
					<!-- end of colfull -->





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



			//form validation

			$( '#paypal_frm' ).validate( {

				rules: {

					terms: {
						required: true
					},

					os3: {
						required: true
					},

					os2: {
						required: true
					},

					os5: {
						required: true
					}

				},

				messages: {

					os3: "must add group size",

					os2: "must add leader",

					os5: "must choose a package type",

					terms: "You must agree to terms!"

				}

			} );





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

			} );





		} );
	</script>



	<!--google analytics-->

	<?php include 'includes/analytics.inc.php'; ?>

</body>

</html>