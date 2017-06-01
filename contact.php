<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php

if(isset($_POST['action']) && $_POST['action'] == 'contact' && empty($_POST['nobots'])):



	foreach($_POST as $k => $v):

		${$k} = $v;

	endforeach;



	$emailto = 'onelife@goyollo.com';

	//$emailto = 'horussky@gmail.com';

	$subject = 'Email Sent from YOLLO Website';



	$msg = "Message sent from YOLLO contact page\r\n\r\n";

	$msg.= "Name: $name\r\n";

	$msg.= "Phone Number: $phone\r\n";

	$msg.= "Email: $email\r\n";

	$msg.= "Event of Interest: $event\r\n";

	$msg.= "Comment/Question: $comment\r\n";



	//Send To Headers

	$headers = "From: $email";

	//Mail It

	$success = mail($emailto, $subject, $msg, $headers);





	if($success){

		header("Location: /contact.php?url=success");

	}else{

		header("Location: /contact.php?url=error");

	}

	exit;



endif;

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

					<form method="post" action="contact.php" name="frm_contact" id="frm_contact">
							<?php if($_GET['url'] == 'success'):?>
								<p class="alert success">Your message was sent successfully.</p>
							<?php elseif($_GET['url'] == 'error'):?>
								<p class="alert error">An error has occured, please try again.</p>
							<?php endif;?>



						   <h2 class="contact title">Need support?</h2>

						   <p class="lead">Don't hesitate to say or ask us anything. Fill out the form below for questions or comments.</p>

							<span class="teeny">* = required field</span>  <br /><br />

						  	<label for="cname">* Full Name</label>

							<input class="group form-control" type="text" name="name" id="name" />

						  	<label for="phone">Contact Number</label>

							<input class="group form-control" type="text" name="phone" id="phone" class="default" />

							<label for="email">* Email Address</label>

							<input class="group form-control" type="text" name="email" id="email" />

							<label for="event">Event of Interest?</label>

							<?php /*?><input type="text" name="event" id="event" /><?php */?>

							<select name="event" id="event" class="group form-control">
								<option value="">-- Choose an Event -- </option>
								<option value="Essence Festival">Essence Festival</option>
								<option value="HBCU Games">HBCU Games</option>
								<option value="Magic City Classic">Magic City Classic</option>
								<option value="NBA All-Star">NBA All-Star</option>
								<option value="Urban Fiesta">Urban Fiesta</option>
								<option value="Urban Ski Weekend">Urban Ski Weekend</option>
								<option value="Other">Other</option>
							</select>

							<label for="comment">* Comment/Question</label>
							<textarea name="comment" id="comment" rows="6" class="group form-control"></textarea>
							<input type="submit" value="Submit" class="btn btn-success" />

							<input type="text" name="nobots" title="please leave blank" class="nodisp" />

							<input type="hidden" name="action" value="contact" class="nodisp"/>

					</form>

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

<script type="text/javascript">

	$(document).ready(function(){

		$('#frm_contact').validate({

			rules: {
				name: {required: true, minlength: 5, maxlength: 25},
				cname: {required: true, minlength: 5, maxlength: 25},
				email: {required: true, email: true},
				comment: {required: true, minlength: 20}
			}

  		});

		//end of alert
	});

</script>

<!--google analytics-->

<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>