<?php
	ob_start("ob_gzhandler");	
	
	$event = array(
			"title"				=>"Cincinnati Music Festival",
			"location"			=>"Cincinnati, Ohio",
			"date"				=>"July 24- 26, 2015"
	);

	
	$geolocation = array(
			"hotel1"=> array(
				"title" 			=>"Holiday Inn Cincinnati Riverfront",
				"address"			=>"600 West 3rd Street",
				"location"			=>"Covington, KY 41011",
				"geolocation"		=>"600 West 3rd Street, Covington, KY 41011",
				"img1url"			=>"http://www.ihg.com/hotelmedia/repository/hotelimages/CVGRF/WELCM_EXTR_2_E.jpg",			
				"hotel1_soldout"	=>false
			)
			
	);
	
	

	
	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$465",
				"3 People"			=>"$500",
				"2 People"			=>"$570",
				"1 Person"			=>"$775"
			)
			
	
	);

	
	$package_items = array(
		"diamond_items" => array(
			"Hotel Accommodations (Fri-Sun)",
			"Weekend Concert Tickets",
			"Mid Day Cruise",
            "Weekend Shuttle Trolley Pass",
			"Breakfast Daily",
            "Meet and Greet Mixer",
			"Additional Hotel nights $275 per night",
			"YOLLO Gift Bag"
		)
	);
	
	
	$soldoutevent = false;
	$diamondsoldout = false;
	$emeraldsoldout = false;
	include 'includes/functions.inc.php';
	
?> 
<!DOCTYPE HTML>
<html lang="en">
<head>
<title> <?php echo $event["title"]; ?> |  <?php phoneNumber(); ?> </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="If you are looking to be apart of this annual event, we can provide you with all inclusive arrangements and tickets for Essence Festival Weekend." />
<meta name="Keywords" content="macy's music festival 2019, macy's music festival 2015,macy's music festival 2019, Cincinnati jazz festival, essence festival, Cincinnati jazz festival 2019, black concerts, black celebrities, contemporary african american music, Cincinnati jazz festival parties, mid day party cruise, mid day all white cruise, mid day party cruise 2019, mid day all white cruise 2019, mid day all white cruise 2019, VIP on the River, macy's music festival cruise, macy's music festival party boat cruise, Cincinnati jazz festival cruise tickets, Cincinnati Music Festival 2019, Cincinnati Music Festival cruise,Cincinnati Music Festival tickets" />
<meta name="robots" content="ALL" />
<meta name="author" content="YOLLO Group Services" />
<meta property="fb:pages" content="117420764961518" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" />

<style type="text/css">
#galleria{width:800px; height:500px;}

