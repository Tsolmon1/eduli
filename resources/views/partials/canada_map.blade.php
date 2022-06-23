<div class="heading">  
    <span class="heading-title">Канадын сургуулиуд</span>
    <div class="heading-line"></div>
</div>
<br />
<div id="map" style="height: 500px; width: 100%; padding: 0 40px; margin:0 auto;"></div>
<script type="text/javascript">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: {lat: 55, lng: -98}
        });
        setMarkers(map);
        }

    // var bounds = {
    //     north: -25.363882,
    //     south: -31.203405,
    //     east: 131.044922,
    //     west: 125.244141
    // };
    
    var beaches = [
    ['College of new Caledonia', 53.904466, -122.7861437, 4],
    ['Renison University College', 43.4689507, -80.5475089, 5],
    ['Alexander College', 49.2296381, -123.0018334, 3],
    ['SAIT Polytechnic', 51.0658805, -114.091428, 2],
    ['Centennial College', 43.785433, -79.226459, 1]
    ];
    
    function setMarkers(map) {
        var image = {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
        };
        // Display the area between the location southWest and northEast.
        // map.fitBounds(bounds);
        var secretMessages = ['College of new Caledonia', 'Renison University College', 'Alexander College', 'SAIT Polytechnic', 'Centennial College'];
        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
        };
        // var lngSpan = bounds.east - bounds.west;
        // var latSpan = bounds.north - bounds.south;
        for (var i = 0; i < beaches.length; ++i) {
            
            var beach = beaches[i];
            var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3]
            });
            
            // var marker = new google.maps.Marker({
            // position: {
            //     lat: beach[1], lng: beach[2]
            // },
            // map: map
            // });
            attachSecretMessage(marker, secretMessages[i]);
        }
    // }
        }
// Attaches an info window to a marker with the provided message. When the
// marker is clicked, the info window will open with the secret message.
    function attachSecretMessage(marker, secretMessage) {
    var infowindow = new google.maps.InfoWindow({
        content: secretMessage
    });

    marker.addListener('click', function() {
        infowindow.open(marker.get('map'), marker);
    });
    }
</script>
<!--ipa local=> AIzaSyD75z4j9vzLgkS7nwS5xnb-YA_cw-3Zxfo -->
<!--ipa online=> AIzaSyAP_Yjfd3uYDur8UYZ5nBgkKOZOs0AmcH0 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP_Yjfd3uYDur8UYZ5nBgkKOZOs0AmcH0&callback=initMap" async defer> </script>
<br />