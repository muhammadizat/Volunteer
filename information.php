<!-- Add infoType parameter to form links -->
<form action="process_weekly_distribution.php?infoType=weekly" method="post">
    <!-- form content goes here -->
</form>
<form action="process_weekly_distribution.php?infoType=restaurant" method="post">
    <!-- form content goes here -->
</form>
<form action="process_weekly_distribution.php?infoType=transportation" method="post">
    <!-- form content goes here -->
</form>

<?php
$infoType = isset($_GET['infoType']) ? $_GET['infoType'] : '';

switch ($infoType) {
    case 'weekly':
        // Display information for Weekly Distribution
        echo "<h2>Weekly Distribution Information</h2>";
        echo "<p>...</p>"; // Add your information here
        break;
    case 'restaurant':
        // Display information for Picking Up Food from Restaurants
        echo "<h2>Restaurant Pickup Information</h2>";
        echo "<p>...</p>"; // Add your information here
        break;
    case 'transportation':
        // Display information for Transportation
        echo "<h2>Transportation Information</h2>";
        echo "<p>...</p>"; // Add your information here
        break;
    default:
        echo "<h2>No information selected</h2>";
}
?>