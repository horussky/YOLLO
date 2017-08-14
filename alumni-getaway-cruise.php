<?php

ob_start("ob_gzhandler");

$event = array(
	"title"						=>"Alumni Getaway Cruise",
	"location"					=>"Cozumel, Mexico",
	"date"						=>"December 7-11 ,2017",
	"img_url"				 	=>"../../images/slides/splash-alumni.jpg",
	"img_alt"				 	=>"Alumni Getaway Cruise"
);

$geolocation = array(
	"cruise1"=> array(
		"title" 		=>"Fantasy Cruise Ship",
		"ship"			=>"https://directlinecruises.com/images/carnival_ecstacy_slider1.jpg",
		"location"		=>"Cozumel, Mexico",
		"soldout"		=>"false",
		"img_url"		=>"https://www.cruisin.me/images/cruise-ships/carnival-cruise-lines/carnival-fantasy.jpg"

	),

	"cruise2"=> array(
		""
	)

);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$450",
			"Group of 3"			=>"$515",
			"Group of 2"			=>"$650",
			"Individual"			=>"$1100"
		),

		"emerald"=> array(
			""
		),

		"options"=>array(
			"Hotel Only" =>"$1245 (Weekend)"
		),

);

$package_items = array(
	"diamond_items" => array(
		"4 Day/3 Night Cruise Departing From Port of Mobile"			=> "checked",
		"All You Can Eat aboard Ship"									=> "checked",
		"Bust a Gut Comedy Series"											=> "checked",
		"80's vs 90's Party"										=> "checked",
		"Word Easy Spoken Word Show"											=> "checked",
		"Alumni Getaway Welcome Reception"											=> "checked",
		"Rep My Set Party"											=> "checked",
		"Alumni Getaway Beach Retreat"											=> "checked",
		"Alumni Getaway Ocean Blue Fun and Sexy Party"											=> "checked",
		"Farewell Party"											=> "checked",
		"Black Film Review"											=> "checked",
		"YOLLO Gift Bag"												=> "checked"
	),

	"emerald_items" => array(
		""
	),

	"Hotel Only" =>""
);

