<!DOCTYPE html>
<html>
<head>
    <title>Weekly Distribution</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <!script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8MARhcFaaDTeY5962-4u9ivqyiXrNRyg&libraries=places"></script>
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
                <label for="date">Volunteer Name:</label>
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
                <div id="map"></div>
            </div>
            <input type="submit" class="btn" value="Schedule Distribution">
        </form>
        <a href="index.php" class="btn">Back</a>
    </div>

    <div class="footer">
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>

    <!script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });

            var autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('location'), {map: map});
        }
    <!/script>
    <!script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8MARhcFaaDTeY5962-4u9ivqyiXrNRyg&libraries=places&callback=initMap"></script>
</body>
</html>