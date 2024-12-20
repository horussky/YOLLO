<?php
	ob_start("ob_gzhandler");
	include 'includes/functions.inc.php';
	include 'includes/meta.config.inc.php';
	http_response_code(301);
	header('Location: /flexpay');
	header("X-Robots-Tag: noindex, nofollow", true); 
	exit;

	$eventbriteID = "711997021257";
	$event = array(
		"title" => "Flexpay",
		"subtitle" => "Buy Now, Pay Later",
		"img_url" => "../../images/slides/splash-daytopia-cta.jpg",
		"img_alt" => "Daytopia Day Party",
	);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $metas['flexpay']['title']; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $metas['flexpay']['desc']; ?>" />
	<meta name="keywords" content="<?php echo $metas['flexpay']['keywords']; ?>" />
	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
	<link href="<?php echo $metas['flexpay']['canonical']; ?>" rel="canonical" />
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

			<!--Left Content-->
			<div id="left">
				<!--Nav-->
				<?php include 'includes/nav.inc.php'; ?>
				<!--End of Nav-->
			</div>

			<!--Right Content-->
			<div id="right">

				<div class="content">

					<div class="colfull">

					<img class="mb-20" style="max-width: 100%" src="/images/flexpay/flexpay-header.jpg" />

						<h1 class="h4">Financing with Flexpay</h2>
						<p>FlexPay by Upgrade lets you buy now and pay later with simple, fixed monthly installments. Choose interest-free or low-interest plans for ultimate flexibility and no hidden surprises. At checkout, select FlexPay, complete a quick application, and get an instant decision. Once approved, pick your payment terms and start enjoying your purchase right away with manageable payments.
						</p>
						<p>FlexPay makes spreading out your purchase costs a breeze. Quick and easy to apply, you'll get approved in no time. Start enjoying what you want immediately while paying back in low, predictable monthly installments. With FlexPay, smarter spending has never been this exciting!</p>
						<h2 class="h5">Using Flexpay for your Cruise Package.</h2>

						<p>To use Flexpay for financing your cruise package, follow our simple process. First, register and pay the registration fee for the desired cruise. Once the registration is complete, customers can opt to use Flexpay as their payment method. By selecting Flexpay, you can conveniently spread out the cost of your cruise over a period of time, making it more manageable and accessible for your budget.</p> 


						
						<div class="tab" aria-label="faqs">
					    <h2 class="h5">Frequently Asked Questions</h2>
                       	
						<div data-accordion-group>
						
							<div class="accordion open" data-accordion>

								<div data-control>Why Flexpay?</div>
								<div data-content>
									<p>Flexpay provides the flexibility to make immediate purchases and pay over time with fixed monthly payments. Unlike credit cards, Flexpay charges only simple interest, making it a transparent and budget-friendly alternative.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What is the advantage of using Flexpay vs a credit card?</div>
								<div data-content>
									<p> Flexpay's simple interest model contrasts with credit cards that charge interest on interest. Flexpay ensures clear finance costs at the time of purchase, with no hidden fees or late payment penalties, allowing for easy budgeting.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>I purchased a trip using Flexpay, can I travel before it's paid off?</div>
								<div data-content>
								<p> Yes! You do need to allow a few days between booking and your departure date for things to process. Other than that, you are free to travel or check in whenever you like - even before you're all paid off.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>If I cancel my travel plans, what happens?</div>
								<div data-content>
								<p> Initiate cancellations with the travel provider. If eligible for a refund, Flexpay will update your account. If no refund is received, you remain responsible for the outstanding balance, and monthly payments continue until the balance is paid in full.</p>  
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Does checking my rate impact my credit score?</div>
								<div data-content>
									<p>For US Residents, checking eligibility has no impact on credit scores. Canadian Residents may experience a temporary impact due to a hard credit inquiry during the application process.</p>
								</div>

							</div><!-- end of accordion-->	
										
							<div class="accordion" data-accordion>

								<div data-control>How are my loan term offers determined? </div>
								<div data-content>
								<p> Flexpay considers various factors, including credit information, purchase details, and more, to determine loan term offers.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How is my interest/APR determined?</div>
								<div data-content>
								<p> APRs, ranging from 0% to 36%, are determined based on factors like credit information, purchase details, current loan activity, and more.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How much can I take out on my Flexpay loan?</div>
								<div data-content>
								<p> For US clients in US Dollars: $150 minimum and $25,000 maximum. For Canadian clients in Canadian Dollars: $300 minimum and $25,000 maximum.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How long can I take to repay Flexpay? </div>
								<div data-content>
								<p>Term lengths range from 3 months to 24 months, and the system offers options when agreeing to the payment plan.</p>
								</div>

							</div><!-- end of accordion-->



						</div><!-- end of accordion group-->
                        	

                        </div><!-- ./faqs -->

					</div><!-- end of colfull -->

					<div class="disclosure">

						<?php include 'includes/package-info-generic.inc.php'; ?>
						<strong>Disclaimer</strong> | The term
						<?php echo $event["title"]; ?>, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for
						descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
					</div>

				</div><!--end of content-->

			</div><!--end of right-->

		</div><!--end of container-->

	</div><!--end of wrap-->



	<!-- Footer  -->
	<?php include 'includes/footer.inc.php'; ?>
	<!-- End of Footer  -->



	<!-- Global Scripts -->
	<?php include 'includes/scripts.inc.php'; ?>

	<!--google analytics-->

	<?php include 'includes/analytics.inc.php'; ?>

</body>

</html>