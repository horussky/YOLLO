<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"				=>"Urban Fiesta 2014",
			"location"			=>"San Juan, Puerto Rico",
			"date"				=>"May 23-25, 2014"
	);

	$geolocation = array(
		/*"hotel1"=> array(
				"title" 			=>"Embassy Suites San Juan Hotel & Casino",
				"address"			=>"8000 Tartak Street, Isla Verde, Carolina",
				"location"			=>"Puerto Rico 00979",
				"geolocation"		=>"8000 Tartak Street, Isla Verde, Carolina, San Juan, Puerto Rico 00907",
				"hotel1_soldout"	=>false
			),*/
			"hotel2"=> array(
				"title" 			=>"Sheraton Puerto Rico Hotel and Casino",
				"address"			=>"200 Convention Boulevard",
				"location"			=>"San Juan, Puerto Rico 00907",
				"geolocation"		=>"200 Convention Boulevard, San Juan, Puerto Rico 00907",
				"hotel2_soldout"	=>false
			)  

	);
	
	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$450",
				"3 People"			=>"$515",
				"2 People"			=>"$670",
				"1 Person"			=>"$1195"
			),
			
			/*"emerald"=> array(
				"4 People" 			=>"$165",
				"3 People"			=>"$195",
				"2 People"			=>"$225",
				"1 Person"			=>"$325"
			),*/
			
			"Hotel Only" =>"$245 (Weekend)"
	);
	
	include '../../includes/functions.inc.php';

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
<title><?php echo $event["title"]?> | <?php phoneNumber(); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="Description" content="Urban Fiesta 2014 in Puerto Rico with Yollo Group Services Inc. Memorial Day Weekend. Yollo Group Services is a travel company specializing in offering affordable travel for everyone. We also specialize in travel for college students." />
<meta name="Keywords" content="Urban Fiesta, Urban Fiesta 2016, Urban Fiesta 2014, Urban Fiesta 2015, the Urban Fiesta 2014, Puerto Rico, Party Boat Cruise, san juan puerto rico, student travel, cheap student travel, travel services, domestic travel, international travel" />
<meta name="robots" content="ALL" />
<meta name="author" content="Yollo Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />

<link href="favicon.ico" rel="icon" type="image/x-icon" />
<!--[if lt IE 9]>
	 <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <script>window.html5 || document.write('<script src="js/html5shiv.js"><\/script>')</script>
