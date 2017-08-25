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
			<ul class="fa-ul">
				<li class="foot-phone"><i class="fa-li fa fa-phone-square" aria-hidden="true"></i> <a href="tel:8889469655">(888) 946-9655</a></li>
				<li class="foot-email"> <i class="fa-li fa fa-envelope" aria-hidden="true"></i> <a href="mailto:onelife@goyollo.com">onelife@goyollo.com</a></li>
				<li class="foot-address"> <i class="fa-li fa fa-map" aria-hidden="true"></i>P.O. Box 240613,<br> Montgomery, AL 36124</li>
				
				<li><i class="fa-li fa fa-share" aria-hidden="true"></i>
					<a href="http://www.facebook.com/yollogsinc" target="_blank" title="Become a fan of Yollo Group Services"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a> 

					<a href="https://twitter.com/YOLLOGSINC" target="_blank" title="Follow Yollo Group Services on Twitter"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>

					<a href="https://instagram.com/yollogsinc" target="_blank" title="Follow YOLLO Group Services on Instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>

					<a href="https://www.snapchat.com/add/yollogsinc" target="_blank" title="Follow YOLLO Group Services on Snapchat"><i class="fa fa-snapchat fa-2x" aria-hidden="true"></i></a>
				</li>
			</ul>
			
		</div>

		<div class="foot-sponsor">
			<h5>Sponsors</h5>
			<div class="sponsors">
				<a class="urbanham" title="Urbanham" href="http://www.urbanham.com" target="_blank"><img src="../images/urbanham-logo-small.png" /></a>
				<a class="whatshappening" title="Whats Happening Birmingham" href="http://www.whatshappeningbham.com/" target="_blank"><img src="../images/whats-happening-bham-logo.png" /></a>
				<a class="bagvoy" title="Bag Voyaage" href="http://www.bagvoyaage.com" target="_blank"><img src="../images/bag-voyage-logo.png" /></a>
				<a class="travelguard" title="Travel Insurance with AIG" href="https://www.travelguard.com/agentlink.asp?ta_arc=01721624&pcode=MYTG&agencyemail=onelife@goyollo.com" target="_blank"><img src="../images/travel-guard-logo.png" /></a>
				<a class="iata" title="IATA affiliate" href="http://www.iatan.org" target="_blank"><img src="../images/iata-logo.png" /></a>
				<a class="bbb" target="_blank" title="Click for the Business Review of YOLLO Group Services, Inc., a Travel Agencies &amp; Bureaus in Montgomery AL" href="https://www.bbb.org/central-alabama/business-reviews/travel-agencies-and-bureaus/yollo-group-services-in-montgomery-al-90038616#sealclick"><img src="../images/bbb-logo.png" /></a> 
			</div>
			
		</div>

		<div class="foot-copyright small">&copy; <?php echo date('Y'); ?> <strong>YOLLO Group Services, Inc</strong>. All Rights Reserved.</div>
		
		
	</div><!-- end of footer grid -->
</footer>
