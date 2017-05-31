<div id="galleria">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<!-- Galleria Scripts -->
	<script type="text/javascript" src="../js/galleria.js"></script>
    <script type="text/javascript" src="../js/galleria.flickr.js"></script>
	<script>
        Galleria.loadTheme('../js/themes/classic/galleria.classic.js');
        var flickr = new Galleria.Flickr('719452f17113d835553cfa85fa287796');
        // inject a photset into galleria
        flickr.setOptions({
            max: 100, 
            size: 'medium'
        });
    
        flickr.getSet('72157624085188295', { 
            size: 'big'
        }, function(data) {
            $('#galleria').galleria({
                data_source:data,
                autoplay:5000,
                transition:'fade',
                transition_speed: 400,
                width:375
            });
        });
    </script>
</div>
             
             