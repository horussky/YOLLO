<?php
    include 'includes/functions.inc.php';

	// Load the event configuration
	$event_config = require 'config/events/conf_scruggs.php';

	// Access configuration data
	$event = $event_config['event'];
	$geolocation = $event_config['geolocation'];
	$people = $event_config['people'];
	$package_items = $event_config['package_items'];
	$metas = $event_config['metas'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['description']; ?>" />
    <meta name="keywords" content="<?php echo $metas['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <meta property="fb:pages" content="117420764961518" />
    <link rel="icon" href="favicon-192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
    <link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>
<body id="scruggs-pg" class="event-landing">
<div id="wrap">
   
    <div class="container-fluid" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'includes/header.inc.php'; ?>
                </div>
            </div>
        </div>
    </div><!--container-fluid -->

    <div class="container-fluid scruggs-pg__hero bg-overlay" style="background-image: url('/images/scruggs/carnival-header.jpg');">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 order-2 order-md-1 text-center text-sm-center text-md-start text-xl-start">
                        <h1><?php echo $event["title"]; ?></h1>
                        <p class="lead"><?php echo $event["subtitle"]; ?></p>
                        <a href="#sign-up-now" class="btn btn-warning fw-bold" >Book Now</a>
                        <a href="#itinerary" class="btn btn-outline-light fw-bold" >View Itinerary</a>
                    </div><!-- ./col -->

                    <div class="col-md-4 text-center order-1 order-md-2 scruggs-pg__hero__img">
                        <img src="/images/scruggs/scruggs-hero-img.png" alt="" class="d-none d-md-block">
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

    <div class="container-fluid overview-bar px-0 mb-40">
        <div class="container-lg">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 text-center text-sm-center text-md-start text-xl-start">
                        <h2>Grand Bahama</h2>
                        <p><i class="fa-regular fa-calendar-days mr-5"></i> May 1-4, 2026</p>
                    </div><!-- ./col -->

                    <div class="col-lg-6 col-md-6">
                        <div class="row justify-content-center justify-content-lg-end">
                            <div class="overview-bar__item col-md-6 col-6 row align-items-center">
                                <i class="fa-solid fa-location-dot col-4 text-warning" style="font-size: 2em;"></i>
                                <p class="col mb-0">Duration <span class="d-block"><strong>3 Days</strong></span></p>
                            </div>

                            <div class="overview-bar__item col-md-6 col-6 row align-items-center">
                                <i class="fa-solid fa-ship col-4 text-warning" style="font-size: 2em;"></i>
                                <p class="col mb-0">Carnival Conquest <span class="d-block"><strong>Port of Miami</strong></span></p>
                            </div>
                        </div>


                    </div><!-- ./col -->
                </div><!-- ./row -->

                
        </div><!-- ./container -->
    </div><!--container-fluid -->

    <div class="container-fluid mb-40">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-start order-2 order-lg-1">
                        <h2 class="mb-20">About the Cruise</h2>
                        <p class="text-start">Imagine your perfect weekend escape: a sun-drenched three day cruise from Miami to a new, exclusive destination, Celebration Key&trade;. This isn't just any trip; it's a full day in your own private paradise in The Bahamas, and a celebration for Mr. Scruggs.</p>

                        <p class="text-start">Picture yourself with your toes in the soft white sand of our breathtaking beach. You can swim in the crystal-clear waters of the largest freshwater lagoons in The Bahamas, find a cozy spot at a vibrant beach bar, and simply let the day unfold in pure bliss. With everything taken care of, from your cozy stateroom to the amazing food and entertainment back on the Carnival Conquest, your only job is to relax and make incredible memories. <a href="#itinerary">Book your spot</a> and get ready to set sail!</p>

                        <h3 class="text-start">Looking for an easy payment option?</h3>
                        <p class="text-start"> Love this cruise but watching your budget? No problem. Use our Flex Pay option to lock it in and pay over time with easy monthly payments. Don't wait, your adventure at sea is calling</p>
                        
                    </div><!-- ./col -->

                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="/images/scruggs/scruggs-collage-hor.png" alt="" class="celebration-img img-fluid mx-auto d-none d-md-block d-sm-block d-lg-none">
                        <img src="/images/scruggs/scruggs-collage.png" alt="" class="celebration-img img-fluid mx-auto d-md-none d-sm-none d-lg-block">
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div id="itinerary" class="container-fluid mb-40 px-0">
                    <div class="container px-0">
                        <div class="row mb-20">
                            <div class="col-md-12 text-start">
                                <h2>Cruise Itinerary</h2>
                                <table class="itinerary text-start">
                                        
                                        <thead>
                                            <tr><th colspan="2" class="small gray-200"> *All times are based on Eastern Time Zone.</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Day 1 (Friday)</td>
                                                <td>Departs from Miami at 3:30 PM</td>
                                            </tr>
                                            <tr>
                                                <td>Day 2 (Saturday)</td>
                                                <td>Fun day at Sea - No port today! It's a great time to explore your ship and its exciting entertainment, food and activities! Some onboard activities include: onboard casino, swimming pools, live shows, spa, and gourmet dining.</td>
                                            </tr>
                                            <tr>
                                                <td>Day 3 (Sunday)</td>
                                                <td>Day at Celebration Key&trade; in Grand Bahama from 8:00 AM - 5:00 PM. Shore excursions include: Dolphin Encounter, Pearl Cove Beach Club, Calypso Lagoon, and Starfish Lagoon.</td>
                                            </tr>
                                            <tr>
                                                <td>Day 4 (Monday)</td>
                                                <td>Return to Miami at 8:00 AM</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                            </div>  <!-- ./col -->
                        </div><!-- ./row -->

                    </div><!-- ./container -->
                </div><!--container-fluid -->
            </div>
            <div class="col-12 col-lg-5">
                <div id="itinerary" class="container-fluid mb-40 px-0">
                    <div class="container px-0">
                        <div class="row mb-20">
                            <div class="col-md-12 text-start">
                                <h2>Cabin Pricing</h2>
                                <table class="itinerary text-start">
                                        
                                        <tbody>
                                            <tr>
                                                <td>Inside Cabin (No window)</td>
                                                <td>
                                                    <ul>
                                                        <li>Double: $390 pp </li>
                                                        <li>Single  $681.50</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Outside Cabin ( window)</td>
                                                <td>
                                                    <ul>
                                                        <li>Double: $430 pp </li>
                                                        <li>Single  $761.50</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Balcony Cabin</td>
                                                <td>
                                                    <ul>
                                                        <li>Double: $535 pp </li>
                                                        <li>Single  $971.50</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                            </div>  <!-- ./col -->
                        </div><!-- ./row -->

                    </div><!-- ./container -->
                </div><!--container-fluid -->
            </div>
        </div>
    </div>
</div>
    <div id="sign-up-now" class="container-fluid py-5 mb-40" style="color: #fff; background: radial-gradient(at left top, #22d3ee, #0d9488);">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 mb-20 text-center">
                        <h2 class="mb-20">Join this Cruise</h2>
                        <p>Get ready for an unforgettable 3-day experience!</p>
                        <script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="88"></script>
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->


    <div class="container-fluid mb-40">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                    
					<div class="tab" aria-label="faqs">

						<h2 class="text-center">Frequently Asked Questions?</h2>
                        <p class="mb-20 text-center">Allow us to provide further insight and clarity.</p>
                        
                        <div data-accordion-group>
						
							<div class="accordion open" data-accordion>

								<div data-control>Do I need a Passport?</div>
								<div data-content>
									<p>No, a passport is not required to go on the cruise. If you DO NOT have a passport and would like one please visit the your local Post Office for more information on obtaining one.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What are some things you suggest I buy for this trip? </div>
								<div data-content>
									<p>Relaxed casual wear, motion sickness medicine (just in case), swim wear, sun block lotion/spray, deet bug spray, and a sexy classy white outfit.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is there a charge for sodas on the cruise? </div>
								<div data-content>
								<p>Yes, beverages at the bar will require purchasing. However, there is an unlimited soda program provided by Carnival called Bottomless Bubbles. Pay one flat price for fountain soda and juice all cruise long. Prices are per day with an automatic 18% gratuity added at time of purchase of the program. Children 17 years and younger are $5.95 USD per day. Adults are $8.50 USD per day. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/3836/~/bottomless-bubbles-%28unlimited-soda-program" target="_blank"> Carnival Cruise FAQs</a></p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Is there an open bar or Bottomless Bubbles for alcohol on the ship? </div>
								<div data-content>
								<p>Yes, there is an option called CHEERS, but it's limited to 15 drinks per day. CHEERS is an all-inclusive beverage program that allows guests to enjoy a wide range of alcoholic and non-alcoholic beverages by paying a flat daily rate. Great news is it's included in your package price! The cost prior to your cruise is $69.95 USD per person, per day plus 18% gratuity. If you decide you want the program once on board, you can sign up for CHEERS at a bar the cost is $74.95 USD per person, per day plus 18% gratuity. For more information please visit <a href="https://help.carnival.com/app/answers/detail/a_id/1106" target="_blank"> Carnival Cruise FAQs</a></p>  
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How do I pay for this package?</div>
								<div data-content>
									<p>Navigate to the <a href="#sign-up-now">Buy Now tab</a> and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>
								</div>

							</div><!-- end of accordion-->	
										
							<div class="accordion" data-accordion>

								<div data-control>When are the payments due? </div>
								<div data-content>
								<p>After registration the first payment of $250 is due <strong>November 15 2025</strong>. The second payment of $250 is due <strong>December 15, 2025</strong>. The final payment (remaining balance) is due on or before <strong>January 15 , 2026</strong>.  All prices and payments due are per person.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Are there any other charges associated with the cruise?</div>
								<div data-content>
								<p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $13.99 per day, but you may want to leave more depending on your service. Sometimes gratuity is added to your final bill, so check with the cruiseline front desk on the ship before coming back to Miami.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What port are we departing from and what time do I need to be there?</div>
								<div data-content>
								<p>The Carnival Conquest sails from the Port of Miami. We suggest arriving no later than 2PM.</p>
								</div>

							</div><!-- end of accordion-->



						</div><!-- end of accordion group-->
                    </div><!--end of tab-->
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->



    <div id="sign-up-now" class="container-fluid px-0 mb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="disclosure">
                        <p><strong>Package Information</strong>: All package pricing is per stateroom and does not include taxes, gratuities, or port fees, which will be clearly itemized at checkout. Our cruise itineraries, including specific port stops and schedules, are subject to change due to weather, sea conditions, or operational requirements to ensure your safety and enjoyment.</p>
  
                        <p><strong>Cancellation Policy</strong>: We know plans can change, so we want to be clear about our policies. All payments made for your cruise package are non refundable and non transferable. Your initial deposit secures your reservation. If you need to cancel more than 60 days before your sail date, you will receive a 50% future cruise credit based on the payments you have made, valid for one year. Cancellations made within 60 days of departure, including cancellations for non payment, will result in the forfeiture of all monies paid. By completing your booking, you agree to these terms.</p>

                        <p><strong>Accepted Payments:</strong> <br>
                            <i class="fa-brands fa-cc-visa fa-2xl"></i>
                            <i class="fa-brands fa-cc-mastercard fa-2xl"></i>
                            <i class="fa-brands fa-cc-discover fa-2xl"></i>
                            <i class="fa-brands fa-cc-amex fa-2xl"></i>
                            <img style="width: 5rem; margin-left: 8px" src="./images/flexpay/flexpay-default.svg" />
                        </p>

                        <p><strong>Flex Pay Payment Plan</strong>: We offer Flex Pay to make your getaway more manageable. A down payment is required to secure your booking. Your actual loan terms, including the APR, are based on your creditworthiness and will be provided before you commit. APRs typically range from 0% to 36%, and not all applicants will be approved. These loans are made through our financing partner, Upgrade. Please review their Privacy Policy and Terms of Use on their website. YOLLO Group Services is not a lender and is not involved in your credit decision or loan terms.</p>
                        
                        <p><strong>Privacy Policy</strong>: Any information collected about participants in the Program will be used solely for the purposes of identifying participants, facilitating communication, and processing payments. We will not sell or share this information with any third-party groups. YOLLO may share participant data with third-party payment processors, tax authorities, or legal entities when required by law. All personal data will be handled in accordance with YOLLO Group Services' privacy policy, which can be found at <a href="/privacy-policy">https://www.goyollo.com/privacy-policy</a>.</p>
                    </div>
                </div><!-- ./col -->
            </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

    
                   

</div><!--end of wrap-->


<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<!-- Global Scripts -->
<?php include 'includes/scripts.inc.php'; ?>

<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
    
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>