</style>
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
                  
                   <div class="topcontent"> <img src="images/slides/splash-mmf.jpg" alt="Macys Music Festival" /></div>
                   
                   <div class="col1">
                       <h2><?php echo $event["title"]; ?></h2>
                       <h3><span class="date-icon"></span><?php echo $event["date"]; ?></h3>
                       <h3><span class="location-icon"></span><?php echo $event["location"]; ?></h3>
                    
                     <div id="tabs">
                        <ul>
                            <?php
                                 foreach($tabnav as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";	 
                                 }
                             ?>
                        </ul>
                        <div id="tabs-1">
                            <h4>Get ready for Cincinnati Music Festival '15</h4>
                            <p>YOLLO is taking you to Cincinnati for the Cincinnati Music Festival formerly known as the Macy's Music Festival! Over the years as a result of a number of factors, the event has evolved from that of a musical genre of pure jazz, to one predicated by a musical genre of rhythm & blues.</p>

							<p>The Cincinnati Music Festival, now held at the Paul Brown Stadium (home of the Cincinnati Bengal's) is a state of the art facility. Outside of the performers on stage, it is an event for those who are looking for a great concert environment while being in a city full of musical history. It is an event to see, and to be seen which provides the atmosphere to meet and greet, mix and mingle. Each year, the Cincinnati Music Festival draws a wonderful mix of Old School and the hottest contemporary R&B music performers to its stage. </p>

							<p>YOLLO is looking forward to another terrific festival in 2015, and we hope you join us and be a part of this special summer occasion. Packages are available now, but they won't last long. Don't wait reserve today for $19.99!</p>
    
                        </div>
                        <div id="tabs-2">
                        <?php if(isset($geolocation["hotel1"])) :?>
                                <div class="hotelimg">
                                    <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                    <?php if($geolocation["hotel1"]["hotel1_soldout"] == true) :?>
                                        <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                    <?php endif;?>
                                    
                                    <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=terrain&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
        
                                    <p style="padding-bottom:10px;" class="map-icon">
                                    <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                    <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
									
									<?php if(!empty($geolocation["hotel1"]["img1url"])) :?>
										<img src="<?php echo $geolocation["hotel1"]["img1url"]; ?>" />
									<?php endif;?>

                                
                                </div>
                 
                         <?php endif; ?>   
                         
                             
                                <?php if(isset($geolocation["hotel2"])) :?>
                                 <div class="hotelimg">
                                    <h4><?php echo $geolocation["hotel2"]["title"]; ?></h4>
                                    <?php if($geolocation["hotel2"]["hotel2_soldout"] == true) :?>
                                        <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                    <?php endif;?>
                                    
                                    <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel2"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=terrain&markers=color:red%7C<?php echo $geolocation["hotel2"]["geolocation"]; ?>&sensor=false" />
        
                                    <p style="padding-bottom:10px;" class="map-icon">
                                    <?php echo $geolocation["hotel2"]["address"]; ?><br>
                                    <?php echo $geolocation["hotel2"]["location"]; ?><br /></p>
                                    
                                    
                                </div>
                               <?php endif; ?>

    
                        </div><!-- end of Tab 2 -->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                            
                            <h4>Diamond Package <?php if($diamondsoldout == true) :?><em class="soldout">Sold Out</em><?php endif ?></h4>
                            
                                <ul>
                                    <?php foreach($package_items['diamond_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                                
                                <div class="priceblock">
                                    <?php foreach($people['diamond'] as $key=>$value): ?>
                                        <?php echo $key; ?> <img src="../images/right-arrow.gif" width="16" height="16">
                                        <strong><?php echo $value ?></strong> p.p.<br />
                                    <?php endforeach; ?>
                                    
                                </div>
                                
                                
                                <?php if (isset($people['emerald'])): ?>
                                <h4>Emerald Package <?php if($emeraldsoldout == true) :?><em class="soldout">Sold Out</em><?php endif ?></h4>
                                <ul>
                                    <?php foreach($package_items['emerald_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                                   
                                <div class="priceblock">
                                    <?php foreach($people['emerald'] as $key=>$value): ?>
                                        <span><?php echo $key; ?> <img src="../images/right-arrow.gif" width="16" height="16">
                                        <strong><?php echo $value ?></strong> p.p.<br /></span>
                                    <?php endforeach; ?>
                                </div>
                                
                                <?php endif; ?>
                                
                                    
                                <em class="teeny">*All Prices listed are per person and based on (1) room occupancy</em> 
                                <em class="teeny">Events can be substituted or change without notice</em>
                    
                            </div>
                            <!-- end of Tab 3 -->
                            
                            
  
                       
                        <div id="tabs-4">
                            <?php /* FAQs */ ?>
                            
                            <ul>
                                <li><strong>Does the price listed take care of hotel reservations for all members in either the Diamond or Emerald package or only one person?</strong> All prices listed are per person. Under the package prices description, all amenities included in your package are per person and includes one (1) room for the group.</li>
                                 
                                 
                                 <li><strong>How many concert tickets are included in the package for my group?</strong> The package includes tickets for both nights of the concerts! That's right you get to attend both nights and its all included in the package price. If you don't plan on attending both nights you can give away or sell the additional night ticket. </li>
                                 
                                <li><strong>What are the payment due dates for Macy's Music Festival Packages?</strong> To reserve a package each group member pays the $19.99 per person fee. The first payment of $125 is due on or before June 26, 2015. The final payment (remaining balance) is due on or before July 08, 2015. Any payments after the due date will incur late fees and is subject to cancellation.  </li>
                             
                                <li><strong>Where is the cruise being held?</strong> The cruise is being hosted on the River Queen Riverboat.</li>
                             
                                <li><strong>Can I purchase tickets to the vruise independent of the hotel package deal?</strong> Yes, Yes, and Yes! Just follow the same booking procedures as you would if booking the hotel package.</li>
                             
                                <li><strong>What time does the cruise start and how much does it cost?</strong> The cruise will sail from 2:30 pm - 5:30 pm, however boarding begins at 2:30 pm. The cost of the cruise is $40 for General Admission and $85 for VIP.</li>
                             
                                <li><strong>If I wait until the lineup is complete before I book my hotel room will you still have packages available?</strong> In most cases you will be out of luck! This event breaks attendance records every year. Some people may attend the festival for the concerts, while others may attend for the surrounding activities and mingling opportunities. Regardless, you will need to book your package NOW. With our payment plans it helps you to reserve your package today and pay over time.</li>
    
                                
                                <li><strong>Does the price take care of hotel reservation for all 4 members in either Diamond or Emerald package or only one person?</strong>All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per
person. </li>
                                
                             
                            </ul>
                            
                            
                            
                        </div>
                    </div>
    
			   
					   
    </div>
                  
                 <div class="col2">
                  

                  <div style="margin-bottom:5px;">
                    <a class="fancy box-fade" href="includes/essence.slide.inc.php?iframe=true&width=90%&height=550" rel="prettyPhoto[iframes]">
                    <img src="images/photo-gallery-btn.gif" width="100%" /></a>
                  </div>
               
     
                  <div class="reserve-form">
                        <img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br />
                        
                        <?php if($soldoutevent == 1) :?><h2>Sold Out</h2><?php endif;?>
                        <?php if($soldoutevent == 0) :?>
                        


                        
                         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="YGHLGN7C948KE">
                                
                                <input type="hidden" name="on0" value="Hotel Selection">Hotel Selection
                                <select name="os0" id="paypal_select">
    
                                    <optgroup label="Register Hotel">
                                    	<option value="Registration: Holiday Inn">Register: Holiday Inn $19.99</option>
										<option value="Registration Fee">Register: $19.99</option>
                                    </optgroup>
                                    
                                    <optgroup label="First Payment">
                                        <option value="First Payment">First Payment: $125</option>
                                    </optgroup>
                                    
                                    <optgroup label="Partial Payments">
                                        <option value="Partial Payment 50">Partial Payment: $50</option>
                                        <option value="Partial Payment 100">Partial Payment: $100</option>
                            			<option value="Partial Payment 150">Partial Payment: $150</option>
                                        <option value="Partial Payment 200">Partial Payment: $200</option>
	
                                    </optgroup>
                                    
                                   
                                    
                                </select> 
                                
                                <input type="hidden" name="on1" value="Package Type">Package Type
                                <select name="os1">  
                                        <option value="Diamond">Diamond </option>
                            			<option value="Partial Payment">Partial Payment </option>
                                </select>
    
                                
                                <input type="hidden" name="on2" value="Group Leader Name"> <label for="os2">* Group Leader Name</label>
                                <input id="os2" class="group" type="text" name="os2" maxlength="60" >
                                
                                <input  type="hidden" name="on3" value="Group Size" >
                                <label for="os3">* Number of people in group?</label>
                                <input name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" >
                                <input style="width:auto; margin-right:5px; float:left" name="terms" type="checkbox" value="agree" id="terms">
                                 <label for="terms">
                                    <p>* I agree to the       
                                    <a class="fancy" data-fancybox-type="ajax" href="includes/termsofagreement.inc.php">Terms</a>
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
      
      <div class="disclosure">
      		<?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> The terms Macy's Music Festival , Macy's Music Fest, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Macy's and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Macy's Music Festival Organizers productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources. 
      </div>
      
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
	$(function(){
		
		//grays out sold out features
		$(".priceblock span:contains('SOLD OUT')").addClass("disable");
		
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
			},
			messages: { 
				terms: "You must agree to terms!",
				os3: "must add group size",
				os2: "must add group leader"

			} 
  		});
		

			//change li classes
			$("li.macy").addClass("active");


	});
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>


<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>