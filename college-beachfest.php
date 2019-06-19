<?php

	ob_start("ob_gzhandler");
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

	$event = array(
		"title"					=>"The Official College Beachfest",
		"subtitle"				=>"Book your package today!",
		"location"				=>"Daytona Beach, Florida",
		"date"					=>"March 31 - April 2, 2017",
        "date_start"			=>"March 31, 2017",
		"img_url"				=>"../../images/slides/splash-cbf.jpg",
		"img_alt"				=>"College Beachfest"
	);

	$geolocation = array(

		"hotel1"=> array(
			"title" 			=>"Ocean Breeze Club Hotel",
			"address"			=>"640 N. Atlantic Avenue",
			"location"			=>"Daytona Beach, FL 32118",
			"geolocation"		=>"640 N. Atlantic Avenue, Daytona Beach, FL 32118",
			"soldout"           =>false,
			"img_url"			=>"https://images.trvl-media.com/hotels/1000000/20000/11600/11587/11587_63_z.jpg"
		),

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

	


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['collegebeachfest']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['collegebeachfest']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['collegebeachfest']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['collegebeachfest']['canonical']; ?>" rel="canonical" />
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
        <!--Left Content-->

        <div id="left">
            <!--Nav-->
            <?php include 'includes/nav.inc.php'; ?>
            <!--End of Nav-->
        </div>

        <!--Right Content-->
        <div id="right">



            <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
				<div class="overlay"></div>
				<div class="title">
					<h1><?php echo $event["title"]; ?></h1>
					<p class="subtitle"><?php echo $event["subtitle"]; ?></p>
					<a data-href="#tabs-5" class="btn btn-red open-tab">Pay or Register Now</a>
					<div id="event-timer"></div>
				</div>
			</div>

            <div class="content">
                    <div class="date-location">
                        <div id="event_start" data-time='<?php echo $event["date_start"]; ?>' class="col">
                            <?php echo $event["date"]; ?>
                        </div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                    </div>


                   <div class="colfull">

                      <div id="responsive-tabs">
                       

                        <?php echo $responsive_tabs["overview"]; ?>
						<div class="tab" aria-label="overview">
                            <h3>College BeachFest is the new Spring Break destination in Daytona Beach Florida!</h3>

                            <p>Daytona Beach will be <strong>LIT</strong> this Spring! YOLLO is taking College BeachFest to new heights, creating the ultimate party experience in 2017. Experience the A1A strip, clubs, the warm beach, and meeting new friends; you will definitely have a fun time!</p>
                            
							<p>Daytona, the former host to one of the nation’s hottest Spring Break destinations, will be filled with plenty of students from across the nation, along with appearances by celebrities and socialites.</p>
							
							<p>College BeachFest will definitely fill the void for Spring Break attendees who are looking for something new and refreshing. Don't miss out on an opportunity of a lifetime. The dates are set, plans are finalized, and party-goers from across the nation will convene in Daytona Beach for a memorable weekend! You don't want to miss this event! Reserve your package today!</p>


                        </div><!-- ./ overview -->



                        <?php echo $responsive_tabs["price"]; ?>
						<div class="tab" aria-label="price">


				              <h3>Hotels</h3>
                             
                              <?php foreach($geolocation as $hotel) :?>
                                <div class="hotel-grid">
                                    <div class="hg-img">
                                        <figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
                                    </div>
                                    <div class="hg-body">
                                        <p class="hg-title"><?php echo $hotel["title"]; ?> 
                                        <?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>

                                        <address>
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i> 
                                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                                            <?php echo $hotel["location"]; ?></a>
                                        </address>
                                    </div>
                                </div><!-- ./hotel-grid -->
                                <?php endforeach; ?>  
                                
                                
                                
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
                                    <li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
                                  </ul>
                                </div><!-- price table -->
            					<?php endif; ?>


                            	
							</div><!-- price table container-->



                        </div><!-- ./price -->


                       <?php echo $responsive_tabs["faqs"]; ?>
						<div class="tab" aria-label="faqs">
                       		<h3>Frequently Asked Questions</h3>
                       		
                       		<div data-accordion-group>	
										
								<div class="accordion open" data-accordion>

								  <div data-control>When are the payments due?</div>
								  <div data-content>
									<p>After registration the 1st payment is due on or before due February 09, 2017. The second and final payment is due March 06, 2017.</p>
								  </div>

								</div><!-- end of accordion-->


								<div class="accordion" data-accordion>

								  <div data-control>How do I pay?</div>
								  <div data-content>
									<p>Complete the form and the next steps to the right of the page. You will receive a welcome letter within 7 business days with all your reservation information.</p>
								  </div>

								</div><!-- end of accordion-->
								
								
								<div class="accordion" data-accordion>

								  <div data-control>Do I need any extra money?</div>
								  <div data-content>
									<p>Yes, please bring money for shopping at the malls and for your souvenirs. Also, you will need money for beach activities i.e. parasail, jet ski, etc.</p>
								  </div>

								</div><!-- end of accordion-->
					   
					   
						   </div><!-- end of accordion group-->


                       </div> <!-- ./faqs-->



                       <?php echo $responsive_tabs["photos"]; ?>
						<div class="tab" aria-label="photos">
                        	<div id="nanoGallery"></div>
                       </div>  <!-- ./photos -->


                       <?php echo $responsive_tabs["buynow"]; ?>
					   <div class="tab" aria-label="buy">
                       		
                            <h3>Buy Now</h3>
							<p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                       		
                            <div class="cognito"></div>

                        	
                    	</div><!-- ./buynow -->



                    </div> <!-- ./responsive tabs -->


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
