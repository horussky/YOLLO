<?php

ob_start("ob_gzhandler");

$event = array(
	"title"					=>"Cincinnati Music Festival 2018",
	"subtitle"				=>"Book your package today!",
	"location"				=>"Cincinnati, Ohio",
	"date"					=>"July 27- 29, 2018",
	"img_url"				=>"../../images/slides/splash-mmf-cta.jpg",
	"img_alt"				=>"Cincinnati Music Festival"
);

$geolocation = array(

	"hotel1"=> array(
		"title" 			=>"Holiday Inn Cincinnati Riverfront",
		"address"			=>"600 West 3rd Street",
		"location"			=>"Covington, KY 41011",
		"geolocation"		=>"600 West 3rd Street, Covington, KY 41011",
		"hotel1_soldout"    =>false,
		"img_url"			=>"//www.ihg.com/hotelmedia/repository/hotelimages/CVGRF/WELCM_EXTR_2_E.jpg"
	),

	"hotel2"=> array(
		""
	)
);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$565",
			"Group of 3"			=>"$600",
			"Group of 2"			=>"$670",
			"Individual"			=>"$875"
		),

		"emerald"=> array(
			"Group of 4" 			=>"$465",
			"Group of 3"			=>"$500",
			"Group of 2"			=>"$570",
			"Individual"			=>"$775"
		)

);
$package_items = array(
	"diamond_items" => array(
		"Hotel Accommodations (Fri-Sun)"			=> "checked",
		"Weekend Concert Tickets"				    => "checked",
		"Grown and Sophisticated Mid Day Cruise"	=> "checked",
		"Meet and Greet Mixer"						=> "checked",
		"R/T Transportation via motorcoach (Birmingham, AL)"			=> "checked",
		"Breakfast Daily"							=> "checked",
		"Additional Hotel nights $275 per night"	=> "checked",
		"YOLLO Gift Bag"							=> "checked"
	),

	"emerald_items" => array(
		"Hotel Accommodations (Fri-Sun)"			=> "checked",
		"Weekend Concert Tickets"					=> "checked",
		"Grown and Sophisticated Mid Day Cruise"	=> "checked",
		"Meet and Greet Mixer"						=> "checked",
		"R/T Transportation via motorcoach (Birmingham, AL)"			=> "ex",
		"Breakfast Daily"							=> "checked",
		"Additional Hotel nights $275 per night"	=> "checked",
		"YOLLO Gift Bag"							=> "checked"
	),

	"Hotel Only" =>"$850/per person"
);

