// A function to update the user's account balance
function updateBalance(amount, username) {
  // The URL of the PHP script
  var url = "mysteribros.com/php/updatebank.php";

  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Open a GET request to the PHP script with the parameters
  xhr.open("GET", url + "?amount=" + amount + "&username=" + username);

  // Set the response type to JSON
  xhr.responseType = "json";

  // Define what to do when the request is successful
  xhr.onload = function() {
    // Check if the status is OK
    if (xhr.status == 200) {
      // Get the response as a JSON object
      var response = xhr.response;

      // Get the message from the response
      var message = response.message;

      // Display the message on the webpage
      alert(message);
    } else {
      // Display an error message on the webpage
      alert("Request failed: " + xhr.status);
    }
  };

  // Define what to do when the request fails
  xhr.onerror = function() {
    // Display an error message on the webpage
    alert("Network error");
  };

  // Send the request
  xhr.send();
}

// A variable to store the user's name
var username = "test"; // You can get this from your webpage

// A variable to store the amount of money won or lost in a game of blackjack
var amount = 100; // You can get this from your game logic

// Call the updateBalance function with the amount and username
updateBalance(amount, username);