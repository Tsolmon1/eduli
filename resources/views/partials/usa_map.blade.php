<div class="heading">
    <a href="/allschools">Америкийн нэгдсэн улсын сургуулиуд</a>
</div>
<br />
<div id="map" style="height: 500px; width: 100%; padding: 0 40px; margin:0 auto;"></div>
<script type="text/javascript">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: {lat: 38, lng: -96}
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
    ['WESLI', 43.0761414, -89.3835567, 4],
    ['Shoreline Community College', 47.7473515, -122.3585202, 5],
    ['South Dakota State University', 44.3185729, -96.7821217, 3],
    ['Oklahoma Panhandle State University', 36.5931933, -101.6399552, 2],
    ['Mayville State University', 33.875679, -98.519618, 1],
    ['Wayne State University', 42.3591388, -83.0665462, 5],
    ['University of Tennessee, Knoxville', 35.9544013, -83.9294564, 6],
    ['California State University, East Bay', 37.6557643, -122.0566238, 7],
    ['California State University, Long Beach', 33.7838235, -118.1140904, 8],
    ['Everett Community College', 48.006756, -122.20465, 9],
    ['California State University, Chico', 39.7295747, -121.8474908, 10],
    ['Northern State University', 45.4514797, -98.4836018, 11],
    ['West Texas A&M University', 34.9819442, -101.915928, 12],
    ['Arizona State University', 33.4242399, -111.9280527, 13],
    ['Delta State University', 33.7453784, -90.7354508, 14],
    ['Bemidji State University', 36.6886501, -116.94819, 15],
    ['Minot State University', 48.245968, -101.300639, 16]
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
        var secretMessages = ['WESLI', 'Shoreline Community College', 'South Dakota State University', 'Oklahoma Panhandle State University', 'Mayville State University','Wayne State University','University of Tennessee, Knoxville','California State University, East Bay', 'California State University, Long Beach','Everett Community College','California State University, Chico','Northern State University', 'West Texas A&M University','Arizona State University','Delta State University','Bemidji State University','Minot State University'];
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