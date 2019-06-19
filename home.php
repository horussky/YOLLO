<?php
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $metas['home']['title']; ?></title>
<meta name="viewport" content="width=device-width">
<meta name="description" content="<?php echo $metas['home']['desc']; ?>" />
<meta name="keywords" content="<?php echo $metas['home']['keywords']; ?>" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="<?php echo $metas['home']['canonical']; ?>" rel="canonical" />
<meta name="author" content="YOLLO Group Services" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>



<div id="wrap">

	<!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav-->
	 
	<div id="container">
    		<?php include 'includes/header.inc.php'; ?>

			<div id="left">
                <?php include 'includes/nav.inc.php'; ?>
			</div>  <!-- end of LEFT -->

      <div id="right">
            
            <section id="intro">
            <?php /* ?><div class="rslides"></div><?php */?>

            <p class="headline">Our name is our motto. You Only Live Life Once!</p>
						
            <p>YOLLO Group Services is one of the leading full-service travel companies located in the Southeastern region. We offer our clients great all-inclusive travel packages, and fun and festive experiences at the best destinations around the world.  <a title="read more about YOLLO Group Services" href="about.php"> Learn more about YOLLO.</a> or view some of our upcoming events below.</p>
            </section>
           
            <section id="upcoming-events" style="overflow:hidden">
								<div>
                <h3>Upcoming Events</h3>
              	<?php $i=0; foreach($feature_event as $event): if ($i == 3) break; ?>
				<?php if($event["end"] > $now): $i++;  ?>
                        <div class="event">
                            <a href="<?php echo $event["link"]; ?>" title="<?php echo $event["title"]; ?>">
                                <img src="<?php echo $event["img"]; ?>" />
                            </a>
                            <h4><?php echo $event["title"]; ?></h4>
                            <p><i class="fa fa-calendar"></i> <?php echo $event["date"]; ?></p>
                            <p><a class="learnmore" href="<?php echo $event["link"]; ?>" title="Learn more about <?php echo $event["title"]; ?>">Learn More</a></p>
                        </div>
                    <?php  endif; ?>
                <?php endforeach;?>
								</div>
            </section>

            <div class="disclosure"><br/>
            	<strong>Disclaimer</strong> | All associated graphics and/or logos demonstrated or referred to by YOLLO Group Services on this website are registered trademarks of their respective owners, and are used herein for factual and illustrative purposes only. Links are provided for your convenience and do not constitute an endorsement. Third party sites are not within our control and may not have the same privacy, security or accessibility standards. Third parties are solely responsible for the content and availability of their sites.
      			</div><!-- end of disclosure -->

     	</div><!--end of right-->





         <aside id="social">
		 	<?php include 'includes/twitter.inc.php'; ?>
         </aside>




	</div><!-- end of container -->



</div><!-- end of wrap -->



<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<!-- Global Scripts -->
<?php include 'includes/scripts.inc.php'; ?>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jflickrfeed.min.js"></script>


<script type="text/javascript">

$(function(){

		//slideshow - jflickrfeed - responsive slider

		$('.rslides').jflickrfeed({
			limit: 20,
			feedapi:'photoset.gne',
			qstrings: {
				set:'72157642625465693',
				nsid: '50836209@N03'

			},
			itemTemplate: '<img src="{{image}}" />'
		}, function(data) {
			$(".rslides").responsiveSlides({
			  auto: true,             // Boolean: Animate automatically, true or false
			  speed: 700,            // Integer: Speed of the transition, in milliseconds
			  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			  pager: false,           // Boolean: Show pager, true or false
			  nav: false,             // Boolean: Show navigation, true or false
			  random: true,          // Boolean: Randomize the order of the slides, true or false
			  pause: false,           // Boolean: Pause on hover, true or false
			  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			  prevText: "Previous",   // String: Text for the "previous" button
			  nextText: "Next",       // String: Text for the "next" button
			  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			  manualControls: "",     // Selector: Declare custom pager navigation
			  namespace: "rslides",   // String: Change the default namespace used
			  before: function(){},   // Function: Before callback
			  after: function(){}     // Function: After callback
			});


		});

});

</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>
