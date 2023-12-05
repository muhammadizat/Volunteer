<!DOCTYPE html>
<html>
<head>
    <title>Picking Up Food from Restaurants</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <style>
        #restaurant_map {
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
  <a class="active" href="#PR">Picking Up Food from Restaurants</a>
  <a href="#T">Transportation</a>
</div>

    <div class="header">
        <h2>Picking Up Food from Restaurants</h2>
    </div>

    <div class="container">
        <form action="process_restaurant_pickup.php" method="post">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="restaurant">Restaurant:</label>
                <input type="text" id="restaurant" name="restaurant" required>
                <div id="restaurant_map"></div>
            </div>
            <input type="submit" class="btn" value="Schedule Pick-Up">
        </form>
        <a href="index.php" class="btn">Back</a>
    </div>

    <div class="footer">
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>

    <script>
        function initRestaurantMap() {
            var restaurantMap = new google.maps.Map(document.getElementById('restaurant_map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });

            var restaurantAutocomplete = new google.maps.places.Autocomplete(
                document.getElementById('restaurant'), {map: restaurantMap});
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initRestaurantMap"></script>
</body>
</html>