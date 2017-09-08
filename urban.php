<?php

ob_start("ob_gzhandler");


$event = array(
	"title"				=>"Urban Fiesta 2018",
	"subtitle"			=>"Book your package today!",
	"location"		   	=>"Rio Bueno, Jamacia",
	"date"				=>"May 25-27, 2018",
	"img_url"			=>"../../images/slides/splash-urban-fiesta-cta.jpg",
	"img_alt"			=>"Urban Fiesta"
);



$geolocation = array(

	"hotel1"=> array(
		"title" 			=>"Melia Braco Village",
		"address"			=>"Rio Bueno District, Rio Bueno, Jamaica",
		"location"			=>"Trelawny, Jamacia",
		"geolocation"		=>"Rio Bueno District, Rio Bueno, Jamaica, Trelawny, Jamacia",
		"hotel1_soldout"	=> false,
		"img_url"			=>"https://media-cdn.tripadvisor.com/media/photo-o/0e/ed/13/93/melia-braco-village.jpg"
	),



	"hotel2"=> array(
		""
	)

);


$people = array(

		"diamond"=> array(
			//"Group of 4" 			=>"$580",
			"Group of 3"			=>"$975",
			"Group of 2"			=>"$1025",
			"Individual"			=>"$1275"
		),

		"emerald"=> array(
			//"Group of 4" 			=>"$580",
			"Group of 3"			=>"$725",
			"Group of 2"			=>"$775",
			"Individual"			=>"$975"
		),

		"options"=>array(
			"Hotel Only" =>"$1345 (Weekend)"
		),

);


$package_items = array(

	"diamond_items" => array(
		"Upgraded Hotel Accommodations - Oceanfront View/ Upgraded Liquor Options All Weekend"					=> "checked",
		"Hotel Accommodations (3 days/2 nights)"		=> "checked",
		"Welcoming Reception"							=> "checked",
		"All-Access Event Weekend Passes"				=> "checked",
		"Unlimited Drinks on-site all weekend"			=> "checked",
		"Complimentary Room Mini Bar Restocked Daily"			=> "checked",
		"Unlimited Dining on-site all weekend"			=> "checked",
		"FREE Guest Room Mini Bar Restocked Daily"		=> "checked",
		"Add'l Night - $350/plus tax and resort fees"	=> "checked",
		"YOLLO Gift Bag"								=> "checked"
	),

	"emerald_items" => array(
		"Upgraded Hotel Accommodations - Oceanfront View/ Upgraded Liquor Options All Weekend"					=> "ex",
		"Hotel Accommodations (3 days/2 nights)"		=> "checked",
		"Welcoming Reception"							=> "checked",
		"All-Access Event Weekend Passes"				=> "checked",
		"Unlimited Drinks on-site all weekend"			=> "checked",
		"Complimentary Room Mini Bar Restocked Daily"			=> "checked",
		"Unlimited Dining on-site all weekend"			=> "checked",
		"FREE Guest Room Mini Bar Restocked Daily"		=> "checked",
		"Add'l Night - $350/plus tax and resort fees"	=> "checked",
		"YOLLO Gift Bag"								=> "checked"
	)
	
	
);

