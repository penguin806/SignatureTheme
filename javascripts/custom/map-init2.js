jQuery(document).ready(function($) {
        google.maps.event.addDomListener(window, 'load', mapinit);
                
        function mapinit() {

            $('.signature-map-wrap').each(function(){
                var land_color = $(this).data('land-color');
                var water_color = $(this).data('water-color');
                var containment = $(this).data('containment');
                var lattitude = $(this).data('lattitude');
                var longitude = $(this).data('longitude');
                var marker_image = $(this).data('marker-image');


                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
                    scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(lattitude, longitude), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    //styles: [{"stylers":[{"visibility":"simplified"}]},{"stylers":[{"color":land_color}]},{"featureType":"water","stylers":[{"color":water_color},{"lightness":7}]},{"elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":25}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]}]
                    styles: [{"stylers":[{"hue":"#B61530"},{"saturation":60},{"lightness":-40}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"water","stylers":[{"color":"#B61530"}]},{"featureType":"road","stylers":[{"color":"#B61530"},{}]},{"featureType":"road.local","stylers":[{"color":"#B61530"},{"lightness":6}]},{"featureType":"road.highway","stylers":[{"color":"#B61530"},{"lightness":-25}]},{"featureType":"road.arterial","stylers":[{"color":"#B61530"},{"lightness":-10}]},{"featureType":"transit","stylers":[{"color":"#B61530"},{"lightness":70}]},{"featureType":"transit.line","stylers":[{"color":"#B61530"},{"lightness":90}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById(containment);

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                
                var markerimage = marker_image;
                
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lattitude, longitude),
                    map: map,
                    title: '',
                    icon: markerimage
                });
            });
            
        }

});