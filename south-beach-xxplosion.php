<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"				=>"South Beach Xxplosion",
			"location"			=>"Miami, Florida",
			"date"				=>"May 23 – 26, 2014"
	);

	$geolocation = array(
			"hotel1"=> array(
				"title" 		=>"Whitelaw Hotel",
				"address"		=>"808 Collins Ave",
				"location"		=>"Miami Beach, FL 33139",
				"geolocation"	=>"25.778464,-80.132466",
				"soldout"		=>"1"
			),
			"hotel2"=> array(
				"title" 		=>"The Colony Hotel",
				"address"		=>"736 Ocean Drive",
				"location"		=>"Miami Beach, FL 33139",
				"geolocation"	=>"25.777465,-80.131581",
				"soldout"		=>"1"
			)  
	);
	$soldoutevent = true;
	
	$package_items = array(
		"Hotel Accommodations",
		"Party Pass Access (Friday and Saturday)",
		"Boat Cruise ",
		"YOLLO Gift Bag"
	);
 

	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$615",
				"3 People"			=>"$740",
				"2 People"			=>"$995",
				"1 Person"			=>"$1750"
			),
			
			/*"emerald"=> array(
				"4 People" 			=>"$165",
				"3 People"			=>"$195",
				"2 People"			=>"$225",
				"1 Person"			=>"$325"
			),*/
			
			"hotel_only" 			=> "$1,550",
			"party_pass_only" 		=> "$225",
			"party_bus"				=> "$150"
	);
	
	$faqs = array(
		 "When is the payment(s) due?" => "The final payment is due March 05, 2014."
			/*"Where will we be staying that weekend?" => "The Hilton Daytona Beach and the Plaza Resort and Spa has been selected as the host hotels for this wonderful event!",
			
					
			"How do I pay?" => "Complete the form and the next steps to the right of the page. You will receive a welcome letter within 7 business days with all your reservation information.",
			
			"Do I need any extra money?" => "Yes, please bring money for shopping at the malls and for your souvenirs. Also, you will need money for beach activities i.e. parasail, jet ski, etc."	*/
	);
	
	include 'includes/functions.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $event["title"]?> | <?php phoneNumber(); ?>  </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="Yollo Group Services is taking you to Miami, Florida for South Beach Xxplosion. Buy a package today." />
