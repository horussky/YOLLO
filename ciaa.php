<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"				=>"CIAA Weekend 2016",
			"location"			=>"Charlotte, NC",
			"date"				=>"February 24-26, 2017"
	);
	
	$geolocation = array(
			"hotel1"=> array(
				"title" 			=>"Embassy Suites Charlotte",
				"address"			=>"4800 South Tryon Street",
				"location"			=>"Charlotte, North Carolina 28217",
				"geolocation"		=>"35.180122,-80.89066",
				"hotel1_soldout"	=>true
			)
	);
	
	$soldoutevent = true; 
	
	include 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
<title> <?php echo $event["title"]?> | Central Intercollegiate Athletic Association | <?php phoneNumber(); ?> </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="If you are looking to be apart of this annual event, we can provide you with all inclusive arrangements and tickets for CIAA." />
<meta name="Keywords" content=", CIAA Charlotte, basketball, CIAA Tournament, CIAA, CIAA Party Passes, CIAA 2015, CIAA 2016, CIAA party passes 2014" />
<meta name="robots" content="ALL" />
<meta name="author" content="Yollo Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<!--[if lt IE 9]>
	 <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
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
                   
                   <div class="topcontent"> <img src="/images/slides/splash-ciaa.jpg" ></div>
                   
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
                             <h4>Get ready for <?php echo $event["title"]?> </h4>
                             <p>One of the nation's premier sporting events is the annual CIAA Basketball Tournament. Touted as the third most attended basketball tournament among all NCAA divisions, the tournament consistently sells out to record crowds year after year. The 2013 CIAA Tournament, in its eighth year in the "Queen City", Charlotte, NC, boasted 190,000 fans during the course of the week.</p>
    
    <p>The Central Intercollegiate Athletic Association (CIAA) was founded in 1912 as the Colored Intercollegiate Athletic Association and is the oldest African-American athletic conference in the nation.</p>
    
    <p>CIAA event boasts celebrity power and some of the most talked about parties every year. If parties and celebrities are what you are looking for CIAA is definitely the event you want to attend! Celebrities are so frequent at CIAA it's common to see them on the street taking photos with their fans! CIAA offers a non-stop party experience while Charlotte offers some of the BEST shopping and entertainment on the east coast. </p>
    
    <p>YOLLO has the packages to ensure you have a fun filled weekend without breaking the bank! Reserve your spot today before it's to late!</p>
    
                        </div>
                        <div id="tabs-2">
                                <div class="hotelimg">
                                <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                    <?php if($geolocation["hotel1"]["hotel1_soldout"] == true) :?>
                                        <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                    <?php endif;?>
                                    
                                    <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=terrain&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
        
                                    <p style="padding-bottom:10px;" class="map-icon">
                                    <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                    <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                                    
                                     <img style="margin-bottom:5px;" src="https://lh6.googleusercontent.com/-YBJ6MVtgypg/UJiz9orMW8I/AAAAAABh9H8/yK0TmDJNe3Q/s712/Embassy+Suites+Charlotte+Hotel%2C+NC" width="330"><br />
                                    
                                     </div>
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                
                               
                        </div><!-- end of tab 2-->
                        
                        <div id="tabs-3">
                            <?php /* Prices */ ?>
                                
                                <h4>Diamond Package <div class="teeny">*3 night minimum</div> <?php /*?><em class="soldout">*Sold Out</em><?php */?></h4>
                                
                                <ul>
                                    <li>Hotel Accommodations (Thurs - Sun)</li>
                                    <li>Friday Night Party Pass</li>
                                    <li>Saturday Night Party Pass</li>
                                    <li>Breakfast Daily</li>
                                    <li>Complimentary Drinks Daily  </li>
                                    <li>YOLLO Group Services Inc gift bag</li>
                                </ul>
    
                                <div class="priceblock">
                                    4 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$365</strong> per person<br />
                                    
                                    3 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$425</strong> per person<br />
                                    
                                    2 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$550</strong> per person<br />
                                    
                                    1 Person <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$1020</strong>
                                </div>
                                
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                
                                <h4>Emerald Package <div class="teeny">*3 night minimum</div></h4>
                                
                                <ul>
                                    <li>Hotel Accommodations (Thurs - Sun)</li>
                                    <li>Breakfast Daily</li>
                                    <li>Complimentary Drinks Daily  </li>
                                    <li>YOLLO Group Services Inc gift bag</li>
                                </ul>
                                <div class="priceblock">
                                    4 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$310</strong> per person<br />
                                    
                                    3 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$375</strong> per person<br />
                                    
                                    2 People <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$490</strong> per person<br />
                                    
                                    1 Person <img src="../images/right-arrow.gif" width="16" height="16"> 
                                    <strong>$895</strong> 
                                </div>
                                
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" />
                                
                                <h4>Party Pass Only Option</h4>
                                <p>Pass Inclusions:</p>			
                                <ul class="features"> 
                                    <li>Friday Night Party Pass</li>
                                    <li>Saturday Night Celebrity Party Pass</li>
                                    <li>Saturday Day Party Pass</li>
                                    <li>Party Pass Only <strong>$215</strong></li>
                                </ul>
                                
                                <a href="/partypass/ciaa.php">Buy Now > </a>
    
    
                    
                            </div>
                            
                            
                            
                            
                       
                        <div id="tabs-4">
                            <?php /* FAQs */ ?>
                  
                            <ul>
                                <li><strong>When are the payments due?</strong> After registration the first payment of $125 is due <strong>June 20, 2016</strong>. The final payment (remaining balance) is due on or before <strong>September 14, 2016</strong>.</li>
                                 
                                 
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
                    <a class="fancy box-fade" data-fancybox-type="iframe" href="includes/ciaa.slide.inc.php">
                    <img src="images/photo-gallery-btn.gif" width="100%" ></a>
                  </div>
    
               
                    
                  
                  <div class="reserve-form">
                        <img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br />
    
    
     
                        <?php if($soldoutevent == true) :?><h2>Sold Out</h2><?php endif;?>
                        <?php if($soldoutevent == false) :?>
                         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="DFUTLAY6JSAJ6">
                                <table>
                                <tr><td><input type="hidden" name="on0" value="Package Selection">Package Selection</td></tr>
                                <tr><td><select name="os0" id="paypal_select">
                                    <optgroup label="Register">
                                        <option value="Register-Embassy Suites">Register-Embassy Suites $19.99</option>
                                        <option value="Register">Register $19.99</option>
                                    </optgroup>
                                    
                                    <optgroup label="First Payment">
                                        <option value="1st Payment">First Payment $125</option>
                                    </optgroup>
                                    
                                    <optgroup label="Partial Payments">
                                        <option value="Partial Payment">Partial Pay - $50</option>
                                        <option value="Partial Payment">Partial Pay - $75</option>
                                        <option value="Partial Payment">Partial Pay - $100</option>
                                        <option value="Partial Payment">Partial Pay - $150</option>
                                        <option value="Party Pass Only">Partial Pay - $225</option>
                                    </optgroup>
    
                                </select> </td></tr>
                                 <tr><td><input type="hidden" name="on1" value="Package Type">Package Type</td></tr><tr><td><select name="os1">
                                        <option value="Diamond">Diamond </option>
                                        <option value="Emerald">Emerald </option>
                                        <option value="Party Pass Only">Party Pass Only </option>
                                        <option value="Ruby (Custom)">Ruby (Custom) </option>               
                                </select> </td></tr>
    
                                
                                <tr><td><input type="hidden" name="on2" value="Group Leader Name"> <label for="os2">* Group Leader Name</label></td></tr>
                                <tr><td><input id="os2" class="group" type="text" name="os2" maxlength="60" ></td></tr>
                                <tr><td><input  type="hidden" name="on3" value="Group Size" > <label for="os3">* Number of people in group?</label></td></tr>
                                <tr><td><input name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" ></td></tr>
                          
                                <tr valign="top">
                                      <td valign="top">
                                        
                                          <input style="width:auto; margin-right:5px; float:left" name="terms" type="checkbox" value="agree" id="terms">
                                          <label for="terms"><p style="margin-left:10px;">* I agree to the 
                                          <a href="includes/termsofagreement.inc.php" onClick="$(this).modal({width:600,height:700}).open(); return false;" >terms</a>.</p>
                                          </label>
                                      </td>
                                </tr>
                                </table>
                                <input type="hidden" name="currency_code" value="USD">
                                <input class="buy-package" type="image" src="images/buy-package-btn.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                
                                <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                        
                        <a href="/partypass/ciaa.php"><strong>Buy Party Pass Only > </strong></a>
                        <?php endif;?>
                  </div>
                  
                  
          </div><!--end of col2-->
          
        
          
      </div><!--end of content-->
      
      <div class="disclosure">
      	<strong>Disclaimer</strong> | The terms Central Intercollegiate Athletic Association, CIAA, and CIAA Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the Central Intercollegiate Athletic Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Central Intercollegiate Athletic Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
  	  </div><!-- end of disclosure -->
      
      
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
			$("li.ciaa").addClass("active");
			
		

	});
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="js/galleria.js"></script>
<script type="text/javascript" src="js/galleria.flickr.js"></script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>