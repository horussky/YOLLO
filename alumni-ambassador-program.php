<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"				=>"Alumni Getaway Events",
	"subtitle"			=>"The Crossroads of the West",
	"location"			=>"Amber Cove and Grand Turk",
	"date"				=>"December 5, 2022",
    "date_start"        =>"December 9, 2022",
	"img_url"			=>"/images/event-list/alumni/alumni-event-header.jpg",
);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['alumni_ambass']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['alumni_ambass']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['alumni_ambass']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['alumni_ambass']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <meta property="fb:pages" content="117420764961518" />
    <link rel="icon" href="favicon-192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
    <link href="../css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body id="ambassador-pg" class="event-landing">
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

    <div class="container-fluid mb-40 ambassador-pg__hero">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 order-2 order-lg-1 text-center text-sm-center text-md-start text-xl-start">
                        <h1>Earn While You Share the HBCU Alumni Experience</h1>
                        <p class="lead">Get paid $50-$100 for each person who books! Plus, earn a $400 bonus.</p>
                        <a href="#sign-up-now" class="btn btn-warning fw-bold" >Join the Ambassador Program</a>
                    </div><!-- ./col -->

                    <div class="col-md-4 text-center order-1 order-lg-2">
                        <img src="/images/ambassador-hero-icon.svg" alt="Alumni Ambassador Program" class="img-fluid ambassador-pg__hero__img" />
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

    <div class="container-fluid px-0 mb-40">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <h2 class="mb-20">Why Become an Ambassador?</h2>
                        <p class="text-start"> At YOLLO Group Services, we celebrate HBCU pride and the impact of our alumni community. Our HBCU Alumni Getaway Cruise Ambassador Program empowers you to share your passion for the HBCU experience while earning rewards. </p>
                            
                        <p class="text-start">Show your HBCU pride by sharing the excitement of the <a title="HBCU Alumni Getaway Cruise" target="_blank" href="/alumni-getaway-cruise">HBCU Alumni Getaway Cruise</a>. This cruise will explore Costa Maya, Belize, and Cozumel, featuring YOLLO's exclusive events and theme parties. As an ambassador, you'll inspire others, earn commissions, and create lifelong memories for our HBCU community.</p>

                        

                    
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

    
    <div class="container-fluid mb-40">
        <div class="container">
            <div class="row mb-20 justify-content-center">
                <div class="col-md-10 text-center">
                    <h2>How It Works</h2>
                </div>  <!-- ./col -->
            </div><!-- ./row -->

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card card--hiw h-100">
                        <div class="card-body">
                            <i class="mb-20 fa-solid fa-file-signature fa-xl"></i>
                            <h3>Apply & Get Approved</h3>
                            <p>Submit your application to become a YOLLO Ambassador.</p>
                        </div>
                    </div>
                </div><!-- ./col -->

                <div class="col-md-4 col-sm-6">
                    <div class="card card--hiw h-100">
                        <div class="card-body">
                            <i class="mb-20 fa-solid fa-envelopes-bulk fa-xl"></i>
                            <h3>Ambassador Toolkit</h3>
                            <p>Receive your referral code and ready-to-use graphics, captions, and promotional ideas.</p>
                        </div>
                    </div>
                </div><!-- ./col -->

                <div class="col-md-4 col-sm-6">
                    <div class="card card--hiw h-100">
                        <div class="card-body">
                            <i class="mb-20 fa-solid fa-share-nodes fa-xl"></i>
                            <h3>Share & Promote</h3>
                            <p>Use your referral code and content to promote the <a target="_blank" href="/alumni-getaway-cruise">event</a> across social media.</p>
                        </div>
                    </div>
                </div><!-- ./col -->

                <div class="col-md-4 col-sm-6">
                    <div class="card card--hiw h-100">
                        <div class="card-body">
                            <i class="mb-20 fa-solid fa-money-bills fa-xl"></i>
                            <h3>Earn & Inspire</h3>
                            <p>Get paid for referrals with confirmed registrations. The more you engage, the more you'll make!</p>
                        </div>
                    </div>
                </div><!-- ./col -->

                <div class="col-md-4 col-sm-6">
                    <div class="card card--hiw h-100">
                        <div class="card-body">
                            <i class="mb-20 fa-solid fa-hand-holding-dollar fa-xl"></i>
                            <h3>Earn Rewards & Discounts</h3>
                            <p>Turn Referrals into Perks! Qualify for a 20% discount on the <a target="_blank" href="/alumni-getaway-cruise">cruise</a> and 10% off on other events after five (5) confirmed referrals.</p>
                        </div>
                    </div>
                </div><!-- ./col -->

                <div class="col-md-4 col-sm-6">
                    <div class="card card--hiw h-100">
                        <div class="card-body">
                            <i class="mb-20 fa-solid fa-ear-listen fa-xl"></i>
                            <h3>Stay Connected</h3>
                            <p> Join our ambassador community, share ideas, and celebrate your success. Stay inspired and maximize your impact!</p>
                        </div>
                    </div>
                </div><!-- ./col -->

            </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

    
    <div class="container-fluid mb-40 ambassador-pg__tiers">
        <div class="container">
            <div class="row mb-20 justify-content-center">
                <div class="col-md-10 text-center">
                    <h2>Commission Tiers</h2>
                    <p>As a YOLLO Ambassador, your earning potential grows with every referral. Our cumulative tiered commission structure rewards your hard work and dedication. Reach higher tiers to unlock increased earnings — each new threshold boosts your rate for future referrals. Once you move up a tier, you’ll earn the new rate on all future bookings!</p>
                </div>  <!-- ./col -->
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-md-4 mb-40">
                    
                    <div class="card shadow mb-40 h-100">
                        <div class="card-body text-center">
                            <img class="card-body__tier rounded-circle" src="/images/tier-1.jpg" alt="" />
                            <h3 class="card-title card-title--underline">Neophyte Tier</h3>
                            <p class="card-text">
                                <ol class="mx-0 my-0 list-unstyled">
                                    <li class="card__tier">$50</li>
                                    <li>per person</li>
                                    <li>0-16 referrals</li>
                                </ol>
                            </p>
                        </div>
                    </div><!-- ./card -->   
                </div><!-- ./col -->

                <div class="col-md-4 mb-40">
                <div class="card shadow mb-40 h-100">
                        <div class="card-body text-center">
                            <img class="card-body__tier rounded-circle" src="/images/tier-2.jpg" alt="" />
                            <h3 class="card-title card-title--underline">Prophyte Tier</h3>
                            <p class="card-text">
                                <ol class="mx-0 my-0 list-unstyled">
                                    <li class="card__tier">$75</li>
                                    <li>per person</li>
                                    <li>17-32 referrals</li>
                                </ol>
                            </p>
                        </div>
                    </div><!-- ./card -->   
                </div><!-- ./col -->

                <div class="col-md-4 mb-40">
                    <div class="card shadow h-100 align-items-center">
                        <div class="card-body text-center">
                            <img class="card-body__tier rounded-circle" src="/images/tier-3.jpg" alt="" />
                            <h3 class="card-title card-title--underline">Run Da Yard Tier</h3>
                            <p class="card-text">
                                <ol class="mx-0 my-0 list-unstyled">
                                    <li class="card__tier">$100</li>
                                    <li>per person</li>
                                    <li>33+ referrals</li>
                                </ol>
                            </p>
                        </div>
                    </div><!-- ./card -->   
                </div><!-- ./col -->
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                <div class="card card--hiw">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-crown"></i>
                            <h3 class="card-title">Top Ambassador</h3>
                            <p class="card-text">
                                <ol class="mx-0 my-0 list-unstyled">
                                    <li>Top Ambassador will receive a <strong>$400 Bonus</strong> payout.</li>
                                    <li>Announced August 1, 2025. Must have at least 15 confirmed referrals.</li>
                                </ol>
                            </p>
                        </div>
                    </div><!-- ./card -->  
                </div>  <!-- ./col -->
            </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->
    

    <div id="sign-up-now" class="container-fluid py-5 mb-40" style="color: #fff; background: radial-gradient(at left top, #7B27D6, #824C71)">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 mb-20 text-center">
                        <h2 class="mb-20">Become an Ambassador Today</h2>
                        <p>Ready to start earning? Fill out the form below to join our Brand Ambassador Program. We'll review your application and contact you soon. Ensure all information is accurate before submitting.</p>
                        <script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="84"></script>
                    </div><!-- ./col -->
                </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->


    <div class="container-fluid px-0 mb-40">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                    
					<div class="tab" aria-label="faqs">

						<h2 class="text-center">Still Have Questions?</h2>
                        <p class="mb-20 text-center">Allow us to provide further insight and clarity.</p>
                        
                        <div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

                                <div data-control>How do I earn commissions as a Brand Ambassador?</div>
                                
                                <div data-content>
                                <p>You earn commissions by referring others to book the HBCU Alumni Getaway Cruise using your unique referral link or code. Payments are only made for confirmed, fully paid registrations.</p>
                                </div>

							</div><!-- end of accordion-->


                            <div class="accordion" data-accordion>

                                <div data-control>When and how do I get paid?</div>
                                
                                <div data-content>
                                <p>Commissions are paid within 14 days of confirmation of a paid Registration. Commissions will be paid via a secure digital payment system, such as an online cash transfer service. Specific payment platforms will be determined by YOLLO and communicated to ambassadors in advance.</p>
                                </div>

							</div><!-- end of accordion-->

                            <div class="accordion" data-accordion>

                                <div data-control>Can I refer myself or family members to earn a commission?</div>
                                
                                <div data-content>
                                <p>No and yes. Self-referrals and fraudulent referrals are strictly prohibited. Any attempt to manipulate the system may result in forfeiture of earnings and removal from the program. Yes, you can refer a family member as long as they are not an ambassador themselves.</p>
                                </div>

							</div><!-- end of accordion-->

                            <div class="accordion" data-accordion>

                                <div data-control>What happens if someone cancels their booking?</div>
                                
                                <div data-content>
                                <p>As long as registration has been paid in full, commissions will be distributed. Cancellation of the package does not disqualify commission unless registration was never confirmed.</p>
                                </div>

							</div><!-- end of accordion-->
							
                            <div class="accordion" data-accordion>

                                <div data-control>Can YOLLO change the commission structure or terminate the program?</div>
                                
                                <div data-content>
                                <p>Yes. YOLLO reserves the right to adjust commission rates, bonus eligibility, or terminate the program at any time. Any changes will be communicated via email or the ambassador portal.</p>
                                </div>

							</div><!-- end of accordion-->

                            <div class="accordion" data-accordion>

                                <div data-control>Do I need to have attended or be an alumni of an HBCU to participate?</div>
                                
                                <div data-content>
                                <p>No, attending or being an alumnus of an HBCU is not required. This program is open to anyone who values the culture, community, and impact of HBCUs and wants to help promote the HBCU Alumni Getaway Cruise — while also earning extra money through referrals.</p>
                                </div>

							</div><!-- end of accordion-->
							
							
							
                        </div><!-- end of data-accordion-group -->
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
                        <?php include 'includes/hbcu-ambass-disclosure.inc.php'; ?> 
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
