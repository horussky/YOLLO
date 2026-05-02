<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
// Load the event configuration
$event_config = require 'config/events/conf_urban-ski-event.php';

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

    <!-- Hero Image -->
    <div class="container-fluid px-0 mb-40">
            <div class="row mb-40">
                <div class="col-md-12 p-0">
                    <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
                        <div class="overlay"></div>
                        <div class="title">
                            <img class="title__event-logo mb-20" src="/images/urban-ski-outlined-color.svg">
                            <h1><?php echo $event["title"]; ?></h1>
                            <h2 class="h4 sans-serif-light text-white">Join exclusive Urban Ski events designed to entertain.</h2>
                            <?php /*?><a class="btn btn-outlined btn--round" target="_blank" href="/booklet/">View Event Digital Booklet</a><?php */?>
                        </div>
                    </div><!-- ./topcontent -->
                </div><!-- ./col -->
            </div><!-- ./row -->
    </div><!--container-fluid -->


    <div class="container-fluid">
        <div class="container">
            <div class="row text-center justify-content-center mb-40">
                
                <!-- Intro -->
                <div class="col-sm-8 col-12 mb-0">
                    <h2>Events Included In Your Package</h2>
                    <p>We look forward to hosting you for a full week of events. To ensure the best possible experience, some event details may be adjusted. Please check back seven days before your trip to confirm the final schedule.</p>
                </div>

                <?php /*?>
                <!-- Mixtape -->
                <div class="col-sm-8 col-12 mb-40">
                    <p class="h5 text-center sans-serif-light">Enjoy the official HBCU Alumni Getaway Mega Mix</p>
                    <iframe width="100%" height="60" src="https://player-widget.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&feed=%2Fyollogsinc%2Fhbcu-alumni-getaway-mega-mix-2024-ft-dj-dre-smoove-and-dj-dirty-vegas%2F" frameborder="0" ></iframe>
                </div><!-- ./col -->
                <?php */?>
            </div><!-- ./row -->

            <div class="row justify-content-center ">
                <div class="col-sm-10 bg-light p-4 mb-20 border border-dark">
                    <h3>3 Bar Options at Ski</h3>
                    <ul>
                        <li>Bottle Service – VIP Suggested For All Celebrations & Groups-(sections & Table Tops)</li>
                        <li>Cash Bar By Donation: – For Those That Drink What They Drink </li>
                        <li>Free Bar (sponsored) – Included Throughout Weekend – Lines Will Be Long Please Be Patient.</li>
                    </ul>
                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Friday - Feb 6, 2026</h3>
                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    
                    <div class="row mb-20">
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-breakfast.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-check-in.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-meet.jpg" alt="">
                        </div>
                        
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-90s-party.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-whet.jpg" alt="">
                        </div>
                    </div><!-- ./row -->
                </div>
            </div><!-- ./row -->
            

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Saturday - Feb 7, 2026</h3>
                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    
                    <div class="row mb-20">
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-dance.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-wine.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-vibeandplay.jpg" alt="">
                        </div>

                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-film-review.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-charades.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-pooted.jpg" alt="">
                        </div>

                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-white-party.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-jungle-party.jpg" alt="">
                        </div>
                    
                    
                    </div><!-- ./row -->

                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Sunday - Feb 8, 2026</h3>
                </div>
            </div><!-- ./row -->
            
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="row mb-20">
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-ski-slopes.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-superbowl.jpg" alt="">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/urbanski/urban-ski-event-sinful.jpg" alt="">
                        </div>
                        
                    </div> <!-- ./row -->
                </div><!-- ./col -->
            </div><!-- ./row -->
            
            

            <div class="row justify-content-center mb-40">
                <div class="col-md-10 text-center">
                    <h3>Book With Us</h3>
                    <p>Did you like last year's events and missed all the fun, please make sure you book for 2027.</p>
                    <a href="/urban-ski-weekend" class="btn btn-red open-tab">Book Today!</a>
                </div>
            </div>

            
        </div><!-- ./container -->
    </div><!--container-fluid -->

    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center mb-40">

                <div class="col-sm-10">
                    <h3 class="h4 text-center">IMPORTANT NOTICE</h3>
                    <p>We strive to provide accurate, up-to-date information for all cruise events. However, we reserve the right to modify, reschedule, or cancel events due to factors including, but not limited to, weather conditions, venue issues, emergencies, logistical challenges, maritime regulations, and safety concerns.</p>

                    <p>The information on this page is subject to change and does not constitute a final confirmation of cruise events. We strongly advise checking this page within 7 days of your planned attendance. Sign up for email notifications and follow our social media for the latest updates.</p>

                    <p>We commit to promptly communicating changes, minimizing disruptions, and providing alternatives when possible. However, we are not liable for any inconvenience, additional expenses, or losses incurred due to event changes. By participating in our events, you acknowledge and accept these terms. We appreciate your understanding as we work to deliver an exceptional cruise experience. For questions, please contact our customer service team.</p>
                </div> <!-- ./col -->  
            </div><!-- ./row -->
        </div><!-- ./container -->
    </div><!--container-fluid -->


    <div class="container-fluid">
        <div class="container">
            

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="disclosure">
                        <?php include 'includes/package-info-generic.inc.php'; ?><br/>
                        <strong>Disclaimer</strong> | The term Urban Ski, Urban Ski Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
                    </div><!-- end of disclosure -->
                </div>
            </div>
        </div>
    </div><!--container-fluid -->


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

    
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