include 'includes/functions.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="YOLLO Group Services will provide you with all-inclusive arrangements and tickets for Cincinnati Music Festival 2017." />
<meta name="keywords" content="grown and sophisticated cruise, macy's music festival party boat cruise, Cincinnati jazz festival cruise tickets, Cincinnati Music Festival 2018, Cincinnati Music Festival cruise, Cincinnati Music Festival tickets" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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

				 <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
					<div class="overlay"></div>
					<div class="title">
						<h1><?php echo $event["title"]; ?></h1>
						<p class="subtitle"><?php echo $event["subtitle"]; ?></p>
						<a href="#tabs-5" class="btn btn-red open-tab" data-tab-index="4">Buy Now</a>
					</div>
				</div>



        <div class="content">
						
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
                         </ul>



                  <div id="tabs-1">
					<h3>Get ready for Cincinnati Music Festival '18</h3>
                    <p>YOLLO is taking you to Cincinnati for the Cincinnati Music Festival formerly known as the Macy's Music Festival! Over the years as a result of a number of factors, the event has evolved from that of a musical genre of pure jazz, to one predicated by a musical genre of rhythm and blues.</p>
					<p>The Cincinnati Music Festival, now held at the Paul Brown Stadium (home of the Cincinnati Bengal's) is a state of the art facility. Outside of the performers on stage, it is an event for those who are looking for a great concert environment while being in a city full of musical history. It is an event to see and to be seen which provides the atmosphere to meet and greet, mix and mingle. Each year, the Cincinnati Music Festival draws a wonderful mix of Old School and the hottest contemporary R&amp;B music performers to its stage. </p>

                  	<h4>4th Annual Grown and Sophisticated Mid-Day Cruise</h4>
                  	<p>The 4th Annual Grown and Sophisticated Mid-Day Cruise will happen on the River Queen and will be another MUST ATTEND event during Cincinnati Music Festival Weekend! Enjoy a multi-level paddle-wheel boat cruising the mighty Ohio River, while listening to the livest Hip-Hop and R&amp;B music. Come enjoy some great music and network with the grown and sexy festival attendees while enjoying the Cincinnati skyline. Last years' cruise was Mardi Gras themed, however we are returning to the original format of an All White cruise.  Please arrive "dressed to impress" while enjoying the ULTIMATE party experience! The cruise sails from 1:00 pm – 4:00 pm. Please remember that once we sell out, we will not have any more tickets available. So don't procrastinate and miss out on mixing and mingling, or partying like a rock star !<p>
					<p>YOLLO is looking forward to another terrific festival in 2018, and we hope you join us and be a part of this special summer occasion. Packages are available now, but they won't last long. Don't wait reserve today for $19.99!</p>

                  </div><!-- tabs1 -->


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
                                    <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="5">Book Today</a></li>
                                </ul>
                            </div><!-- price table -->
                            <?php endif; ?>
                    
                    
                    
                            <?php if(count($geolocation["hotel1"]) > 1) :?>
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
                        
					  </div><!-- price table container -->

        			</div><!-- end of Tab 2 -->



                    <div id="tabs-3">

                        <h3>Frequently Asked Questions</h3>
                        
                        <div data-accordion-group>	
										
							<div class="accordion open" data-accordion>

							  <div data-control>Does the price listed take care of hotel reservations for all members in either the Diamond or Emerald package or only one person?</div>
							  <div data-content>
								<p>All prices listed are per person. Under the package prices description, all amenities included in your package are per person and includes one (1) room for the group.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>How many concert tickets are included in the package for my group?</div>
							  <div data-content>
								<p>The package includes tickets for both nights of the concerts! That's right you get to attend both nights and its all included in the package price. If you don't plan on attending both nights you can give away or sell the additional night ticket.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>What are the payment due dates for Cincinnati Music Festival Packages?</div>
							  <div data-content>
								<p>To reserve a package each group member pays the $19.99 per person fee. The first payment of $125 is due on or before <strong>November 15, 2017</strong>. The final payment (remaining balance) is due on or before <strong>February 20, 2018</strong>. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>What cities will the bus depart from?</div>
							  <div data-content>
								<p>Montgomery, Birmingham, and Huntsville, AL! Don't see you city or state listed? Email us and let's see what we can work out!</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>Where will we be staying that weekend?</div>
							  <div data-content>
								<p>The Holiday Inn Cincinnati Riverfront has been selected as the host hotel for this wonderful event!</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>Where is the cruise being held?</div>
							  <div data-content>
								<p>The cruise is being hosted on the River Queen Riverboat. The cruise is located at BB Riverboats, 101 Riverboat Row, Newport, KY 41071</p>
							  </div>

							</div><!-- end of accordion-->
							
							<div class="accordion" data-accordion>

							  <div data-control>Can I purchase tickets to the cruise independent of the hotel package deal?</div>
							  <div data-content>
								<p>Yes! Just follow the same booking procedures as you would if booking the hotel package.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>What time does the cruise start and how much does it cost?</div>
							  <div data-content>
								<p>The cruise will sail from 1:30 pm - 4:00 pm, however boarding begins at 1:00 pm. The cost of the cruise is $40 for General Admission and $95 for VIP. VIP grants no line waiting entrance, Open bar, and light food during the cruise.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
							<div class="accordion" data-accordion>

							  <div data-control>Does the price take care of hotel reservation for all 4 members in either Diamond or Emerald package or only one person?</div>
							  <div data-content>
								<p>All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per person.</p>
							  </div>

							</div><!-- end of accordion-->
							
							
						</div><!-- end of accordion group-->


            		</div> <!-- end of Tab 3 -->


                    <div id="tabs-4">
                         <div id="nanoGallery"></div>
                    </div>  <!-- end of tabs 4 -->


                    <div id="tabs-5">
                        
                        <h3>Buy Now</h3>
                        <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                        
                        <div class="cognito"></div>
                        
                    </div><!-- end of tabs 5 -->


			</div><!-- end of tabs -->


    	</div><!-- end of colfull -->


	</div><!--end of content-->
    
    
    <div class="disclosure">
      		<?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> The terms Cincinnati Music Festival, Cincinnati Music Fest, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by P&amp;G's and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Cincinnati Music Festival Organizers productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
    </div>

</div><!--end of right-->

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
	$(function(){

			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157657872517631',

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
<script>Cognito.load("forms", { id: "7" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>