// A function to update the user's account balance
function updateBalance(amount) {
  // The URL of the PHP script
  let url = "//mysteribros.com/php/updatebank.php";
  
  let data = {bal: amount};
  let params = JSON.stringify (data); // convert data to JSON string

  // Create a new XMLHttpRequest object
  let xhr = new XMLHttpRequest();

  // Open a GET request to the PHP script with the parameters
  xhr.open("POST", url, true);
  xhr.setRequestHeader ("Content-type", "application/json"); // set request header

  // Set the response type to JSON
  xhr.responseType = "json";

  // Define what to do when the request is successful
  xhr.onload = function() {
    // Check if the status is OK
    if (xhr.status == 200) {
      // Get the response as a JSON object
      let response = xhr.response;

      // Get the message from the response
      let message = response.message;

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
  xhr.send(params);
  alert(params);
}

function getuser() {
  // The URL of the PHP script
  let url = "//mysteribros.com/php/getuser.php";
  
  // Create a new XMLHttpRequest object
  let xhr = new XMLHttpRequest();

  // Open a GET request to the PHP script with the parameters
  xhr.open("GET", url, true);
  //xhr.setRequestHeader ("Content-type", "application/json"); // set request header

  // Set the response type to JSON
  //xhr.responseType = "json";

  // Define what to do when the request is successful
  xhr.onload = function() {
    // Check if the status is OK
    if (xhr.status == 200) {
      // Get the response as a JSON object
      //var response = JSON.parse(xhr.responseText);
	  let response1 = xhr.responseText;


      // Get the message from the response
      //var message = response.message;

      // Display the message on the webpage
      alert(response1);
	  return response1;
    } else {
      // Display an error message on the webpage
      alert("Get user failed: " + xhr.status);
    }
  };

  // Define what to do when the request fails
  xhr.onerror = function() {
    // Display an error message on the webpage
    alert("Network error: get user");
  };

  // Send the request
  xhr.send();
}

function getBalance() {
  // The URL of the PHP script
  let url = "//mysteribros.com/php/getbalance";

  // Create a fetch request with the URL
  fetch(url)
  // Convert the response to a text
  .then(response => response.json())
  // Display the response on the webpage
  .then(data => {
    //let respx = JSON.parse(data);
    let broll = document.getElementById("player-bank");
    broll.textContent = data;
    alert(data);
    //return respx;
  })
  // Catch any errors and display them on the webpage
  .catch(error => alert(error));
}
async function getBalance2() {
  // The URL of the PHP script
  let burl = "//mysteribros.com/php/getbalance";

  try {
    // Create a fetch request with the URL and await for the response
    let bresponse = await fetch(burl);
    // Convert the response to a text and await for the result
    let bdata = await bresponse.json();
    // Display the response on the webpage
    let bal2 = JSON.parse(bdata);
    let balroll = document.getElementById("player-bank");
    balroll.innerHTML = Number(bal2);
    alert(bal2);
    //return respx;
  } catch (error) {
    // Catch any errors and display them on the webpage
    alert(error);
  }
}



function updateBalance2(amount) {
  // The URL of the PHP script
  let url = "//mysteribros.com/php/updbal";

  let data = {bal: amount};
  let params = JSON.stringify (data); // convert data to JSON string

  // Create a fetch request with the URL and parameters
  fetch(url, {
    method: "POST",
    headers: {
      "Content-type": "application/json"
    },
    body: params
  })
  // Convert the response to a JSON object
  .then(response => response.json())
  // Display the message from the response on the webpage
  .then(data => alert(data.message))
  // Catch any errors and display them on the webpage
  .catch(error => alert(error));
}


let t = {
    // (A) PROPERTIES
    // (A1) HTML REFERENCES
    hdstand : null,  // dealer stand
    hdpoints : null, // dealer points

  
    // (B) INITIALIZE GAME
    init : () => {
        // GET HTML ELEMENTS

        // (B2) ATTACH ONCLICK EVENTS

        document.getElementById("get-user").onclick = t.getusr;
        document.getElementById("get-bal").onclick = t.baltest;
        document.getElementById("update-bal").onclick = t.updbal;
		document.getElementById("update-bal2").onclick = t.updbal2;
    },

    
    updbal : () => {
      t.change = 420;
      updateBalance(t.change);
      //alert("done");
        
    },
	updbal2 : () => {
      t.change = 420;
      updateBalance2(t.change);
      //alert("done");
        
    },
    baltest : () => {
      getBalance2();
        
    },
    getusr : () => {
      getuser();
        
    },
  

    
  };
  window.addEventListener("DOMContentLoaded", t.init);