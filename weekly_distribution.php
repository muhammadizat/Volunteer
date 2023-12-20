<!DOCTYPE html>
<html>
<head>
    <title>Weekly Distribution</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <style>
        #map {
            height: 300px;
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="topnav">
  <a href="#home">Home</a>
  <a class="active" href="#WD">Weekly Distribution</a>
  <a href="#PR">Picking Up Food from Restaurants</a>
  <a href="#T">Transportation</a>
</div>

    <div class="header">
        <h2>Weekly Distribution</h2>
    </div>

    <div class="container">
        <form action="process_weekly_distribution.php" method="post">
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
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
                <button type="button" onclick="showLocationOnMap()">Show on Map</button>
                <div id="map"></div>
            </div>
            <input type="submit" class="btn" value="Schedule Distribution">
        </form>
        <a href="dashboard_v.php" class="btn">Back</a>
    </div>

    <div class="footer">
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>

    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 1.5645, lng: 103.6373},
            zoom: 14.7
        });

            var distributionLocationInput = document.getElementById('location');
            var autocomplete = new google.maps.places.Autocomplete(distributionLocationInput);

            // Set the bounds to the current map's viewport.
            autocomplete.bindTo('bounds', map);
        }

        function showLocationOnMap() {
            var locationInput = document.getElementById('location');
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlZ4VAT_LmNI0kKqUpPusyXa3BqYclROg&libraries=places&callback=initMap"></script>

</body>
</html>