<!DOCTYPE html>
<html>
<head>
    <title>Transportation</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <style>
        #pickup_map, #dropoff_map {
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
                <label for="date">Date:</label>
                <input type="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="pickup_location">Pick-Up Location:</label>
                <input type="text" id="pickup_location" name="pickup_location" required>
                <div id="pickup_map"></div>
            </div>
            <div class="form-group">
                <label for="dropoff_location">Drop-Off Location:</label>
                <input type="text" id="dropoff_location" name="dropoff_location" required>
                <div id="dropoff_map"></div>
            </div>
            <input type="submit" class="btn" value="Schedule Transportation">
        </form>
        <a href="index.php" class="btn">Back</a>
    </div>

    <div class="footer">
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>

    <script>
        function initPickupMap() {
            var pickupMap = new google.maps.Map(document.getElementById('pickup_map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });

            var pickupAutocomplete = new google.maps.places.Autocomplete(
                document.getElementById('pickup_location'), {map: pickupMap});
        }

        function initDropoffMap() {
            var dropoffMap = new google.maps.Map(document.getElementById('dropoff_map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });

            var dropoffAutocomplete = new google.maps.places.Autocomplete(
                document.getElementById('dropoff_location'), {map: dropoffMap});
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initPickupMap"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initDropoffMap"></script>
</body>
</html>