<?php

	ob_start("ob_gzhandler");

	$event = array(
		"title"					=>"The Official College Beachfest",
		"location"				=>"Daytona Beach, Florida",
		"date"					=>"March 31 - April 2, 2017",
		"img_url"				=>"../../images/slides/splash-cbf.jpg",
		"img_alt"				=>"College Beachfest"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Ocean Breeze Club Hotel",
			"address"			=>"640 N. Atlantic Avenue",
			"location"			=>"Daytona Beach, FL 32118",
			"geolocation"		=>"640 N. Atlantic Avenue, Daytona Beach, FL 32118",
			"hotel1_soldout"    =>false,
			"img_url"			=>"https://images.trvl-media.com/hotels/1000000/20000/11600/11587/11587_63_z.jpg"
		),

		"hotel2"=> array("")
	);

	$people = array(
			"diamond"=> array(
				"Group of 4" 			=>"$340",
				"Group of 3"			=>"$395",
				"Group of 2"			=>"$495",
				"Individual"			=>"$770"
			),

			"emerald"=> array(
				""
			),

			"Hotel Only" =>"$400 (Weekend)"
	);

	$package_items = array(
		"diamond_items" => array(
			"Hotel Accommodations"						=> "checked",
			"Daily Breakfast"							=> "checked",
			"BeachFest Pool Party"						=> "checked",
			"Weekend Party Passes"						=> "checked",
			"Step Show Tickets"							=> "checked",
			"YOLLO Gift Bag"							=> "checked"
		),

		"emerald_items" => array(
			""
		)
	);

	include 'includes/functions.inc.php';


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="The official College Beachfest in Daytona Beach, Florida." />
<meta name="keywords" content="College, Beachfest, Daytona, Florida, YOLLO" />
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
        <!--Left Content-->

        <div id="left">
            <!--Nav-->
            <?php include 'includes/nav.inc.php'; ?>
            <!--End of Nav-->
        </div>

        <!--Right Content-->
        <div id="right">



            <div class="topcontent">
                    <img src="<?php echo $event["img_url"]; ?>" alt="<?php echo $event["img_alt"]; ?>" >
            </div>

            <div class="content">
            		<h2 class="title"><?php echo $event["title"]; ?></h2>
                    <div class="date-location">
                        <div class="col"><?php echo $event["date"]; ?></div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                    </div>


                   <div class="colfull">

                      <div id="tabs" class="yollo-tabs nodisp">
                        <ul>
                            <?php
                                 foreach($tabsdefault as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";
                                 };

                             ?>
                             
                             <li> <a href="#tabs-6" id=""><i class="fa fa-th-list"></i></span> Itinerary</a></li>

                        </ul>
                        
                        
                        <div id="tabs-6">
                        	<img style="max-width:100%; height:auto;" src="/images/beachfest-2017-event-list.jpg" alt="Itinerary for College Beachfest" />
                        </div>
                        

                        <div id="tabs-1">
                            <h3>College BeachFest is the new Spring Break destination in Daytona Beach Florida!</h3>

                            <p>Daytona Beach will be <strong>LIT</strong> this Spring! YOLLO is taking College BeachFest to new heights, creating the ultimate party experience in 2017. Experience the A1A strip, clubs, the warm beach, and meeting new friends; you will definitely have a fun time!</p>
							<p>Daytona, the former host to one of the nation’s hottest Spring Break destinations, will be filled with plenty of students from across the nation, along with appearances by celebrities and socialites.</p>
							<p>College BeachFest will definitely fill the void for Spring Break attendees who are looking for something new and refreshing. Don't miss out on an opportunity of a lifetime. The dates are set, plans are finalized, and party-goers from across the nation will convene in Daytona Beach for a memorable weekend! You don't want to miss this event! Reserve your package today!</p>


                        </div><!-- End of Tab 1-->



                        <div id="tabs-2">


													<h3>Hotels</h3>
                                <div class="hotel-box-container">

									 							<?php if(count($geolocation["hotel1"]) > 1) :?>

                                    <div class="hotel-box">
                                        <img src="<?php echo $geolocation['hotel1']['img_url']; ?>" />
                                        <div class="hotel-title">
                                            <h3><?php echo $geolocation["hotel1"]["title"]; ?></h3>
                                        </div>
                                    </div>

                                    <?php endif; ?>

                                    <?php if(count($geolocation["hotel2"]) > 1) :?>

                                    <div class="hotel-box">
                                    	 <img src="<?php echo $geolocation['hotel2']['img_url']; ?>" />
                                        <div class="hotel-title">
                                            <h3><?php echo $geolocation["hotel2"]["title"]; ?></h3>
                                        </div>
                                    </div>
                                    <?php endif; ?>


                                </div>

                            	<hr />

                              <h3>Price</h3>
                                
                                <div class="price-table-container">

                                <?php if(count($geolocation["hotel1"]) > 1) :?>
                                <div class="price-table">
                                  <ul class="price">
                                    <li class="header">Diamond <span>Package</span></li>
                                    <?php foreach($package_items['diamond_items'] as $key=>$value): ?>
                                    	<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                    <?php endforeach; ?>
                                    <li class="people-price">
                                    	<ul class="priceblock">
                                        	<?php foreach($people['diamond'] as $key=>$value): ?>
                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
                                            <?php endforeach; ?>
																			</ul>
                                    </li>
                                    <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
                                  </ul>
                                </div><!-- price table -->
            										<?php endif; ?>



                                <?php if(count($geolocation["hotel2"]) > 1) :?>
                                <div class="price-table">
                                  <ul class="price">
                                    <li class="header">Emerald <span>Package</span></li>
                                    <?php foreach($package_items['emerald_items'] as $key=>$value): ?>
                                    	<li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                    <?php endforeach; ?>
                                    <li class="people-price">
                                    	<ul class="priceblock">
                                        	<?php foreach($people['emerald'] as $key=>$value): ?>
                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
                                            <?php endforeach; ?>
																			</ul>
                                    </li>
                                    <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="5">Book Today</a></li>
                                  </ul>
                                </div><!-- price table -->
                            	<?php endif; ?>
                            	
							</div><!-- price table container-->



                        </div><!-- end of tabs 2 -->


                       <div id="tabs-3">
                       		<h3>Frequently Asked Questions</h3>
                       		<div id="accordion" class="nodisp">

                                <section>
                                    <h2>When are the payments due? <span></span></h2>
                                    <p>After registration the 1st payment is due on or before due February 09, 2017. The second and final payment is due March 06, 2017.</p>
                                </section>

                                <section>
                                    <h2>How do I pay? <span></span></h2>
                                    <p>Complete the form and the next steps to the right of the page. You will receive a welcome letter within 7 business days with all your reservation information.</p>
                                </section>

                                <section>
                                    <h2>Do I need any extra money? <span></span></h2>
                                    <p>Yes, please bring money for shopping at the malls and for your souvenirs. Also, you will need money for beach activities i.e. parasail, jet ski, etc.</p>
                                </section>



                            </div><!-- accordion -->


                       </div> <!-- End of Tab 3-->



                       <div id="tabs-4">
                        	<div id="nanoGallery"></div>
                       </div>  <!-- end of tabs 4 -->


                       <div id="tabs-5">
                       		
                            <h3>Buy Now</h3>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                       		
                            <div class="cognito"></div>

                        	
                    	</div>



                    </div> <!-- End of tabs5-->


                    </div><!-- End of Tabs-->



                  </div><!--end of content -->


                  <section id="disclosure">
                        <div class="disclosure">
                            <?php include 'includes/package-info-generic.inc.php'; ?><br/>

                      </div><!-- end of disclosure -->

                  </section>


      </div><!--end of right -->



      </div><!--end of container-->

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

	$(document).ready(function(){

		//form validation
		$('#paypal_frm').validate({
			rules: {
				terms: {required: true},
				os3: {required: true},
				os2: {required: true},
				os5: {required: true}
			},
			messages: {
				os3: "must add group size",
				os2: "must add group leader",
				os5: "must choose a package type",
				terms: "You must agree to terms!"
			}
  		});
		
		//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157634766411098',

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

<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "4" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>
