<?php
$set = '72157632729673352';
?>
<link href="../js/themes/classic/galleria.classic.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Galleria Scripts -->
	<script type="text/javascript" src="../js/galleria-1.3.6.min.js"></script>
    <script type="text/javascript" src="../js/plugins/flickr/galleria.flickr.min.js"></script>
	
    <script type="text/javascript">

    // Load the classic theme
    Galleria.loadTheme('../js/themes/classic/galleria.classic.min.js');
	
	
	Galleria.run('#galleria', {
		
		transition: 'fade',
		autoplay: true,
		carousel: true,
		easing: 'galleriaIn',
		swipe: true,
		thumbnails: true,
		responsive:true,
		height: 500,
		showInfo: false,
		overlayBackground:'#bf1e2e',
		
		flickr: 'set:<?php echo $set ?>',
		flickrOptions: {
			sort: 'date-posted-asc',
			max:100,
			imageSize: 'medium',
			description: true
		}
	});
	
    </script>
    
    
    
<div id="galleria"></div>