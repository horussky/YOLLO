<?php

if(!ob_start("ob_gzhandler")) ob_start();
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(

	"title"				=>"Spring Fling Festival 2022",
	"subtitle"			=>"The ultimate mature music lover day trip",
	"location"			=>"Mobile, Al",
	"date"				=>"April 2, 2022",
    "date_start"        =>"April 2, 2022",
	"img_url"			=>"../../images/slides/splash-spring-bling-cta.jpg",
	"img_alt"			=>"Spring Fling Music Festival"
);

$geolocation = array(

	

);



$people = array(

		"diamond"=> array(

			//"Group of 4" 			=>"$565",
			//"Group of 3"			=>"$595",
			//"Group of 2"			=>"$650",
			"Individual"			=>"$99"
		),

		"emerald"=> array(
			
		),

);

$package_items = array(

	"diamond_items" => array(
		"R/T Coach Transportation"						=> "checked",
		"Specialty Margaritas (while they last)"		=> "checked",
		"Admission Tickets"								=> "checked",
		"Dedicated Area At Concert"						=> "checked",
		"Light Food Upon Arrival"						=> "checked",
		"No Wait Entrance"								=> "checked",
		"YOLLO Swag Bag"								=> "checked"
	),


);

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $metas['springfling']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['springfling']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['springfling']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['springfling']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <meta property="fb:pages" content="117420764961518" />
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body id="event-pg">

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
                        <h3>A Day-Trip and Concert for Grown Folks and Music Lovers</h3>

                        <p>YOLLO is taking you to the 26th Annual Spring Fling Music Festival in Mobile, AL. If you love Blues music, this is the day-trip you are looking for! Pack up your coolers and lawn chairs because Spring Fling is an outdoor concert event. With over 30 Southern Soul and R&B artists, this is an event that will not disappoint.</p> 

                        <p>Enjoy our luxury charter to the event while sipping margaritas. Once at the event, enjoy some light food and get ready to hear your favorite artists perform on stage. Space is limited and tickets will sell out fast, so act now!</p>

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
                            <p>Payment in full is due at sign-up. Click the "Buy Now" tab to make purchase.</p>

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
                            <p> Yes, margaritas will be on deck! They will be available for the ride down only.</p>
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
                            <p> No. This event includes all adult festivities and alcohol not meant for minors.</p>
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
                    <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                    <?php /* ?><div class="cognito"></div><?php */ ?>

                    <div class="mb-20" id="eventbrite-widget-container-122806352105"></div>
                
                    <hr class="mt-20" />

                </div><!-- ./buynow -->

                </div><!-- ./responive-tabs -->

    	</div><!-- end of colfull -->


      </div><!--end of content-->


        <div class="disclosure">

            <?php include 'includes/package-info-generic.inc.php'; ?><br/>

            <strong>Disclaimer</strong> | The term Spring Fling, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. The use of any logos, words, trademarks, or photos have been used for Descriptive Purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
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
			   photoset:'72157713580712203',
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

<script>Cognito.load("forms", { id: "33" });</script>
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
<script type="text/javascript">
	var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '122806352105',
		iframeContainerId: 'eventbrite-widget-container-122806352105',

		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>

<!--google analytics-->

<?php include 'includes/analytics.inc.php'; ?>

<?php ob_end_flush();?>
</body></html>

