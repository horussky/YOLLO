<?php
	ob_start("ob_gzhandler");
	
	$event = array(
			"title"				=>"80 vs 90 Throwback Cruise",
			"location"			=>"Aboard the Harriott II on the Alabama River",
			"date"				=>"May 16th, 2015"
	);
	

	$geolocation = array(
			
			"hotel1"=> array(
				"title" 			=>"The Harriott II Riverboat",
				"address"			=>"200 Coosa Street, Montgomery, AL 36104",
				"location"			=>"Alabama River",
				"geolocation"		=>"200+Coosa+Street+Montgomery+A+36104",
				"zoom"				=>"14", //8-16
				"maptype"			=>"terrain", //roadmap,hybrid, terrain
				"hotel1_soldout"	=>false
			)
	);
	
	
	
	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$590",
				"3 People"			=>"$655",
				"2 People"			=>"$765",
				"1 Person"			=>"$1365"
			),
			
			
			
			"diamond_sold"			=>"0",
			"emerald_sold"			=>"0"
	
	);

	$package_items = array(
		"diamond_items" => array(
            "Tickets: Gen Adm. $35 | VIP: SOLD OUT ",
			"VIP access - Priority First Boarding, Light Food and open bar for 1st hour ",
			"Boarding starts at : 9:45 pm | Party time: 10PM - 2AM",
            "Live performances by the Double O Action Band!",
			"Live performances hosted by Comedian Hurricane and Mope Williams!",
            "Spoken Word and Poetry by  Tina ATL and Theresa the S.O.N.G.B.I.R.D.",
			"On the 1's and 2's: DJ Last Laff & DJ Big Show",
            "YOLLO Gift Bag"
		),


	);
	

	
	$soldoutevent = 	false;
	$tbaevent = 		false;
	$soldoutpasses =	true; 
	
	include 'includes/functions.inc.php';
?> 
<!DOCTYPE html>
<?php /*?><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><?php */?>
<html lang="en">
<head>
<title> <?php echo $event["title"]?> | <?php phoneNumber(); ?> </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="ALL" />
<meta name="author" content="Yollo Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#galleria{width:800px; height:500px;}
</style>

