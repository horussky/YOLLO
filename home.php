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
<meta property="fb:pages" content="117420764961518" />
<link rel="icon" href="favicon-192.png" sizes="192x192">
<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
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
                <?php /* ?><div class="rslides"></div>
                <?php echo $json["homepage__description"]; ?><?php */?>

                <h1 class="headline">Our name is our motto. You Only Live Life Once!</h1>
                            
                <p>YOLLO Group Services is one of the leading full-service travel companies located in the Southeastern region. We offer our clients great all-inclusive travel packages, and fun and festive experiences at the best destinations around the world. Learn more <a title="read more about YOLLO" href="about.php">about YOLLO</a> or view some of our upcoming events below.</p>
            </section>
           
            <section id="upcoming-events">
				<h2 class="h4">Upcoming Events</h2>	
				<div class="upcoming-events__wrapper">
					<?php $i=0; foreach($feature_event as $event): if ($i == 4) break; ?>
						<?php if($event["end"] > $now): $i++;  ?>
							<div class="event">
								<a href="<?php echo $event["link"]; ?>" title="<?php echo $event["title"]; ?>">
									<img src="<?php echo $event["img"]; ?>" />
								</a>
								<p class="upcoming-events__title"><?php echo $event["title"]; ?></p>
								<p class="upcoming-events__location"><?php echo $event["location"]; ?></p>
								<p class="upcoming-events__date"><i class="fa fa-calendar"></i> <?php echo $event["date"]; ?></p>
								<p class="upcoming-events__desc"><?php echo $event["desc"]; ?></p>
								<a class="learnmore btn" href="<?php echo $event["link"]; ?>" title="Book <?php echo $event["title"]; ?>">Book Now</a>
							</div>
						<?php endif; ?>
					<?php endforeach;?>
				</div>
            </section>

            <div class="disclosure">
            	<strong>Disclaimer</strong> | All graphics and/or logos associated with or referred to by YOLLO Group Services on this website are registered trademarks of their respective owners, and are used herein for factual and illustrative purposes only. Links are provided for your convenience and do not constitute an endorsement. Third party sites are not within our control and may not have the same privacy, security or accessibility standards. Third parties are solely responsible for the content and availability of their sites.
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

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>
