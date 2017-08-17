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



                <div class="forminfo">

                    <h5>General Contact Info</h5>

                    <ul class="list-unstyled">

                        <li><i class="fa fa-envelope" aria-hidden="true"></i> onelife@goyollo.com</li>
                        <li><i class="fa fa-phone-square" aria-hidden="true"></i> (888) 946-9655</li>
                        <li><i class="fa fa-phone-square" aria-hidden="true"></i> (888) 946-9655 (fax)</li>

                    </ul>

                    <hr />



                    <h5>Follow Us</h5>

                    <a href="http://www.facebook.com/yollogsinc" target="_blank" title="Become a fan of Yollo Group Services"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a> 

                    <a href="https://twitter.com/YOLLOGSINC" target="_blank" title="Follow Yollo Group Services on Twitter"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>

					<a href="https://instagram.com/yollogsinc" target="_blank" title="Follow YOLLO Group Services on Instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>

                    <br clear="all" /> <hr />

                    <h5>Hours of Operation</h5>

                    <ul>
                        <li>Mon-Fri (9am- 6pm)</li>
                        <li>Sat (10am - 2pm)</li>
                        <li>Sun (Closed)</li>
                    </ul><hr />

                    <h5>Payment Center</h5>
                    <p>Customer Service &amp; Relations<br />
                    P.O. Box 240613<br />
                    Montgomery, AL 36124</p>
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