<?php
ob_start("ob_gzhandler");
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

$event = array(
    "title"                    => "The Tourney Weekend 2022",
    "subtitle"                => "B-More Here We COME! It will be BIG!",
    "location"                => "Baltimore, MD",
    "date"                    => "February 24 - 27, 2022",
    "date_start"            => "February 25, 2022",
    "img_url"                => "../../images/slides/splash-tourney-cta.jpg",
    "img_alt"                => "The Tourney"
);

$geolocation = array(

    "hotel1" => array(
        "title"                  => "Crowne Plaza Baltimore",
        "address"                => "105 West Fayette Street",
        "location"               => "Baltimore, MD 21201",
        "soldout"                => false,
        "img_url"                => "https://media-cdn.tripadvisor.com/media/photo-m/1280/17/8d/34/5d/exterior.jpg"
    ),
);

$people = array(
    "diamond" => array(
        "Group of 4"             => "$505",
        "Group of 3"            => "$580",
        "Group of 2"            => "$690",
        "Individual"            => "$1300"
    ),

    "emerald" => array(
        "Group of 4"             => "$450",
        "Group of 3"            => "$510",
        "Group of 2"            => "$635",
        "Individual"            => "$1060"
    ),

    "options" => array(
        "Party Bus"             => "$150",
        "Hotel Only"            => "$915/weekend"
    ),

);

