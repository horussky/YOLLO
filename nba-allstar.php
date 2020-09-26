<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
	"title"				=>"All-Star Weekend 2021",
	"subtitle"			=>"Here we come Circle City!",
	"location"			=>"Indianapolis, IN",
	"date"				=>"Postponed",
    "date_start"        =>"February 12, 2021",
	"img_url"			=>"../../images/slides/splash-nba-cta.jpg",
);

$geolocation = array(
 
	"hotel1"=> array(
		"title" 		=>"Candlewood Suites NW",
		"address"		=>"7455 Woodland Dr",
		"location"		=>"Indianapolis, IN 46278",
		"soldout"	    => false,
		"img_url"		=>"//media-cdn.tripadvisor.com/media/photo-s/17/d7/03/29/guest-room.jpg"
	),
    "hotel2"=> array(
		"title" 		=>"Indianapolis Marriott East",
		"address"		=>"7202 East 21st St",
		"location"		=>"Indianapolis, IN 46219",
		"soldout"	    => false,
		"img_url"		=>"//cache.marriott.com/marriottassets/marriott/INDDT/inddt-pool-3602-hor-feat.jpg"
	)

);

$people = array(
		"diamond"=> array(
			"Group of 4" 			=>"$2,690",
			"Group of 3"			=>"$2,855",
			"Group of 2"			=>"$2,965",
			"Individual"			=>"$3,665"
		),

		"emerald"=> array(
			"Group of 4" 			=>"$890",
			"Group of 3"			=>"$1,055",
			"Group of 2"			=>"$1,165",
			"Individual"			=>"$1,865"
		),

		"options"=>array(
			"Celebrity Game" 							=> "$200",
			"Practice Game" 							=> "$150",
			"Rising Star Challenge Game" 	            => "$100",
			"Jam Session" 								=> "$50",
			"Hotel Only"							    => "$2000/room"
		),

);
$package_items = array(
    "diamond_items" => array(
        "Hotel Accommodations (Fri-Sun)"                    => "checked",
        "Complimentary Night"                               => "checked",
        "My Black Is Beauiful Film Review"                  => "checked",
        "Celebrity Hosted Party Ticket (Friday)"            => "checked",
        "Celebrity Hosted Party Ticket (Sunday)"            => "checked",
        "NBA Crossover Tickets"                             => "checked",
       "Slam Dunk Contest Ticket (Saturday)"                => "checked",
        "Three Point Contest Ticket (Saturday)"             => "checked",
        "Skills Challenge Ticket (Saturday)"                => "checked",
        "Celebrity Game Ticket"                             => "checked",
        "Mid-Day Party"                                     => "checked",
        "YOLLO Gift Bag"                                    => "checked"
    ),

	"emerald_items" => array(
		"Hotel Accommodations (Fri-Sun)"					=> "checked",
		"Complimentary Night"								=> "checked",
		"My Black Is Beauiful Film Review"		            => "checked",
		"Celebrity Hosted Party Ticket (Friday)"	        => "ex",
		"Celebrity Hosted Party Ticket (Sunday)"	        => "checked",
		"NBA Crossover Tickets"								=> "checked",
		"Slam Dunk Contest Ticket (Saturday)"               => "ex",
        "Three Point Contest Ticket (Saturday)"             => "ex",
        "Skills Challenge Ticket"                           => "ex",
		"Celebrity Game Ticket"								=> "ex",
		"Mid-Day Party"										=> "checked",
		"YOLLO Gift Bag"									=> "checked"
			),

	"Hotel Only" =>"$2000/room"
);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $metas['nba']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['nba']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['nba']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['nba']['canonical']; ?>" rel="canonical" />
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
                        <h3><?php echo $event["title"]?></h3>

                        <p>YOLLO is taking you to the Circle City in 2021. Yes, Indianapolis will host the 70th annual All-Star game after a 36-year hiatus. This three-day weekend event attracts lots of celebrities. Most of these celebs host some of the hottest parties in the city. </p>

                        <p>YOLLO has an all-inclusive package to get you face-to-face with these celebrities. From party passes, hotel stay, and celebrity-hosted events, YOLLO is here for your turn up!</p>

                        <h4>Party with YOLLO during All Star Weekend</h4>
						<p>This annual event brings out the BEST of the BEST and the parties are just as GREAT! Events cover the city all weekend long and YOLLO puts you in the LIVEST paries and events throughout the weekend.  One of our fan favorite events is our Colors and Cocktails event! Last years' tribute to Kobe Byrant painting was a HUGE hit and in 2021 it will be even better! Please remember that once we sell out, we will not have any more tickets available. Lock in your package today for only 29.99 and enjoy our convenient payment plan.<p>

                        <p>Allow us to give you an exciting travel experience during the All-Star Weekend. Make sure you explore our hotel and pricing options and book with YOLLO Group Services today!</p>

                    </div> <!-- ./ overview -->

                    
                    <?php echo $responsive_tabs["price"]; ?>
                    <div class="tab" aria-label="price">


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

                            <h3>Price</h3>
                                    
                                    <div class="price-table-container">

                                    <?php if(isset($geolocation["hotel1"])) :?>
                                    <section class="price-table">
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
                                    </section>  
                                    <?php endif; ?>



                                    <?php if(isset($geolocation["hotel2"])) :?>
                                    <section class="price-table">
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
                                    </section>
                                <?php endif; ?>
                                
                                </div><!-- price table container -->
                                

                                <div class="clearfix">
                                    <h4>Party Pass Options: </h4>
                                    <p>These options are not the same and are separate from the all-inclusive options listed above; and are intended for those not in need of hotel accommodations. </p>

                                    <p class="lead">Rookie - $550 </p>
                                    <ul>
                                        <li>Friday Night Party</li>
                                        <li>NBA Crossover Ticket</li>
                                        <li>Colors and Cocktails</li>
                                        <li>Comedy Show - acts announced closer to event</li>
                                        <li>Saturday Night Party (Celebrity Hosted)</li>
                                    </ul>

                                    <p class="lead">Rising Star - $750 </p>
                                    <ul>										
                                        <li>NBA Crossover Ticket</li>
                                        <li>Colors and Cocktails</li>
                                        <li>Comedy Show - acts announced closer to event</li>
                                        <li>Saturday Night Party (Celebrity Hosted)</li>
                                        <li>Sunday Night Party</li>
                                        <li>All Star Celebrity Game Ticket</li>
                                        <li>All Star Practice Game ticket</li>							
                                    </ul>

                                    <p class="lead">All-Star - $950 (best seller)</p>
                                    <ul>

                                        <li>Friday Night Party (Celebrity Hosted)</li>
                                        <li>NBA Crossover Ticket</li>
                                        <li>Colors and Cocktails</li>
                                        <li>Comedy Show - acts announced closer to event</li>
                                        <li>Saturday Night Party (Celebrity Hosted)</li>
                                        <li>Sunday Night Party</li>
                                        <li>All Star Celebrity Game Ticket</li>
                                        <li>All Star Practice Game ticket</li>	
                                        <li>All Star Rising Star Challenge</li>								
                                    </ul>
                                </div>

                    </div><!-- ./ price -->


                    <?php echo $responsive_tabs["faqs"]; ?>
                    <div class="tab" aria-label="faqs">

                        <h3>Frequently Asked Questions</h3>
                        
                        <div data-accordion-group>	
                            
                            <div class="accordion open" data-accordion>

                                <div data-control>What is included with the NBA Crossover formerly Jam Session Tickets</div>
                                <div data-content>
                                <p>NBA Crossover formerly known as Jam Session  is a global event and brand that highlights all aspects of culture that surround the NBA – art, music, fashion and technology. NBA players and legends will be making appearances during the event. It provides fans who are attending this event with an opportunity to come out and experience part of NBA All-Star.</p>
                                </div>

                            </div><!-- end of accordion-->


                            <div class="accordion" data-accordion>

                                <div data-control>What should I expect at theNBA All-Star Practice & Media Day presented by AT&T?</div>
                                <div data-content>
                                <p>This unique, behind-the-scenes event is your opportunity to see the NBA’s biggest stars interviewed by media from around the world. Fans can then watch the entire NBA All-Star Game squad train for Sunday’s showcase.</p>
                                </div>

                            </div><!-- end of accordion-->


