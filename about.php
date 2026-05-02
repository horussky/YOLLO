<?php 
include 'includes/functions.inc.php';
include 'includes/bootstrap.inc.php';

// Load the event configuration
	$event_config = require 'config/conf_about.php';

	// Access configuration data
	$metas = $event_config['metas'];
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $metas['title']; ?></title>

<meta name="description" content="<?php echo $metas['description']; ?>" />
<meta name="keywords" content="<?php echo $metas['keywords']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="<?php echo $metas['canonical']; ?>" rel="canonical" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<meta property="fb:pages" content="117420764961518" />

</head> 

<body>

<div id="wrap">
    
	<!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav-->   


        <div class="container">
    	    <div class="row">
                <div class="col">
                    <?php include 'includes/header.inc.php'; ?>
                </div>
            </div><!-- end of row-->
        </div><!-- end of container --> 


		<!--Right Content-->
		
		<style>

        </style>
        <div class="container-fluid">
        <div class="row">
                <div class="col p-0">
                    <img src="images/about-banner.jpg" alt="About YOLLO Group Services" class="img-fluid w-100 mb-40" />
                </div>
            </div><!-- end of row-->
        </div>
		<div class="container">
            
            <div class="row justify-content-center mb-40">
                <section class="col-lg-10">
                    <h1>About YOLLO Group Services Inc.</h1> 
                    <p class="lead">Live the Moments You'll Never Forget</p>
                    <p>YOLLO Group Services is a full-service travel agency based in Montgomery, Alabama. Since 2010, we've helped over 10,000 travelers turn major events into unforgettable experiences. Whether it's the NBA All-Star Weekend, Essence Festival, or our exclusive Urban Fiesta in Puerto Rico, we believe in living life fully—because You Only Live Life Once.</p>
                </section><!-- end of col-->

                <section class="col-lg-10">
                    <h2>What We Do</h2> 

                    <p>We create all-inclusive travel packages that remove the stress from planning. From hotel accommodations and event tickets to curated excursions and VIP party access, we handle the details so you can focus on the fun.</p>

                    <p>Our signature experiences include cultural festivals, ski weekends, cruises, and major sporting events. Each trip is designed to bring people together through shared energy, entertainment, and exploration.</p>
                </section><!-- end of col-->

                <section class="col-lg-10">
                    <h2>Why Choose YOLLO?</h2> 

                    <p>With over a decade of experience, we know what makes a great trip. Our team personally visits every destination in advance, inspecting hotels, venues, and local experiences to ensure they meet our high standards.</p>

                    <p>During the event, a YOLLO team member is always on-site to support you—from check-in to the final toast. As an <a title="IATAN (International Airlines Travel Agent Network) affiliate" href="http://www.iatan.org" target="_blank">IATAN-accredited</a> company, we provide professional service, secure bookings, and access to travel perks you won't find booking solo.</p>
                </section><!-- end of col-->

                <section class="col-lg-10">
                    <h2>What People Are Saying</h2> 
                    
                    <blockquote  style="border-left: 4px solid; padding-left: 15px; font-style: italic; color: #666; margin: 20px 0;">
                    "Enjoyed the cruise in Cincinnati. Special thanks to Matthew and his security staff for all of their efforts. Chicago love to you!"
                    <span style="display: block; margin-top: 10px; font-weight: bold; color: #333;">— Regina O.</span>
                    </blockquote>

                

                    <blockquote  style="border-left: 4px solid; padding-left: 15px; font-style: italic; color: #666; margin: 20px 0;">
                    "Puerto Rico, the parties, the vibe—YOLLO made it all seamless. I'm already booking my next trip!"
                    <span style="display: block; margin-top: 10px; font-weight: bold; color: #333;">— Brenda P.</span>
                    </blockquote>

                    <blockquote  style="border-left: 4px solid; padding-left: 15px; font-style: italic; color: #666; margin: 20px 0;">
                    "From the comedy show to the boat party, Urban Ski Weekend was an experience I'll never forget."
                    <span style="display: block; margin-top: 10px; font-weight: bold; color: #333;">— ShaRhonda S.</span>
                    </blockquote>
                </section><!-- end of col-->

                <section class="col-lg-10">
                    <h2>Stay Connected</h2>
                    <p>We're always planning something exciting. Be the first to know about new events, exclusive travel deals, and giveaways.</p> 
                    <a href="https://goyollo.us1.list-manage.com/subscribe?u=54332a0c86e91baedbe59a547&id=ebf82f7fa2" class="btn btn-primary"> Join Our Newsletter </a>

                    
                </section><!-- end of col-->
                
            </div><!-- end of row-->

        </div> <!-- end of container --> 
		

</div><!-- end of wrap -->



<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include 'includes/scripts.inc.php'; ?>

<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->



</body></html>