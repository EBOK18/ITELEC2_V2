<?php
include_once "./config/settings-configuration.php";

if(isset($_SESSION["acc_signed_in"]) || !empty($_SESSION["acc_signed_in"])) {
  header("Location: ./dashboard/admin/");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./src/res/images/logo.jpg" type="image/x-icon" />
  <title>ITELEC2 Page</title>

  <!-- CSS Files -->
   <link rel="stylesheet" href="./src/css/general_style.css" />
   <link rel="stylesheet" href="./src/css/signupin.css" />
</head>
<body>
  <div id="wrapper">
    <div id="info">
      <h1><span class="logo-bg1">Black&</span><span class="logo-bg2">White</span></h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis totam dignissimos, amet aliquid numquam ratione distinctio provident molestiae libero velit, pariatur, aliquam est laborum consequuntur! Voluptate molestias repellendus quas architecto!</p>
    </div>

    <hr class="divider" />

    <div class="form" id="signup">
      <h1>Sign Up</h1>
      <form action="./dashboard/admin/authentication/admin-class.php" method="post">
        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>" />
        <input class="input" type="text" name="user_name" placeholder="Enter username" required />
        <br />
        <input class="input" type="email" name="email" placeholder="Enter email" required />
        <br />
        <input class="input" type="password" name="password" placeholder="Enter password" required />
        <br />
        <input class="invert-bgcolor submit-button" type="submit" name="signup" value="Sign Up">
      </form>
      <button id="sign_in_button">Sign In</button>
    </div>
    <div class="form" id="signin">
      <h1>Sign In</h1>
      <form action="./dashboard/admin/authentication/admin-class.php" method="post">
        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>" />
        <input class="input" type="email" name="email" placeholder="Enter email" required />
        <br />
        <input class="input" type="password" name="password" placeholder="Enter password" required />
        <br />
        <input class="invert-bgcolor submit-button" type="submit" name="signin" value="Sign In">
      </form>
      <button id="sign_up_button">Sign Up</button>
    </div>
  </div>

  <!-- JavaScript Files -->
   <script src="./src/js/jquery/jquery-3.6.0.min.js"></script>
   <script src="./signupin.js"></script>
</body>
</html>