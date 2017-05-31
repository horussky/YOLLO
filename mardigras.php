<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"				=>"Mardi Gras 2014",
			"location"			=>"Mobile, Alabama",
			"date"				=>"Mar 1-4, 2014"
	);
	
	$geolocation = array(
			"hotel1"=> array(
				"title" 			=>"Holiday Inn",
				"address"			=>"5465 Hwy 90 W",
				"location"			=>"Mobile, AL 36619",
				"geolocation"		=>"30.690551,-88.039781",
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
<meta name="Description" content="If you are looking to be apart of this annual event, we can provide you with all inclusive arrangements and tickets for Mardi Gras." />
<meta name="Keywords" content="Mardi Gras 2014, Mobile, Mardi Gras, Party Passes" />
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


</style>
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
        
        
       
      
      <div class="content">
      		   <hr />
			   <div class="topcontent"> <img src="images/mardigras-img.jpg" alt="Mardi Gras" /></div>
               
      		   <div class="col1">
                    <h2><?php echo $event["title"]; ?></h2>
                    <h3><?php echo $event["date"]; ?></h3>
                    <h4><?php echo $event["location"]; ?></h4>
                
                 <div id="tabs">
                    <ul>
                      <?php tabNav(); ?>
                    </ul>
                    <div id="tabs-1">
                    	 <h4>Get ready for <?php echo $event["title"]?> </h4>
                         
                         <p>YOLLO is taking you to the "ORIGINAL" Mardi Gras in Mobile, AL.  That means it's premiere party season! It's time to enjoy life, party, and have a good time! For weeks, the streets of downtown Mobile are filled with the sights and sounds of live marching bands, brilliant-colored floats and of course the crowds of parade goers.</p>
                 		
                        <p>While New Orleans has the reputation for the largest and wildest Mardi Gras, Mobile prides itself on
                         having a "family friendly" Mardi Gras celebration. Mardi Gras is nothing short of irresistible fun, 
                         vibrancy, sarcasm, and sassiness!</p>
                		
                        <p>If you understand how this city hums during the day and sings at night, you will definitely be able 
                        to envision its celebration of Mardi Gras. Enjoy catching beads, doubloons, cups, stuffed animals and
                         everything else that is thrown off of the floats. </p>
						
                        <p> If parades are not your thing and partying is, then head down and visit the Battleship Alabama or 
                        view the beautiful beaches and coastlines Mobile has to offer. Enjoy the Mardi Gras beverages of 
                        choice, daiquiri's, hurricanes, and hand grenades. Drinks so big that just one will do you in!</p>

                    </div>
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
                                
                                 <img style="margin-bottom:5px;" src="https://lh4.googleusercontent.com/-kRvolYF2a00/T37hYSNMvWI/AAAAAAAERgo/RkjP8-ETRr0/s640/HOLIDAY+INN+BELLINGRATH+GARDEN" width="330"><br />
                    			
                                 </div>
                            
                            
                            
                           
                           
                    </div>
                    
                    <div id="tabs-3">
                        <?php /* Prices */ ?>
                        	
                    		<h4>Diamond Package  <?php /*?><em class="soldout">*Sold Out</em><?php */?></h4>
                            
                            <ul>
                                <li>Hotel Accommodations </li>
                                <li>Breakfast Daily</li>
                                <li>Complimentary Drinks Daily</li>
                                <li>YOLLO Gift bag</li>
                            </ul>
                            
                            <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                            
                            <h4>Emerald Package </h4>
                            
                            <ul>
                                <li>Hotel Accommodations </li>
                                <li>Breakfast Daily</li>
                                <li>Complimentary Drinks Daily</li>
                                <li>YOLLO Gift bag</li>
                            </ul>
                            
                            <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                            
                            <h4>Hotel Only Option</h4>
                            
                            <div class="priceblock">
                              <img src="../images/right-arrow.gif" width="16" height="16"> 
                                <strong>$750</strong>
                            </div>

                
                        </div>
                        
                        
                        
                        
                   
                    <div id="tabs-4">
                        <?php /* FAQs */ ?>
              
                        <ul>
                        	<li><strong>When are the payments due?</strong> After registration the 1st payment is due on or before due October 3, 2013. The second and final payment is due December 3, 2013.</li>
                             
                             
                            <li><strong>Can I make payments before my due date?</strong>  Absolutely! Our payment plans are designed to help you pay over time. If you want to pay more frequent than the established dates that's great.</li>
                            
                            <li><strong>How do I lock in the prices and amenities advertised today?</strong> It only takes $19.99 to lock in your spot today! It's that simple!</li>

                            
                        	<li><strong>Must the entire group pay the $19.99 Reservation fee?</strong>
                            Yes. All prices are per person. The reservation fee secures your spot on the package, and is independent from the package price.</li>
                            
                            <li><strong> Does the price take care of hotel reservation for all 4 members in either package or only one person?</strong> All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per person.  That means the group will share one room, but receive individual party passes and other amenities included in the package. 
                           
                        </ul>
                        
                        
                        
                     </div>
                </div>
              
      
 

</div>
              
             <div class="col2">
              
              <div style="margin-bottom:5px;">
                  <?php include 'includes/newsletter.inc.php' ?>
           	  </div>
              
              <div style="margin-bottom:5px;">
              	<a href="includes/mardigras.slide.inc.php?iframe=true&width=90%&height=550" rel="prettyPhoto[iframes]">
             	<img src="images/photo-gallery-btn.gif" width="199" height="49" ></a>
              </div>
              
             
              
              <div class="reserve-form">
              		<img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br />
                    
                   
					<?php if($soldoutevent == 1) :?><h2>Sold Out</h2><?php endif;?>
                    <?php if($soldoutevent == 0) :?>
              		<form class="pay" action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                    		<input type="hidden" name="cmd" value="_s-xclick">
                    		<input type="hidden" name="hosted_button_id" value="JHVD4EHWZSJLL">
                            <input type="hidden" name="on0" value="Package Selection">
                            
                           <label>Package Selection</label>
                            <select name="os0" id="paypal_select" >
                            	<optgroup label="Package Reservation Fee">
                                  	<option value="Registration">Registration $19.99</option>
                                </optgroup>
                                <optgroup label="Hotel Only">
									<option value="Hotel Only">Hotel Only $750</option>
                                </optgroup>
                            </select> 
                            
                            <input type="hidden" name="on1" value="Package Type">
                            <label>Package Type</label>
                            <select  name="os1">
                            		<option value="Diamond">Diamond </option>
									<option value="Emerald">Emerald </option>
                            </select> 
							
                            <input type="hidden" name="on2" value="Group Leader Name"> 
                            <label for="os2">* Group Leader Name</label>
                            <input id="os2" class="group" type="text" name="os2" maxlength="60" >
                            
                            <input  type="hidden" name="on3" value="Group Size" > 
                            <label for="os3">* Number of people in group?</label>
                            <input data-required="true" name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" >
                            
                            <input  type="hidden" name="on4" value="Referral" > 
                            <label for="os4">Referral Code</label>
                            <input name="os4" type="text" class="group" id="os4" size="10" maxlength="10" >
                          
                            <input class="termsbox" name="terms" type="checkbox" value="agree" id="terms">
                            <label for="terms">
                            	<p>* I agree to the       
                               		<a href="#inline-1" rel="prettyPhoto" >Terms</a>
                                	<div id="inline-1" class="nodisp">
                                    <?php include 'includes/termsofagreement.inc.php' ?>
                                	</div></p>
                            </label>
                                 
                            <input type="hidden" name="currency_code" value="USD">
                            <input class="buy-package" type="image" src="images/buy-package-btn.gif" border="0" name="submit">
                            
                    </form>
                    <?php endif;?>
              </div>
              
              
   	  </div><!--end of col2-->
      
    
      
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
		
		
		
		//Navigation
			$(".nav li").mouseover(function(){
				$(this).stop().animate({width:'185px'},{queue:false, duration:300, easing: 'easeOutSine'})
			});
		
			//When mouse is removed
			$(".nav li").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:300, easing: 'easeInSine'})
			});
			
			//change li classes
			$(".nav li.mardigras").addClass("active");
			
			$(".nav .mardigras").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
			
			$(".nav .mardigras").mouseover(function(){
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