include 'includes/functions.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?php echo $event["title"]?> | <?php echo $phonenumber ?></title>
<meta name="description" content="YOLLO Group Services is a travel company specializing in offering affordable travel to amazing events for everyone." />
<meta name="keywords" content="Urban Fantasy 2017, Carnival Cruise, Bahamas, YOLLO Group Services, student travel, bahamas, Cruise Travel packages" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="wrap">
    
    <!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav--> 

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
                    <img src="<?php echo $event["img_url"]; ?>" alt="<?php echo $event["img_alt"]; ?>" >
            </div>
        
            <div class="content">
        
                <h2 class="title"><?php echo $event["title"]; ?></h2>
        
                <div class="date-location">
                        <div class="col"><?php echo $event["date"]; ?></div>
                        <div class="col"><?php echo $event["location"]; ?></div>
                </div>
        
        
        
                <div class="colfull">
        
                    <div id="tabs" class="yollo-tabs nodisp">
                    <ul>
                             <?php
                                        foreach($tabnavcruise as $tabs => $item){
                                             echo "<li><a href=\"#$tabs\">$item</a></li>";
                                        };
    
                                ?>
                    </ul>


                    <div id="tabs-1">
                        <h3>Alumni Getaway Cruise is going to Cozumel, Mexico!</h3>

                        <p>Calling all old, new, and almost alums, this Alumni Getaway Cruise is the weekend vacation for you. We are bringing together HBCU alums from all over the country to rep their university. What better way to meet and mingle than cruising aboard the Carnival Fantasy to the beautiful island of Cozumel, Mexico. Not a product of a HBCU? No worries, this cruise isn't exclusive to only HBCU alumni. Everyone's invited to rep their university on this getaway cruise to Mexico. </p>
                        
                        <p>While you cruise over the Caribbean, we have plenty of entertainment to keep you occupied. Look forward to comedy shows, a talent show, spades tournament, and more activities. Our DJ's are working the 1's and 2's for a variety of onboard clubs and decks. Our theme night parties, “Greek Life or Nah” and “Rep Your University” will also keep the camaraderie going all weekend.</p> 
                        
                        <p>Don't believe the hype, Mexico is a very beautiful place to visit. Cozumel has plenty of excursions and shopping areas to explore. If time permits, tour the Mayan ruins or cruise the island and enjoy the scenery. So do not hesitate on this package. Book this great cruise package today!</p>


                    </div> <!-- end of tab 1 -->


                    <div id="tabs-2">

                        <h3>Cruise</h3>
                                    <div class="hotel-box-container">

                                            <?php if(count($geolocation["cruise1"]) > 1) :?>
                                            <div class="hotel-box">
                                                    <img src="<?php echo $geolocation['cruise1']['img_url']; ?>" />
                                                    <div class="hotel-title">
                                                            <h3><?php echo $geolocation["cruise1"]["title"]; ?></h3>
                                                    </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if(count($geolocation["cruise2"]) > 1) :?>
                                            <div class="hotel-box">
                                                 <img src="<?php echo $geolocation['cruise2']['img_url']; ?>" />
                                                    <div class="hotel-title">
                                                            <h3><?php echo $geolocation["cruise2"]["title"]; ?></h3>
                                                    </div>
                                            </div>
                                            <?php endif; ?>


                                    </div><!-- hotel box container -->

                                <hr />

                        <h3>Price</h3>
                                    
                                    <div class="price-table-container">

                                    <?php if(count($geolocation["cruise1"]) > 1) :?>
                                    <div class="price-table">
                                        <ul class="price">
                                            <li class="header">Diamond <span>Package</span></li>
                                            <?php foreach($package_items['diamond_items'] as $key=>$value): ?>
                                                <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                            <?php endforeach; ?>
                                            <li class="people-price">
                                                <ul class="priceblock">
                                                        <?php foreach($people['diamond'] as $key=>$value): ?>
                                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
                                                            <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
                                        </ul>
                                    </div><!-- price table -->
                                    <?php endif; ?>



                                    <?php if(count($geolocation["cruise2"]) > 1) :?>
                                    <div class="price-table">
                                        <ul class="price">
                                            <li class="header">Emerald <span>Package</span></li>
                                            <?php foreach($package_items['emerald_items'] as $key=>$value): ?>
                                                <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                            <?php endforeach; ?>
                                            <li class="people-price">
                                                <ul class="priceblock">
                                                        <?php foreach($people['emerald'] as $key=>$value): ?>
                                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if($key != "Individual"):?><em>/per person</em><?php endif;?></span></li>
                                                            <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <li><a href="#tabs-5" class="btn btn-success open-tab" data-tab-index="4">Book Today</a></li>
                                        </ul>
                                    </div><!-- price table -->
                                <?php endif; ?>
                                
						</div><!-- price table container-->

                    </div><!-- end of Tab 2 -->



                    <div id="tabs-3">

                        <h3>Frequently Asked Questions</h3>
                        <div id="accordion" class="nodisp">

                                <section>
                                        <h2>Do I need a Passport? <span></span></h2>
                                        <p>A passport is not required to go on the cruise if you are a United States citizen and departing from a US port. If you DO NOT have a passport, you can board with a birth certificate issued by the department of vital statistics and your driver’s license.</p>
                                </section>


                                <section>
                                        <h2>What are some things you suggest I buy for this trip? <span></span></h2>
                                        <p>Relaxed casual wear, motion sickness medicine (just in case), swim wear, sun block lotion/spray, deet bug spray, and a sexy classy white outfit.</p>
                                </section>


                                <section>
                                        <h2>How do I pay for this package? <span></span></h2>
                                        <p>Navigate to the Buy Now tab and complete the form. You will receive a welcome letter within 7 business days with all your reservation information.</p>
                                </section>

                                <section>
                                        <h2>When are the payments due? <span></span></h2>
                                        <p>After registration $200 is due <strong>at booking</strong> . The final payment (remaining balance) is due on or before <strong>September 13, 2017</strong> . If the announced payment dates have passed contact us for our current payment plan.</p>
                                </section>

                                <section>
                                        <h2>Are there any other charges associated with the cruise? <span></span></h2>
                                        <p>Yes, clients are responsible for paying cabin gratuities. The standard charge is $11.25 per day, but you may want to leave more depending on your service. Sometimes gratuity is added to your final bill, so check with the cruiseline front desk on the ship before returning back to Mobile.</p>
                                </section>

                                <section>
                                        <h2>What port are we departing from and what time do I need to be there? <span></span></h2>
                                        <p>The Carnival Fantasy sails from the Port of Mobile. We suggest arriving no later than 2:30 pm.</p>
                                </section>



                        </div><!-- accordion -->

            </div> <!-- end of Tab 3 -->



            <div id="tabs-4">
                 <div id="nanoGallery"></div>
            </div><!-- end of tabs 4 -->


            <div id="tabs-5">

                <div class="pay-form">
                        <p >Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>



                            <div class="cognito"></div>

                </div><!-- end of pay-form -->


    </div><!-- end of tabs 5 -->

								</div><!-- end of tabs -->



							</div><!-- end of colfull -->


	     <div class="disclosure">

	     		<?php include 'includes/package-info-generic.inc.php'; ?><br/>

	          <strong>Disclaimer</strong> | The term Alumni Getaway, Carnival Cruise Lines, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by Carnival Cruises and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Carnival Cruise productions. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
	    </div>



		</div><!--end of content-->
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


			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157660233463388',

				// uncomment this line to display full photostream (v5.0.0):
				// photoset:'none',

				thumbnailWidth: 115,
				thumbnailHeight: 'auto',
				thumbnailAlignment: 'left',
				thumbnailLabel: {
					display:false,
					displayDescription: false,
					position: 'overImageOnBottom'
				},

				thumbnailHoverEffect:'borderLighter'
			});


	});
</script>
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
                            <script>Cognito.load("forms", { id: "11" });</script>
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>