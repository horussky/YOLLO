<!-- Load JQuery -->
<script src="js/jquery-2.2.4.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Load Other Scripts -->
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<!--<script src="js/scotchPanels.min.js"></script>-->
<script src="js/jquery.nanogallery.min.js" ></script>
<script src="js/pushy.min.js"></script>
<script src="js/scripts-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>

<script>
	$(function(){
		if($("#accordion section h2.active").length){
			$("#accordion section").addClass("active-section");
		} 
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