$package_items = array(
    "diamond_items" => array(
        "Hotel Accommodations (Thurs-Sun)"                => "checked",
        "Friday Night Celebrity Party Pass"                => "checked",
        "Saturday Night Party Pass"                        => "checked",
        "Saturday Day Party"                            => "checked",
        "Saturday After Hours Party"                    => "checked",
        "One Bottle of Ciroc per group"                    => "checked",
        "YOLLO Swag Bag"                                => "checked"
    ),

    "emerald_items" => array(
        "Hotel Accommodations (Thurs-Sun)"                => "checked",
        "Friday Night Celebrity Party Pass"                => "ex",
        "Saturday Night Party Pass"                        => "ex",
        "Saturday Day Party"                            => "checked",
        "Saturday After Hours Party"                    => "checked",
        "One Bottle of Ciroc per group"                    => "checked",
        "YOLLO Swag Bag"                                => "checked"
    )

);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $metas['tourney']['title']; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo $metas['tourney']['desc']; ?>" />
    <meta name="keywords" content="<?php echo $metas['tourney']['keywords']; ?>" />
    <meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
    <link href="<?php echo $metas['tourney']['canonical']; ?>" rel="canonical" />
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

                                <h3>Get ready for <?php echo $event["title"] ?> in Baltimore, MD. </h3>

                                <p>After kicking COVID-19 to the curb the CIAA tournament is taking it's talants furthur North to Baltimore in 2022. Baltimore will definitely bring new energy to this already exciting event and the Baltimore’s nightlife is a PERFECT match for the attendees of this event! YOLLO Group Services is making the Tourney a fun-filled weekend for you to remember. This basketball tournament has become one of the most attended events among HBCU’s in the nation. </p>
                                <p>Fans will get their basketball fix during the day-time, while others enjoy all the night-time events. This means parties galore! You may spot a celebrity or two crashing and/or hosting several of these parties. You cannot go wrong booking with YOLLO Group Services for the Tourney Weekend 2022. </p>
                                <p>If parties and celebrities are what you are looking for this weekend's events are definitely what you want to attend. Make sure you explore our Hotel and Pricing options and reserve your package today before it's too late! </p>

                            </div><!-- ./overview -->


                            <?php echo $responsive_tabs["price"]; ?>
                            <div class="tab" aria-label="price">

                                <h3>Hotels</h3>

                                <?php foreach ($geolocation as $hotel) : ?>
                                    <div class="hotel-grid">
                                        <div class="hg-img">
                                            <figure style="background:url(<?php echo $hotel['img_url']; ?>); background-size: cover; background-position: center;"></figure>
                                        </div>
                                        <div class="hg-body">
                                            <p class="hg-title"><?php echo $hotel["title"]; ?>
                                                <?php if ($hotel["soldout"] == true) : ?><span class="sold">** Sold Out **</span><?php endif ?></p>

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

                                    <?php if (count($people["diamond"]) > 1) : ?>
                                        <div class="price-table">
                                            <ul class="price">
                                                <li class="header">Diamond <span>Package</span></li>
                                                <?php foreach ($package_items['diamond_items'] as $key => $value) : ?>
                                                    <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                                <?php endforeach; ?>
                                                <li class="people-price">
                                                    <ul class="priceblock">
                                                        <?php foreach ($people['diamond'] as $key => $value) : ?>
                                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if ($key != "Individual") : ?><em>/per person</em><?php endif; ?></span></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <li><a data-href="#tabs-5" class="btn btn-success open-tab">Book Today</a></li>
                                            </ul>
                                        </div><!-- price table -->
                                    <?php endif; ?>



                                    <?php if (count($people["emerald"]) > 1) : ?>
                                        <div class="price-table">
                                            <ul class="price">
                                                <li class="header">Emerald <span>Package</span></li>
                                                <?php foreach ($package_items['emerald_items'] as $key => $value) : ?>
                                                    <li class="<?php echo $value; ?>"><?php echo $key; ?></li>
                                                <?php endforeach; ?>
                                                <li class="people-price">
                                                    <ul class="priceblock">
                                                        <?php foreach ($people['emerald'] as $key => $value) : ?>
                                                            <li><?php echo $key; ?> <span><?php echo $value ?><?php if ($key != "Individual") : ?><em>/per person</em><?php endif; ?></span></li>
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
                                            <p>After registration the first payment of $125 is due July 15, 2021. The second payment of $100 is due September 15, 2021  The final payment (remaining balance) is due on or before December 10, 2021.</p>
                                        </div>

                                    </div><!-- end of accordion-->

                     

                                    <div class="accordion" data-accordion>

                                        <div data-control>How do I lock in the prices and amenities advertised today?</div>
                                        <div data-content>
                                            <p>It only takes $29.99 to lock in your spot today! It's that simple!</p>
                                        </div>

                                    </div><!-- end of accordion-->

                                    <div class="accordion" data-accordion>

                                        <div data-control>Does the entire group pay the $29.99 Reservation fee?</div>
                                        <div data-content>
                                            <p>Yes. All prices are per person. The reservation fee secures your spot on the package, and is independent from the package price.</p>
                                        </div>

                                    </div><!-- end of accordion-->

                                    <div class="accordion" data-accordion>

                                        <div data-control>Can I make payments before my due date?</div>
                                        <div data-content>
                                            <p>Yes. Our payment plans are designed to help you pay over time. If you want to pay more frequent than the established dates that's great.</p>
                                        </div>

                                    </div><!-- end of accordion-->


                                    <div class="accordion" data-accordion>

                                        <div data-control>Does the price take care of hotel reservation for all 4 members in either package or only one person?</div>
                                        <div data-content>
                                            <p>All prices listed are per person. Under the package prices description, all amenities included in your package is what's included per person. That means the group will share one room, but receive individual party passes and other amenities included in the package. </p>
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


                        </div><!-- .responsive-tabs  -->




                    </div><!-- end of col1 -->



                </div>
                <!--end of content-->


                <div class="disclosure">
                    <?php include 'includes/package-info-generic.inc.php'; ?><br />
                    <strong>Disclaimer</strong> | The terms Central Intercollegiate Athletic Association, CIAA, and CIAA Weekend, as well as all associated graphics and/or logos, are registered trademarks of their respective owners and are used herein for factual description purposes only. We are in no way associated with or authorized by the Central Intercollegiate Athletic Association and neither this production nor its affiliates have licensed or endorsed us to sell goods and/or services in conjunction with any Central Intercollegiate Athletic Association productions. The use of any logos, words, trademarks, or photos have been used for descriptive purposes only and not to show endorsement or permission to use, to promote the sale of any tickets. We are not affiliated with, nor do we have any licenses or strategic alliances with, nor are we authorized by any box office, promoter, venue, theatre, stadium, hotel, sporting team or sporting association. All and any copyrights, trademarks, trade names used within this web site are for descriptive purposes only. We are not acting on the authority of or by the permission of any of the above mentioned entities. We are able to provide access to tickets for events through our contacts and various sources.
                </div><!-- end of disclosure -->



            </div>
            <!--end of right-->

            <aside id="social">
                <?php include 'includes/twitter.inc.php'; ?>
            </aside>


        </div>
        <!--end of container-->
    </div>
    <!--end of wrap-->


    <!-- Footer  -->
    <?php include 'includes/footer.inc.php'; ?>
    <!-- End of Footer  -->

    <!-- Global Scripts -->
    <?php include 'includes/scripts.inc.php'; ?>
    <script type="text/javascript">
        $(document).ready(function() {

            //nano
            $("#nanoGallery").nanoGallery({
                kind: 'flickr',
                userID: '50836209@N03',

                //uncomment this line to display one specific album:
                photoset: '72157632957250953',

                // uncomment this line to display full photostream (v5.0.0):
                // photoset:'none',

                thumbnailWidth: 115,
                thumbnailHeight: 'auto',
                thumbnailAlignment: 'left',
                thumbnailLabel: {
                    display: false,
                    displayDescription: false,
                    position: 'overImageOnBottom'
                },

                thumbnailHoverEffect: 'borderLighter'
            });


        });
    </script>


    <script src="https://services.cognitoforms.com/s/NiNAkf4LukqBZOHDFOMsiQ"></script>
    <script>
        Cognito.load("forms", {
            id: "10"
        });
    </script>

    <!--google analytics-->
    <?php include 'includes/analytics.inc.php'; ?>
</body>

</html>