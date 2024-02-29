<!DOCTYPE html>
<html>
<head>
  <title>User Data Example</title>
</head>
<body>
  <h1>User Data Example</h1>
  <p>IP Address: <span id="ip"></span></p>
  <p>Location: <span id="location"></span></p>
  <p>Browser: <span id="browser"></span></p>

  <script>
    // Function to get stored user data from local storage
    function getStoredUserData() {
      const userDataString = localStorage.getItem('userData');
      if (userDataString) {
        return JSON.parse(userDataString);
      }
      return null;
    }

    // Function to display user data on the page
    function displayUserData() {
      const userData = getStoredUserData();
      if (userData) {
        document.getElementById('ip').textContent = userData.ip;
        document.getElementById('location').textContent = userData.location;
        document.getElementById('browser').textContent = userData.browser;
      }
    }

    displayUserData();
  </script>
</body>
</html>
