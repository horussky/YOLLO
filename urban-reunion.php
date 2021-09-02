<?php
	ob_start("ob_gzhandler");

	$event = array(
			"title"				=>"Urban Reunion Cruise 2016",
			"location"			=>"Western Caribbean",
			"date"				=>"April 16, 2016"
	);
	
	
	$geolocation = array(
			"cruise1"=> array(
				"title" 		=>"Carnival Sensation Cruise Ship",
				"ship"			=>"http://www.cruisetimetables.com/pictures/carnival-sensation-cruise-ship.jpg",
				"location"		=>"Western Caribbean (Jamaica and Cayman Islands)",
				"soldout"		=>true
				
			)
			
	);
	
	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$680",
				"3 People"			=>"$725",
				"2 People"			=>"$780",
				"1 Person"			=>"$1345"
				
			)

	);
	
	$package_items = array(
		"diamond_items" => array(
			"NO PASSPORT NEEDED",
			"All You Can Eat All Weekend Long",
			"All Port Fee's & Taxes",
			"Open Bar Captains \"Reunion\" Reception",
			"FREE Non-Motor Excursions Access",
			"FREE Excursion to the Mayan Ruins (includes FREE shuttle service) ",
			"10 Hours of Open Bar for Weekend",
			"Access To All Urban Reunion Weekend Events Including the House of Comedy Show, Grown and Sexy Game night, Verses and Flow Poets Lounge  and more! ",
			"YOLLO Gift Bag"
		)
	);
	
	
	$faqs = array(
		 "Do I need a Passport?" => 
		 "A passport is not required to go on the cruise if you are a United States citizen and departing from a US port. If you DO NOT have a passport, you can board with a birth certificate issued by the department of vital statistics and your driver’s license.",
		 
		 "How do I pay?" => 
		 " Complete the form and the next steps to the right of the page. You will receive a welcome letter within 7 business days with all your reservation information.
What are some things you suggest I buy for this trip? Relaxed casual wear, motion sickness medicine (just in case), swim wear, sun block lotion/spray, a sexy classy white outfit, and room for a GREAT experience!",

		 "When are the payments due?" => 
		 "After registration the first payment of $125 is due December 15, 2015. The final payment (remaining balance) is due on or before January 18, 2016.",
		 
		 "Are there any other charges associated with the cruise?" => 
		 "Yes, the client is responsible for paying cabin gratuities. The standard charge is $11.25 per day, but you may want to leave more depending on your service.",
		 
		 "What port are we departing from and what time do I need to be there?" => 
		 "The Carnival Sensation sails from the Port of Miami. We suggest arriving no later than 2:30 pm."
				
			
	);
	
	$tbaevent = false;
	$soldoutevent = true; 
	$photo_gallery = false;
	$diamondsoldout = false;
	
	include 'includes/functions.inc.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $event["title"]?> | <?php phoneNumber(); ?> </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="author" content="YOLLO Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<meta property="fb:pages" content="117420764961518" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#galleria{width:800px; height:500px;}


</style>

