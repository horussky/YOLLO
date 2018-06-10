<?php
include 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>YOLLO Group Services | Home </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="YOLLO Group Services Inc. is one of the leading full-service event concierge company in the Southern Region." />
<meta name="Keywords" content="YOLLO Group Services, Alumni Getaway Cruise, Urban Fiesta, NBA All-Star Weekend, Mardi Gras, Urban Ski Weekend, Black Ski Weekend, Urban Fantasy, Magic City Classic, Essence Festival, Cincinnati Music Festival, College Beach Festival" />
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
            <div class="rslides"></div>

            <p class="headline">Our name is our motto. You Only Live Life Once!</p>
            <p>YOLLO Group Services is one of the leading full-service travel companies located in the Southeastern region. YOLLO strives to offer clients great travel deals, as well as provide fun and festive events . We are a company started for students by students, but we provide service for all customers ... <a title="read more about YOLLO Group Services" href="about.php">read more</a></p>
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
