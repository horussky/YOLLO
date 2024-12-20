<?php
	ob_start("ob_gzhandler");
	include 'includes/functions.inc.php';
	include 'includes/meta.config.inc.php';

	$eventbriteID = "711997021257";
	$event = array(
		"title" => "Flex Pay",
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
		<?php echo $metas['Flex Pay']['title']; ?>
	</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php echo $metas['Flex Pay']['desc']; ?>" />
	<meta name="keywords" content="<?php echo $metas['Flex Pay']['keywords']; ?>" />
	<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
	<link href="<?php echo $metas['Flex Pay']['canonical']; ?>" rel="canonical" />
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

						<h1 class="h4">Financing with Flex Pay</h2>
						<p>Flex Pay by Upgrade lets you buy now and pay later with simple, fixed monthly installments. Choose interest-free or low-interest plans for ultimate flexibility and no hidden surprises. At checkout, select Flex Pay, complete a quick application, and get a decision. If approved, pick your payment terms and start enjoying your purchase right away with manageable payments.
						</p>
						<p>Flex Pay makes spreading out your purchase costs a breeze. Quick and easy to apply. Start enjoying what you want immediately while paying back in low, predictable monthly installments. With Flex Pay, smarter spending has never been this exciting!</p>
						<h2 class="h5">Using Flex Pay for your Cruise Package.</h2>
						<p>To use Flex Pay for financing your cruise package, follow our simple process. First, register and pay the registration fee for the desired cruise. Once the registration is complete, customers can opt to use Flex Pay as their payment method. By selecting Flex Pay, you can conveniently spread out the cost of your cruise over a period of time, making it more manageable and accessible for your budget.</p> 

						<div class="tab" aria-label="faqs">
					    <h2 class="h5">Frequently Asked Questions</h2>
                       	
						<div data-accordion-group>
						
							<div class="accordion open" data-accordion>

								<div data-control>What is Flex Pay?</div>
								<div data-content>
									<p>Flex Pay, formerly known as Uplift, gives you the freedom to purchase what you want now and pay over time with simple fixed installments. Some plans include interest while some are interest-free.</p>

									<p>When you're ready to check out, just select Flex Pay as your payment method, complete a short application, and receive a quick decision. If approved, choose the terms of your payment plan, finish checking out, and enjoy your purchase. Then, pay over time with simple, no-surprise monthly payments.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How does Flex Pay work?</div>
								<div data-content>
									<p>Flex Pay is just a new name for Uplift and will work exactly the same as it always has.</p>

									<p>Flex Pay, just like Uplift, lets you spread the cost of your purchase over low, monthly payments in the form of a short-term, fixed interest loan.</p>

									<p>Just shop like you normally would. When you are ready to check out, simply select Flex Pay as your payment method.</p>

									<p>To apply, you'll need to provide some basic information like your mobile number, date of birth, and if you are a US resident, your Social Security Number. If you're approved, just select your offer, finish checking out and you're done.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>What is the advantage of using Flex Pay vs a credit card?</div>
								<div data-content>
									<p> Flex Pay's simple interest model contrasts with credit cards that charge interest on interest. Flex Pay ensures clear finance costs at the time of purchase, with no hidden fees or late payment penalties, allowing for easy budgeting.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>I purchased a trip using Flex Pay, can I travel before it's paid off?</div>
								<div data-content>
								<p> Yes! You do need to allow a few days between booking and your departure date for things to process. Other than that, you are free to travel or check in whenever you like - even before you're all paid off.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>If I cancel my travel plans, what happens?</div>
								<div data-content>
								<p> Initiate cancellations with the travel provider. If eligible for a refund, Flex Pay will update your account. If no refund is received, you remain responsible for the outstanding balance, and monthly payments continue until the balance is paid in full.</p>  
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>Does credit reporting impact my credit score?</div>
								<div data-content>
									<p>Yes, credit reporting can impact your credit score.</p>

									<p>If youre concerned about your credit score, we suggest turning on AutoPay so you never miss a payment. To turn on AutoPay, visit pay.uplift.com, click on the Loans tab and turn on AutoPay. We also recommend setting up electronic payments directly through your bank account. There are no expiration dates or billing addresses to update and nothing to change if your card is lost or stolen.</p>
								</div>

							</div><!-- end of accordion-->	
										
							<div class="accordion" data-accordion>

								<div data-control>How are my loan term offers determined? </div>
								<div data-content>
								<p> Flex Pay looks at a number of factors, including your credit information, purchase details, and more.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How is my interest/APR determined?</div>
								<div data-content>
								<p> APRs may range from 0% to 36% and are based on a number of factors including your consumer credit information, purchase details, current loan activity, and more.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How much can I take out on my Flex Pay loan?</div>
								<div data-content>
								<p> For US clients in US Dollars: $150 minimum and $25,000 maximum. For Canadian clients in Canadian Dollars: $300 minimum and $25,000 maximum.</p>
								</div>

							</div><!-- end of accordion-->

							<div class="accordion" data-accordion>

								<div data-control>How long can I take to repay Flex Pay? </div>
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
						<?php echo $event["title"]; ?>, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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