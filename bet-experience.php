<?php 
	ob_start("ob_gzhandler"); 

	$event = array(
			"title"				=>"BET Experience 2016",
			"location"			=>"Los Angeles, CA",
			"date"				=>"June 24-26, 2016"
	);


	$geolocation = array(
			"hotel1"=> array(
				"title" 		=>"Music Road Resort",
				"address"		=>"303 Henderson Chapel Rd",
				"location"		=>"Pigeon Forge, TN 37868",
				"geolocation"	=>"303 Henderson Chapel Rd, Pigeon Forge, TN 37868",
				"soldout"		=>false
			),
			"hotel2"=> array(
				"title" 		=>"SpringHill Suites",
				"address"		=>"120 Christmas Tree Lane",
				"location"		=>"Pigeon Forge, TN 37868",
				"geolocation"	=>"120 Christmas Tree Lane, Pigeon Forge, TN 37868",
				"soldout"		=>false
			)  
	);
	
	$package_items = array(
		"diamond_items" => array(
			"4 Days / 3 Nights Hotel Accommodations",
			"Party Bus Access",
			"The Best of the Best Fashion Show",
			"Breakfast Daily",
			"36 HOURS OF BRAND NAME OPEN BAR!",
			"5th Annual Winter White Party",
			"5th Annual \"LOL\" Comedy Show",
            "Wine Tastings",
            "Shopping Outlet Excursion",
			"The Rep Your City Super Bowl Party",
           	"Freaky Friday PJ Party",
			"Access To The Exclusive Super Lounges Each Night",
			"Access To The Love Jones Poets Corner Lounge",
			"The \"Mid-Night Mountain\" (Indoor heated) Pool Party",
			"Access To The Caribbean Lounge (Best In Reggae & Soca)",
			"Access To The 80's & 90's Old School Lounge (For Mature Grown & Sexy Crowd)",
			"Tickets To All Additionally Added Events",
			"Beginners Ski Lesson, Ski Equipment Included",
			
		),
		
		
		"emerald_items" => array(
			"4 Days / 3 Nights Hotel Accommodations",
			"The Best of the Best Fashion Show",
			"Breakfast Daily",
			"36 HOURS OF BRAND NAME OPEN BAR!",
			"5th Annual Winter White Party",
			"5th Annual \"LOL\" Comedy Show",
            "Wine Tastings",
            "Shopping Outlet Excursion",
			"The Rep Your City Super Bowl Party",
			"Freaky Friday PJ Party",
			"Access To The Exclusive Super Lounges Each Night",
			"Access To The Love Jones Poets Corner Lounge",
			"The \"Mid-Night Mountain\" (Indoor heated) Pool Party",
			"Access To The Caribbean Lounge (Best In Reggae & Soca)",
			"Access To The 80's & 90's Old School Lounge (For Mature Grown & Sexy Crowd)",
      "Tickets To All Additionally Added Events",
		)
	);


	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$515",
				"3 People"			=>"$545",
				"2 People"			=>"$575",
				"1 Person"			=>"$725"
			),
			
			"emerald"=> array(
				"4 People" 			=>"$435",
				"3 People"			=>"$470",
				"2 People"			=>"$500",
				"1 Person"			=>"$650"
			),
			
			//"hotel_only" 			=> "$525 (Weekend)",
			"party_pass_only" 		=> "$250",
			"party_bus"				=> "$150",
			"diamond_sold"			=> true,
			"emerald_sold"			=> true
	);
	
	include 'includes/functions.inc.php';
	$soldoutevent = 	false;
	$tbaevent = 		false;
	$pricestba=			true; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $event["title"]; ?> | <?php phoneNumber(); ?> </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">

<meta name="robots" content="ALL" />
<meta name="author" content="YOLLO Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />

<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />

