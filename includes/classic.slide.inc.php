<?php
$set = '72157632961614148';
?>
	<link href="../js/themes/classic/galleria.classic.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<!-- Galleria Scripts -->
	<script type="text/javascript" src="../js/galleria.js"></script>
    <script type="text/javascript" src="../js/galleria.flickr.js"></script>
	
    <script type="text/javascript">

    // Load the classic theme
    Galleria.loadTheme('../js/themes/classic/galleria.classic.js');
	
    // Initialize Galleria
    Galleria.run('#galleria', {
		
		transition: 'fade',
		autoplay: true,
		carousel: true,
		swipe: true,
		thumbnails: true,
		responsive:true,
		height: 500,
		showInfo: false,
		

        flickr: 'set:<?php echo $set ?>',
        
        flickrOptions: {
            sort: 'date-posted-desc',
			max:100,
			imageSize: 'medium',
			description: true
        }
    });
    </script>
    
    
    
<div id="galleria"></div>