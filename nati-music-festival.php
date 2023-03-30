<?php

if (!ob_start("ob_gzhandler")) ob_start();
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"					=>"Cincinnati Music Festival 2023",
	"subtitle"				=>"Book your package today!",
	"location"				=>"Cincinnati, Ohio",
    "date"					=>"July 21-23, 2023",
    "date_start"            => "July 21, 2023",
	"img_url"				=>"../../images/slides/splash-mmf-cta.jpg",
	"img_alt"				=>"Cincinnati Music Festival"
);

$geolocation = array(

	"hotel1"=> array(
		"title" 			=>"Holiday Inn Cincinnati-Riverfront",
		"address"			=>"600 W 3rd Street",
		"location"			=>"Covington, KY 41011",
		"geolocation"		=>"600 W 3rd Street, Covington, KY 41011",
		"soldout"           =>false,
        "img_url"			=>"https://dynamic-media-cdn.tripadvisor.com/media/photo-o/25/3b/90/8d/hotel-exterior.jpg?w=800&h=-1&s=1",
        "host"              =>true
    ),
    "hotel2"=> array(
		"title" 			=>"Comfort Suites Newport - Cincinnati Riverfront",
		"address"			=>"420 Riverboat Row",
		"location"			=>"Newport, KY 41071",
		"geolocation"		=>"420 Riverboat Row, Newport, KY 41071",
		"soldout"           =>false,
        "img_url"			=>"https://media-cdn.tripadvisor.com/media/photo-o/03/51/42/96/comfort-suites.jpg",
        "host"              =>false
    )
    
);

