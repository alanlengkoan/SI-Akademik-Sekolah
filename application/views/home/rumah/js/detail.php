<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-JpweDJ7_cA9-KiEq-iMjQzlluOemnWo&callback=initMap"></script>

<script>
    // untuk google maps
    function initMap(locations) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: new google.maps.LatLng(-5.151953889982554, 119.43892491875789),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker;
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?= $rumah->latitude ?>, <?= $rumah->longitude ?>),
            map: map,
            animation: google.maps.Animation.DROP,
            title: '<?= $rumah->nama ?>',
            icon: {
                url: "https://cdn.iconscout.com/icon/free/png-256/pin-locate-marker-location-navigation-7-16347.png",
                labelOrigin: new google.maps.Point(10, 40),
                scaledSize: new google.maps.Size(40, 45),
            },
            label: {
                color: '#000',
                fontWeight: 'bold',
                fontSize: '10px',
                text: '<?= $rumah->nama ?>'
            }
        });

        map.setZoom(17);
        map.panTo(marker.position);
    }
</script>