<meta name="Description" content="YOLLO Group Services is a travel company specializing in offering affordable travel to amazing events for everyone." />
<meta name="Keywords" content="Urban Fantasy 2015, Urban Fantasy 2016, Carnival Cruise, Bahamas, YOLLO Group Services, student travel, bahamas, Cruise Travel packages, travel services, domestic travel, international travel" />
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
                    <img src="/images/slides/splash-urban-reunion.jpg" alt="Urban Fantasy Weekend with YOLLO" />
            </div> 
          
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
                                 foreach($tabnavcruise as $tabs => $item){
                                    echo "<li><a href=\"#$tabs\">$item</a></li>";	 
                                 }
								 
                             ?>
                             <li><a href="#tabs-5">Itinerary</a></li>
                            </ul>
                        
                        <div id="tabs-1">
                        	<h3>Urban Reunion Weekend is happening in Jamaica and the Cayman Islands!</h3>
                              
                              
                        	<p>Do you remember events such as Black College Reunion, Spring Bling, or Freak-Nic? If so, we have a great event to excite your nostalgia - Urban Reunion Cruise Weekend. This is an all-inclusive cruise that will take you around the Western Caribbean - Jamaica and the Cayman Islands.</p>

							<p>Urban Reunion rekindles the fun of past urban events, all while reconnecting you with familiar faces. This is an urban reunion, in every sense of the phrase. Leave the thought of your job behind and enjoy a fun weekend cruise aboard the Carnival "Sensation". This ship is the ultimate party environment. </p>

							<p>If you're seeking to network, mingle, or maybe meet new friends, this is the event for you! Free excursion options, open bar, and all-you-can-eat all weekend should tickle your fancy. Don't hesitate a moment further, book today!</p> 
          
    
                        </div> <!-- end of tab 1 -->
                        
                        <div id="tabs-2">
                                
                                
                                 <h4><?php echo $geolocation["cruise1"]["title"]; ?></h4>
                                 <?php if($geolocation["cruise1"]["soldout"] == 1) :?><img class="soldoutbadge" src="images/sold-out-image-badge.png"><?php endif;?>
                                 <img  src="<?php echo $geolocation["cruise1"]["ship"]; ?>" style="width:100%;" />
                                 <?php echo $geolocation["cruise1"]["location"]; ?><br /></p>
    
                                <img src="http://cruiseweb.com/carnival-imagelibrary/ship-sensation/600x400-Carnival-Sensation-The-Atrium.jpg" style="width:100%" />
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                <img src="https://s3.amazonaws.com/files.parse.com/b54b1202-39a8-4faa-84b7-55139818647f/57569884-fce3-4ffe-aefb-1ef62d49141c-C6FM8_4_600x400.jpg" style="width:100%" />
                        
                        
        
                             
                                
                        </div><!-- end of tab 2 -->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
    
                               
                                
                                <h4>Diamond Package <?php if($diamondsoldout == true) :?><em class="soldout">Sold Out</em><?php endif ?></h4>
                                <ul class="package-info">
                                    <?php foreach($package_items['diamond_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                                
                                <section id="priceblock">
									<h4>Price </h4>

									<ul class="priceblock">
										<?php foreach($people['diamond'] as $key=>$value): ?>
											<li><strong><span class="people"><?php echo $key; ?></span></strong><span class="price"><?php echo $value ?></span></li>
										<?php endforeach; ?>
									</ul>
									
									<div class="small">
										<p>* Prices listed are per person and based on (1) room per group</p>
									</div>
                                </section>
                                
                                
                                

                            </div> <!-- end of tab 3 -->
                            
                            
                            
                            
                       
                        <div id="tabs-4">
                                <ul>
                                    <?php foreach($faqs as $question => $answer) :?>
                                        <li><strong><?php echo $question ?></strong> <?php echo $answer ?></li>
                                    <?php endforeach;?>
                                </ul>
                       </div><!-- End of Tab 4-->
                       
                       
                       <div id="tabs-5">
                                <h4>Itinerary</h4>
                               <ul>
                               		
                                    <li>Sat: Miami departure, 04:00 PM</li>
                                    <li>Sun: Fun Day at Sea</li>		
                                    <li>Mon: Ocho Rios, Jamaica, 10:00 AM - 05:00 PM</li>
                                    <li>Tue: Grand Cayman, Cayman Islands,	09:00 AM - 04:30 PM</li>
                                    <li>Wed: Fun Day At Sea	</li>	
                                    <li>Thu: Miami return,	08:00 AM</li>		
								</ul>
                       </div><!-- End of Tab 4-->
                      
                        
                        
                    </div>
                  
    </div>
                  
                 <div class="col2">
                  
                  
    
                  <?php if($photo_gallery == true) :?>
                  <div style="margin-bottom:5px;">
                    <a class="box-fade" href="includes/ufw.slide.inc.php?iframe=true&width=90%&height=550" rel="prettyPhoto[iframes]">
                    <img src="images/photo-gallery-btn.gif" width="199" height="49" ></a>
                  </div>
                  <?php endif;?>
     
    
                  <div class="reserve-form">
                        <img style="margin-top:-13px;" src="images/reserve-spot.png" alt="reserve a spot today" />

                        <?php if($soldoutevent == true) :?>
								<section id="soldout-msg">
								  <h2>Sold Out</h2>
								  <p>Check back often for updates on next years event packages. You may also <a title="YOLLO Newsletter" href="http://eepurl.com/bgY6P" target="_blank"><strong>Sign Up to our Newsletter</strong></a> for the latest on all-inclusive packages, discounts, and vacation giveaways.</p>
								</section>
					    <?php elseif($tbaevent == true) :?><h2>TBA</h2><?php endif;?>
                        <?php if($soldoutevent == false) :?>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="26Z3HR7M6W556">
                                
                                <input type="hidden" name="on0" value="Package Selection">Package Selection
                                <select name="os0" id="paypal_select">
                                    <optgroup label="Package Reservation Fee">
                                        <option value="Outside Cabin Registration">Register: Outside Cabin $19.99</option>
                            			<option value="Inside Cabin Registration">Register: Inside Cabin $19.99</option>
                            			<option value="General Registration">General Registration $19.99 USD</option>
                         				
                                    </optgroup>
                                    
                                    <optgroup label="First Payment">
                                        <option value="Reunion 1st Payment">First Payment: $125</option>
                                    </optgroup>
    
                                    <optgroup label="Partial Payments">
                                        <option value="Partial Pay 100">Partial Pay: $100</option>
                            			<option value="Partial Pay 150">Partial Pay: $150</option>
                            			<option value="Partial Pay 200">Partial Pay: $200</option>
                                    </optgroup>
    
                                </select> 
                                
                                <input type="hidden" name="on1" value="Package Type">Package Type</td></tr>
                                
                                        <select name="os1">
                                            <option value="Diamond">Diamond </option>
                         					<option value="Party Pass Only">Party Pass Only </option>
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
          
          
          
      </div>
      
      
      
      
	  <section id="disclosure" >
     
           <div class="disclosure">
           
           		<?php include 'includes/package-info-generic.inc.php'; ?><br/>
           
                <strong>Disclaimer</strong> | The term Urban Reunion, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources. 
          </div>
      </section>	
      
      
      
      </div><!--end of right-->
      
      <aside id="social">
      <?php include 'includes/twitter.inc.php'; ?>
      </aside>
      

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
			$("li.urc").addClass("active");
			
		
		

	});
</script>


<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>