$people = array(
    "diamond"=> array(
        "Group of 4" 			=>"$865",
        "Group of 3"			=>"$900",
        "Group of 2"			=>"$970",
        "Individual"			=>"$1,175"
    ),

    "emerald"=> array(
        "Group of 4" 			=>"$765",
        "Group of 3"			=>"$800",
        "Group of 2"			=>"$870",
        "Individual"			=>"$1,075"
    )

);
$package_items = array(
	"diamond_items" => array(
		"Hotel Accommodations (Fri-Sun)"			=> "checked",
		"Weekend Concert Tickets"				    => "checked",
		"Grown and Sophisticated Mid Day Cruise"	=> "checked",
		"Meet and Greet Mixer"						=> "checked",
		"Transportation via motorcoach (Birmingham, AL)"			=> "checked",
		"Breakfast Daily"							=> "checked",
		"Additional Hotel nights $275 per night"	=> "checked",
		"YOLLO Gift Bag"							=> "checked"
	),

	"emerald_items" => array(
		"Hotel Accommodations (Fri-Sun)"			=> "checked",
		"Weekend Concert Tickets"					=> "checked",
		"Grown and Sophisticated Mid Day Cruise"	=> "checked",
		"Meet and Greet Mixer"						=> "checked",
		"Transportation via motorcoach (Birmingham, AL)"			=> "ex",
		"Breakfast Daily"							=> "checked",
		"Additional Hotel nights $275 per night"	=> "checked",
		"YOLLO Gift Bag"							=> "checked"
	),

	"Hotel Only" =>"$850/per person"
);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['nati']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['nati']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['nati']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['nati']['canonical']; ?>" rel="canonical" />
    <meta name="author" content="YOLLO Group Services" />
    <meta property="fb:pages" content="117420764961518" />
    <link rel="icon" href="favicon-192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
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
                                <h2 class="h4">Get ready for Cincinnati Music Festival</h2>
                                <p>Let’s just say that the performers and attendees alike were happy to be OUTSIDE which made the 2022 edition the BEST year yet! Janet Jackson and Charlie Wilson along with all the performers for the Cincinnati Music Festival did not disappoint the crowd! Over the years this event has evolved from being a pure jazz concert, to an event that also includes old school hip-hop and R&B.  Beyond the featured acts, this event provides a great meet and greet or mix and mingle atmosphere.</p>

                                <h2 class="h5">8th Annual Grown and Sophisticated Mid-Day Cruise</h2>
                                <p>The 8th Annual Grown and Sophisticated Mid-Day Cruise will happen on the River Queen and will be another MUST ATTEND event during Cincinnati Music Festival Weekend! Enjoy a multi-level paddle-wheel boat cruising the mighty Ohio River, while listening to the livest Hip-Hop and R&amp;B music. Last years' cruise was Mardi Gras themed, however we are returning to the original format of an All White cruise. The cruise is from 2:00 pm – 5:00 pm. Please remember that once we sell out, we will not have any more tickets available.<p>
                                
                                <p>YOLLO is looking forward to another terrific festival in 2023, and we hope you join us and be a part of this special summer occasion. Packages are available now, but they won't last long. Don't wait reserve today for $29.99!</p>

                            </div><!-- ./ overview -->



                            <?php echo $responsive_tabs["price"]; ?>
                            <div class="tab" aria-label="price">

                                <h2 class="h4">Hotels</h2>
                                
                                <?php foreach($geolocation as $hotel) :?>
                                <div class="hotel-grid <?php if($hotel['host'] == true) :?>hotel-grid--host<?php endif; ?>">
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
                            
                                <h2 class="h4">Price</h2>
                                
                                    <div class="price-table-container">
                            
                                    <?php if(count($geolocation["hotel1"]) > 1) :?>
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
                                    <?php endif; ?>
                            
                            
                            
                                    <?php if(count($geolocation["hotel1"]) > 1) :?>
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
                                
                            </div><!-- price table container -->

                            </div><!-- ./ price -->



                            <?php echo $responsive_tabs["faqs"]; ?>
                            <div class="tab" aria-label="faqs">

                                <h2 class="h4">Frequently Asked Questions</h2>
                                
                                <div data-accordion-group>	
                                                
                                    <div class="accordion open" data-accordion>

                                    <div data-control>Does the price listed take care of hotel reservations for all members in either the Diamond or Emerald package or only one person?</div>
                                    <div data-content>
                                        <p>All prices listed are per person. Under the package prices description, all amenities included in your package are per person and includes one (1) room for the group.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>How many concert tickets are included in the package for my group?</div>
                                    <div data-content>
                                        <p>The package includes tickets for both nights of the concerts! That's right you get to attend both nights and its all included in the package price. If you don't plan on attending both nights you can give away or sell the additional night ticket.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>What are the payment due dates for Cincinnati Music Festival Packages?</div>
                                    <div data-content>
                                        <p>To reserve a package each group member pays the $29.99 per person fee. The first payment of $125 is due on or before <strong>December 04, 2022</strong>. The second payment of $150 is due on or before <strong>January 04, 2023</strong>.The final payment (remaining balance) is due on or before <strong>March 04, 2023</strong>. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>What cities will the bus depart from?</div>
                                    <div data-content>
                                        <p>Montgomery, Birmingham, and Huntsville, AL! Don't see you city or state listed? Email us and let's see what we can work out!</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>Where will we be staying that weekend?</div>
                                    <div data-content>
                                        <p>You will two options for 2023. The Holiday Inn Cincinnati Riverfront has been selected as the host property for this wonderful event! The Comfort Suites Newport - Cincinnati  will be our over flow property once the host property is sold out and trust us it will sell out. Lock in your reservation today. </p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>Where is the cruise being held?</div>
                                    <div data-content>
                                        <p>The cruise is being hosted on the River Queen Riverboat. The cruise is located at BB Riverboats, 101 Riverboat Row, Newport, KY 41071</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>Can I purchase tickets to the cruise independent of the hotel package deal?</div>
                                    <div data-content>
                                        <p>Yes! Just follow the same booking procedures as you would if booking the hotel package.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>What time does the cruise start and how much does it cost?</div>
                                    <div data-content>
                                        <p>The cruise will sail from 2:30 pm - 5:00 pm, however boarding begins at 1:00 pm. The cost of the cruise is $60 for General Admission and $125 for VIP. For a limited time there are Early Bird tickets available at $40 for General Admission and $95 VIP.  VIP grants no line waiting entrance, Open bar, and light food during the cruise. Ticket prices increase the week of the cruise.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>Does the price take care of hotel reservation for all 4 members in either Diamond or Emerald package or only one person?</div>
                                    <div data-content>
                                        <p>All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per person.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                </div><!-- end of accordion group-->


                            </div><!-- ./ faqs -->


                            <?php echo $responsive_tabs["photos"]; ?>
                            <div class="tab" aria-label="photos">
                                <div id="nanoGallery"></div>
                            </div><!-- ./ photos -->


                            <?php echo $responsive_tabs["buynow"]; ?>
                            <div class="tab" aria-label="buy">
                                
                                <h2 class="h4">Buy Package Now</h2>
                                
                                <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                                
                                <div class="cognito"></div>
                                
                            </div><!-- ./ buy now -->

                            <input type="radio" name="tabs" id="tab-6"><label for="tab-6"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Cruise</label>
                            
                            <div class="tab" aria-label="buy">
                                <h2 class="h4">Buy Cruise Now</h2>   
                                <div class="mb-20" id="eventbrite-widget-container-390245814737"></div>
                            </div><!-- ./ buy now -->

                    </div><!-- end of responsive-tabs -->

                </div><!-- end of colfull -->

            </div><!--end of content-->
    
    
    <div class="disclosure">
      		<?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> The terms Cincinnati Music Festival, Cincinnati Music Fest, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by P&amp;G's and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Cincinnati Music Festival Organizers productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
    </div>

</div><!--end of right-->

      <aside id="social">
      <?php include 'includes/twitter.inc.php'; ?>
      </aside>

    </div><!--end of container-->
</div><!-- end of wrap -->
<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include 'includes/scripts.inc.php'; ?>
<script type="text/javascript">
	$(function(){

        //nano
        $("#nanoGallery").nanoGallery({
            kind: 'flickr',
            userID: '50836209@N03',

                //uncomment this line to display one specific album:
            photoset:'72157712606706052',

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
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

<script type="text/javascript">
	var exampleCallback = function() {
		console.log('Order complete!');
	};

	window.EBWidgets.createWidget({
		// Required
		widgetType: 'checkout',
		eventId: '390245814737',
		iframeContainerId: 'eventbrite-widget-container-390245814737',
        
		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "7" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>