// Add your custom scripts here
function toggleDarkMode() {
  // Get the button element
  let button = document.getElementById("dark-mode-button");
  // Get the body element
  let body = document.body;

  // Check if the body has the dark-mode class or not
  if (body.classList.contains("dark-mode")) {
      // If yes, remove the dark-mode class from the body
      body.classList.remove("dark-mode");
      // Store the user's preference in local storage
      localStorage.setItem("darkMode", "off");
  } else {
      // If no, add the dark-mode class to the body
      body.classList.add("dark-mode");
      // Store the user's preference in local storage
      localStorage.setItem("darkMode", "on");
  }
}

// Check the user's preference from local storage when the page loads
window.onload = function() {
  // Get the button element
  let button = document.getElementById("dark-mode-button");
  // Get the body element
  let body = document.body;

  // Get the user's preference from local storage
  let darkMode = localStorage.getItem("darkMode");

  // Check if the user has enabled dark mode before
  if (darkMode === "on") {
      // If yes, add the dark-mode class to the body
      body.classList.add("dark-mode");
  } else {
      // If no, remove the dark-mode class from the body
      body.classList.remove("dark-mode");
  }
}