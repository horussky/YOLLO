<?php 
include 'includes/functions.inc.php';
?>
<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8">
<title>Contact YOLLO Group Services </title>
<meta name="description" content="YOLLO Group Services, Inc., formerly KJB Enterprises. We create travel packages for all mature ages." />
<meta name="keywords" content="Contact us, YOLLO Group Services Inc." />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
</head>
<style>
	.content{display:none;}
</style>
<body>





<div id="wrap">
    
    <!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav--> 

    <div id="container">

    	<?php include 'includes/header.inc.php'; ?>

        <div id="left">
            <!--Nav-->
            <?php include 'includes/nav.inc.php'; ?>
            <!--End of Nav-->
        </div>



        <div id="right">

        	<div class="content">

          		<div class="form">
          			<h2 class="contact title">Contact Us</h2>
					<p class="lead">Don't hesitate to say or ask us anything. Fill out the form below for questions or comments.</p>


					<div class="cognito"></div>

                </div>



                

         </div><!--end of content-->


         </div><!--end of right-->

         <aside id="social">
            <?php include 'includes/twitter.inc.php'; ?>
         </aside>

         <div class="push"></div>

    </div><!--end of container-->

</div><!-- end of wrap -->


<!-- Footer  -->

<?php include 'includes/footer.inc.php'; ?>

<!-- End of Footer  -->


<?php include 'includes/scripts.inc.php'; ?>

<script>
	$(function(){
		$(".content").show()
	});
</script>

<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "56" });</script>

<!--google analytics-->

<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>