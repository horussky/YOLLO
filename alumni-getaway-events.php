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
    <title><?php echo $metas['alumni']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['alumni']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['alumni']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['alumni']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <meta property="fb:pages" content="117420764961518" />
    <link rel="icon" href="favicon-192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
    <link href="../css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body id="event-pg" class="event-landing">
<div id="wrap">
   
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'includes/header.inc.php'; ?>
                </div>
            </div>
        </div>
    </div><!--container-fluid -->

    <div class="container-fluid px-0 mb-40">
            <div class="row">
                <div class="col-md-12">
                    <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
                        <div class="overlay"></div>
                        <div class="title">
                            <img class="title__event-logo mb-20" src="/images/hbcu-alumni-color.svg">
                            <h1><?php echo $event["title"]; ?></h1>
                            <p class="subtitle">Amber Cove and Grand Turk</p>
                        </div>
                    </div><!-- ./topcontent -->
                </div><!-- ./col -->
            </div><!-- ./row -->
    </div><!--container-fluid -->


    <div class="container-fluid">
        <div class="container">
            <div class="row mb-40">
                <div class="col-md-8">
                    <h3 class="h4">IMPORTANT NOTICE</h3>
                    <p class="lead">We reserve the right to change, exchange, and/or move the times of events at our discretion.</p>

                    <p>This may not be the final confirmation of events for the weekend. To stay informed with all the latest news, check this page no later than 7 days before attending.</p>
                </div>
                <div class="col-md-4">
                <iframe style="aspect-ratio: 1 / 1; width: 100%; height: auto;" width="100%" height="300" src="https://www.mixcloud.com/widget/iframe/?light=1&feed=%2Fyollogsinc%2Fhbcu-alumni-getaway-cruise-2022-mega-mix-ft-dj-jamar-dj-dre-smoove-dj-dirty-vegas%2F" frameborder="0" ></iframe>
            </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 class="h4">Events Included In Your Package</h3>
                </div>
            </div><!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Dec 5, 2022</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-welcome-aboard.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-welcome-reception.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-rep-your-hbcu.jpg">
                </div>
            </div><!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Dec 6, 2022</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-slot-pull.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-duck-hunt.jpg">
                </div>
                <div class="col-sm-4 col-12">
                <img class="img-responsive" src="/images/event-list/alumni/agc-ocean-blue-party.jpg">
                </div>
            </div> <!-- ./row -->


            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Dec 7, 2022</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-amber-cove.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-door-decorations.jpg">
                </div>
                <div class="col-sm-4 col-12">
                <img class="img-responsive" src="/images/event-list/alumni/agc-boots-and-dukes.jpg">
                </div>
            </div> <!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Dec 8, 2022</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-grand-turk.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-getaway-retreat.jpg">
                </div>
                <div class="col-sm-4 col-12">
                <img class="img-responsive" src="/images/event-list/alumni/agc-90vs2000.jpg">
                </div>
            </div> <!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Dec 9, 2022</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-farewell-party.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-duck-hunt-happyhour.jpg">
                </div>
                
            </div> <!-- ./row -->


            <div class="row">
                <div class="col-md-8">
                    <h4>Book for next year</h4>
                    <p>Did you enjoyed this years event or even missed all the fun, please make sure you book for next years event. We are taking you to Mohagany Bay and Cozumel Mexico!</p>
                <a href="/alumni-getaway-cruise" class="btn btn-red open-tab">Book Now!</a>
                </div>
            </div>

        </div><!-- ./container -->
    </div><!--container-fluid -->


    <div class="container-fluid">
        <div class="container">
            

            <div class="row">
                <div class="col-12">
                    <div class="disclosure">
                        <?php include 'includes/package-info-generic.inc.php'; ?><br/>
                        <strong>Disclaimer</strong> | The term Alumni Getaway, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
                    </div><!-- end of disclosure -->
                </div>
            </div>
        </div>
    </div><!--container-fluid -->


      <aside id="social">
        <?php include '../includes/twitter.inc.php'; ?>
      </aside>

    </div><!--end of container fluid-->
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
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<script type="text/javascript">
	var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '60099606541',
		iframeContainerId: 'eventbrite-widget-container-60099606541',

		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "9" });</script>

    
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
    
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
