<?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>HBCU Games | Contact us today at 888.9GO.YOLLO </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="classification" content="Travel Agents" />
<meta name="Description" content="Yollo Group Services is a travel company specializing in offering affordable travel for everyone. We also specialize in travel for college students." />
<meta name="Keywords" content=" Magic City Classic <?php echo date('Y');?>, Birmingham, Legion Field, Yollo Group Services, student travel,cheap student travel, HBCU, Circuit City Classic, Magic City Classic Travel packages, magic city classic 2013, magic city classic 2014, travel services, domestic travel, international travel, the classic, football classic" />
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
	.nav .hbcu{	background-position:-200px 0;}
	.col2 select{width:174px; font-size:12px; margin-bottom:5px;}
	.map{border:1px solid #999; margin-bottom:10px;}
	#tabs{margin-bottom:10px;}
	.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {color:#900;}
	.ui-state-active a, .ui-state-active a:link, .ui-tabs-nav li a, .ui-tabs-nav li a:link, ui-state-default a{text-decoration:none;}
	.priceblock{font:13px/1.5em Helvetica, Arial, sans-serif; margin:5px 0 10px 0;}
	h4 .soldout{font:bold 11px Arial, Helvetica, sans-serif; color:#900; font-style:normal; text-transform:uppercase;}
	.eventleft{		float:left; width: 175px; overflow:hidden; margin-bottom:20px; text-align:center;}
	.eventright{	float:right; width: 175px; overflow:hidden; margin-bottom:20px; text-align:center;}
	.eventleft p, .eventright p{	font:bold 10px/15px Arial, Helvetica, sans-serif; text-transform:uppercase; margin-bottom:0;}
	
	
	.eventleft a.viewmore, 
	.eventright a.viewmore{			background:#CE1F30; width:100%; padding:4px 10px; margin:2px; height:30px; line-height:30px; 
									border:2px solid #e9e9e9; cursor:pointer; text-decoration:none;
									color:#fff; text-transform:lowercase; font-weight:bold; clear:both;}
	.eventleft a.viewmore:hover, 
	.eventright a.viewmore:hover{	background:#9F1827; width:87px; height:30px; border:2px solid #e9e9e9; cursor:pointer; 
									color:#fff; text-transform:lowercase; font-weight:bold; clear:both;}
</style>

</head>
<body>

<div id="container">
	<div id="left">
        <!--Nav-->
        <?php include 'includes/nav.inc.php'; ?>
        <!--End of Nav-->
        
        
    </div>
    
    <div id="right">
    	<?php include 'includes/logo.inc.php'; ?>
        
        <div class="topcontent">
            	<img src="images/hbcu-img.jpg" alt="HBCU <?php echo date('Y'); ?> with YOLLO" />
        </div> 
      
        <div class="content">
    
                 <div class="colfull">
                        <h2>HBCU Games</h2>
                        
                        <span style="margin-right:10px;" class="eventleft">
                        	<a href="/classic"><img src="images/fb-thumb-mcc.jpg"></a><br />
                            <h3>Magic City Classic</h3>
                            <p>Alabama A&M vs Alabama St.</p>
                            <a class="viewmore" href="/classic">View Details</a>
                        </span>       
                 </div>
          
        </div>
      
      
  </div><!--end of right-->
  
  <aside id="social">
  	<?php include 'includes/twitter.inc.php'; ?>
  </aside>
  
 
   <div class="push"></div>
</div><!--end of container-->


<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

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
		
		//Navigation
			$(".nav li").mouseover(function(){
				$(this).stop().animate({width:'185px'},{queue:false, duration:300, easing: 'easeOutSine'})
			});
		
			//When mouse is removed
			$(".nav li").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:300, easing: 'easeInSine'})
			});
			
			//change li classes
			$(".nav li.hbcu").addClass("active");
			
			$(".nav .hbcu").mouseout(function(){
				$(this).stop().animate({width:'5px'},{queue:false, duration:0})
			});
			
			$(".nav .hbcu").mouseover(function(){
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