<div class="accordion" data-accordion>

                                <div data-control>When are the payments due?</div>
                                <div data-content>
                                <p>After registration the first payment of $125 is due October 10, 2020.  The second payment of $250 is due November 15, 2020. The final payment (remaining balance) is due on or before December 18, 2020.</p>
                                </div>

                            </div><!-- end of accordion-->

                            <div class="accordion" data-accordion>

                                <div data-control>Who won the All- Star game the last time it was hosted in Indianapolis?</div>
                                <div data-content>
                                <p>The game was hosted in the Hoosier Dome. The game final score was East 129 vs West 140. Ralph Sampson was the MVP of the game.</p>
                                </div>

                            </div><!-- end of accordion-->

                            <div class="accordion" data-accordion>

                                <div data-control>When is the NBA All-Star Game?</div>
                                <div data-content>
                                <p>NBA All-Star Weekend 2021 weekend will start on Feb. 12, 2021 in Indianapolis, IN. The game will be played on Feb. 14, 2021 at Bankers Life Fieldhouse. </p>
                                </div>

                            </div><!-- end of accordion-->


                            <div class="accordion" data-accordion>

                                <div data-control>How are All-Stars selected?</div>
                                <div data-content>
                                <p>The starting lineups are selected each year by fans around the world, who can vote online at nba.com, the NBA app and on social media. The reserves are selected by NBA head coaches. If a player is unable to play due to injury, his replacement is selected by NBA Commissioner Adam Silver. If a team has a starter who's unable to play, the head coach of that All-Star team will select his replacement from his bench (including any Commissioner-appointed players).</p>
                                </div>

                            </div><!-- end of accordion-->


                            <div class="accordion" data-accordion>

                                <div data-control>What are Celebrity Game Tickets?</div>
                                <div data-content>
                                <p>The celebrity game tickets give you access to the annual basketball game that features retired NBA players, WNBA players, actors, musicians and athletes from sports other than basketball. Past celebrities whom have hosted parties have been the likes of P. Diddy, Young Jezzy, Floyd Mayweather, Jamie Foxx and Kevin Hart. The NBA All-Star Celebrity Game presented by Ruffles is an exhibition featuring musicians, actors,
