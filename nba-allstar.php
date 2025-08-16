<?php
    include 'includes/functions.inc.php';
    include 'includes/meta.config.inc.php';

    // Load the event configuration
    $event_config = require 'config/events/conf_nba-allstar.php';

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
                            <h2><?php echo $event["title"]?></h2>

                            <p>All-Star Weekend 2026 is coming to Los Angeles, and YOLLO Group Services is bringing you an unforgettable experience. This is your chance to witness the biggest names in basketball, enjoy exclusive parties, and immerse yourself in the electrifying atmosphere of All-Star Weekend. YOLLO Group Services provides premium hotel accommodations in prime locations, ensuring you stay close to the action. Our packages include access to top-tier events such as the NBA All-Star Game, the Celebrity Game, and the Slam Dunk Contest. You will also have the opportunity to attend exclusive parties featuring celebrity hosts, top DJs, and high-energy entertainment. <a data-href="#tabs-5" class="open-tab">secure your spot now! </a></p>

                            <p>We take care of all the details so you can enjoy a seamless and stress-free experience. Whether you are a basketball fanatic, a nightlife enthusiast, or someone looking for an epic weekend getaway, this is the event you do not want to miss.</p>

                            
                            <h3>Experience the Ultimate All-Star Weekend</h3>
                            <p>Join us for the ultimate entertainment experience as we take you on a thrilling journey through the city's most exhilarating events. With our exclusive access, you'll have the opportunity to attend the hottest parties. One event that you definitely don't want to miss is our highly acclaimed Colors and Cocktails event. Secure your tickets now as availability is limited. Once we sell out, no more tickets will be available. Don't miss out on the festivities - <a data-href="#tabs-5" class="open-tab">reserve your package today!</a></p>

                        </div> <!-- ./ overview -->

                        
                        <?php echo $responsive_tabs["price"]; ?>
                        <div class="tab" aria-label="price">

                            <h2 class="h4">Hotels</h2>

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

                            <h2 class="h4">Price</h2>
                                        
                            <div class="price-table-container">

                                <?php if(isset($people["diamond"])) :?>
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



                                <?php if(isset($people["emerald"])) :?>
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

                            <style>
                                .partypass{
                                    display: flex;
                                    flex-flow: row nowrap;
                                    @media(max-width: 990px){
                                        flex-flow: row wrap;
                                    }
                                    justify-content: space-between;
                                    column-gap: 1rem;
                                }    

                                .partypass--col{
                                    font-size: 14px;
                                }
                                @media(max-width: 768px){
                                    .partypass{
                                        flex-flow: row wrap;
                                    }   
                                } 
                            </style>

                            <hr />

                            <h4>Party Pass Options: </h4>
                            <p>These options are not the same and are separate from the all-inclusive options listed above; and are intended for those not in need of hotel accommodations. </p>

                            <div class="partypass">
                                <div class="partypass--col">
                                    <p class="lead">Rookie - $1,650 </p>
                                    <ul>
                                        <li>Friday Night Party</li>
                                        <li>NBA Crossover Ticket</li>
                                        <li>Colors and Cocktails</li>
                                        <li>Comedy Show - acts announced closer to event</li>
                                        <li>Saturday Night Party (Celebrity Hosted)</li>
                                    </ul>
                                </div>

                                <div class="partypass--col">
                                    <p class="lead">Rising Star - $2,350 </p>
                                    <ul>										
                                        <li>NBA Crossover Ticket</li>
                                        <li>Colors and Cocktails</li>
                                        <li>Comedy Show - acts announced closer to event</li>
                                        <li>Saturday Night Party (Celebrity Hosted)</li>
                                        <li>Sunday Night Party</li>
                                        <li>All Star Celebrity Game Ticket</li>
                                        <li>All Star Practice Game ticket</li>							
                                    </ul>
                                </div>

                                <div class="partypass--col">
                                    <p class="lead">All-Star - $3,050 (best seller)</p>
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
                            </div><!-- end of .partypass -->

                        </div><!-- ./ price -->


                        <?php echo $responsive_tabs["faqs"]; ?>
                        <div class="tab" aria-label="faqs">

                            <h2 class="h4">Frequently Asked Questions</h2>
                            
                            <div data-accordion-group>	
                                
                                <div class="accordion open" data-accordion>

                                    <div data-control>What is included with the NBA Crossover formerly Jam Session Tickets</div>
                                    <div data-content>
                                    <p>NBA Crossover formerly known as Jam Session  is a global event and brand that highlights all aspects of culture that surround the NBA – art, music, fashion and technology. NBA players and legends will be making appearances during the event. It provides fans who are attending this event with an opportunity to come out and experience part of NBA All-Star.</p>
                                    </div>

                                </div><!-- end of accordion-->


                                <div class="accordion" data-accordion>

                                    <div data-control>What should I expect at the NBA All-Star Practice & Media Day presented by AT&T?</div>
                                    <div data-content>
                                    <p>This unique, behind-the-scenes event is your opportunity to see the NBA’s biggest stars interviewed by media from around the world. Fans can then watch the entire NBA All-Star Game squad train for Sunday’s showcase.</p>
                                    </div>

                                </div><!-- end of accordion-->


                                <div class="accordion" data-accordion>

                                    <div data-control>When are the payments due?</div>
                                    <div data-content>
                                    <p>After registration the first payment of $125 is due July 18, 2025.  The next payment of $250 is due September 1, 2025. The next payment of $700 is due November 20, 2025.  The final payment (remaining balance) is due on or before November 1, 2025.</p>
                                    </div>

                                </div><!-- end of accordion-->

                                <div class="accordion" data-accordion>

                                    <div data-control>Who won the All- Star game the last time it was hosted in Los Angeles?</div>
                                    <div data-content>
                                    <p>The game was hosted at the Staples Center. The game final score was Team LeBron 148 vs Team Stephen 145.  The MVP was LeBron James with the Cleveland Cavaliers. He had 29, 10 rebounds, and 8 assists.  It was his third time winning the award since the 2008 All-Star Game.</p>
                                    </div>

                                </div><!-- end of accordion-->

                                <div class="accordion" data-accordion>

                                    <div data-control>When is the NBA All-Star Game?</div>
                                    <div data-content>
                                    <p>NBA All-Star Weekend 2026 weekend will start on February 13, 2026 in Los Angeles, CA. The game will be played on February 15, 2026 at the Staples Center. </p>
                                    </div>

                                </div><!-- end of accordion-->


                                <div class="accordion" data-accordion>

                                    <div data-control>How are All-Stars selected?</div>
                                    <div data-content>
                                    <p>The All-Star reserves are selected by a vote of the NBA's 30 head coaches. The starters were selected by weighing the fan, player and media votes. Fan votes account for 50% of the score, and players and media each account for 25%.</p>
                                    </div>

                                </div><!-- end of accordion-->


                                <div class="accordion" data-accordion>

                                    <div data-control>What are Celebrity Game Tickets?</div>
                                    <div data-content>
                                    <p>The celebrity game tickets give you access to the annual basketball game that features retired NBA players, WNBA players, actors, musicians and athletes from sports other than basketball. Past celebrities whom have hosted parties have been the likes of six-time GRAMMY-nominated singer-songwriter Shaboozey, WNBA's Allisha Gray, Pro Football Hall of Fame wide receiver Terrell Owens, Jamie Foxx and Kevin Hart. The NBA All-Star Celebrity Game presented by Ruffles is an exhibition featuring musicians, actors, comedians, as well as WNBA players and NBA Legends.</p>
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
                                                
                                <h2 class="h4">Buy Now</h2>

                                <div class="pay-form">
                                    <p>Please use the form below to complete your booking for <?php echo $event["title"]?>. If there are any questions or concerns please contact us by phone at (888) 946-9655 or email <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></p>
                                    
                                    <script src="https://www.cognitoforms.com/f/seamless.js" data-key="NiNAkf4LukqBZOHDFOMsiQ" data-form="9"></script>

                                </div><!-- end of pay-form -->

                            </div><!-- ./ buy now -->

                    </div><!-- end of #responsive-tabs-->

                </div><!-- end of colfull -->

            </div><!--end of content-->


            <div class="disclosure">
                <?php include 'includes/package-info-generic.inc.php'; ?>
                <p><strong>Disclaimer</strong> | The terms NBA All-Star, NBA All-Star Weekend, NBA, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the National Basketball Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any National Basketball Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.</p>
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

    
<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
</body></html>