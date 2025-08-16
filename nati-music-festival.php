<?php

include 'includes/functions.inc.php';

// Load the event configuration
$event_config = require 'config/events/conf_nati.php';

// Access configuration data
$event = $event_config['event'];
$geolocation = $event_config['geolocation'];
$people = $event_config['people'];
$package_items = $event_config['package_items'];
$metas = $event_config['metas'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['description']; ?>" />
    <meta name="keywords" content="<?php echo $metas['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['canonical']; ?>" rel="canonical" />
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

                    <!-- Event Hero -->
                    <div class="event-hero" style="background-image:url(<?php echo $event["img_url"]; ?>)">
                        <div class="event-hero__details">
                            <h1 class="event-hero__title"><?php echo $event["title"]; ?></h1>
                            <p class="event-hero__location"><?php echo $event["location"]; ?></p>
                            <a data-href="#tabs-5" class="btn btn-red event-hero__btn open-tab">Book Now</a>
                            <div id="event_start" data-time='<?php echo $event["date_start"]; ?>' class="event-hero__date"><?php echo $event["date"]; ?> </div>
                            <div id="event-timer" class="event-hero__timer"></div>
                        </div>	
                    </div>
                    <!-- Event Hero -->

                <div class="content">

                    <div class="colfull">

                        <div id="responsive-tabs">

                            <?php echo $responsive_tabs["overview"]; ?>
                            <div class="tab" aria-label="overview">
                                <h2>Cincinnati Music Festival 2026 Is Going to Be Epic!</h2>
                                <p>Prepare for the biggest weekend of music, culture, and electrifying energy at the Cincinnati Music Festival 2026! This legendary festival has brought icons like Beyoncé, Bruno Mars, and Kendrick Lamar to the stage—and next year's lineup will be even more unforgettable. With YOLLO Group Services, you won't just attend; you'll dominate the weekend with exclusive VIP access, luxury stays, and premium events. Spots fill fast—<a data-href="#tabs-5" href="#" class="open-tab">book now</a> to guarantee your place at the hottest festival of the year!</p>

                                <h3>Elevate Your Experience with the All-White Mid-Day Cruise</h3>
                                <p>Want to take your festival weekend to the next level? Say less! Step aboard the stunning River Queen with BB Riverboats for our exclusive All-White Grown & Sophisticated Mid-Day Cruise. Glide along the Ohio River, vibing to top-tier music while soaking in breathtaking views of the Cincinnati skyline. Limited tickets available —once they're gone, they're GONE! Don't wait—secure your spot for this 2:30 PM - 5:00 PM luxury experience before it sells out!</p>

                                <h3>More Than Music—A Full Weekend of VIP Treatment & Culture</h3>
                                <p>With YOLLO's premium festival packages, you don't just get a ticket—you get the ultimate weekend. Stay in luxury hotels, savor Cincinnati's best eats, and party with an elite crowd of music lovers. We handle the details—you enjoy nonstop VIP access, seamless accommodations, and legendary events. This isn't just a concert; it's the experience of a lifetime. <a data-href="#tabs-5" href="#" class="open-tab">Grab your package now</a> and get ready for three days of pure magic!</p>

                                <p>YOLLO can't wait to bring the heat in 2026—will you be there? Don't just dream about it—make it happen!</p>

                                <table class="itinerary">
                                    <caption>Event Lineup</caption>
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Performers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Friday, July 24</td>
                                            <td>
                                                <li>tbd</li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Saturday, July 25</td>
                                            <td>
                                                <li>tbd</li>
                                                </td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
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
                                        <?php if($hotel["soldout"] == true) :?><span class="sold"> Sold Out </span><?php endif ?></p>

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
                                        <p>To reserve a package each group member pays the $100.00 per person fee. The first payment of $125 is due on or before <strong>September 10, 2025</strong>. The second payment of $150 is due on or before <strong>January 10, 2026</strong>.The final payment (remaining balance) is due on or before <strong>March 10, 2026</strong>. If the announced payment dates have passed contact us for our current payment plan. Any payments after the due date will incur late fees and is subject to cancellation.</p>
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
                                        <p>You will two options for 2025. The Holiday Inn Cincinnati Riverfront has been selected as the host property for this wonderful event! The Comfort Suites Newport - Cincinnati  will be our over flow property once the host property is sold out and trust us it will sell out. Lock in your reservation today. </p>
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
                                        <p>The cruise will sail from 2:45 pm - 5:00 pm, however boarding begins at 2:15 pm. The cost of the cruise is $60 for General Admission and $125 for VIP. For a limited time there are Early Bird tickets available at $40 for General Admission and $95 VIP.  VIP grants no line waiting entrance, Open bar, and light food during the cruise. Ticket prices increase the week of the cruise.</p>
                                    </div>

                                    </div><!-- end of accordion-->
                                    
                                    
                                    <div class="accordion" data-accordion>

                                    <div data-control>Does the price take care of hotel reservation for all group members in either Diamond or Emerald package or only one person?</div>
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

                            <input type="radio" name="tabs" id="tab-6"><label for="tab-6"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Book Cruise</label>
                            
                            <div class="tab" aria-label="buy">
                                <h2 class="h4">Buy Cruise Now</h2>   
                                <div class="mb-20" id="eventbrite-widget-container-1534369643909"></div>
                            </div><!-- ./ buy now -->

                    </div><!-- end of responsive-tabs -->

                </div><!-- end of colfull -->

            </div><!--end of content-->
    
    
    <div class="disclosure">
        <?php include 'includes/package-info-generic.inc.php'; ?>
        <p><strong>Disclaimer</strong> The terms Cincinnati Music Festival, Cincinnati Music Fest, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by P&amp;G's and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Cincinnati Music Festival Organizers productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.</p>

        <p><strong>Mid-Day Cruise</strong> |  Please be advised that the Grown and Sophisticated "All White" Mid-Day Cruise is a rain or shine event, and all ticket sales are final with no refunds. The cruise will embark aboard BB Riverboats' "River Queen," located at 101 Riverboat Row, Newport, Kentucky 41071, just minutes from downtown Cincinnati. While the "All White" attire theme adds to the event's elegance, it is preferred but not mandatory. Please note that event details, including entertainment and scheduling, are subject to change without prior notice.</p>
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
            photoset:'72177720328384256',
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
		widgetType: 'checkout',
		eventId: '1534369643909',
		iframeContainerId: 'eventbrite-widget-container-1534369643909',
		iframeContainerHeight: 425,  
		onOrderComplete: exampleCallback
	});
</script>
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "78" });</script>

<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->
</body></html>