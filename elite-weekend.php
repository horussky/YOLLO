<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"				=>"ELITE Weekend 2014",
			"location"			=>"Washington, D.C.",
			"date"				=>"August 30 - September 1"
	);
	
	$soldoutevent = 1;
	$geolocation = array(
			"hotel1"=> array(
				"title" 		=>"Embassy Suites Convention Center",
				"address"		=>"900 10th Street NW",
				"location"		=>"Washington, DC 20001",
				"geolocation"	=>"38.901943,-77.026364",
				"soldout"		=>"0"
				
			)
	);
	
	
	
	
	$package_items = array(
		"diamond_items" => array(
			"Hotel Accommodations",
			"Breakfast Daily",
            "Complimentary night",
			"Drinks Daily",
			"Weekend Event Passes",
			"Elite Meet & Greet Welcoming Event",
			"Informational Sessions",
			"Comedy Show",
			"Fashion Show",
			"All White Party Boat Cruise",
			"30 Minute Personal Massage",
			"YOLLO Gift Bag"
		),
		
		"emerald_items" => array(
			"Hotel Accommodations",
                        "Complimentary night",
			"Breakfast Daily",
			"Drinks Daily",
			"Elite Meet & Greet Welcoming Event",
			"Informational Sessions",
			"Party Boat Cruise",
			"YOLLO Gift Bag"
		)
	);
	
	
	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$550",
				"3 People"			=>"$605",
				"2 People"			=>"$725"
				//"1 Person"			=>"$715"
			),
			
			"emerald"=> array(
				"4 People" 			=>"$405",
				"3 People"			=>"$455",
				"2 People"			=>"$585"
				//"1 Person"			=>"$325"
			),
			
			"hotel_only" 			=> "$525 (Weekend)",
			"party_pass_only" 		=> "$200",
			"party_bus"				=> "$150"
	);
	
	
	include 'includes/functions.inc.php';
	
?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>
<title><?php echo $event["title"]; ?> | <?php echo $event["location"]; ?> |<?php phoneNumber(); ?> </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="Join us in the nations capital as Yollo Group services present Elite Weekend D.C. Edition. Make sure you register today for Presidential SWAG! Labor Day" />
<meta name="Keywords" content="ELITE Weekend 2013, ELITE Weekend 2014, ELITE Weekend 2015, ELITE Weekend, Presidential Swag, Washington DC, Labor Day, YOLLO Group Services, student travel, cheap student travel, Labor Day Travel packages, travel services, domestic travel, DC Edition, international travel" />
<meta name="robots" content="ALL" />
<meta name="author" content="Yollo Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<!--[if lt IE 9]>
	 <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <script>window.html5 || document.write('<script src="js/html5shiv.js"><\/script>')</script>