comedians, as well as WNBA players and NBA Legends.</p>

                                </div>

                            </div><!-- end of accordion-->


                            <div class="accordion" data-accordion>

                                <div data-control>I would like to bring my child to the NBA All Star Weekend Games, does he/she need a ticket?</div>
                                <div data-content>
                                <p>Children under the age of 2 are admitted free of charge. Children under 2 years of age are not guaranteed a seat and may be required to sit on a parent's/guardian's lap. Children 2 and over must have ticket.</p>
                                </div>

                            </div><!-- end of accordion-->



                        </div><!-- end of accordion group-->


                            
                    </div> <!-- ./ faqs -->


                    <?php echo $responsive_tabs["photos"]; ?>
                    <div class="tab" aria-label="photos">
                            <div id="nanoGallery"></div>
                    </div><!-- ./ photos -->



                    <?php echo $responsive_tabs["buynow"]; ?>
                    <div class="tab" aria-label="buy">

                        <h3>Buy Package</h3>
                        <p>Please use the form below to complete your booking. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>

                        <div class="cognito"></div>


                    </div><!-- ./ buy now -->
                    <?php /* ?>
                    <input type="radio" name="tabs" id="tab-6"><label for="tab-6"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Cruise</label>
                    <div class="tab" aria-label="buy">
                        <h3>Buy Cruise Now</h3>
                        <div class="mb-20" id="eventbrite-widget-container-60099606541"></div>
                    </div><!-- ./ buy now -->
                    
                    
                    
                    <input type="radio" name="tabs" id="tab-6">
                    <label for="tab-6"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Buy Cruise</label>
                    <div class="tab" aria-label="buy cruise">
                        <h3>Lavish Life All Black Yacht Party</h3>
                        <p>February 16, 2019</p>

                        <img style="width:50%" src="https://cdn.evbuc.com/eventlogos/75965891/photogrid1540043645747.jpg" alt="…">
                        
                        
                        <h5>Cruise #1</h5>
                        <ul>
                            <li>Boarding: 11:45 AM</li>
                            <li>Party time: 12 PM - 3 PM </li>
                            <li>Light buffet served during cruise</li>
                            <li>Cash bar</li>
                            <li>General Admission $75</li>
                        </ul>
                        
                        <h5>Cruise #2</h5>
                        <ul>
                            <li>Boarding: 7:45 PM</li>
                            <li>Party time: 8 PM - 11 PM</li>
                            <li>Light buffet served during cruise</li>
                            <li>Cash bar</li>
                            <li>General Admission $75</li>
                        </ul>

                        <a href="https://www.eventbrite.com/e/2019-all-star-lavish-life-all-black-yacht-party-tickets-51615616699?ref=ebtnebtckt" target="_blank"><img src="https://www.eventbrite.com/custombutton?eid=51615616699" alt="Eventbrite - 2019 ALL STAR LAVISH LIFE ALL BLACK YACHT PARTY" /></a>
                    </div><!-- ./ buy cruise -->
                    
                    <?php */ ?>
                    


                </div><!-- end of #responsive-tabs-->



        </div><!-- end of colfull -->



			</div><!--end of content-->


			<div class="disclosure">
			<?php include 'includes/package-info-generic.inc.php'; ?><br/>
            <strong>Disclaimer</strong> | The terms NBA All-Star, NBA All-Star Weekend, NBA, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the National Basketball Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any National Basketball Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
      </div><!-- end of disclosure -->



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

			//nano
			$("#nanoGallery").nanoGallery({
				kind: 'flickr',
				userID: '50836209@N03',

				 //uncomment this line to display one specific album:
			   photoset:'72157632729662634',

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
		eventId: '60099606541',
		iframeContainerId: 'eventbrite-widget-container-60099606541',

		// Optional
		iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
		onOrderComplete: exampleCallback  // Method called when an order has successfully completed
	});
</script>
<script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
<script>Cognito.load("forms", { id: "9" });</script>

    
<script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
    
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>
