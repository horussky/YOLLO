<?php 
ob_start("ob_gzhandler"); 
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $metas['about']['title']; ?></title>

<meta name="description" content="<?php echo $metas['about']['desc']; ?>" />
<meta name="keywords" content="<?php echo $metas['about']['keywords']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="<?php echo $metas['about']['canonical']; ?>" rel="canonical" />
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
		<div class="container">
		
            <div class="row mb-40">
                <div class="col-md-8">
                    <h1 class="title h4">About YOLLO Group Services Inc.</h1> 

                    <p>In our humble beginnings, YOLLO Group Services provided event packages exclusively for college students, for over 10,000 customers. We have since set our focus to accommodating travelers of all ages. </p>

                    <p>We provide all-inclusive packages for events such as NBA All-Star, Essence Festival, Urban Ski Weekend during the Superbowl and Urban Fiesta during Memorial Day weekend. We also provide packages for cruises, comedy shows, and HBCU classic's. For any special event that YOLLO hosts, there will always be a company liaison on site to assist with any customer needs.</p>

                    <p>Before any event, our agents travel to survey the destination. This survey involves visiting the city, hotel, and other venues associated with the event. We do not provide services for our customers that we wouldn't enjoy ourselves.</p>

                    <p>YOLLO Group Services is <a title="IATAN (International Airlines Travel Agent Network) affiliate" href="http://www.iatan.org" target="_blank">IATAN</a> accredited, the world's leader in certification of travel companies. This assures that we provide only the highest amount of professionalism and cost-effective services.</p>

                    <p>Thanks for visiting our website. Please <a href="http://eepurl.com/bgY6P">sign up  to our newsletter</a> for the latest on travel giveaways, discounts, upcoming events, and more. We look forward to making you one of our valued customers. Remember, our name is our motto. You Only Live Life Once, so let us help you get the best out of your travel experiences!</p> 
                </div><!-- end of con-->

                <div class="col"> 
                
                </div><!-- end of col-->
                
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