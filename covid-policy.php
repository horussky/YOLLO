<?php 
ob_start("ob_gzhandler"); 
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $metas['covid']['title']; ?></title>

<meta name="description" content="<?php echo $metas['covid']['desc']; ?>" />
<meta name="keywords" content="<?php echo $metas['covid']['keywords']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="<?php echo $metas['covid']['canonical']; ?>" rel="canonical" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<meta property="fb:pages" content="117420764961518" />

</head> 

<body>

<div id="wrap">
    
	<!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav-->   


        <div class="container">
    	    <div class="row">
                <div class="col">
                    <?php include 'includes/header.inc.php'; ?>
                </div>
            </div><!-- end of row-->
        </div><!-- end of container --> 


		<!--Right Content-->
		
		<style>

        </style>
		<div class="container">
		
            <div class="row mb-40">
                <div class="col-md-8">
                    <h2 class="title">COVID-19 RISK ACCEPTANCE</h2> <p class="lead">Important Notice to Travel Clients - Please Read Carefully<p> <p>CLIENT ACKNOWLEDGES, UNDERSTANDS AND ACCEPTS THAT RESERVING TRAVEL WITH YOLLO GROUP SERVICES, INC, BUT FURTHUR REFEERED TO AS YOLLOGSINC, IN TERMINALS AND BOARDING AREAS, OR DURING ACTIVITIES AND/ OR WHILE TRAVELING TO OR FROM THE DESTINATION, THE GUEST OR OTHER GUESTS MAY BE EXPOSED TO COVID-19. CLIENT FURTHER UNDERSTANDS AND ACCEPTS THAT THE RISK OF EXPOSURE TO COVID-19 IS INHERENT IN MOST ACTIVITIES WHERE PEOPLE INTERACT OR SHARE COMMON FACILITIES, IS BEYOND YOLLOGSINC’S CONTROL, AND CANNOT BE ELIMINATED UNDER ANY CIRCUMSTANCES. CLIENT KNOWINGLY AND VOLUNTARILY ACCEPTS THIS RISK, INCLUDING THE RISK OF SERIOUS ILLNESS OR DEATH ARISING FROM SUCH EXPOSURE, AND/OR ALL RELATED DAMAGES, LOSS, COSTS AND EXPENSES OF ANY NATURE WHATSOEVER. CLIENT UNDERSTANDS AND AGREES THAT IT SHALL BE HIS/HER RESPONSIBILITY TO MAKE AN INFORMED DECISION ABOUT TRAVEL BASED ON HIS/HER INDIVIDUAL RISK ASSOCIATED WITH COVID-19.</p> <p>YOLLOGSINC, partners, and/or vendors may require all guests to undergo screening and provide specific health information relating to guest’s possible exposure to or infection with COVID-19 to determine guest’s eligibility to visit their respective facility/venue. Client hereby authorizes the release of the health information to YOLLOGSINC, its medical staff or consultants, contractually engaged third parties, and any required governmental or health authorities to use for COVID-19 screening and/or mitigation. Client agrees that if at any time within 14 days prior to embarkation or at any time during the travel period and the client tests positive for COVID-19, exhibits signs or symptoms of COVID-19, has had close contact with a person confirmed or suspected as having COVID-19, or YOLLOGSINC otherwise determines in its sole discretion that client is unfit to continue travel because of any communicable illness, client shall be subject to denial of entry to venues, denial of sleeping accommodations, quarantine, isolation and/or disembarkation.</p> <p><strong>Notice to Guests Regarding Advice from US CDC</strong></p> <p>The CDC cautions that any travel poses a higher risk of contracting COVID-19 and advises that travel to over 150 countries presents a very high risk besides cruises. This is especially important for people with an increased risk of severe illness, such as older adults and those with certain underlying medical conditions. The CDC’s travel advisories, warnings and recommendations should be reviewed by guests on the CDC’s website.</p> <p>If a threshold of COVID-19 is detected during an event, the event will end, all clients will be required to return to home, and your subsequent travel home may be restricted or delayed. Health and safety protocols, client conduct rules, and regional travel restrictions vary by location and destination, and are subject to change without notice.</p> 
                </div><!-- end of con-->

                <div class="col"> 
                
                </div><!-- end of col-->
                
            </div><!-- end of row-->

        </div> <!-- end of container --> 
		

		

            


</div><!-- end of wrap -->



<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include 'includes/scripts.inc.php'; ?>

<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->



</body></html>