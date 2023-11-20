<?php
	ob_start("ob_gzhandler");
	include 'includes/functions.inc.php';
	include 'includes/meta.config.inc.php';

	$eventbriteID = "711997021257";
	$event = array(
		"title" => "Uplift",
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
		<?php echo $metas['daytopia']['title']; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $metas['daytopia']['desc']; ?>" />
	<meta name="keywords" content="<?php echo $metas['daytopia']['keywords']; ?>" />
	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
	<link href="<?php echo $metas['daytopia']['canonical']; ?>" rel="canonical" />
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

					<img class="mb-20" style="max-width: 100%" src="/images/uplift/uplift-header.jpg" />

						<h1 class="h4">Financing with Uplift</h2>
						<p>Uplift is a buy now, pay later service that allows customers to finance their cruise vacations. With Uplift, customers can spread out the cost of their cruise over a period of time, making it more affordable and convenient. This flexible payment option is a great way for travelers to enjoy their dream cruise without breaking the bank.</p>

						<h2 class="h5">Using Uplift for your Cruise Package.</h2>

						<p>To use Uplift for financing your cruise package, follow our simple process. First,  register and pay the registration fee for the desired cruise. Once the registration is complete, customers can opt to use Uplift as their payment method. By selecting Uplift, you can conveniently spread out the cost of your cruise over a period of time, making it more manageable and accessible for your budget.</p> 


						
						<div class="tab" aria-label="faqs">
					    <h2 class="h5">Frequently Asked Questions</h2>
                       	
						<div data-accordion-group>
						
							<div class="accordion open" data-accordion>

								<div data-control>Why Uplift?</div>
								<div data-content>
									<p>Uplift provides the flexibility to make immediate purchases and pay over time with fixed monthly payments. Unlike credit cards, Uplift charges only simple interest, making it a transparent and budget-friendly alternative.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What is the advantage of using Uplift vs a credit card?</div>
								<div data-content>
									<p> Uplift's simple interest model contrasts with credit cards that charge interest on interest. Uplift ensures clear finance costs at the time of purchase, with no hidden fees or late payment penalties, allowing for easy budgeting.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>If I purchase a trip, can I travel before it is paid off?</div>
								<div data-content>
								<p> Yes! You can travel before full payment. The final payment with Uplift is approximately 60 days before departure, offering flexibility in your travel plans.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>If I cancel my travel plans, what happens?</div>
								<div data-content>
								<p> Initiate cancellations with the travel provider. If eligible for a refund, Uplift will update your account. If no refund is received, you remain responsible for the outstanding balance, and monthly payments continue until the balance is paid in full.</p>  
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
								<p> Uplift considers various factors, including credit information, purchase details, and more, to determine loan term offers.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How is my interest/APR determined?</div>
								<div data-content>
								<p> APRs, ranging from 0% to 36%, are determined based on factors like credit information, purchase details, current loan activity, and more.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How much can I take out on my Uplift loan?</div>
								<div data-content>
								<p> For US clients in US Dollars: $150 minimum and $25,000 maximum. For Canadian clients in Canadian Dollars: $300 minimum and $25,000 maximum.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How long can I take to repay Uplift? </div>
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