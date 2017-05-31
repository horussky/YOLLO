<?php

$event = array(
			"title"				=>"Funk Festival",
			"location"			=>"Atlanta Georgia",
			"date"				=>"May 18-20, 2012"
);

$geolocation = array(
			"hotel1"=> array(
				"title" 			=>"Embassy Suites Atlanta Airport",
				"address"			=>"4700 Southport Road",
				"location"			=>" Atlanta, GA 30337",
				"geolocation"		=>"33.627888,-84.463125",
				"hotel1_soldout"	=>1
			)

);


$soldoutevent = 0; 

include 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
	 <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <script>window.html5 || document.write('<script src="js/html5shiv.js"><\/script>')</script>
<![endif]-->
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	#galleria{width:800px; height:500px;}
	h4 .soldout{font:bold 11px Arial, Helvetica, sans-serif; color:#900; font-style:normal; text-transform:uppercase;}
</style>

<meta name="Description" content="Yollo Group Services is a travel company specializing in offering affordable travel to amazing events for everyone." />
<meta name="Keywords" content=" Funk Fest 2012, Old School Music, Atlanta, Georgia, Yollo Group Services, student travel,cheap student travel, Travel packages, travel services, domestic travel, international travel" />

</head>
<body>

<div id="container">
	<div id="left">
        <!--Nav-->
        <?php include 'includes/nav.inc.php'; ?>
        <!--End of Nav-->
        
        <?php include 'includes/twitter.inc.php'; ?>
    </div>
    
    <div id="right">
    	<?php include 'includes/logo.inc.php'; ?>
        <hr />
        
       <div class="topcontent">
            	<img src="images/funk-fest-img.png" alt="Funk Fest 2012 with Yollo Group Services Inc." />
        </div> 
      
      <div class="content">

      		   <div class="col1">
                    <h2><?php echo $event["title"]; ?></h2>
                    <h3><?php echo $event["date"]; ?></h3>
                    <h4><?php echo $event["location"]; ?></h4>
                    
                 <div id="tabs">
                    <ul>
                        <?php tabNav(); ?>
                        
                    </ul>
                    
                    <div id="tabs-1">
                    	 <h4>We Got The Funk...YOLLO Got that Funk!</h4>
                         <p>It's about to go down in Atlanta Georgia at the Wolf Creek Amphitheatre. Funk Fest 2012 will be in full effect with the hottest Old School Hip Hop and R&B, Comedy, Jazz, and more.</p>
                         <p>Funk Fest's inaugural event began in 1994 in Mobile, Alabama. Over the last decade, this event has grown to encompass five cities with over 10,000 attendees per city. Funk Fest is designed to excite enthusiasts of Old School Hip Hop and R&B, Funk, Blues, Jazz, and Comedy.</p>
                         <p>Frankie Beverly and Maze, New Edition, Charlie Wilson, Betty Wright, and Rickey Smiley are just a few celebrities to grace the stages of Funk Fest. Don't miss out in this great event! Bring your lawn chairs or blankets and a GOOD ATTITUDE, because this is a Rain or Shine Event. Reserve your package with YOLLO today!</p>

                    </div> <!-- end of tab 1 -->
                    
                    <div id="tabs-2">
                            
                     
                     
                     
                     
                      <div class="hotelimg">
                            <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
								<?php if($geolocation["hotel1"]["hotel1_soldout"] == 0) :?>
                                    <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                <?php endif;?>
                                
                                <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=terrain&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
    
                                <p style="padding-bottom:10px;" class="map-icon">
                                <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                                
                                 <img style="margin-bottom:5px;" src="https://lh4.googleusercontent.com/-9KY_7X76lY4/T_O3To-aZqI/AAAAAABH-ds/z3vILqdfddM/s712/Embassy+Suites+Hotel+Atlanta+Airport" width="330"><br />
                    			
                     </div>
                     
                     
             
                           
                         
                            
                    </div><!-- end of tab 2 -->
                    
                    <div id="tabs-3">
                        <?php /* Prices */ ?>
                        
                    		<h4>Diamond Package <?php /*?><em class="soldout">*Package Sold Out</em><?php */?></h4>
                            <ul> 
                                <li>Hotel Accomodations (Friday- Sunday)</li>
                                <li>R/T Transportation</li>
                                <li>Concert Tickets</li>
                                <li>Friday Night Party Pass</li>
                                <li>YOLLO Gift bag</li>
                            </ul>
                       
                            
                            <div class="priceblock">
                            	
                                4 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                <strong>$315</strong> per person<br />
                                
                                3 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                <strong>$355</strong> per person<br />
                                
                                2 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                            	<strong>$395</strong> per person
                            </div>
                            
                            <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                            
                            <h4>Emerald Package</h4>
                            <ul>
                                <li>Hotel Accomodations (Friday- Sunday)</li>
                                <li>Concert Tickets</li>
                                <li>Friday Night Party Pass</li>
                                <li>YOLLO Gift bag</li>
                            </ul>
                            <div class="priceblock">
                            
                            4 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                            <strong>$235</strong> per person<br />
                            
                            3 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                            <strong>$275</strong> per person<br />
                            
                            2 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                            <strong>$325</strong> per person<br />
                            
                            
                            </div>
                            
                  
                        </div>  
                        <!--end of tab 3 -->
                        

                    <div id="tabs-4">
                        <?php /* FAQs */ ?>
                        
                        <ul>
                        	<li>
                            <strong>When are the payments due?</strong> The first payment of $125 is due on or before 3/01/2012. The final payment (remaining balanace) is due on or before 04/16/2012.
                            </li>
                        	<li><strong>Can I make payments before my due date?</strong>
                           Absolutely! Our payment plans are designed to help you pay over time. If you want to pay more frequent than the establish dates that's great.
                            </li>
                            
                            <li><strong>Must the entire group pay the $19.99 Reservation fee?</strong>
                             Yes. All prices are per person. The Reservation fee secures your spot on the package, and is separate from the package price.
                            </li>
                            
                            <li><strong>What cities will the bus depart from?</strong>
                           Montgomery and Birmingham! Don't see you city or state listed? Email us and let's see what we can work out!
                            </li>
                            
                             <li><strong>  Do I need to bring my lawn chair? </strong>
                           Yes, this is an outdoor event. You can bring your blanket if you prefer to lay in grass and enjoy the show.
                            </li>

                        </ul>
                        
                        
                        
                    </div><!-- end of tab 4 -->
                  
                    
                    
                </div>
              

</div>
              
             <div class="col2">
              
              <div style="margin-bottom:5px;">
                  <?php include 'includes/newsletter.inc.php' ?>
           	  </div>
              
              <?php /*?><div style="margin-bottom:10px;">
              <a title="View last years hightlights" href="includes/nba.slide.inc.php" onClick="$(this).modal({width:800, height:470}).open(); return false;" >
               <img src="images/photo-gallery-btn.gif" width="199" height="49" alt="Photo Gallery"></a>
              </div><?php */?>
              
 
                
              
              <div class="reserve-form">
              		<img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br />
					
					<?php if($soldoutevent == 1) :?><h2>Sold Out</h2><?php endif;?>
                    <?php if($soldoutevent == 0) :?>
              		 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="YGHLGN7C948KE">
                            
                            <input type="hidden" name="on0" value="Package Selection">Package Selection
                            <select name="os0" id="paypal_select">
                            	<optgroup label="Package Reservation Fee">
                                    <option value="Registration Fee">Registration Fee $19.99</option>

                                <optgroup label="Diamond Full Payment">
                                   	<option value="Diamond ~ Group of 4">Diamond Group of 4 -- $315.00</option>
                                    <option value="Diamond ~ Group of 3">Diamond Group of 3 -- $355.00</option>
                                    <option value="Diamond ~ Group of 2">Diamond Group of 2 -- $395.00</option>
                                </optgroup>
                                <optgroup label="Emerald Full Payment">
                                	<option value="Emerald ~ Group of 4">Emerald Group of 4 -- $235.00</option>
                                    <option value="Emerald ~ Group of 3">Emerald Group of 3 -- $275.00 </option>
                                    <option value="Emerald ~ Group of 2">Emerald Group of 2 -- $325.00</option>
                                </optgroup>
                            </select>
                            
                            <input type="hidden" name="on1" value="Package Type">Package Type

                            		<select name="os1">
                                    	<option value="">Choose a Package </option>
                                        <option value="Diamond">Diamond </option>
                                        <option value="Emerald">Emerald </option>
                                    </select>   
                			
                            
                            <input type="hidden" name="on2" value="Group Leader Name"> 
                            <label for="os2">* Group Leader Name</label>
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
      
      
       <div class="teeny" style="clear:both">
      			<hr />
              <strong>Disclaimer</strong> | The term FunkFest, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by FunkFest and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any FunkFest productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
              </div>
      
      
  </div><!--end of right-->
  </div>
   <div class="push"></div>
</div><!--end of container-->


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
		
		//Navigation
			$(".nav li").mouseover(function(){
				$(this).stop().animate({width:'185px'},{queue:false, duration:300, easing: 'easeOutSine'})
			});
		
			//When mouse is removed
			$(".nav li").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:300, easing: 'easeInSine'})
			});
			
			//change li classes
			$(".nav li.funkfest").addClass("active");
			
			$(".nav .funkfest").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
			
			$(".nav .funkfest").mouseover(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
		

	});
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>