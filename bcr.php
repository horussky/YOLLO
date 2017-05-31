<?php ob_start("ob_gzhandler"); ?>
<?php
	$event = array(
			"title"=>"Black College Reunion (BCR) 2013",
			"location"=>"Daytona Beach, Florida",
			"date"=>"Date TBA"
	);


	$geolocation = array(
			"hotel1"=> array(
				"title" 		=>"Embassy Suites San Juan Hotel & Casino",
				"address"		=>"8000 Tartak Street, Isla Verde, Carolina",
				"location"		=>"Puerto Rico 00979",
				"geolocation"	=>"18.438626,-66.013642"
			) 
	);
	
	$people = array(
			"diamond"=> array(
				"4 People" 			=>"$450",
				"3 People"			=>"$490",
				"2 People"			=>"$555"
			),
			
			
			"Hotel Only" =>"$245 (Weekend)"
	);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $event["title"]?> | Contact us today at 888.9GO.YOLLO  </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="classification" content="Travel Agents" />
<meta name="Description" content="Yollo Group Services is a travel company specializing in offering affordable travel for everyone. We also specialize in travel for college students." />
<meta name="Keywords" content="spring bling, BET, urban events, Black College Reunion, BCR, BCR Parties, Spring Bling Tickets, Spring Bling Parties, Spring Break, Daytona, Parties in Daytona, Florida Spring Break, student travel,cheap student travel, travel services, black college reunion 2013, black spring break, urban spring break, domestic travel, international travel" />
<meta name="robots" content="ALL" />
<meta name="rating" content="General" />
<meta name="author" content="Yollo Group Services" />
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<style type="text/css">
@import url(css/global.css);
@import url(css/prettyPhoto.css);
@import url(css/smoothness/jquery-ui.css);
.nav .bcr{	background-position:-200px 0;}
a.packages{ background:url(images/bcr-package-btn.gif) 0 0 no-repeat!important;}
a.packages *{display:none;}
.col2 select{			width:174px; font-size:12px; margin-bottom:5px;}
.map{					border:1px solid #999; margin-bottom:10px;}
#tabs{					margin-bottom:10px;}
.ui-state-active a, 
.ui-state-active a:link, 
.ui-state-active a:visited {color:#900;}
.ui-state-active a, .ui-state-active a:link, .ui-tabs-nav li a, .ui-tabs-nav li a:link, ui-state-default a{text-decoration:none;}
.priceblock{font:13px/1.5em Helvetica, Arial, sans-serif; margin:5px 0 10px 0;}
h4 .soldout{font:bold 11px Arial, Helvetica, sans-serif; color:#900; font-style:normal; text-transform:uppercase;}

</style>

</head>
<body>
<div id="container">
 	
    <!--Left Content-->
	<div id="left">
        <!--Nav-->
        <?php include 'includes/nav.inc.php'; ?>
        <!--End of Nav-->
        
        <?php include 'includes/twitter.inc.php'; ?>
    </div>
    
    <!--Right Content-->
    <div id="right">
    	<?php include 'includes/logo.inc.php'; ?>
        <hr />
        
        <div class="topcontent">
            	<img src="images/bcr-img.jpg" alt="Black College Reunion" />
        </div> 
      
      	<div class="content">
      		   <div class="col1">
                   <h2><?php echo $event["title"]?> </h2>
                   <h3><?php echo $event["location"]?></h3>
                   <h4><?php echo $event["date"]?></h4>
                
                 <div id="tabs">
                    <ul>

                        <li><a href="#tabs-1"><span class="ui-icon ui-icon-tag"></span>Overview</a></li>
                    </ul>
                    <div id="tabs-1">       
                        <h4>BCR Weekend is the new Spring Bling!</h4>
                        
                        <p>Spring Bling has been absent for almost 3 years now. What is there to fill the void? Black 
                        College Reunion in Daytona Beach, Florida definitely should be in your next spring break plans. An
                        oldie, but goodie, BCR Weekend is making a big comeback.</p>

						<p>Black College Reunion (BCR) is one of the largest spring break events in the country. 
                        It's a non-stop party from the time of your arrival until the time you leave. Whether walking the 
                        strip, clubbing, hanging out on the beach, or meeting new friends, you are guaranteed a fun time!</p>
                         
                        <p>Daytona Beach, the former host of BET Spring Bling, will showcase random appearances by 
                         celebrities, performances at the famous "BandShell", and of course plenty of students from local 
                         and regional HBCU's.</p>
 
                            
                    </div>
                    
				</div>
              


</div>
              
              <div class="col2">
              		<div style="margin-bottom:10px;">
                     <?php include 'includes/newsletter.inc.php' ?>
                    </div>
                    
                    
                    
                    <div class="reserve-form">
                        <img style="margin-top:-18px;" src="images/reserve-spot.gif" alt="reserve a spot today" /><br />
    
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id='paypal_frm'>
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="Y96JE7RV9BA54">
                                <table>
                                <tr><td><input type="hidden" name="on0" value="Package Selection">Package Selection</td></tr>
                                <tr><td><select name="os0" id="paypal_select" >
                                    <optgroup label="Package Reservation Fee">
                                                  <option value="Register">Registration Fee - $19.99</option>  
                                    </optgroup>
                                 
                                    <optgroup label="First Payment">
                                                <option value="1st Payment">1st Payment - $125</option>
                                    </optgroup>
                                </select> </td></tr>
                                
                                 <tr><td><input type="hidden" name="on1" value="Package Type">Package Type</td></tr><tr><td>
                                <select id="firstchoice" name="os1">
                                        <option value="">Choose Package</option>
                                        <option value="Diamond">Diamond </option>
                                        <option value="Emerald">Emerald </option>
                                        <option value="Party Pass Only">Party Pass Only </option>
                                </select> </td></tr>
                                 
                                            
                                <tr><td><input type="hidden" name="on2" value="Group Leader Name"> <label for="os2">* Group Leader Name</label></td></tr>
                                <tr><td><input id="os2" class="group" type="text" name="os2" maxlength="60" ></td></tr>
                                <tr><td><input  type="hidden" name="on3" value="Group Size" > <label for="os3">* Number of people in group?</label></td></tr>
                                <tr><td><input name="os3" type="text" class="group-size" id="os3" size="2" maxlength="2" ></td></tr>
                                
                                <tr><td><input  type="hidden" name="on4" value="Referral" > <label for="os4">Referral Code</label></td></tr>
                                <tr><td><input name="os4" type="text" class="group" id="os4" size="10" maxlength="10" ></td></tr>
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
                	</div>
             </div><!--end of col2-->
      
      
      
  </div><!--end of right-->
  </div>
   <div class="push"></div>
</div><!--end of container-->

<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/modal-window.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.ie-select-style.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

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
		
		//IE select tag fixs
		$('select#paypal_select').ieSelectStyle({
			width : '174px',
			applyStyle : false
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
				$(this).stop().animate({width:'185px'},{queue:false, duration:300, easing: 'easeOutSine'})
			});
		
			//When mouse is removed
			$(".nav li").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:300, easing: 'easeInSine'})
			});
			
			//change li classes
			$(".nav li.bcr").addClass("active");
			
			$(".nav .bcr").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
			
			$(".nav .bcr").mouseover(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
		
			

	});
</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>