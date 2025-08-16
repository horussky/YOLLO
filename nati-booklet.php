<?php

include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

// Load the event configuration
$event_config = require 'config/events/conf_nati.php';

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
    
                        <iframe allowfullscreen="allowfullscreen" allow="clipboard-write" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/076f7a7159.html" style="border: 0px; width: 100%; height: 600px;"></iframe>
                    </div><!-- end of colfull -->

                </div><!--end of content-->
    


</div><!--end of right-->

      <aside id="social">
      <?php include 'includes/twitter.inc.php'; ?>
      </aside>

    </div><!--end of container-->
</div><!-- end of wrap -->
<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include 'includes/scripts.inc.php'; ?>
<script type="text/javascript">
	$(function(){

        //nano
        $("#nanoGallery").nanoGallery({
            kind: 'flickr',
            userID: '50836209@N03',

            //uncomment this line to display one specific album:
            photoset:'72157712606706052',
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
<script src="js/flipbook.js"></script>
<script type="text/javascript">
    $('#magazine').turn({gradients: true, acceleration: true});
	
    var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		widgetType: 'checkout',
		eventId: '951980337817',
		iframeContainerId: 'eventbrite-widget-container-951980337817',
		iframeContainerHeight: 425,  
		onOrderComplete: exampleCallback
	});
</script>
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "78" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>