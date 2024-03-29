<?php if(!ob_start("ob_gzhandler")) ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YOLLO Group Services | Contact us today at 888.9GO.YOLLO </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="kOTF00jD1h-y1D-FbPleHrCN6vETPoBmtCFu7-in-KE" />
    <meta name="Description" content="YOLLO Group Services Inc. is a travel company committed to offering affordable all-inclusive travel packages for everyone." />
	<meta name="Keywords" content="YOLLO Group Services, travel packages, all-inclusive, Urban Fantasy Cruise, Urban Fiesta Weekend, Essence Festival, NBA All-Star Weekend, Urban Ski Weekend, Magic City Classic, Travel Services, Black College Reunion, BCR, HBCU Football" />
    <link href="css/splash.css?v=<?php $t=time(); echo $t; ?>" rel="stylesheet" />
    <link rel="icon" href="favicon-192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="favicon-180.png" sizes="180x180">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body>
<style>

</style>

<section class="container-fluid slider-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="row">
					<div class="col-md-12">
						<div class="slider-logo">
							<img src="../../images/yollo-logo-white.svg" />
						</div>
					</div>
				</div>
				
				<div class="row">
						<div class="col-lg-7">
							<div class="swiper">
								<!-- Additional required wrapper -->
								<?php class Slide {
									public $img;
									public $link;
									public $text;

									public function __construct($img, $link, $text) {
										$this->img = $img;
										$this->link = $link;
										$this->text = $text;
									}
								}

								$slides = array(
									new Slide(
										"images/slides/splash-alumni.jpg", //img
										"/alumni-getaway-cruise", //link
										"View Alumni Getaway Cruise"), //text
									new Slide(
										"images/slides/splash-gsc.jpg", //img
										"/nati-music-festival", //link
										"View Grown & Sophisticated"), //text
									new Slide(
										"images/slides/splash-essence.jpg", //img
										"/essence-festival", //link
										"View Essence Festival"), //text
									new Slide(
										"images/slides/splash-shamrock.jpg", //img
										"/shamrock-sea-escape", //link
										"View Shamrock Cruise"), //text
									new Slide(
										"images/slides/splash-nba.jpg", //img
										"/nba-allstar", //link
										"View NBA All-Star"), //text
									new Slide(
										"images/slides/splash-daytopia.jpg", //img
										"/daytopia", //link
										"View Daytopia"), //text
									new Slide(
										"images/slides/splash-urban-fiesta-puerto-rico.jpg", //img
										"/urban-fiesta-puerto-rico", //link
										"View Urban Fiesta PR"), //text
									new Slide(
										"images/slides/splash-instagram.jpg", //img
										"https://www.instagram.com/yollogsinc/", //link
										"Follow Us") //text
								);

								echo '<div class="swiper-wrapper">';
								foreach ($slides as $slide) {
									echo '<div class="swiper-slide"><img src="' . $slide->img . '"><a href="' . $slide->link . '">' . $slide->text . '</a></div>';
								}
								echo '</div>';
								?>
								
								<!-- If we need navigation buttons -->
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>
							</div>
						</div>

						<!-- inactive

						<div class="swiper-slide"><img src="images/slides/splash-partygras.jpg"><a href="/partygras">View PartyGras</a></div>
										
										<img src="images/slides/splash-alumni.jpg">
										<img src="images/slides/splash-partygras.jpg">
										<img src="images/slides/splash-urban-ski.jpg">
                                        <img src="images/slides/splash-urban-fiesta.jpg">
										<img src="images/slides/splash-egypt.jpg">
										<img src="images/slides/splash-dubai.jpg">
										<img src="images/slides/splash-nba.jpg">
										<img src="images/slides/splash-shamrock.jpg">
                                        <img src="images/slides/splash-follow.jpg">
                                        <img src="images/slides/splash-talk-tues.jpg">
                                        <img src="images/slides/splash-instagram.jpg">
										<img src="images/slides/splash-fade-to-may.jpg">
										<img src="images/slides/splash-italy.jpg">
										<img src="images/slides/splash-london-to-paris.jpg">
										<img src="images/slides/splash-gsc.jpg">
										<img src="images/slides/splash-mcc.jpg">
                                        <img src="images/slides/splash-tourney.jpg"><
										<img src="images/slides/splash-gob.jpg">
										<img src="images/slides/splash-groove.jpg">
										<img src="images/slides/splash-mmf.jpg">
										<img src="images/slides/splash-ufw.jpg">
										inactive -->

						<div class="col-lg-5">
							<div class="slider-content">
								<h1>We Are Taking You To Major Events</h1>
								<p>We provide all-inclusive packages for events such as Essence Festival, Urban Fiesta, and  NBA All-Star. Many packages include excursions, party passes, drink specials, and unbelievable fun!</p> 

								<p class="largemargin">Do you want offers? It’s simple, subscribe and gain access to package discounts and early bird specials. </p>

								<a href="/home" class="btn  btn-red ">View All Events</a>

								<a href="http://eepurl.com/bgY6P" class="btn btn--round btn-outlined" title="Sign Up today!" target="_blank" >Subscribe Now</a>
								
							</div>
						</div>
				</div>

			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.container-fluid -->


