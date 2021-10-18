<!-- Load JQuery 
<script src="js/jquery-2.2.4.js"></script>-->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<!-- Load Other Scripts -->
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.nanogallery.min.js" ></script>
<script src="js/pushy.min.js"></script>
<script src="js/scripts-min.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/jquery.countdown.min.js"></script>

<script>
    
    //format date for countdown script
    //date captured from data attr from PHP variable on page
    //must be outside jquery function (normal JS)
 
	$(function(){
        
        var etime = document.getElementById('event_start');
        if (etime !== undefined && etime !== null) { 
            var timeData = etime.getAttribute('data-time');
            var timeFormatted = new Date(Date.parse(timeData)).toISOString().slice(0,10);
        }

        //event timer
        //must be within jquery function
        if($("#event-timer").length){

            $("#event-timer").countdown(timeFormatted, function(event) {

                var $this = $(this).html(event.strftime(
                    ''
                    + '<span class="timer-week">%w <em>Weeks</em></span>'
                    + '<span class="timer-day">%D <em>Days</em></span>'
                    + '<span class="timer-hour">%H <em>Hours</em></span>'
                    //+ '<span class="timer-mins">%M <em>Mins</em></span>'
                    //+ '<span class="timer-seconds">%S <em>Sec</em></span>'
                ));
            });

        }
        
		
		//accordion
		$('[data-accordion-group] [data-accordion]').accordion({
    		"transitionSpeed": 0
		});

	});
</script>


<!-- Schema Org Social Media Markup | Helps with SEO-->
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Organization",
  "name": "YOLLO Group Services, Inc.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "P.O. Box 240613",
    "addressLocality": "Montgomery",
    "addressRegion": "Alabama",
    "postalCode": "36124"
  },
  "telephone": "(888) 946-9655",
  "sameAs" : [ 
  	"https://www.facebook.com/yollogsinc",
    "https://twitter.com/yollogsinc",
	"https://instagram.com/yollogsinc",
	"https://www.snapchat.com/add/yollogsinc"
    ]
}
</script>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '240028790578426'); 
    fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" src="https://www.facebook.com/tr?id=240028790578426&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->