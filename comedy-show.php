<?php
	ob_start("ob_gzhandler");
	
	$event = array(
			"title"				=>"Bust a Gut Comedy Show",
			"location"			=>"Montgomery, AL",
			"date"				=>"June 12, 2015"
	);
	

	$geolocation = array(
			
			"hotel1"=> array(
				"title" 			=>"DoubleTree Downtown",
				"address"			=>"120 Madison Avenue",
				"location"			=>"Montgomery, AL",
				"geolocation"		=>"120+Madison+Avenue+Montgomery+A+36104",
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
            "Tickets: Gen Adm. $15 ",
            "VIP Access $55: speedy admission into the venue, special seating, and three complimentary dinks",
			"Hosted by: As seen on BET Comic View Big Kenney",
			"Featuring: Janet Dollar",
            "Starring: Mario Tory",
			"Get your tickets TODAY!"
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
                    <img src="images/slides/splash-comedy-show.jpg" alt="<?php echo $event["title"] ?> with Yollo Group Services Inc." />
            </div> <!-- ./topcontent-->
          
          <div class="content">
    
                   <div class="col1">
                        <h2><?php echo $event["title"]; ?></h2>
                        <h3><span class="date-icon"></span><?php echo $event["date"]; ?></h3>
                        <h3><span class="location-icon"></span><?php echo $event["location"]; ?></h3>
                        
                        <div id="tabs">
                 
                            
                            <ul>
                             <?php
                                 foreach($tabvenue as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";	 
                                 }
                             ?>
                            </ul><!-- ./tab labels-->
                            
                            
                            
                            
                        
                        <div id="tabs-1">
                        	<h3><?php echo $event["title"]?> in <?php echo $event["location"] ?></h3>
    
                            <p>These comics will have you laughing so much you will literally feel like you are about to Bust a Gut!!</p>
                            <p>Needless to say we have all heard laughter is great for the soul and what better way to stay healthy than attend the 1st annual Bust a Gut  comedy show!  Drinks will be on poin, and the jokes will have had everyone in stitches! If you are in need of some serious laughter, this is the event for you. This event's performers are some of the comedy world's most respected and upcoming comedians! </p>
                            <p>The show's host Big Kenney has appeared on Def Comedy Jam and BET Comic View just to name a few. He continues to leave attendees in tears during his performances! Our featured Janet Dollar is an upcoming female comedienne that is lighting up the comedy world and continues to amaze her audiences with her comedy</p>
                            <p>Finally, the last comedian that will star this event has been on the comedy seen for years and has opened for well know acts like Earthquake and nephew Tommy to name a few. His shows always has  EVERYBODY'S eyes in tears!  </p>
                            <p>This is a MUST ATTEND event and tickets will not last long. If you purchase your ticket before May 20th it will include admission to the official after party following the comedy show The 1st Annual Bust a Gut show will happen on June 12th, 2015. Join us to hear some of the funniest comedians to ever hit the main circuit.</p>

                             
    
                        </div> <!-- end of tab 1 -->
                        
                        <div id="tabs-2">
    
                                 <div class="hotelimg">
                                <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                    <?php if($geolocation["hotel1"]["hotel1_soldout"] == true) :?>
                                        <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                    <?php endif;?>
                                    
                                    <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=<?php echo $geolocation["hotel1"]["zoom"]; ?>&maptype=<?php echo $geolocation["hotel1"]["maptype"]; ?>&markers=icon:http://goyollo.com/images/favicon.png%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
                                     
                                     <img style="width:100%; height:200px; margin-bottom:5px" src="http://doubletree3.hilton.com/resources/media/dt/MGMMADT/en_US/img/shared/full_page_image_gallery/main/DT_exterior001_2_677x380_FitToBoxSmallDimension_Center.jpg" />
        
        
                                    <p style="padding-bottom:10px;" class="map-icon">
                                    <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                    <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                                     </div>
                             
           
                        </div><!-- end of tab 2 -->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                            <h4><?php echo $event["title"] ?> Details and Pricing</h4>
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
                            
                            
                            
                         	<li><strong>Where is the comedy show being hosted?</strong>
                            The comedy show is being hosted at the DoubleTree Montgomery. It's located in downtown Montgomery, AL.
                            </li>
                            
                             <li><strong>If I want to pick-up tickets in person do I have that option?</strong>
                            Yes, you can come by our office on any Friday prior to the comedy show. Our address is 8436 Crossland Loop Suite 203 Montgomery, AL 36117. The tickets will be available for purchase and pick-up from 12 noon - 6 pm. If that time doesn't fit your schedule call us to arrange for in person pick-up.
 
                            </li>
								
							<li><strong>After I purchase tickets online how do I receive my tickets?</strong> 
							Your tickets are mailed to the address provided during the purchasing process if you purchase from this site. If you purchase tickets from Eventbrite your tickets are emailed to the email address provided during the purchase.</li>
 
							<li><strong>What time does the show start? </strong>
                            The show will start at 7 p.m. promptly We recommend you arrive at least 30 minutes early to sit up front (lol).</li>
                            
                            
                            <li><strong>What is included with V.I.P admission to the Boat Party? </strong>
                           V.I.P. includes a speedy admission into the venue, special seating,  and three complimentary drinks to start the night off right!.</li>
                                
                           <li><strong>What else can I expect? </strong>
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
                         

   


						  	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GYUDAW5KVDUYW">
                                

								<input type="hidden" name="on0" value="Package Selection">Admission Tickets
								<select name="os0"> 
                                    <option value="General Adm MGM">General Admission: $15</option>	
                                    <option value="VIP Access MGM">VIP Access: $55</option>	
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
			$("li.comedy").addClass("active");
			


	});
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>