<meta name="Description" content="YOLLO Group Services is a travel company specializing in offering affordable travel to amazing events for everyone." />
<meta name="Keywords" content="throwback cruise,Harriott II riverboat Montgomery,Montgomery Alabama, party boat cruise Harriott II, Alabama travel, Yollo Group Services, alabama state university,DJ Big Show, DJ Dre Smoove, travel services, alabama a&m university, magic city classic 2015" />
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
            
             
            <div class="topcontent">
                    <img src="images/slides/splash-throwback-cruise.jpg" alt="80's or 90's with Yollo Group Services Inc." />
            </div> <!-- ./topcontent-->
          
          <div class="content">
    
                   <div class="col1">
                        <h2><?php echo $event["title"]; ?></h2>
                        <h3><span class="date-icon"></span><?php echo $event["date"]; ?></h3>
                        <h3><span class="location-icon"></span><?php echo $event["location"]; ?></h3>
                        
                        <div id="tabs">
                 
                            
                            <ul>
                             <?php
                                 foreach($tabnavcruise as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";	 
                                 }
                             ?>
                            </ul><!-- ./tab labels-->
                            
                            
                            
                            
                        
                        <div id="tabs-1">
                        	<h3><?php echo $event["title"]?> on the Harriott II over the Alabama River</h3>
    
                            <p>Which era parties the HARDEST&hellip; 80's or 90's? We are about to find out aboard the Harriott II in Montgomery, AL. This cruise will be a great networking and social event! Come party aboard the Harriott II for an exclusive Riverboat cruise. This cruise caters to the grown and sexy adults of Montgomery, AL and surrounding areas.</p>
							
                            <p>Partake in a night of music, drinks, networking, mingling, and fun for everyone. The boat features (3) party decks with sounds provided by DJ Last Laff and Montgomery's ultimate party rocker DJ Big Show. Live entertainment will be provided by the ultimate show band Double O Action! This awesome show will be hosted by one of the funniest comedians in the land with some of the strongest drinks you can handle on the Alabama River! As a BONUS the cruise will also include Spoken Word/Poerty Artist Tina ATL and Theresa the SONGBIRD! This cruise WILL sell out fast so buy your tickets now. For more information and tickets call: <br><strong>(888) 946.9655</strong> or <strong>(334) 531.5650</strong></p>


                             
    
                        </div> <!-- end of tab 1 -->
                        
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
                             
           
                        </div><!-- end of tab 2 -->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                            <h4>80's vs 90's Throwback Cruise Details and Pricing</h4>
                                <ul>
                                    <?php foreach($package_items['diamond_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                </ul>
                                
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                
                                
                            
                        </div> <!-- end of tab 3 -->
                            
                            
 
                        <div id="tabs-4">
                            <?php /* FAQs */ ?>
                            

                            <ul>
                            <li><strong>What is the refund policy?</strong> 
                            All sales are final and non-refundable.</li>
                            
                            
                            
                         	<li><strong>Where is the cruise being hosted?</strong>
                            The cruise is being hosted on the Harroitt II riverboat. It's located on the riverwalk in downtown Montgomery, AL.
                            </li>
                            
                            
                            
                            <li><strong>If I want to pick-up tickets in person do I have that option?</strong>
                            Yes, you can come by our office on any Friday prior to the cruise. Our address is 8436 Crossland Loop Suite 203 Montgomery, AL 36117. The tickets will be available for purchase and pick-up from 12 noon - 6 pm. If that time doesn't fit your schedule call us to arrange for in person pick-up. 
                            </li>
								
							<li><strong>After I purchase tickets online how do I receive my tickets?</strong> 
							Your tickets are mailed to the address provided during the purchasing process if you purchase form this site. If you purchase tickets from Eventbrite your tickets are emailed to the email address provided during the purchase.</li>
 
							<li><strong>What time is boarding and what time does the boat cruise? </strong>
                            Boarding starts at 9:45 pm. The boat will not cruise until 10:30 pm. Because tickets purchasers are traveling from as far away as Atlanta we want to give everyone a chance to board.</li>
                            
                            
                            <li><strong>What is included with V.I.P admission to the Boat Party? </strong>
                            V.I.P. includes a speedy admission onto the boat party, delicious food, and an open bar for the 1st hour of the event to start you off right all while partying on the boat.</li>
                            
                            <li><strong>What is the address for boarding the boat? </strong>
                           The entrance to the boarding area is 213 Commerce Street. Parking is available at any street-level meter, in front of or behind  Union Station, and in the Commerce or Coosa Street parking decks.</li>
                           
                           <li><strong>What form of entertainment will be provided during the cruise? </strong>
                           The cruise will feature two DJ's, live performances, and a comedy show. Entertainment will be on each deck of the Harriott II.</li>
                           <li><strong>What else can I expect on the cruise? </strong>
                           FUN, FUN and MORE FUN! You will also have a chance to win a fabulous trip to Urban Ski Weekend 2016 during Super 50 weekend!</li>
                            
                            
                               
                            </ul>
        
                        </div><!-- end of tab 4 -->
        
                    </div><!-- end of tabs -->
					   
					
					
                  
    
                 </div><!-- end of col1 -->
                  
                 
                 
                 <div class="col2">

                      <div style="margin-bottom:5px;">
                        <a class="box-fade" href="includes/partygras.slide.inc.php?iframe=true&width=90%&height=550" rel="prettyPhoto[iframes]">
                        <img src="images/photo-gallery-btn.gif" style="width:100%" alt="Photo Gallery"></a>
                      </div><!-- ./Photo Gallery -->
                  
                      <div class="reserve-form">
                            <?php if($soldoutevent == true) :?>
							<section id="soldout-msg">
							  <h2>Sold Out</h2>
							  <p>Check back often for updates on next years event packages. You may also <a title="YOLLO Newsletter" href="http://eepurl.com/bgY6P" target="_blank"><strong>Sign Up 
								 to our Newsletter</strong></a> for the latest on all-inclusive packages, discounts, and vacation giveaways.</p>
					  		</section>
					    <?php elseif($tbaevent == true) :?>
                        <h2>Not Available at this time.</h2>
                        <p>Sorry for the inconvenience. The option to pay will be updated soon. You may also be interested in <a title="YOLLO Newsletter" href="http://eepurl.com/bgY6P" target="_blank"><strong>Signing Up to our Newsletter</strong></a> for the latest on this and other all-inclusive packages, discounts, and vacation giveaways.</p>
						
						<?php endif;?>
                        <?php if($soldoutevent == false && $tbaevent == false ) :?>
                         

   


						  	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="YP7H55JF7NZ2N">

								<input type="hidden" name="on0" value="Package Selection">Admission Tickets
								<select name="os0" id="paypal_select"> 
                                    <option value="General Admission">General Admission: $35</option>	
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
                      </div> <!-- ./reserve form-->
           
          </div><!--end of col2-->
          
       
      </div><!-- end of content -->
      
      
      <div class="disclosure">
      		<?php include 'includes/package-info-generic.inc.php'; ?>
      </div>      
       
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
		
		//simple hover fade
		$(".box-fade").hover(function() {
		  $(this).stop().animate({opacity: "0.8"}, 400);
		},
		function() {
		  $(this).stop().animate({opacity: "1"}, 400);
		});	
		
		
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
				os2: "must add leader",
				os5: "must choose a package type",
				terms: "You must agree to terms!"
			} 
  		});
		
		//Jquery Tabs
		$( "#tabs" ).tabs({
				collapsible: false
		 });

			
			//change li classes
			$("li.throwback").addClass("active");
			
		
	});
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>