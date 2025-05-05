<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"				=>"HBCU Alumni Getaway Cruise Events",
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

    <!-- Hero Image -->
    <div class="container-fluid px-0 mb-40">
            <div class="row  mb-40"">
                <div class="col-md-12 p-0">
                    <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
                        <div class="overlay"></div>
                        <div class="title">
                            <img class="title__event-logo mb-20" src="/images/hbcu-alumni-color.svg">
                            <h1><?php echo $event["title"]; ?></h1>
                            <h2 class="h4 sans-serif-light text-white">Join exclusive alumni events designed to entertain and inspire.</h2>
                        </div>
                    </div><!-- ./topcontent -->
                </div><!-- ./col -->
            </div><!-- ./row -->
    </div><!--container-fluid -->


    <div class="container-fluid">
        <div class="container">
            <div class="row text-center justify-content-center mb-40">
                
                <!-- Intro -->
                <div class="col-sm-8 col-12 mb-20">
                    <h2>Events Included In Your Package</h2>
                    <p>Enjoy a week packed with fun and entertainment! Need some extra cash? Unlock exciting earning opportunities by <a title="Become an ambassador and earn!" target="_blank" href="/alumni-ambassador-program">joining our Ambassador Program</a> today! </p>
                </div>

                <!-- Mixtape -->
                <div class="col-sm-8 col-12 mb-40">
                    <p class="h5 text-center sans-serif-light">Enjoy the official HBCU Alumni Getaway Mega Mix</p>
                    <iframe width="100%" height="60" src="https://player-widget.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&feed=%2Fyollogsinc%2Fhbcu-alumni-getaway-mega-mix-2024-ft-dj-dre-smoove-and-dj-dirty-vegas%2F" frameborder="0" ></iframe>
                </div><!-- ./col -->
            </div><!-- ./row -->
            

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Monday - Dec 2, 2024</h3>
                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    
                    <div class="row mb-20">
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-welcome-aboard.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-sail-away.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-welcome-reception.jpg">
                        </div>
                        
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-door-decorations.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-rep-your-hbcu.jpg">
                        </div>
                    </div><!-- ./row -->

                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Tuesday - Dec 3, 2024 (Day at Sea)</h3>
                </div>
            </div><!-- ./row -->
            
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="row mb-20">
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-slot-pull.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-duck-hunt.jpg">
                        </div>

                        <div class="col-sm-4 col-12 mt-10">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-line-dance.jpg">
                        </div>
                        <div class="col-sm-4 col-12 mt-10">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-chocolate-fun-and-sexy.jpg">
                        </div>
                    </div> <!-- ./row -->
                </div><!-- ./col -->
            </div><!-- ./row -->
            
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Wednesday - Dec 4, 2024</h3>
                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    
                    <div class="row mb-20">
                    <div class="col-sm-4 col-12">
                        <img class="img-responsive my-3" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                    </div>
                    <div class="col-sm-4 col-12">
                        <img class="img-responsive my-3" src="/images/event-list/alumni/agc-cabo-tour.jpg">
                    </div>
                    <div class="col-sm-4 col-12">
                    <img class="img-responsive my-3" src="/images/event-list/alumni/agc-boots-and-dukes.jpg">
                    </div>
                    </div> <!-- ./row -->

                </div><!-- ./col -->
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Thursday - Dec 5, 2024 (Day at Sea)</h3>
                </div>
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    
                    <div class="row mb-20">
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                            <img class="img-responsive my-3" src="/images/event-list/alumni/agc-yollo-and-chill-at-sea.jpg">
                        </div>
                        <div class="col-sm-4 col-12">
                        <img class="img-responsive my-3" src="/images/event-list/alumni/agc-black-hollywood.jpg">
                        </div>
                    </div> <!-- ./row -->

                </div><!-- ./col -->
            </div><!-- ./row -->

            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h3>Friday - Dec 6, 2024</h3>
                </div>
            </div><!-- ./row -->

            <div class="row  justify-content-center">
                <div class="col-sm-10">
                    
                <div class="row mb-20">
                    <div class="col-sm-4 col-12">
                        <img class="img-responsive my-3" src="/images/event-list/alumni/agc-healthy-heels.jpg">
                    </div>
                    <div class="col-sm-4 col-12">
                        <img class="img-responsive my-3" src="/images/event-list/alumni/agc-ensenada-tour.jpg">
                    </div>
                    <div class="col-sm-4 col-12">
                        <img class="img-responsive my-3" src="/images/event-list/alumni/agc-duck-hunt-happyhour.jpg">
                    </div>
                    
                </div> <!-- ./row -->

                </div><!-- ./col -->
            </div><!-- ./row -->


            <div class="row justify-content-center mb-40">
                <div class="col-md-10 text-center">
                    <h3>Book for next year</h3>
                    <p>Do you like this year's events and missed all the fun, please make sure you book for 2025.</p>
                    <a href="/alumni-getaway-cruise" class="btn btn-red open-tab">Book Now!</a>
                </div>
            </div>

            <div class="row justify-content-center mb-40">
                <div class="col-md-10 text-center">
                <?php include 'includes/hbcu-ambass-ad.inc.php'; ?>
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
                        <strong>Disclaimer</strong> | The term Alumni Getaway, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
