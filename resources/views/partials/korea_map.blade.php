<div class="heading">
    <span class="heading-title">Солонгосын сургуулиуд</span>
    <div class="heading-line"></div>
</div>
<br />
<div id="map" style="height: 500px; width: 100%; padding: 0 40px; margin:0 auto;"></div>
<script type="text/javascript">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 36.5, lng: 127.8}
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
    ['Yonsei University', 37.565784, 126.938572, 4],
    ['Seoul National University', 37.459882, 126.9519053, 5],
    ['Inha University', 37.449627, 126.653116, 3],
    ['Seoul National University of Science and Technology', 37.6323917, 127.0780676, 2],
    ['Kookmin University', 37.6108691, 126.9972893, 1],
    ['Chungbuk National University', 36.6286334, 127.4575502, 5],
    ['Hanseo University', 36.6905235, 126.5838652, 6],
    ['Gimcheon University', 36.1399498, 128.081792, 7],
    ['Yeonsung University', 37.396554, 126.907787, 8],
    ['Hansung University', 37.5817557, 127.0103548, 9],
    ['Hankyong National University', 37.0116353, 127.2642351, 10],
    ['Korea National University of Transportation', 36.9687657, 127.8717471, 11],
    ['Hanyang Women"s University', 37.5581482, 127.0499072, 12],
    ['Kyungsung University', 35.1397819, 129.0985016, 13],
    ['Anyang University', 37.3917773, 126.9197857, 14]
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
        var secretMessages = ['Yonsei University', 'Seoul National University', 'Inha University', 'Seoul National University of Science and Technology', 'Kookmin University','Chungbuk National University','Hanseo University','Gimcheon University','Yeonsung University','Hansung University','Hankyong National University','Korea National University of Transportation','Hanyang Women"s University','Kyungsung University','Anyang University'];
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