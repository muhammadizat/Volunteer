// Function to display saved information from multiple files
async function displayInfoH() {
    // Check if the button is already disabled or if the requests are in progress
    if (document.getElementById("displayButtonH").disabled) {
        return;
    }

    // Disable the button to prevent multiple clicks
    document.getElementById("displayButtonH").disabled = true;

    // Array of file names
    var fileNames = ["display_transportation.php", "display_weekly.php", "display_restaurant.php"];

    // Counter to keep track of completed requests
    var completedRequests = 0;

    // Flag to prevent multiple request initiations
    var requestsInProgress = false;

    // Function to handle each AJAX request
    async function handleRequest(index) {
        try {
            if (requestsInProgress) {
                return; // If a request is already in progress, skip starting a new one
            }

            requestsInProgress = true;

            console.log(`Fetching data from ${fileNames[index]}`);

            const response = await fetch(fileNames[index]);
            
            if (!response.ok) {
                throw new Error(`Request failed. Status: ${response.status}`);
            }

            const data = await response.text();

            // Append the response to the infoDisplay element
            document.getElementById("infoDisplay").innerHTML += data;

            console.log(`Data from ${fileNames[index]} successfully displayed`);

            // Increase the counter
            completedRequests++;

            // If there are more files, make the next request
            if (index < fileNames.length - 1) {
                await handleRequest(index + 1);
            } else {
                // If all requests are complete, re-enable the button
                document.getElementById("displayButtonH").disabled = false;
                requestsInProgress = false; // Reset the flag
                console.log("All requests completed");
            }
        } catch (error) {
            console.error(error);
            // Handle errors here if needed
        }
    }

    // Start the first AJAX request
    await handleRequest(0);
}