include 'includes/functions.inc.php';
?>
<!doctype html>
<html lang="en">
<head>

     <meta charset="utf-8">
     <title>
          <?php echo $event["title"]?> | <?php echo $phonenumber ?>
     </title>

     <meta name="description" content="Urban Fiesta 2018 in Jamacia with YOLLO Group Services Inc. Memorial Day Weekend." />
     <meta name="keywords" content="Urban Fiesta, Urban Fiesta 2017, Trelawny, Jamacia, Rio Bueno, Malia Jamacia, Urban Fiesta 2018" />
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

                                   <div class="col">
                                        <?php echo $event["date"]; ?>
                                   </div>

                                   <div class="col">
                                        <?php echo $event["location"]; ?>
                                   </div>

                              </div>


                              <div class="colfull">

                                   <div id="tabs" class="yollo-tabs nodisp">
                                        <ul>
                                             <?php foreach($tabsdefault as $tabs => $item){echo "<li><a href=\"#$tabs\">$item</a></li>";};?>
                                        </ul>

                                        <div id="tabs-1">

                                             <h3>Jamaica is the ONLY place to be Memorial Day weekend 2018!</h3>

                                             <p>It's the 10th anniversary for Urban Fiesta and we are making a big and new splash. We are taking you to beautiful Jamaica! Urban Fiesta will be the livest event in Jamaica during Memorial Day weekend. There are plenty of activities to occupy your time from sun up to sun down - excursions, shopping areas, sandy beaches, parties, and the list goes on.<p> 

											 <p>Dust those passports off, secure your package today, and get ready for some major FUN! YOLLO Group Services will see you in Jamaica for Urban Fiesta Weekend 2018!</p>
                                             
                                        </div>
                                        <!-- end of tabs 1 -->





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

                                             	<?php if(count($people["diamond"]) > 1) :?>
                                                  <div class="price-table">
                                                       <ul class="price">
                                                            <li class="header">Diamond <span>Package</span></li>
                                                            
                                                            <?php foreach($package_items['diamond_items'] as $key=>$value): ?>
															 <li class="<?php echo $value; ?>">
																  <?php echo $key; ?>
															 </li>
															 <?php endforeach; ?>

															  <li class="people-price">
																   <ul class="priceblock">
																		<?php foreach($people['diamond'] as $key=>$value): ?>
																			 <li> <?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
																		 <?php endforeach; ?>
																   </ul>
															  </li>

															  <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
                                                       </ul>
                                                  </div>
                                                  <!-- price table -->

                                                  <?php endif; ?>


                                                  <?php if(count($people["emerald"]) > 1) :?>
                                                       <div class="price-table">
                                                            <ul class="price">
                                                                 <li class="header">Emerald <span>Package</span></li>

                                                                 <?php foreach($package_items['emerald_items'] as $key=>$value): ?>
                                                                      <li class="<?php echo $value; ?>">
                                                                           <?php echo $key; ?>
                                                                      </li>
                                                                  <?php endforeach; ?>

																   <li class="people-price">
																		<ul class="priceblock">
																			 <?php foreach($people['emerald'] as $key=>$value): ?>
																				  <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
																				  <?php endforeach; ?>
																		</ul>
																   </li>

																   <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
                                                            </ul>
                                                       </div>
                                                       <!-- price table -->

                                                       <?php endif; ?>
                                                       
                                                       </div>
                                                       <hr />
                                                       
                                                        <h3>Additional Options</h3>
                                                        <ul>
															<li>Airport Transportation: $20 ($40 Round trip)</li>
															<li>Dunn'ss River Falls Excursion: $60pp</li>
															<li>Tour of Ocho Rios: $70pp</li>
															<li>Tour Of Montego Bay: $70pp</li>
															<li>Luminous Lagoon: $70pp</li>
														</ul>	
                                                      

                                        </div>
                                        <!-- end of Tab 2 -->



                                        <div id="tabs-3">

                                             <h3>Frequently Asked Questions</h3>

                                             <div id="accordion" class="nodisp">

                                                  <section>
                                                       <h2>Anything I should know before I arrive? <span></span></h2>
                                                       <p>Passports are now required for this event. Also, bring another valid form of photo ID, and photocopies of both in case of loss or theft. Lastly, stay in our recommended hotels, you will save yourself a lot of aggravation.</p>
                                                  </section>
                                                  
                                                  <section>
                                                       <h2>Anything I should know after I arrive?  <span></span></h2>
                                                       <p>Keep luggage, handbags or backpacks in view at all times. Next, don’t take around large amounts of cash. We recommend bringing plenty of small dollar amounts ($1/$5/$10) for shopping and any gratuity. Additionally, avoid wearing expensive jewelry on road trips or excursions. At the airport, on your return home, you will have to go through customs. Mostly they are looking for wild animals and forbidden fruits.</p>
                                                  </section>

                                                  <section>
                                                       <h2>Is the money the same or do I have to convert? <span></span></h2>
                                                       <p>In Jamaica they mostly use the Jamaican dollar as currency. It will have to be converted and the exchange rate can vary form day to day. However, in some places, USD is accepted.</p>
                                                  </section>

                                                  <section>
                                                       <h2>Where does the shuttle provide transpotation? <span></span></h2>
                                                       <p>The shuttle provides transportation to events that are not within walking distance to the HOST hotel. The shuttle service starts with the Friday night event and ends with the Sunday night event. Shuttles will not provide transportation to the mall, sightseeing, etc.</p>
                                                  </section>

                                                  <section>
                                                       <h2>Do I need a rental car? <span></span></h2>
                                                       <p>Yes, if you would like to go see different parts of the island, go to the mall, etc. No rental car is needed if you booked with us and worried about how you are going to get to the events!  We have several tours and excursion planned that will accommodate you during the weekend.</p>
                                                  </section>

                                                  <section>
                                                       <h2>When are the payments due? <span></span></h2>
                                                       <p>The first payment of $125 is due September 29, 2017 after registration. The final payment (remaining balance) is due on or before December 19, 2017. If you would like to make payments between due dates that is fine also.</p>
                                                  </section>
                                                  
                                                  <section>
                                                       <h2>Why did Urban Fiesta leave San Juan, Puerto Rico?  <span></span></h2>
                                                       <p>The event outgrew the island and most attendees are repeat clients. We wanted to celebrate our 10th year in a new venue and make fresh experiences for our attendees!</p>
                                                  </section>
                                                  
                                                  <section>
                                                       <h2>What is the airport code?  <span></span></h2>
                                                       <p>MBJ</p>
                                                  </section>
                                                  
                                                  <section>
                                                       <h2>Where exactly is Rio Bueno, Braco Village, Jamaica? <span></span></h2>
                                                       <p>It is located between Montego Bay and Ocho Rios. More specifically, 30 minutes outside of Montego Bay and 40 minutes from Ocho Rios. So this is the PERFECT center of what Jamaica has to offer.</p>
                                                  </section>
                                                  
                                                  <section>
                                                       <h2>Is this trip all inclusive? <span></span></h2>
                                                       <p>Yes, while at the hotel, you can eat and drink to your fill.</p>
                                                  </section>

                                             </div>
                                             <!-- accordion -->

                                        </div>
                                        <!-- end of Tab 3 -->


                                        <div id="tabs-4">
                                             <div id="nanoGallery"></div>
                                        </div>
                                        <!-- end of tabs 4 -->


                                        <div id="tabs-5">

                                            <h3>Buy Now</h3>
                                            <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                                            
                                            <div class="cognito"></div>

                                        </div>
                                        <!-- end of tabs 5 -->

                                   </div>
                                   <!-- end of tabs -->

                              </div>
                              <!-- end of col1 -->



                              <div class="disclosure">

                                   <?php include 'includes/package-info-generic.inc.php'; ?>
                                        <br/>
                                        <strong>Disclaimer</strong> | The terms Urban Fiesta, and Urban Fiesta Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.

                              </div>
                              <!-- end of disclosure -->


                         </div>
                         <!--end of content-->

                    </div>
                    <!--end of right-->

                    <aside id="social">
                         <?php include 'includes/twitter.inc.php'; ?>
                    </aside>

          </div>
          <!--end of container-->

     </div>
     <!--end of wrap-->



     <!-- Footer  -->

     <?php include 'includes/footer.inc.php'; ?>

          <!-- End of Footer  -->

          <?php include 'includes/scripts.inc.php'; ?>

               <script type="text/javascript">
                    $(document).ready(function() {

                         //nano
                         $("#nanoGallery").nanoGallery({

                              kind: 'flickr',
                              userID: '50836209@N03',

                              //uncomment this line to display one specific album:
                              photoset: '72157661030952496',

                              // uncomment this line to display full photostream (v5.0.0):
                              // photoset:'none',

                              thumbnailWidth: 115,
                              thumbnailHeight: 'auto',
                              thumbnailAlignment: 'left',
                              thumbnailLabel: {
                                   display: false,
                                   displayDescription: false,
                                   position: 'overImageOnBottom'
                              },

                              thumbnailHoverEffect: 'borderLighter'

                         });

                    });
               </script>
               
               <script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
			   <script>Cognito.load("forms", { id: "47" });</script>

               <!--google analytics-->

               <?php
					include 'includes/analytics.inc.php';
					ob_end_flush();
				?>

</body>
</html>