<![endif]-->
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	h4 .soldout{font:bold 11px Arial, Helvetica, sans-serif; color:#900; font-style:normal; text-transform:uppercase;}
	
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
           
           
            
           <div class="topcontent">
                    <div class="elitevideo">
                    <object class="elite">
                    <param name="movie" value="https://www.youtube.com/v/3WzkGkbZXK4?version=3&feature=player_embedded&autohide=1&autoplay=1">
                    <param name="allowFullScreen" value="true">
                    <param name="allowScriptAccess" value="always">
                    <embed src="https://www.youtube.com/v/3WzkGkbZXK4?version=3&feature=player_embedded&autohide=1&autoplay=1&rel=0" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" height="370px" width="626px">
                    </object>
                    </div>
              
                    
                    <img src="images/elite-video-header.jpg" alt="Elite Weekend 2012 with Yollo Group Services Inc." />
            </div> 
          
          <div class="content">
    
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
                              <h4>A Laborless Labor Day Weekend In Washington DC. It's ELITE Weekend!</h4>
                              <p>YOLLO Group Services, Inc. is delivering you all the ELITE events this labor weekend. In 2012 this event sold  OUT and 2013 will certainly do the same. In 2012 we saw over 350 people that laughed, partied, toured the nation's capital, and created life long memories. Massages, mature &amp; sexy parties, a comedy show, a party boat cruise, are simply a number of of the activities occurring at this event. Hosted and visited by Celebrity guests all weekend, you're sure to feel quite ELITE this Labor Day.</p>
                              
                              <p>This will be the ultimate getaway for those trying to find the best party surroundings found solely in our nation's capital. The party starts once you arrive with Ciroc and Nuvo being served all weekend long as they're the official liquor sponsors for ELITE Weekend! Did we mention CELEBRITY guest are in attendance? </p>
                              
                             
                            
    
                        </div> <!-- end of tab 1 -->
                        
                        <div id="tabs-2">
                        
                             <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                 <?php if($geolocation["hotel1"]["soldout"] == 1) :?><img class="soldoutbadge" src="images/sold-out-image-badge.png"><?php endif;?>
                                 <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=hybrid&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
                                <p style="padding-bottom:10px;" class="map-icon">
                                <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                        
                        
                        
                        
                        
                        <img style="margin-bottom:5px;" src="images/elite-bedroom.jpg" width="330"><br />
                        <img style="margin-bottom:5px;" src="images/elite-bedroom2.jpg" width="330" > <br />
                        <img style="margin-bottom:5px;" src="images/elite-pool.jpg" width="330"><br />
                           
                    
                         
                        </div><!-- end of tab 2 -->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                            
                                <h4>Diamond Package </h4>
                                <ul>
                                    <?php foreach($package_items['diamond_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                    
                                </ul>
                                   
                                <div class="priceblock">
                                    <?php foreach($people['diamond'] as $key=>$value): ?>
                                        <?php echo $key; ?> <img src="../images/right-arrow.gif" width="16" height="16">
                                        <strong><?php echo $value ?></strong> per person<br />
                                    <?php endforeach; ?>
                                    <em class="teeny">*Prices listed are per person and based on (1) room occupancy</em>
                                    <em class="teeny">Events can be substituted or change without noitice</em>
                                </div>
                                
                                <h4>Emerald Package</h4>
                                <ul>
                                    <?php foreach($package_items['emerald_items'] as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                                   
                                <div class="priceblock">
                                    <?php foreach($people['emerald'] as $key=>$value): ?>
                                        <?php echo $key; ?> <img src="../images/right-arrow.gif" width="16" height="16">
                                        <strong><?php echo $value ?></strong> per person<br />
                                    <?php endforeach; ?>
                                    <em class="teeny">*Prices listed are per person and based on (1) room occupancy</em> 
                                    <em class="teeny">Events can be substituted or change without noitice</em>
                                </div>
                             
                    
                            </div><!-- end of Prices-->
                            
                            
                            
                            
                            
                       
                        <div id="tabs-4">
                            <?php /* FAQs */ ?>
                            
                            <ul>
                                <li>
                                <strong>When are the payments due?</strong> 
                                After registration the 1st payment is due on or before due April 16, 2013. The second and final payment is due June 03, 2013.
                                </li>
                                
                                <li><strong>Can I make payments before my due date? </strong>
                                Absolutely! Our payment plans are designed to help you pay over time. If you want to pay more frequent than the established dates that's great.
                                </li>
                                
                                <li><strong>When does the EARLY BIRD Special end?</strong> 
                                The EARLY BIRD special ends on 4/16/2013. It only takes $19.99 to lock in your spot today!
                                </li>
    
                                <li><strong>What's included in the EARLY BIRD Special?</strong> 
                                The EARLY BIRD entitles Diamond Package clients $75 off per person and Emerald Package clients $50 off per person. It also includes a complimentary night stay. So pay for two nights and get a third night n YOLLO! Early bird special ends on 4/16/2013. It only takes $19.99 to lock in your spot today!
                                </li>
                                
                                <li><strong>Must the entire group pay the $19.99 Reservation fee?</strong> 
                                Yes. All prices are per person. The Reservation fee secures your spot on the package, and is separate from the package price.
                                </li>
                                
                                 <li><strong>Does the price take care of hotel reservation for all 4 members in either package or only one person?</strong> 
                                 All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per person.          
    
                                </li>
                            </ul>  
                            
    
                            
                        </div><!-- end of tab 4 -->
                      
                        
                        <div id="tabs-5">
                        <?php /* Events */ ?>
                                 
                        
                        </div>
                        
                        
                        
                        
                    </div>
                  
    
    </div>
                  
                 <div class="col2">
                  
                  
                  
     
                    
                  
                  <div class="reserve-form">
                        <img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br /> 
                        
                        <?php if($soldoutevent == 1) :?><h2>Packages TBA</h2><?php endif;?>
                        <?php if($soldoutevent == 0) :?>
                         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="KXEKNYCVDJXD8">
                                <input type="hidden" name="on0" value="Package Selection">Package Selection</td></tr>
                                
                                <select name="os0" id="paypal_select">
                                    <optgroup label="Package Reservation Fee">
                                        <option value="Registration Fee">Registration -- $19.99</option>
                                        <option value="1st Payment">1st Payment -- $125</option>
                                        <option value="All Access Party Pass">All Access Party Pass -- $275</option>
                                        <option value="3 Day Party Pass">Three Day Party Pass -- $225</option>
                                    </optgroup>
                                </select>
                                
                                <input type="hidden" name="on1" value="Package Type">Package Type
                                
                                        <select name="os1">
                                            <option value="">Choose a Package </option>
                                            <option value="Diamond">Diamond </option>
                                            <option value="Emerald">Emerald </option>
                                            <option value="Party Pass Only">Party Pass Only </option>
                                        </select>   
                                
                                
                                <input type="hidden" name="on2" value="Group Leader Name"> 
                                <label for="os2">* Group Leader Name</label>
                                <input id="os2" class="group" type="text" name="os1" maxlength="60" >
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
				os2: "must add group leader",
				os5: "must choose a package type",
				terms: "You must agree to terms!"
			} 
  		});
		

		//Jquery Tabs
		$( "#tabs" ).tabs();
		

			
			//change li classes
			$("li.elite").addClass("active");
			

		

	});
</script>

<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>