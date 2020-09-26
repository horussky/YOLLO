<?php

if(!ob_start("ob_gzhandler")) ob_start();
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(

	"title"				=>"Get On The Bus",
	"subtitle"			=>"Commitment March on Washington",
	"location"			=>"Washington DC",
	"date"				=>"August 27 - 29, 2021",
    "date_start"        =>"August 27, 2021",
	"img_url"			=>"../../images/slides/splash-gob-cta.jpg",
	"img_alt"			=>"Get on the bus"
);

$geolocation = array(

    "hotel1"=> array(
        "title" 			=>"Embassy Suites",
        "soldout"           =>false,
        "img_url"			=>"//media-cdn.tripadvisor.com/media/photo-o/13/f9/29/73/embassy-suites-by-hilton.jpg",
        "address"			=>"8517 Leesburg Pike",
        "location"			=>"8517 Leesburg Pike,  Vienna, VA 22182",
    )


);



$people = array(

		"diamond"=> array(

			//"Group of 4" 			=>"$565",
			"Triple Room Occupancy"		=>"$375",
			"Double Room Occupancy"	    =>"$590",
            "Single Room Occupancy"		=>"$785"
		),

		"emerald"=> array(
			
		),

);

$package_items = array(

	"diamond_items" => array(
		"R/T Coach Transportation"						        => "checked",
		"Transportation to March on Washington upon arrival"	=> "checked",
		"Hotel Accommodations"								    => "checked",
		"Breakfast Daily "						                => "checked",
		"YOLLO Swag Bag"								        => "checked"
	),

);

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $metas['marchonwashington']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['marchonwashington']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['marchonwashington']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['marchonwashington']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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

        <div class="topcontent" style="background-image: url(<?php echo $event["img_url"]; ?>)">
            <div class="overlay"></div>
            <div class="title">
                <h1><?php echo $event["title"]; ?></h1>
                <p class="subtitle"><?php echo $event["subtitle"]; ?></p>
                <a data-href="#tabs-5" class="btn btn-red open-tab">Pay or Register Now</a>
                <div id="event-timer"></div>
            </div>
        </div>



        <div class="content">
                <div class="date-location">
                    <div id="event_start" data-time='<?php echo $event["date_start"]; ?>' class="col">
                            <?php echo $event["date"]; ?>
                    </div>
                    <div class="col"><?php echo $event["location"]; ?></div>
                </div>


                <div class="colfull">
                    <div id="responsive-tabs">
                    <?php echo $responsive_tabs["overview"]; ?>
                    <div class="tab" aria-label="overview">
                        <h3>The 58th anniversary of the historic March on Washington</h3>

                        <p>YOLLO wants you to Get on the Bus to Washington DC. On August 28, a Commitment March, the 58th anniversary of the March on Washington, will take place at the nation's capital. The very place where Martin Luther King Jr. delivered his famous “I Have a Dream” speech. The greatness of August 1963 is upon us again, and we want you to be a part of history. This march will embrace love, peace, and equality for all. Join us and GET ON THE BUS for this historical march on Washington!</p> 

                        <p>Enjoy a luxury charter to DC, the march, and daily breakfast. Space is limited and tickets will sell out fast, so <a href="#" data-href="#tabs-5" class="open-tab">book now!</a></p>

                    </div> <!-- ./overview -->


                    <?php echo $responsive_tabs["price"]; ?>

                    <div class="tab" aria-label="price">
                        <?php if(isset($geolocation["hotel1"])) :?>
                        <h3>Hotels</h3>
                        <?php foreach($geolocation as $hotel) :?>
                            <div class="hotel-grid">
                                <div class="hg-img">
                                        <figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
                                </div>

                                <div class="hg-body">
                                    <p class="hg-title"><?php echo $hotel["title"]; ?> 

                                    <?php if($hotel["soldout"] == true) :?><span class="sold">** Sold Out **</span><?php endif ?></p>

                                    <address>
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i> 
                                            <a title="<?php echo $hotel["title"]; ?>" target="_blank" href="http://maps.google.com/maps?q=<?php echo $hotel["address"]; ?>+<?php echo $hotel["location"]; ?>"><?php echo $hotel["address"]; ?>,  
                                            <?php echo $hotel["location"]; ?></a>
                                    </address>

                                </div>

                            </div><!-- ./hotel-grid -->
                        <?php endforeach; ?>
                        <hr />
                        <?php endif; ?>
                        


                        <h3>Price</h3>

                        <div class="price-table-container">
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
                                            <li>All rooms are King bed with pull out sofa</li>
                                    </ul>
                                </li>

                                <li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>

                            </ul>

                        </div><!-- price table -->

                        <?php if(isset($package_items["emeral_items"])) :?>
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

                                <li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
                            </ul>
                        </div><!-- price table -->
                        <?php endif; ?>


                    </div><!-- price table container-->



                </div><!-- ./price -->


                <?php echo $responsive_tabs["faqs"]; ?>

                <div class="tab" aria-label="faqs">

                    <h3>Frequently Asked Questions</h3>

                    <div data-accordion-group>	

                        <div class="accordion open" data-accordion>

                            <div data-control>When are the payments due?</div>

                            <div data-content>
                            <p>To reserve a package each group member pays the $29.99 per person fee. The first payment of $100 per person is due November 15, 2021.  The second payment of $100 is due March 10, 2021. The final payment (remaining balance) is due on or before June 1, 2021. Click the "Buy Now" tab to make purchase.</p>

                            </div>
                        </div><!-- end of accordion-->

                    <div class="accordion" data-accordion>

                            <div data-control>What city and where is the charter location?</div>

                            <div data-content>
                            <p> The charter will depart from Montgomery, AL at 6 am. The pick-up location is sent via email closer to the departure date.</p>
                            </div>

                    </div><!-- end of accordion-->

                    <div class="accordion" data-accordion>

                            <div data-control>Will refreshments be served on the bus?</div>

                            <div data-content>
                            <p> Yes, we will have bottle water.</p>
                            </div>

                    </div><!-- end of accordion-->

                    <div class="accordion" data-accordion>

                            <div data-control>Can I bring my own food and drink?</div>

                            <div data-content>
                            <p> Yes, you can load the cooler up and bring it with you. You can't have anything GLASS.</p>
                            </div>

                        </div><!-- end of accordion-->

                        <div class="accordion" data-accordion>

                            <div data-control>Can I bring my children on this trip?</div>

                            <div data-content>
                            <p> Yes, but we would recommend 13 and above.</p>
                            </div>

                        </div><!-- end of accordion-->

                    </div><!-- end of accordion group-->

                </div> <!-- ./faqs -->


                <?php echo $responsive_tabs["photos"]; ?>
                <div class="tab" aria-label="photos">
                        <div id="nanoGallery"></div>
                </div><!-- ./photos -->


                <?php echo $responsive_tabs["buynow"]; ?>
                <div class="tab" aria-label="buy">
                    <h3>Buy Now</h3>
                    <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                    <div class="cognito"></div>

                </div><!-- ./buynow -->

                </div><!-- ./responive-tabs -->

    	</div><!-- end of colfull -->


      </div><!--end of content-->


        <div class="disclosure">

            <?php include 'includes/package-info-generic.inc.php'; ?><br/>

            <strong>Disclaimer</strong> | The term Get on the Bus, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
    </div>


      </div><!--end of right-->

      <aside id="social">
      <?php include 'includes/twitter.inc.php'; ?>
      </aside>


    </div><!--end of container-->

</div><!--end of wrap-->

<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->
<?php include 'includes/scripts.inc.php'; ?>

<script type="text/javascript">

	$(document).ready(function(){
			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',
			//uncomment this line to display one specific album:
			   photoset:'72157714865518023',
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

<script>Cognito.load("forms", { id: "63" });</script>
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
<script type="text/javascript">
	var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '91275943805',
		iframeContainerId: 'eventbrite-widget-container-91275943805',

		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>

<!--google analytics-->

<?php include 'includes/analytics.inc.php'; ?>

<?php ob_end_flush();?>
</body></html>