<section class="container-fluid why-us">

	<div class="container">
	
		<div class="row">
			<div class="col-lg-12 largemargin"><h2 class="text-center">Why Choose Us?</h2></div>
		</div>
	
		<div class="row">

				<div class="col-lg-4 text-center">
					<i class="fa fa-usd fa-2x mediummargin" aria-hidden="true"></i>
					<h3>Amazing Value</h3>
					<p>We provide fun and affordable all-inclusive packages for some of the best destinations across and out of the country.</p>
				</div><!-- ./col -->

				<div class="col-lg-4 text-center">
					<i class="fa fa-plane fa-2x mediummargin" aria-hidden="true"></i>
					<h3>Exciting and Diverse</h3>
					<p>Our events range from Celebrity Hosted Parties, Party Cruises, Tropical getaways, and more. Wherever there is sexy and fun, we are there!</p>
				</div><!-- ./col -->

				<div class="col-lg-4 text-center">
					<i class="fa fa-thumbs-up fa-2x mediummargin" aria-hidden="true"></i>
					<h3>Quality Service</h3>
					<p>Any events, all-inclusive or hosted, will always have a company liaison on site to assist with any customer needs and questions.</p>
				</div><!-- ./col -->

		</div><!-- /.row -->
	
	</div><!-- /.container -->

</section><!-- /.container-fluid -->



<section class="container-fluid testimonials">

	<div class="container">
	
		<div class="row">
			<div class="col-lg-12 largemargin text-center">
				<h2>Testimonials</h2>
			</div>
		</div>
	
		<div class="row justify-content-center">

				<div class="col-8">
			
						<div class="test">
							<ul>

							<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<p>PartyGras weekend was so much fun, especially the comedy show. We were in stitches from start to finish. The Boat party was really fun! Will be back and would really recommend this company for future events! A+</p>
									<hr>
									<p class="author">ShaRhonda S</p>
								</li>

								<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<p>I enjoyed the boat trip in Montgomery this weekend. The only complaint I had was two djs playing basic the same thing. Level two could've been a R&B /Old school music. Glad I got the V.I.P ticket tho. Will return again for sure.</p>
									<hr>
									<p class="author">Phil H</p>
								</li>

								<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<p>I enjoyed the boat trip in Montgomery this weekend. The only complaint I had was two djs playing basic the same thing. Level two could've been a R&B /Old school music. Glad I got the V.I.P ticket tho. Will return again for sure.</p>
									<hr>
									<p class="author">Phil H</p>
								</li>


								<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<p>Hats off to YOLLO Group Services! The All White Boat party was 🔥🔥🔥 and it was topped off with awesome seats for the concert.</p>
									<hr>
									<p class="author">Demarcus G</p>
								</li>
							
							
								<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<p>Enjoyed the cruise in Cincinnati. Special thanks to Matthew and his security staff for all of their efforts. Chicago love to you.</p>
									<hr />
									<p class="author">Regina O.</p>
									
								</li>
								
								<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<p>Urban Fiesta with YOLLO Group Services was such a great experience. Puerto Rico, the parties, and quality of service, was amazing. I will be doing business with this company again, very soon! 5 star experience for sure.</p>
									<hr />
									<p class="author">Brenda P.</p>
								</li>
								
								
								<li>
									<div class="stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
							
									</div>
									<p>YOLLO always keep it lit for Urban Ski Weekend!!! Great service, comedy show was funny AF, and a lot of parties to attend. Definitely bringing more of my people next time.</p>
									<hr />
									<p class="author">Jamaal W.</p>
								</li>
								
								
							</ul>
						</div>

					
				</div><!-- /.col-->

		</div><!-- /.row -->
	
	</div><!-- /.container -->

</section><!-- /.container-fluid -->
<?php


//array for top links



$top_links = array('home' => 'Home', 'about'=>'About Us', 'faq'=>'FAQs', 'contact'=>'Contact');
?>
<footer class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<?php foreach($top_links as $top_link => $link_name): ?>
						<li class="<?php echo $top_link ?>">
							<a title="<?php echo $link_name ?>" href="/<?php echo $top_link ?>">
								<?php echo $link_name ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<p class="text-center">&copy; <?php date_default_timezone_set("America/Chicago"); echo date("Y") ?> YOLLO Group Services, Inc. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>

<?php include 'includes/scripts.inc.php'; ?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script type="text/javascript" src="js/unslider-min.js"></script>
<script type="text/javascript">

$(function(){
	$('.event-slider').unslider({
		arrows: false,
		autoplay: true,
		infinite: true,
		nav: true,
		delay:5000,
		animation: "fade"
	})
	
	$(".testimonials .test,.event-slider").fadeIn(2000);
	
	$('.testimonials .test').unslider({
		arrows: true,
		autoplay: true,
		infinite: true,
		nav: true,
		delay:8000,
		animation: "fade"
	}) 
});


const swiper = new Swiper('.swiper', {
  // Optional parameters

  direction: 'horizontal', //'horizontal' | 'vertical'
  loop: true,
  autoplay: {
   delay: 5000,
  },

  // If we need pagination

  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar

  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>


<!--google analytics-->
<?php include 'includes/analytics.inc.php'; ?>
<?php ob_end_flush(); ?>
<!--End of google analytics-->
</body></html>