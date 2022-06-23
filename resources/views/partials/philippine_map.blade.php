<h4>Филиппин улсын сургуулиуд</h4>
<br />
<div id="map" style="height: 500px; width: 100%; padding: 0 40px; margin:0 auto;"></div>
<script type="text/javascript">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: {lat: 12, lng: 125.044}
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
    // ['Welts Phil En Corporation', 10.3425284, 123.9104663, 4],
    // ['AICE - Australian International College of English', -33.873445, 151.207792, 5],
    // ['Lexis English', -26.6526331, 153.0926581, 3],
    // ['Deakin University', -38.1983743, 144.2989046, 2],
    ['Welts Phil En Corporation', 10.3425284, 123.9104663, 1]
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
        var secretMessages = ['Welts Phil En Corporation', 'AICE - Australian International College of English', 'Lexis English', 'Deakin University', 'Strathfield College'];
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