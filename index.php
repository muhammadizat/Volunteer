<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Saver App</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a id="displayButton" onclick="displayInfo()" >Weekly Distribution</a>
  <a href="#PR">Picking Up Food from Restaurants</a>
  <a href="#T">Transportation</a>
</div>

    <div id="infoDisplay"></div>

    <!-- Page content -->
    <div class="header">
        <h2>HI THERE, GOOD SAMARITAN😊</h2>
        <hr>
        <p>What Would It Be Today?</p>
    </div>
 
    <div class="column" style="background-color:#F0FFFF;">
        <section style="text-align: center; padding: 20px;">
            <h2><a href="weekly_distribution.php" class="link">Weekly Distribution</a></h2>
            <p>Weekly Distribution allows users to schedule and participate in food distribution events. 
                Users can select the date, time, and location of the distribution event, and the app will handle the rest.</p>
            <form action="process_weekly_distribution.php" method="post">
                <!-- form content goes here -->
            </form>
        </section>
    </div>

    <div class="column" style="background-color:#FFFFFF;">
        <section style="text-align: center; padding: 20px;">
            <h2><a href="restaurant_pickup.php" class="link">Picking Up Food from Restaurants</a></h2>
            <p>This feature allows users to schedule and participate in picking up surplus food from restaurants. 
                Users can select the date, time, and restaurant location for the pick-up, and the app will facilitate the process.</p>
            <form action="process_weekly_distribution.php" method="post">
                <!-- form content goes here -->
            </form>
        </section>
    </div>

    <div class="column" style="background-color:#F0FFFF;">
        <section style="text-align: center; padding: 20px;">
            <h2><a href="transportation.php" class="link">Transportation</a></h2>
            <p>This feature enables users to manage the transportation logistics for the distribution of food. 
                Users can schedule transportation for food pick-ups and deliveries, input vehicle and route details, and the app will assist in ensuring smooth transportation of the food to the designated distribution points.</p>
            <form action="process_weekly_distribution.php" method="post">
                <!-- form content goes here -->
            </form>
        </section>
    </div>
    
    <div class="footer">
        <br>
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>

    <script>

        // Function to display saved information
        function displayInfo() {
            // Make an AJAX request to fetch and display saved information
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("infoDisplay").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "display_weekly.php", true);
            xhr.send();
        }
        
        function deleteInfo(id) {
            var xhr = new XMLHttpRequest();
            // Ask for confirmation before deleting
            var result = confirm("Are you sure you want to delete this information?");
            if (result) {       
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Refresh the displayed information after deletion
                    displayInfo();
                }
            };
        }
            xhr.open("GET", "delete_weekly.php?id=" + id, true);
            xhr.send();
        }

        function updateInfo(id) {
            // Redirect to the update_info.php page with the selected information ID
            window.location.href = 'updateInfo_weekly.php?id=' + id;
        } 
    </script>

</body>