<![endif]-->
<link href="../../css/global.css" rel="stylesheet" type="text/css" />
<link href="../../css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="../../css/jmetro-theme/jquery-ui.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.col2 select{			width:174px; font-size:12px; margin-bottom:5px;}
.map{					border:1px solid #999; margin-bottom:10px;}
#tabs{					margin-bottom:10px;}
.ui-state-active a, 
.ui-state-active a:link, 
.ui-state-active a:visited {color:#900;}
.ui-state-active a, .ui-state-active a:link, .ui-tabs-nav li a, .ui-tabs-nav li a:link, ui-state-default a{text-decoration:none;}
.priceblock{font:13px/1.5em Helvetica, Arial, sans-serif; margin:5px 0 10px 0;}
h4 .soldout{font:bold 11px Arial, Helvetica, sans-serif; color:#900; font-style:normal; text-transform:uppercase;}
div#secondchoice { display:none;}
</style>

</head>
<body>

<div id="wrap">

    <div id="container">
    	
        <?php include '../../includes/header.inc.php'; ?>
        
        <div id="left">
            <!--Nav-->
            <?php include '../../includes/nav.inc.php'; ?>
            <!--End of Nav-->
            
            
        </div><!-- end of left -->
        
        <div id="right">
            
            
            
            <div class="topcontent"> <img src="../../images/slides/splash-urban-fiesta.jpg" alt="Urban Fiesta" ></div>
          
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
                            <h3>Puerto Rico is the place to be during the 2014 Memorial Day weekend!</h3>
    
                            <p>Urban Fiesta is back and it's a bigger weekend than ever! 2013's turn out for Urban Fiesta tilted the 
                            richter scale with the amount of activities, parties, people, celebrities, and alcohol consumed. 
                            However, 2014 is destined to make Urban Fiesta an even larger weekend event!</p>
                            
                            <p>For the uninformed, Urban Fiesta is hands down the biggest event in Puerto Rico during Memorial Day
                             weekend. From sun up to sun down Urban Fiesta will engage you with tons of activities to occupy your time.
                             There is no end to what you can do...excursions, exclusive shops, sandy beaches, parties,
                             and the list goes on. And did we mention there will be celebrities sprinkled throughout Urban Fiesta Weekend?
                             You never know who will stop by. 
                            </p>
                            
                            <p>You don't want to miss out on the livest event in the Puerto Rico. No Passport, No Worries, JUST FUN! 
                            Book with YOLLO Group Services today for Urban Fiesta Weekend! </p>
        
                        </div> <!-- end of tabs 1 -->
                        
                        <div id="tabs-2">
                                    
                            
							<?php /* ?> <div class="hotelimg">
                                    <h4><?php echo $geolocation["hotel1"]["title"]; ?></h4>
                                    <?php if($geolocation["hotel1"]["hotel1_soldout"] == true) :?>
                                        <img class="soldoutbadge" src="images/sold-out-image-badge.png">
                                    <?php endif;?>
                                    
                                    <img class="map" src="http://maps.google.com/maps/api/staticmap?center=<?php echo $geolocation["hotel1"]["geolocation"]; ?>&size=330x250&zoom=15&maptype=terrain&markers=color:red%7C<?php echo $geolocation["hotel1"]["geolocation"]; ?>&sensor=false" />
        
                                    <p style="padding-bottom:10px;" class="map-icon">
                                    <?php echo $geolocation["hotel1"]["address"]; ?><br>
                                    <?php echo $geolocation["hotel1"]["location"]; ?><br /></p>
                                    
                                     <img style="margin-bottom:5px;" src="http://assets.sheratonneworleans.com/XLGallery/sheraton-new-orleans.jpg" width="330"><br />
                                    <img style="margin-bottom:5px;" src="http://assets.sheratonneworleans.com/XLGallery/KingRoomsmall22.jpg" width="330" >

                                </div>
                                
                                <hr style="border-top:1px solid #ccc; width:100%; margin-bottom:15px;" /> <?php */ ?>
                                
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
    
                                
    
                        </div><!-- end of tabs 2 -->
                        
                        
                       <div id="tabs-3">
                                
                              
                                    <h4><a href="#">Sheraton Convention Center | Diamond Package</a></h4>
                                    <div>
                                        <p><strong>Date:</strong> May 23 - 25, 2014<br /></p>
                                        <ul>
                                            <li>Hotel Accommodations (3 days/2 nights)</li>
                                            <li>Welcoming Reception</li>
                                            <li>All Access Event Weekend Passes</li>
                                            <li>One Bottle of flavored Ciroc per room</li>
                                            <li>Gift Bag</li> 
                                            <li>Add'l Night - $235/plus tax and resort fees</li> 
                                        </ul>
                            
                                        <div class="priceblock">
                                            
                                             <?php foreach($people['diamond'] as $key=>$value): ?>
                                                <?php echo $key; ?> <img src="../images/right-arrow.gif" width="16" height="16">
                                                <strong><?php echo $value ?></strong> per person<br />
                                            <?php endforeach; ?>
                                            
                                        </div>
                                    </div>
                                    
      
                                    <h4><a href="#">Diamond Package Special ends Febuary 21, 2014* </a></h4>
                                    <div>
                                        <p>Includes everything within the Diamond Package plus:</p>
                                        <ul>
                                            <li>Additional Hotel Night (4 days /3 nights)</li>
                                            
                                        </ul>
                                    </div>
                                    
                                    <h4><a href="#">Party Pass Option Only </a></h4>
                                    <div>
                                        <p>Takes care of all your weekend party needs:</p>
                                        <ul>
                                            <li>3 Day Party Pass <img src="../images/right-arrow.gif" width="16" height="16"> 		
                                            <strong>$275</strong></li>
                                            
                                            <li>All Access Party Pass <img src="../images/right-arrow.gif" width="16" height="16"> 
                                            <strong>$300</strong></li>
                                        </ul>
                                   </div>
    
                            </div><!-- end of tabs 3 -->
    
                        
                        <div id="tabs-4">
                            <ul>
                                <li><strong>Anything I should know before I arrive?</strong> 
                                Yes! Although no passports are required, bring a valid ID. Most signs, menus, etc. are written in Spanish. No worries though, almost everyone 
                                speak conversational English. Most restaurants include gratuity in the bill, but make sure you inquire. At the airport, on your return home, you 
                                will have to go through customs. Mostly they are looking for wild animals and forbidden fruits. If you see people jumping off mini bridges don't 
                                freak out, it's what they do there for fun. It's actually kinda cool, you may even try it. Last but not least stay in our recommended hotels... you 
                                will save yourself a lot of aggravation.
                                </li>
                                
                                <li><strong>Is the money the same or do I have to convert?</strong> 
                                US currency is used throughout Puerto Rico...again, it's a part of the USA!
                                </li>
                                
                                <li><strong>What airport do I fly into?</strong> 
                                The Luis Munoz Marin International Airport (SJU)
                                </li>
                                
                                <li><strong>Do I need a rental car?</strong> 
                                 No rental car is needed if you book your hotel with us!</li>
                                 
                                <li><strong>When are the payments due?</strong> 
                                 After registration the 1st payment of $250 is due on or before due May 06, 2014. The second and final payment is due May 16, 2014.</li>
                            </ul> 
                        </div><!-- end of tabs 4 -->
                        
                    </div><!-- end of tabs -->
    
                </div><!-- end of col1 -->
                
                  
                 <div class="col2">
                  
                  
                  
                  <div style="margin-bottom:5px;">
                    <a class="box-fade" href="../../includes/urban.slide.inc.php?iframe=true&width=90%&height=550" rel="prettyPhoto[iframes]">
                    <img src="images/photo-gallery-btn.gif" width="100%"  ></a>
                  </div>
                  
               
       
                  <div class="reserve-form">
                        <img style="margin-top:-18px;" src="../../images/reserve-spot.gif" alt="reserve a spot today" /><br />
                         
   
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                            
                               <input type="hidden" name="hosted_button_id" value="8R72QLBJYB8FQ">
                               <input type="hidden" name="on0" value="Package Selection">
                                
                               <label>Package Selection</label>
                                <select name="os0" id="paypal_select" >
                                    <optgroup label="Package Reservation Fee">
                                        <option value="Register ~ Sheraton">Sheraton: $19.99</option>
                       		 			<option value="Register ~ General Registration">General Registration: $19.99</option>
                                    </optgroup>
                                    
                                    <optgroup label="First Payment">
                                        <option value="UF 13 First Payment">First Payment: $125</option>
                                    </optgroup>
                                    
                                    <optgroup label="Partial Payments">
                                        <option value="UF Partial Pay 100">Partial Pay: $100</option>
                        				<option value="UF Partial Pay 150">Partial Pay: $150</option>
                        				<option value="UF Partial Pay 200">Partial Pay: $200</option>
                                    </optgroup>
                                    
                                    <optgroup label="Passes">
                                        <option value="3 Day Party Pass">3 Day Party Pass: $275</option>
                        				<option value="All Access Party Pass">All Access Party Pass: $300</option>
                                    </optgroup>
                                </select> 
                                
                                <input type="hidden" name="on1" value="Package Type">
                                <label>Package Type</label>
                                <select  name="os1">
                                        <option value="Diamond">Diamond </option>
                        				<option value="Party Pass Only">Party Pass Only </option>
                        				<option value="Hotel Only">Hotel Only </option>
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
                                
                                <label for="terms">
                                    <p>* Check below for    
                                        <a href="#inline-1" rel="prettyPhoto" >Terms</a>
                                        <div id="inline-1" class="nodisp">
                                        <?php include 'includes/termsofagreement.inc.php' ?>
                                        </div></p>
                                </label>
                                
                                <input style="width:auto" class="termsbox" name="terms" type="checkbox" value="agree" id="terms">
                                
                                     
                                <input type="hidden" name="currency_code" value="USD">
                                <input class="buy-package" type="image" src="images/buy-package-btn.gif" border="0" name="submit">
                                
                        </form>
                      
    
                  </div><!--end of reserve form-->
                  
          </div><!--end of col2-->
          
          
          
      </div><!--end of content-->
      </div><!--end of right-->
      
      <aside id="social">
      <?php include '../../includes/twitter.inc.php'; ?>
      </aside>
      
       <div class="push"></div>
       
    </div><!--end of container-->

</div><!--end of wrap-->

<!-- Footer  -->
<?php include '../../includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include '../../includes/scripts.inc.php'; ?>

<script type="text/javascript">
$('.btn').click(function() {
	$('a').modal().close();
});

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
			if($(this).val() == 'Diamond')
				$('#secondchoice').show();
			else
				$('#secondchoice').hide();
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
				terms: "You must agree to terms!",
				os3: "must add group size",
				os2: "must add group leader",
				os5: "must choose a package type"
				
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
			$(".nav li.urban").addClass("active");
			
			$(".nav .urban").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
			
			$(".nav .urban").mouseover(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
	

	});
</script>


<!-- Galleria Scripts -->
<script type="text/javascript" src="../../js/galleria.js"></script>
	<script type="text/javascript" src="../../js/galleria.flickr.js"></script>


<!--google analytics-->
<?php include '../../includes/analytics.inc.php'; ?>
</body></html>