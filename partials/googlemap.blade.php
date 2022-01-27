 <div class="map-wrap">
    <div id="map"></div>
    <?php $map_info = get_field('google_map'); ?>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCaWsgDJv6JN_2sMD9OZ54E3lZ0SSziDoo&libraries=geometry,places,drawing"></script>    
    <script>
        var lat = {{$map_info['lat']}};
        var lng = {{$map_info['lng']}};
        var options = {
            center: new google.maps.LatLng(lat, lng),
            zoom: 18,
            scrollwheel: false,
            mapTypeControl: false,
            streetViewControl: false,
            panControl: false,
            zoomControl: true,
            zoomControlOptions: {
              style: google.maps.ZoomControlStyle.SMALL,
              position: google.maps.ControlPosition.RIGHT_BOTTOM
            }
        };
        var div = document.getElementById('map'),
            map = new google.maps.Map(div, options),
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(lat, lng),
              map: map,
              title: '{{ get_bloginfo('name') }}'
            });


        var infoContent = document.createElement('div');
            infoContent.innerHTML = '<h5>{{ get_bloginfo('name') }}</h5><span>{{ $map_info['address'] }}</span>';
            infoContent.className = 'infoBox';

        var infoWindow = new google.maps.InfoWindow({
          content: infoContent
        });

        google.maps.event.addListener(marker, 'mouseover', function (e) {
          infoWindow.open(map,this);
        });

    </script>
</div>