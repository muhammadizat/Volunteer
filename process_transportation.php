<?php
$date = $_POST['date'];
$time = $_POST['time'];
$pickup_location = $_POST['pickup_location'];
$dropoff_location = $_POST['dropoff_location'];

echo "Transportation scheduled for $date at $time from $pickup_location to $dropoff_location.";
?>
