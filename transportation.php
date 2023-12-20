<!DOCTYPE html>
<html>

<head>
    <title>Transportation</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <style>
        #pickup_map,
        #dropoff_map {
            height: 300px;
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="topnav">
        <a href="#home">Home</a>
        <a href="#WD">Weekly Distribution</a>
        <a href="#PR">Picking Up Food from Restaurants</a>
        <a class="active" href="#T">Transportation</a>
    </div>

    <div class="header">
        <h2>Transportation</h2>
    </div>

    <div class="container">
        <form action="process_transportation.php" method="post">
            <div class="form-group">
                <label for="name">Volunteer Name:</label>
                <input type="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="pickup_location">Pick-Up Location:</label>
                <input type="text" id="locationPU" name="locationPU" required>
                <button type="button" onclick="showLocationOnMap('pickup')">Show on Map</button>
                <div id="pickup_map"></div>
            </div>
            <div class="form-group">
                <label for="dropoff_location">Drop-Off Location:</label>
                <input type="text" id="locationDO" name="locationDO" required>
                <button type="button" onclick="showLocationOnMap('dropoff')">Show on Map</button>
                <div id="dropoff_map"></div>
            </div>
            <input type="submit" class="btn" value="Schedule Transportation">
        </form>
        <a href="dashboard_v.php" class="btn">Back</a>
    </div>

    <div class="footer">
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>

    <script>
        function initMap() {
            // Common initialization code for both pickup and drop-off maps
            window.pickupMap = new google.maps.Map(document.getElementById('pickup_map'), {
                center: { lat: 1.5645, lng: 103.6373 },
                zoom: 14.7
            });

            window.dropoffMap = new google.maps.Map(document.getElementById('dropoff_map'), {
                center: { lat: 1.5645, lng: 103.6373 },
                zoom: 14.7
            });

            var pickupLocationInput = document.getElementById('locationPU');
            var dropoffLocationInput = document.getElementById('locationDO');

            var pickupAutocomplete = new google.maps.places.Autocomplete(pickupLocationInput);
            var dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffLocationInput);

            pickupAutocomplete.bindTo('bounds', window.pickupMap);
            dropoffAutocomplete.bindTo('bounds', window.dropoffMap);

            pickupAutocomplete.addListener('place_changed', function () {
                showLocationOnMap('pickup');
            });

            dropoffAutocomplete.addListener('place_changed', function () {
                showLocationOnMap('dropoff');
            });
        }

        function showLocationOnMap(type) {
            var locationInput = type === 'pickup' ? document.getElementById('locationPU') : document.getElementById('locationDO');
            var map = type === 'pickup' ? window.pickupMap : window.dropoffMap;
            var geocoder = new google.maps.Geocoder();

            geocoder.geocode({ 'address': locationInput.value }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    map.setCenter(location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>

    <!-- Load the Google Maps API only once -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlZ4VAT_LmNI0kKqUpPusyXa3BqYclROg&libraries=places&callback=initMap"></script>

</body>

</html>