<meta name="Keywords" content="xxplosion, south beach, beach party passes, beachfest in miami, miami, florida" />
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
.priceblock{font:13px/1.5em Helvetica, Arial, sans-serif; margin:5px 0 10px 0;}
h4 .soldout{font:bold 11px Arial, Helvetica, sans-serif; color:#900; font-style:normal; text-transform:uppercase;}

</style>

</head>
<body>
<div id="wrap">
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
            
            
            
            <div class="topcontent">
                    <img src="images/slides/splash-sbx.png" alt="South Beach Xxplosion" />
            </div> 
          
            <div class="content">
                   <div class="col1">
                       <h2><?php echo $event["title"]?> </h2>
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
                            <h4>South Beach Xxplosion 2014</h4>
    
                            <p>If you haven't heard already South Beach Xxplosion is the hottest event to ever rock Miami for Memorial Day Weekend. We all know Miami is the night life capital of the world. For years it has been known for the buzzy night clubs, jamming party boats, haute dining spots, and art deco. Your time in Miami will have you wanting more. South Beach Xxplosion motto is Start Early and End Late! There's always somewhere to spend your night.</p> 
                            
                            <p>Whether you’re hitting the beach, shopping, at a big time night club, or a dazzling local eatery you are guaranteed an amazing time. Every corner of this night owls paradise is thumping and thriving at all hours. YOLLO provides you with the greatest experience without having to break the bank. Don't miss out on one of the biggest event to ever hit Miami. Come see why people from all over visit winter, spring, summer, and fall.</p>
     
                                
                        </div><!-- End of Tab 1-->
                        
                        
                        
                        <div id="tabs-2">
                                
                                
            
                            
                            <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                 <?php if($geolocation["hotel1"]["soldout"] == 1) :?><img class="soldoutbadge" src="images/sold-out-image-badge.png"><?php endif;?>
                                 <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=hybrid&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
                                <p style="padding-bottom:10px;" class="map-icon">
                                <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                            
    
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                
                               <h4><?php echo $geolocation["hotel2"]["title"]; ?></h4>
                                 <?php if($geolocation["hotel2"]["soldout"] == 1) :?><img class="soldoutbadge" src="images/sold-out-image-badge.png"><?php endif;?>
                                 <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel2"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=hybrid&markers=color:red%7C<?php echo $geolocation["hotel2"]["geolocation"]; ?>&sensor=false" />
                                <p style="padding-bottom:10px;" class="map-icon">
                                <?php echo $geolocation["hotel2"]["address"]; ?><br>
                                <?php echo $geolocation["hotel2"]["location"]; ?><br /></p>
                                    
                        </div><!-- End of Tab 2-->
                        
                        
                       <div id="tabs-3">
                                <h4>Diamond Package</h4>
                                    <ul>
                                    <?php foreach($package_items as $items):?>
                                        <li><?php echo $items?></li>
                                    <?php endforeach;?>
                                    </ul>
                                <div class="priceblock">
                                    <?php foreach($people['diamond'] as $key=>$value): ?>
                                        <?php echo $key; ?> <img src="../images/right-arrow.gif" width="16" height="16">
                                        <strong><?php echo $value ?></strong> per person<br />
                                    <?php endforeach; ?>
                                </div>
                                
                                <div class="priceblock">
                                    Hotel Only <img src="../images/right-arrow.gif" width="16" height="16"><strong>
                                    <?php echo $people['hotel_only']; ?></strong><br />
                                   <?php /*?> <em class="teeny">Check-In: March 28, 2014 - Check Out: March 30, 2014</em> <br /><?php */?>
                                    
                                    
                                    <?php /*?> Party Pass <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong><?php echo $people['party_pass_only']; ?></strong><br />
                                    
                                   Party Bus <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong><?php echo $people['party_bus']; ?></strong><?php */?>
                                </div>
                                
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                <p style="font-size:80%; color:#666">Final Payments due March 5, 2014</p>		         
                   
                       </div> <!-- End of Tab 3-->
    
                       <div id="tabs-4">
                                <ul>
                                    <?php foreach($faqs as $question => $answer) :?>
                                        <li><strong><?php echo $question ?></strong> <?php echo $answer ?></li>
                                    <?php endforeach;?>
                                </ul>
                       </div><!-- End of Tab 4-->
                        
                        
                    </div><!-- End of Tabs-->
                  
    
    
                  </div><!-- End of col1-->
                  
                  <div class="col2">
                       
                        
                        <div class="box-fade" style="margin-bottom:10px;">
                            <a title="View last years hightlights" href="includes/collegebeachfest.slide.inc.php" onClick="$(this).modal({width:800, height:470}).open(); return false;" >
                            <img src="images/photo-gallery-btn.gif" width="100%" alt="Photo Gallery"></a>
                        </div>
                        
                        
                        <div class="reserve-form">
                            <img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br />
    
                            <?php if($soldoutevent == true) :?><h2>Sold Out</h2><?php endif;?>
                            <?php if($soldoutevent == false) :?>
    
                            
                            <form  action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="55F8PWMRMV4X4">
                                    
                                    <input type="hidden" name="on0" value="Package Selection">Package Selection
                                    <select name="os0" id="paypal_select" >
                                        <optgroup label="Package Reservation Fee"> 
                                                    <option value="Register ~ Whitelaw Hotel">Register: Whitelaw Hotel $19.99</option>
                                                    <option value="Register ~ Colony Hotel">Register: Colony Hotel $19.99</option>
                                        </optgroup>
                                        
                                        <optgroup label="First Payment">
                                                    <option value="1st Payment">First Payment $125</option>
                                        </optgroup>
                                        
                                        <optgroup label="Partial Payments">                                                
                                                    <option value="SBX Weekend Partial Payment">Partial Pay $200</option>
                                                    <option value="SBX Weekend Partial Payment">Partial Pay $150</option>
                                                    <option value="SBX Weekend Partial Payment">Partial Pay $100</option>
                                                    <option value="SBX Weekend Partial Payment">Partial Pay $50</option>
                                                    <option value="SBX Weekend Partial Payment">Partial Pay $75</option>              
                                        </optgroup>
                                        
                                        <optgroup label="Hotel Only">
                                                    <option value="Hotel Only ~ Whitelaw Hotel">Hotel Only: Whitelaw Hotel $1,550</option>
                                                    <option value="Hotel Only ~ Colony Hotel">Hotel Only: Colony Hotel $1,550</option>
                                        </optgroup>
     
                                    </select> 
                                    
                                    <input type="hidden" name="on1" value="Package Type">Package Type
                                    <select id="firstchoice" name="os1">
                                                    <option value="Diamond">Diamond </option>
                                                    <option value="Hotel Only">Hotel Only </option>
                                                    <option value="Party Pass Only">Party Pass Only </option>
                                                    <option value="1st Payment">First Payment </option>
                                                    <option value="Partial Payment">Partial Payment </option>
                                            
                                    </select> 
                                     
                                                
                                    <input type="hidden" name="on2" value="Group Leader Name"> 
                                    <label for="os2">* Group Leader Name</label>
                                    
                                    <input id="os2" class="group" type="text" name="os2" maxlength="60" >
                                    <input  type="hidden" name="on3" value="Group Size" > 
                                    
                                    <label for="os3">* Number of people in group?</label>
                                    <input name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" >
                                    
                                    <input  type="hidden" name="on4" value="Referral" > 
                                    <label for="os4">Referral Code</label>
                                    <input name="os4" type="text" class="group" id="os4" size="10" maxlength="10" >
                                   
                                            
                                              <input style="width:auto; margin-right:5px; float:left" name="terms" type="checkbox" value="agree" id="terms">
                                              <label for="terms"><p style="margin-left:10px;">* I agree to the 
                                              <a href="includes/termsofagreement.inc.php" onClick="$(this).modal({width:600,height:700}).open(); return false;" >terms</a>.</p>
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

<?php include 'includes/scripts.inc.php'; ?>

<script type="text/javascript">
$('.btn').click(function() {
	$('a').modal().close();
});

	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			animationSpeed: 'fast', /* fast/slow/normal */
			padding: 40, /* padding for each side of the picture */
			opacity: 0.35, /* Value betwee 0 and 1 */
			showTitle: false, /* true/false */
			allowresize: true, /* true/false */
			counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
			theme: 'dark_square' /* light_rounded / dark_rounded / light_square / dark_square */
		});
		
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
		
		//jquery acccordion
		$( "#tabs #accordion" ).accordion({
						autoHeight: false,
						collapsible: true
			
			});
		
		//Navigation
			$(".nav li").mouseover(function(){
				$(this).stop().animate({width:'250px'},{queue:false, duration:300, easing: 'easeOutSine'})
			});
		
			//When mouse is removed
			$(".nav li").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:300, easing: 'easeInSine'})
			});
			
			//change li classes
			$(".nav li.xxplosion").addClass("active");
			
			$(".nav .xxplosion").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
			
			$(".nav .xxplosion").mouseover(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
		
			

	});
</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>