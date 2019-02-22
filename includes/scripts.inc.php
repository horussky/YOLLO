<!-- Load JQuery -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="js/jquery-ui.min.js"></script>

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
    
    var etime = document.getElementById('event_start');
    if (etime !== undefined && etime !== null) { 
        var timeData = etime.getAttribute('data-time');
        var timeFormatted = new Date(Date.parse(timeData)).toISOString().slice(0,10);
    }
    
	$(function(){
        
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
    		"transitionSpeed": 400
		});

	});
</script>


<script>
//es6 
const navHeader = document.querySelector('.header');

// Get the offset position of the navbar
const sticky = navHeader.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function yolloStickyNav() {
  if (window.pageYOffset > sticky) {
    navHeader.classList.add("nav--sticky");
  } else {
    navHeader.classList.remove("nav--sticky");
  }
}
  
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {
  yolloStickyNav()
};

//const headerHeight = $('.header').height() + 'px';
//$('.container').css('margin-top', headerHeight);

console.log(sticky);
console.log(navHeader);

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