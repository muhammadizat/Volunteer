<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Saver App</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <script src="weekly_javaScript.js" defer></script>
    <script src="restaurant_javaScript.js" defer></script>
    <script src="transportation_javaScript.js" defer></script>
    <script src="history_javaScript.js" defer></script>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a id="displayButton" onclick="displayInfo()" >Weekly Distribution</a>
  <a id="displayButtonR" onclick="displayInfoR()" >Picking Up Food from Restaurants</a>
  <a id="displayButtonT" onclick="displayInfoT()" >Transportation</a>
  <a id="displayButtonH" onclick="displayInfoH()" >History</a> <!-- Update ID here -->
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
        </section>
    </div>

    <div class="column" style="background-color:#FFFFFF;">
        <section style="text-align: center; padding: 20px;">
            <h2><a href="restaurant_pickup.php" class="link">Picking Up Food from Restaurants</a></h2>
            <p>This feature allows users to schedule and participate in picking up surplus food from restaurants. 
                Users can select the date, time, and restaurant location for the pick-up, and the app will facilitate the process.</p>
        </section>
    </div>

    <div class="column" style="background-color:#F0FFFF;">
        <section style="text-align: center; padding: 20px;">
            <h2><a href="transportation.php" class="link">Transportation</a></h2>
            <p>This feature enables users to manage the transportation logistics for the distribution of food. 
                Users can schedule transportation for food pick-ups and deliveries, input vehicle and route details, and the app will assist in ensuring smooth transportation of the food to the designated distribution points.</p>
        </section>
    </div>
    
    <div class="footer">
        <br>
        <p>&copy; 2023 Food Saver App. All rights reserved.</p>
    </div>
</body>