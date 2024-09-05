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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITELEC2 Page</title>
</head>
<body>
  <h1>Sign In</h1>
  <form action="./dashboard/admin/authentication/admin-class.php" method="post">
    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>" />
    <input type="email" name="email" placeholder="Enter email" required />
    <br />
    <input type="password" name="password" placeholder="Enter password" required />
    <br />
    <input type="submit" name="signin" value="Sign In">
  </form>
  <h1>Sign Up</h1>
  <form action="./dashboard/admin/authentication/admin-class.php" method="post">
    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>" />
    <input type="text" name="user_name" placeholder="Enter username" required />
    <br />
    <input type="email" name="email" placeholder="Enter email" required />
    <br />
    <input type="password" name="password" placeholder="Enter password" required />
    <br />
    <input type="submit" name="signup" value="Sign Up">
  </form>
</body>
</html>