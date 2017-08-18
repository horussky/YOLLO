<footer>
	<div class="footer-grid">
		<div class="foot-about">
			<h5>About</h5>
			<p>YOLLO Group Services is an IATAN certified company that provides affordable and fun all-inclusive travel packages. We get you to some of the best and biggest concerts, parties, cruises, and sports events around the country.</p>
			<p><a class="chev-link" href="/about" title="Learn more about YOLLO">Read more about YOLLO</a></p>
		</div>

		<div class="foot-events">
			<h5>Upcoming Events</h5>
              	<?php $i=0; foreach($feature_event as $event): if ($i == 3) break; ?>
					<?php if($event["end"] > $now): $i++;  ?>
                        <div class="event">
                        	<div class="event-img">
								<a href="<?php echo $event["link"]; ?>" title="<?php echo $event["title"]; ?>">
									<img src="<?php echo $event["img"]; ?>" />
								</a>
							</div>
                           	<div class="event-content">
								<h5><?php echo $event["title"]; ?></h5>
								<p><?php echo $event["date"]; ?></p>
								<p><a class="learnmore" href="<?php echo $event["link"]; ?>" title="See more about <?php echo $event["title"]; ?>">View Details</a></p>
							</div>
                        </div>
                    <?php  endif; ?>
                <?php endforeach;?>
			
			
			
		</div>

		<div class="foot-contact">
			<h5>Contact Us</h5>
			<ul>
				<li class="foot-phone"><a href="tel:8889469655">(888) 946-9655</a></li>
				<li class="foot-phone"><a href="tel:8889469655">(888) 946-9655</a></li>
				<li class="foot-email"><a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></li>
				<li class="foot-address">P.O. Box 240613,<br> Montgomery, AL 36124</li>
			</ul>
			
		</div>

		<div class="foot-sponsor">
			<h5>Sponsors</h5>
		</div>

		<div class="foot-copyright"></div>
	</div><!-- end of footer grid -->
</footer>






<footer>
<div class="foot-wrap">


	<div class="foot-header">
		<div class="footer-logo">
			<img src="../images/yollo-logo-2014-white.png" title="YOLLO Group Services" />
			<span class="foot-slogan">You Only Live Life Once.</span>
		</div>
		<hr />
	</div>

	<div class="foot-columns">

		<div class="foot-col1">
			<p><strong>Contact</strong></p>
			 &copy; <?php echo date('Y');?> <strong>YOLLO Group Services</strong>. All Rights Reserved.<br />
                        <strong>Phone:</strong> <a href="tel:8889469655">(888) 946-9655</a><br />
						<strong>Email: </strong><a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a><br />
                        <a class="chev-link" href="http://eepurl.com/bgY6P" target="_blank" title="Sign up for our Newsletter">Sign up for the latest on deals and giveaways.</a>
            
		

		</div>

		<div class="foot-col2">
			<p><strong>About</strong></p>
			YOLLO Group Services is an IATAN certified company that provides affordable and fun all-inclusive travel packages. We get you to some of the best and biggest concerts, parties, cruises, and sports events around the country.  <a class="chev-link" href="/about" title="Learn more about YOLLO">Learn More</a>
		</div>



		<div class="foot-col3">
			<p><strong>Connect with Us</strong></p>
			<!-- Social Media-->
	
			
			<a href="http://www.facebook.com/yollogsinc" target="_blank" title="Become a fan of Yollo Group Services"><i class="fa fa-facebook-square fa-4x" aria-hidden="true"></i></a> 

			<a href="https://twitter.com/YOLLOGSINC" target="_blank" title="Follow Yollo Group Services on Twitter"><i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i></a>

			<a href="https://instagram.com/yollogsinc" target="_blank" title="Follow YOLLO Group Services on Instagram"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i></a>
			
			<a href="https://www.snapchat.com/add/yollogsinc" target="_blank" title="Follow YOLLO Group Services on Snapchat"><i class="fa fa-snapchat fa-4x" aria-hidden="true"></i></a>
			<br><br>
			<p><strong>Accepted Payments</strong></p>
			<i class="ccs ccs-visa"><span></span></i> <i class="ccs ccs-mastercard"><span></span></i> <i class="ccs ccs-discover"><span></span></i> <i class="ccs ccs-amex"><span></span></i>
			
			
			
		</div>
	</div>

	<div class="foot-affiliates">

		<a title="Urbanham" href="http://www.urbanham.com" target="_blank">
			<img align="left" src="../images/urbanham-logo-small.png"  height="35" alt="urbanham" />
		</a>
		
		<a title="Whats Happening Birmingham" href="http://www.whatshappeningbham.com/" target="_blank">
			<img align="left" src="../images/whats-happening-bham-logo.png" height="35" alt="whats happening bham" />
		</a>

		<a title="Bag Voyaage" href="http://www.bagvoyaage.com" target="_blank">
			<img align="left" src="../images/bag-voyage-logo.png"  height="35" alt="iatan" />
		</a>

		<a title="IATAN affiliate" href="http://www.iatan.org" target="_blank">
			<img align="left" src="../images/iatan-logo.gif"  height="35" alt="iatan" />
		</a>

		<a title="Travel Insurance with AIG" href="https://www.travelguard.com/agentlink.asp?ta_arc=01721624&pcode=MYTG&agencyemail=onelife@goyollo.com" target="_blank">
			<img align="left" src="https://www.travelguard.com/uploadedImages/travelguardcom/03tgdirect/Branding/images/header/TG-logoHD.png" height=35 border=0>
		</a>

		

		<a target="_blank" title="Click for the Business Review of YOLLO Group Services, Inc., a Travel Agencies & Bureaus in Montgomery AL" href="https://www.bbb.org/central-alabama/business-reviews/travel-agencies-and-bureaus/yollo-group-services-in-montgomery-al-90038616#sealclick"><img alt="Click for the BBB Business Review of this Travel Agencies & Bureaus in Montgomery AL" style="border: 0; height: 40px " src="https://seal-centralalabama.bbb.org/seals/black-seal-96-50-whitetxt-yollogroupservicesinc-90038616.png" /></a>
		
		

	</div>
</div>

</footer>