<meta name="Description" content="BET Experience" />
<meta name="Keywords" content="BET Experience" />
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
           
           <div class="topcontent"> <img src="images/slides/splash-bet.jpg" alt="BET Experience"></div>
          
          <div class="content">
          		   <h2 class="title"><?php echo $event["title"]; ?></h2>
                   <div class="date-location">
                    	<div class="col"><?php echo $event["date"]; ?></div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                   </div>
    
                   <div class="col1">

                     <div id="tabs">
                        <ul>
                            <?php
                                 foreach($tabnav as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";	 
                                 }
                             ?>
                             <li><a href="#tabs-5">Buy Now</a></li>
                        </ul>
                        
                        <div id="tabs-5">
                        	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
							 
							
                              <input type="hidden" name="cmd" value="_s-xclick">
								
								<input type="hidden" name="add" value="1">
                                <input type="hidden" name="hosted_button_id" value="S92NVD54ECLGU">
                                
                                <input type="hidden" name="on0" value="Package Selection">Package Selection
                                <select name="os0" id="paypal_select" >
                                    <optgroup label="Package Reservation Fee">
                                        <option value="BTE Register">General Registration</option>
                                        <option value="Register Residence Inn">Register: Residence Inn</option>
                                        <option value="Register Party Pass">Register: Party Pass</option>
                                    </optgroup> 
                                    
                                    <optgroup label="Partial Payments">
                                        <option value="Partial Pay 100">Partial Pay 100 $100.00 USD</option>
                                        <option value="Partial Pay 150">Partial Pay 150 $150.00 USD</option>
                                        <option value="Partial Pay 200">Partial Pay 200 $200.00 USD</option>
                                    </optgroup>
                                   
                                    <optgroup label="First Payment">
                                          <option value="First Pay 125">First Payment: $125</option>
                                    </optgroup>
								 
                                    <optgroup label="Party Pass Only">
                                       <option value="First Payment">First Payment $125.00 USD</option>
                                    </optgroup>
                                </select> 
                                
                                <input type="hidden" name="on1" value="Package Type">Package Type
                                <select id="firstchoice" name="os1">
                                    <option value="Diamond">Diamond </option>
                                    <option value="Emerald">Emerald </option>
                                    <option value="Party Pass Only">Party Pass Only </option>
                                    <option value="Payment on Account">Payment on Account </option>
                                </select>
                                
                              
                                
                                <input type="hidden" name="on2" value="Group Leader Name"> <label for="os2">* Group Leader Name</label>
								<input id="os2" class="group" type="text" name="os2" maxlength="60" >

								<input  type="hidden" name="on3" value="Group Size" > 
								<label for="os3">* Number of people in group?</label>
								<input name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" >

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
                        </div>
                        
                        
                        <div id="tabs-1">
                            
                            <p>The BET Experience is the most exciting celebration of music, culture and entertainment that consumes the entire L.A. LIVE campus. This event attracts thousands of people from across the nation.<p>

                            <p>Everyone will witness amazing concerts and be presented once in a lifetime opportunities at our Fan Fest. You will have exclusive access to the nationally recognized and televised BET Awards Show. We wants to give you the most amazing chance to be involved with this celebration while providing  good seat locations for the best value. Anything can happen at the BET Experience, and YOLLO want you to be there when IT does. </p>
                            
                            <p>ROLL LIKE A TRUE VIP THROUGHOUT THE BIGGEST SUMMER WEEKEND IN ENTERTAINMENT!  THE VIP PACKAGES OFFER THE ONLY WAY TO PURCHASE BET AWARDS TICKETS, GREAT SEATS TO STAPLES CENTER SHOWS, AND EXCLUSIVE ACCESS. </p>
                            
                            <p><a href="#tabs-3" class="open-tab" data-tab-index="4">Buy Now</a></p>
							
							
							
                            
                        </div> <!-- end of Overview-->
                        
                        
                        <div id="tabs-2">
    
                                 <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                 <?php if($geolocation["hotel1"]["soldout"] == 1) :?><img class="soldoutbadge" src="images/sold-out-image-badge.png"><?php endif;?>
                                 <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=hybrid&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
                                <p style="padding-bottom:10px;" class="map-icon">
                                <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
     
                                <img style="width:100%;" src="http://musicroadresort.com/images/gallery/gallery-hotel-01.jpg" />
         
                        </div><!-- end of Hotel Options-->
                        
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                            <?php 
                                $dsoldout = ($people["diamond_sold"] == 1)? "| Sold Out" : "";
                                $emsoldout = ($people["emerald_sold"] == 1)? "| Sold Out" : "";
                            ?>
                            
                            	<?php if($pricestba == false) :?>
                                <h4>Diamond Package <em style="font-style:normal; color:#9e1421">  <?php echo $dsoldout;  ?></em></h4>
                                <ul>
                                    <?php foreach($package_items['diamond_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                </ul>
                                   
                                
								
								<section id="priceblock">
									<h4>Price </h4>
									<ul class="priceblock">
										<?php foreach($people['diamond'] as $key=>$value): ?>
											<li><strong><span class="people"><?php echo $key; ?></span></strong><span class="price"><?php echo $value ?></span></li?>
										<?php endforeach; ?>
									</ul>
									
									<div class="small">
										<p>* Prices listed are per person and based on (1) room per group</p>
										<p>** Event details can be substituted or modified without notice</p>
									</div>
													
                </section>
							
							
                                
                                <h4>Emerald Package <em style="font-style:normal; color:#9e1421">  <?php echo $emsoldout;  ?></em></h4>
                                <ul>
                                    <?php foreach($package_items['emerald_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                </ul>
                                   
                                
						 
						 		<section id="priceblock">
									<h4>Price </h4>
									
									
									<ul class="priceblock">
										<?php foreach($people['emerald'] as $key=>$value): ?>
											<li><strong><span class="people"><?php echo $key; ?></span></strong><span class="price"><?php echo $value ?></span></li?>
										<?php endforeach; ?>
									</ul>
									
									<div class="small">
										<p>* Prices listed are per person and based on (1) room per group</p>
										<p>** Event details can be substituted or modified without notice</p>
									</div>
                                </section>
						 
						 
                                
                                <h4>Optional Additions To Your Package</h4>
                                <ul>    
                                    <li>Ski Excursions (Includes Free Lessons) for only $55</li>
                                    
                                </ul>
                                
                                <?php else:?>
                                
                                <section>
                                	<p>Package Prices will be announced soon. Please check back here later for final package pricing, but if you are interested please register to secure a package. This event will sell out.</p>
                                
                                </section>
                                
                                <?php endif;?>
                             
                    
                            </div><!-- end of Prices-->
                            
                            
                            
                            
                       
                        <div id="tabs-4">
                            <?php /* FAQs */ ?>
                            
                            <ul>
                                <li><strong>When are the payments due?</strong> 
                                Following registration the first payment of $125 is due on or before January 08, 2016. The second payment of $125 is due on or before January 18, 2016. The final payment (remaining balance) is  
                                due on or before January 25, 2016. We do offer pay on arrival, however the 1st and 2nd payments are due as scheduled with the remaining balance due on arrival. There is a $25 fee for this service. If you would like to make payments between due dates that is fine also. 
                                </li>
                                
                                <li><strong> What time will the bus depart from Atlanta?</strong> 
                                The bus will depart Atlanta at 1pm (EST) on Friday and return to Atlanta Monday at 4 pm (EST)
                                </li>
                                
                                <li><strong>What cities will the bus depart from?</strong> Montgomery, Birmingham, Huntsville,
                                 and Atlanta! Don't see you city or state listed? Email us and let's 
                                 see what we can work out!
                                </li>
                                
                                <li><strong>Where will we be staying that weekend?</strong> 
                                The Music Road Resort in Pigeon Forge has been selected as the host hotel for this wonderful event!</li>
                                
                                <li><strong>What if I don't want to ski?</strong> 
                                While we encourage everyone to "at least try", since it is a "Ski Trip", YOU CAN exchange the 
                                ski portion of the experience for other excursions such as Lazer Tag, Ropes Challenge Course, 
                                Horse Back Riding, Shopping Excursions, Mountain Tours, Ice Skating and a few others.  
                                Regardless of what you do, you will still get everything else in the package and the exchange
                                 options will NOT over lap the other events. Its going to be fun for everyone.</li>
                                
                                <li><strong>Does this trip include any transportation?</strong> Yes. Transportation is provided 
                                for this trip if you purchase our Diamond Package. If the party bus is not your thing then the
                                 Emerald Package was designed for YOU.
                                </li>
                                
                                <li><strong>Do I need a rental car?</strong> 
                                If you aren't on the party bus, YES, otherwise, no. Just hop on the party bus!</li>
                                
                                <li><strong>How do I pay?</strong> 
                                Complete the form and the next steps to the right of the page. You will receive a welcome 
                                letter within  7 business days with all your reservation information.</li>
                                
                                <li><strong>What are some things you suggest I buy for this trip?</strong> Relaxed casual winter
                                 wear, sweaters,  thermal wears, ski gloves, ski bib, a hat, goggles or shades, swim wear, and 
                                 a sexy classy black outfit</li>
                                
                                <li><strong>Can I bring my children on this trip?</strong> No, this is an adult outing which
                                 includes all  adult festivities.</li> 
                                
                                <li><strong>Do I need any extra money?</strong> Yes, please bring money for parking on Saturday 
                                and lunch on Saturday on the mountain, for shopping at the outlet malls and for your souvenirs.</li> 
                            </ul>
                            
                            
                            
                        </div><!-- end of FAQs-->
                    </div>
                  
    
    
    </div>
                  
                 <div class="col2">
  

                  <div class="reserve-form">
                        <img style="margin-top:-13px;" src="images/reserve-spot.png" alt="reserve a spot today" /><br />
					  
						<?php if($soldoutevent == true) :?>
								<section id="soldout-msg">
								  <h2>Sold Out</h2>
								  <p>Check back often for updates on next years event packages. You may also <a title="YOLLO Newsletter" href="http://eepurl.com/bgY6P" target="_blank"><strong>Sign Up to our Newsletter</strong></a> for the latest on all-inclusive packages, discounts, and vacation giveaways.</p>
								</section>
					    <?php elseif($tbaevent == true) :?><h2>TBA</h2><?php endif;?>
                        <?php if($soldoutevent == false) :?>
                        
                        
           
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
							 
							
                              <input type="hidden" name="cmd" value="_s-xclick">
								
								<input type="hidden" name="add" value="1">
                                <input type="hidden" name="hosted_button_id" value="S92NVD54ECLGU">
                                
                                <input type="hidden" name="on0" value="Package Selection">Package Selection
                                <select name="os0" id="paypal_select" >
                                    <optgroup label="Package Reservation Fee">
                                        <option value="BTE Register">General Registration</option>
                                        <option value="Register Residence Inn">Register: Residence Inn</option>
                                        <option value="Register Party Pass">Register: Party Pass</option>
                                    </optgroup> 
                                    
                                    <optgroup label="Partial Payments">
                                        <option value="Partial Pay 100">Partial Pay 100 $100.00 USD</option>
                                        <option value="Partial Pay 150">Partial Pay 150 $150.00 USD</option>
                                        <option value="Partial Pay 200">Partial Pay 200 $200.00 USD</option>
                                    </optgroup>
                                   
                                    <optgroup label="First Payment">
                                          <option value="First Pay 125">First Payment: $125</option>
                                    </optgroup>
								 
                                    <optgroup label="Party Pass Only">
                                       <option value="First Payment">First Payment $125.00 USD</option>
                                    </optgroup>
                                </select> 
                                
                                <input type="hidden" name="on1" value="Package Type">Package Type
                                <select id="firstchoice" name="os1">
                                    <option value="Diamond">Diamond </option>
                                    <option value="Emerald">Emerald </option>
                                    <option value="Party Pass Only">Party Pass Only </option>
                                    <option value="Payment on Account">Payment on Account </option>
                                </select>
                                
                              
                                
                                <input type="hidden" name="on2" value="Group Leader Name"> <label for="os2">* Group Leader Name</label>
								<input id="os2" class="group" type="text" name="os2" maxlength="60" >

								<input  type="hidden" name="on3" value="Group Size" > 
								<label for="os3">* Number of people in group?</label>
								<input name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" >

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
      
      
      <section id="disclosure" >
     
           <div class="disclosure">
           
           		<?php include 'includes/package-info-generic.inc.php'; ?><br/>
           
                <strong>Disclaimer</strong> | The term B.E.T., BET Experience, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources. 
          </div>
      </section>
      
      
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
		
		
		 //dynamic selection
        $('#firstchoice').change(function(){
            if($(this).val() == 'Diamond'){
                $('#secondchoice').show()
                .find('select').rules('add', {required: true, messages : {required:'must choose city'}});
            }else{
                $('#secondchoice').hide()
                .find('select').rules('remove');                
            }
           });
        
        //form validation
        var validate_object = {
            rules: {
                terms: {required: true},
                os4: {required: true},
                os3: {required: true},
                os1: {required: true}
                
            },
            messages: { 
                os4: "must add group size",
                os3: "must add group leader",
                os1: "must choose a package type",
                terms: "You must agree to terms!"
            }     
        };
        
        /* if($('#firstchoice').val() == 'Diamond'){
            validate_object.rules.os2 = {required: true};
            validate_object.messages.os2 = 'must choose city';
        }; */
        
        
        $('#paypal_frm').validate(validate_object);
		
		

		
		//Jquery Tabs
		$( "#tabs" ).tabs();
		
			
			//change li classes
			$("li.bet").addClass("active");
			
			
			
			//real url tab
			$("li.exlink a").unbind('click');
		

	});
	
		
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>

</body></html>