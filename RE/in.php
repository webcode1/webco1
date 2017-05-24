<html>
  <head>
    <title>Loading captcha with JavaScript</title>
    <script type='text/javascript'>
    var captchaContainer = null;
    var loadCaptcha = function() {
      captchaContainer = grecaptcha.render('captcha_container', {
        'sitekey' : '6LcLPScTAAAAABgcc8Cv5Au9bTO01QRl-jnkGyX8',
        'callback' : function(response) {
          console.log(response);
        }
      });
    };
    </script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
  
      <form action="rec1.php" method="POST">
          <label>Username: <input type="text" name="username" /></label> <br>
		  <label>Email: <input type="email" name="email" /></label>	<br>
		  <label>Message: <input type="text" name="message" /></label>	<br>
          <small>Are you a robot?</small>
          <div id="captcha_container"></div>
		  <div class="g-recaptcha" data-sitekey="6LcLPScTAAAAABgcc8Cv5Au9bTO01QRl-jnkGyX8"></div>
          <input type="submit" value="Submit">
      </form>
      <script src="https://www.google.com/recaptcha/api.js?onload=loadCaptcha&render=explicit" async defer></script>
  </body>
</html>