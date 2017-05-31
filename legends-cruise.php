<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"				=>"Legends Cruise",
			"location"			=>"Aboard the Harriott II",
			"date"				=>"June 25, 2016"
	);
	
	$geolocation = array(
			"hotel1"=> array(
				"title" 			=>"The Harriott II",
				"address"			=>"200 Coosa Street, Montgomery, AL 36104",
				"location"			=>"Alabama River",
				"geolocation"		=>"200+Coosa+Street+Montgomery+A+36104",
				"zoom"				=>"14", //8-16
				"maptype"			=>"terrain", //roadmap,hybrid, terrain
				"hotel1_soldout"	=>false
			)
	);
	
	$soldoutevent = 	false;
	$soldoutpasses =	false; 
	
	include 'includes/functions.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php phoneNumber(); ?></title>
<meta name="viewport" content="width=device-width">
<meta name="description" content="Legends cruise is a tribute to Prince and Michael Jackson on the livest River Boat Cruise in Montgomery, Alabama." />
<meta name="keywords" content="Legends Cruise, Prince, Michael Jackson, Montgomery Alabama, Harriott II Riverboat, YOLLO, Party Gras, Bottles and Beads" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
    <div id="container">
        <?php include 'includes/header.inc.php'; ?>
        <div id="left">
            <!--Nav-->
            <?php include 'includes/nav.inc.php'; ?>
            <!--End of Nav-->
            
        </div>
        
        <div id="right">
            
     
          
          <div class="content">
                   
                   <div class="topcontent"> <img src="/images/slides/splash-legends.jpg" ></div>
                   
                   <h2 class="title"><?php echo $event["title"]; ?></h2>
                   <div class="date-location">
                        <div class="col"><?php echo $event["date"]; ?></div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                   </div>
                   
                   <div class="col1">
                   
                     <div id="tabs">
                        <ul>
                             <?php
                                 foreach($tabnavcruise as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";	 
                                 }
                             ?>
                             <li><a href="#tabs-5"><span class="ui-icon ui-icon-image"></span>Photo Gallery</a></li>
                        </ul>
                        
                         <div id="tabs-5">
                        	<h3>Party Gras 2015</h3>
                        	<div id="nanoGallery"></div>
                        </div>
                        
                        <div id="tabs-1">

							<h3><?php echo $event["title"]?> </h3>
							<p>There have been many great musical icons, but none as impactful as Prince and Michael Jackson. Although they are no longer alive, the music they created will live forever. Join us for a night of music, poetry, and comedy to celebrate two of the most iconic legends in the music industry. Our featured performances and music will be in honor of both artist.  </p> 

                            <p>Also, we will be giving away a $100 cash prize to the best dressed Michael Jackson and Prince outfits! We have live entertainment hosted by one of the funniest comedians around. Come party aboard the Harriott II for an exclusive Riverboat cruise. The boat features (3) party decks with sounds provided by Birmingham's DJ Dre Smoove! </p> 
                            
                            <p>This cruise WILL SELL OUT, so buy your tickets today. For questions and tickets call:(888) 946-9655  or (334) 531-5650, or buy your tickets online now.</p> 

							<p><strong>Tickets:</strong><br> EARLY BIRD: $25 <br> Gen Adm. $35  <br> VIP*: $55 </p>
                            <p class="disclosure">*VIP Access includes Priority First Boarding, Light Appetizers and Open Bar for the first hour</p>

    						<p>Tickets available online or at these local venues:<br>

                                <address class="small"><strong>Heritage Barber Shop</strong><br>
                                1334 Carter Hill Rd<br>
                                Montgomery, AL 36106
                                334-834-8494</address>
                           </p> 
                               
                           <p>OR Every Friday from 12p - 6p starting June 10th you can pick up/purchase tickets at:
                                
                                <address class="small"><strong>YOLLO Group Services, Inc.</strong><br>
                                8436 Crossland Loop Ste. 203<br>
                                Montgomery, AL 36117
                                334-531-5650</address>
                              
                           </p>  
                           
                           <p>OR:
                                
                                <address class="small"><strong>Smoothies n Things</strong><br>
                                109 S. Court Street<br>
                                Montgomery, AL 37104
                                334-241-0770</address>
                           
                           </p>
    
    
                        </div>
                        <div id="tabs-2">
                                <div class="hotelimg">
                                <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                    <?php if($geolocation["hotel1"]["hotel1_soldout"] == true) :?>
                                        <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                    <?php endif;?>
                                    
                                    <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=<?php echo $geolocation["hotel1"]["zoom"]; ?>&maptype=<?php echo $geolocation["hotel1"]["maptype"]; ?>&markers=icon:http://goyollo.com/images/favicon.png%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
        
                                    <p style="padding-bottom:10px;" class="map-icon">
                                    <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                    <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                                    
                                     <img style="margin-bottom:5px;" src="http://visitingmontgomery.com/images/uploads/images/HarriotII-Riverboat.jpg" width="330" />
                                    
                                     </div>
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                
                                
                                
                               
                               
                        </div><!-- end of tab 2-->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                                
                            <h4><?php echo $event["title"]?> Details and Pricing</h4>
                            <ul>
                                <li>Hosted by: YOLLO Group Services </li>
                                <li>Boarding start: 9:45PM</li>
                                <li>Party time: 10PM - 2AM</li>
                                <li>Cruise the Alabama River while partying like its 1999</li>
                                <li>On the 1's and 2's: DJ Dre Smoove and DJ Jamar</li>
                                <li>Live performances by spoken word artist J.P. the Poet and Queen Da Poetess!</li>
                                <li>LIVE performances by the Jeremy Flyy and Flight Control band!</li>
                                <li>Live performances by comedian Benny Mac, Felicia and Jason Shorter!</li>
                            </ul>
                            <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                            <p><strong>Tickets:</strong><br> EARLY BIRD: $35 <br> Gen Adm. $35 <br> VIP*: $55 </p>
                            <p class="disclosure">*VIP Access includes Priority First Boarding, Light Appetizers and Open Bar for the first hour</p>
                                
    
    
                    
                        </div>
                            
                            
                            
                            
                       
                        <div id="tabs-4">
                            <?php /* FAQs */ ?>
                  
                            <ul>
                                <li><strong>Are there ID requirements or an age limit to enter the event? </strong> This is a 21 and over event. </li>
     
                                <li><strong>Where can I contact the organizer with any questions?</strong> Call 1.888.946.9655 or email onelife@goyollo.com</li>
                                 
                                <li><strong>Do I have to bring my printed ticket to the event?</strong> Yes, the printed tickets are needed to board.</li>
                                 
                                <li><strong>What is the refund policy?</strong> All sales are final and non-refundable.</li>
                                 
                                <li><strong>Where is the cruise being hosted?</strong> The cruise is being hosted on the Harroitt II riverboat. It's located on the Riverwalk in downtown Montgomery, AL.</li>
                                 
                                <li><strong>If I want to pick-up tickets in person do I have that option?</strong> Yes, you can come by our office starting June 10th on any Friday prior to the cruise. Our address is 8436 Crossland Loop Suite 203 Montgomery, AL 36117. The tickets will be available for purchase and pick-up from 12 noon - 6 pm. If that time doesn't fit your schedule call us to arrange for in person pick-up. Other locations for ticket purchases is Heritage Barber Shop 1334 Carter Hill Rd Montgomery, AL 36117 or Smoothies n Things 109 S. Court St Montgomery, AL 37104</li>
                                 
                                <li><strong>After I purchase tickets online how do I receive my tickets?</strong> Your tickets are mailed to the address provided during the purchasing process.   </li> 
                                          
                                <li><strong>What time is boarding and what time does the boat cruise?</strong> Boarding starts at 9:45 pm. The boat will not cruise until 10:30 pm. Because tickets purchasers are traveling from as far away as Atlanta we want to give everyone a chance to board.   </li> 
                                 
                                <li><strong>What is included with V.I.P admission to the Boat Party?</strong> V.I.P. includes a speedy admission onto the boat party, delicious food, and an open bar for the 1st hour of the event to start you off right all while partying on the boat.    </li>   
                                 
                               <li> <strong>What is the address for boarding the boat?</strong>  The entrance to the boarding area is 213 Commerce Street. Parking is available at any street-level meter, in front of or behind Union Station, and in the Commerce or Coosa Street parking decks.</li>
                                 
                                <li><strong>What form of entertainment will be provided during the cruise?</strong>   The cruise will feature two DJ's, live performances, spoken word, and comedy show. Entertainment will be on each deck of the Harriott II.</li>
                                 
                                <li><strong>What else can I expect on the cruise? </strong> FUN, FUN and MORE FUN! You will also have a chance to win a $100 cash prize! The BEST Prince and Michael Jackson outfit will be rewarded with $100 cash each! </li>

                            </ul>
                            
                            
                            
                        </div>
                    </div>
                  
          
     
    
    </div>
                  
                 <div class="col2">
                  
                  

                  <div class="reserve-form">
                        <img style="margin-top:-13px;" src="images/reserve-spot.png" alt="reserve a spot today" /><br />
    					

                        <?php if($soldoutevent == true) :?><h2>SOLD OUT</h2><?php endif;?>
                        <?php if($soldoutevent == false) :?>


					  
                         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="SZ4NQYG848BEW">

								<input type="hidden" name="on0" value="Package Selection">Admission Tickets
								<select name="os0" id="paypal_select">  
									<option value="Early Bird">Early Bird $25</option>
                                    <option value="General Admission">General Admission $35</option>
                                    <option value="VIP Access">VIP Access $55</option>
									
								</select> 

								 <input name="terms" type="checkbox" value="agree" id="terms"> 
                                    <label for="terms"> 
                                        <p>* Check below for    
                                            <a class="terms-box fancybox.ajax" href="/includes/termsofagreement.inc.php">Terms</a> 
                                        </p> 
                                    </label> 

								<input type="hidden" name="currency_code" value="USD">
							    <input class="buy-package" type="image" src="images/buy-package-btn.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

								<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
                        
                    
                        
						<?php endif;?>
                  </div>
                  
                  
          </div><!--end of col2-->
          
        
          
      </div><!--end of content-->
      
      
      </div><!--end of right-->
      
      <aside id="social">
      <?php include 'includes/twitter.inc.php'; ?>
      </aside>
      
       <div class="push"></div>
    </div><!--end of container-->
</div><!--end of wrap-->


<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<!-- Global Scripts -->
<?php include 'includes/scripts.inc.php'; ?>
<script type="text/javascript">
	$(document).ready(function(){
		//form validation
		$('#paypal_frm').validate({
			rules: {
				terms: {required: true},
				os3: {required: true},
				os2: {required: true},
				os1: {required: true}
			},
			messages: { 
				os3: "must add group size",
				os2: "must add group leader",
				os1: "must choose a package type",
				terms: "You must agree to terms!"
			} 
  		});
		
	
		
		//Jquery Tabs
		$( "#tabs" ).tabs();
		

			//change li classes
			$("li.legends").addClass("active");
			
			
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


<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>