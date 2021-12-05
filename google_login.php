<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="109899384191-752q0rvdtsiuj4rsp524sded969fpgtm.apps.googleusercontent.com">
    <!-- Got this client Id from google developers website -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" ></div>
    <div id="content"></div>
    <script>
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId());
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);

        document.querySelector('#content').innerText = googleUser.getBasicProfile().getName();
        // It is printing the name of the user after login
      }
    </script>
  </body>
</html>