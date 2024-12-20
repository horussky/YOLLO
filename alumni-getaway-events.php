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
                            <p class="subtitle">Cabo San Lucas, MX & Ensenada</p>
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
                    <p class="lead">We reserve the right to alter, reschedule, or relocate event timings as necessary due to unforeseen circumstances, including but not limited to weather conditions, venue availability, participant emergencies, or logistical challenges. This may also include any other reasons deemed necessary.</p>

                    <p>Please be aware that the information provided here is subject to change and may not represent the final confirmation of the weekend's events. To stay informed with the latest updates and details, we recommend checking this page at least 7 days prior to your planned attendance.</p>
                </div>
                <div class="col-md-4">
                <iframe style="aspect-ratio: 1 / 1; width: 100%; height: auto;" width="100%" height="300" src="https://player-widget.mixcloud.com/widget/iframe/?light=1&feed=%2Fyollogsinc%2Fhbcu-alumni-getaway-mega-mix-2024-ft-dj-dre-smoove-and-dj-dirty-vegas%2F" frameborder="0" ></iframe>
                    
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
                    <h4 class="h5">Monday - Dec 2, 2024</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-welcome-aboard.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-sail-away.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-welcome-reception.jpg">
                </div>
                

                <div class="col-sm-4 col-12 mt-10">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-door-decorations.jpg">
                </div>
                <div class="col-sm-4 col-12 mt-10">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-rep-your-hbcu.jpg">
                </div>
            </div><!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Tuesday - Dec 3, 2024 (Day at Sea)</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-slot-pull.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-duck-hunt.jpg">
                </div>

                <div class="col-sm-4 col-12 mt-10">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-line-dance.jpg">
                </div>
                <div class="col-sm-4 col-12 mt-10">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-chocolate-fun-and-sexy.jpg">
                </div>
                

            </div> <!-- ./row -->


            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Wednesday - Dec 4, 2024</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-cabo-tour.jpg">
                </div>
                <div class="col-sm-4 col-12">
                <img class="img-responsive" src="/images/event-list/alumni/agc-boots-and-dukes.jpg">
                </div>
            </div> <!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Thursday - Dec 5, 2024 (Day at Sea)</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-yollo-and-chill-at-sea.jpg">
                </div>
                <div class="col-sm-4 col-12">
                <img class="img-responsive" src="/images/event-list/alumni/agc-black-hollywood.jpg">
                </div>
            </div> <!-- ./row -->

            <div class="row">
                <div class="col-12">
                    <h4 class="h5">Friday - Dec 6, 2024</h4>
                </div>
            </div><!-- ./row -->

            <div class="row mb-20">
            <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-ensenada-tour.jpg">
                </div>
                <div class="col-sm-4 col-12">
                    <img class="img-responsive" src="/images/event-list/alumni/agc-duck-hunt-happyhour.jpg">
                </div>
                
            </div> <!-- ./row -->


            <div class="row">
                <div class="col-md-8">
                    <h4>Book for next year</h4>
                    <p>Do you like this year's events and missed all the fun, please make sure you book for 2025.</p>
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
