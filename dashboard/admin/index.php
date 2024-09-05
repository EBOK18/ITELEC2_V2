<?php
include_once "../../config/settings-configuration.php";

if(!isset($_SESSION["acc_signed_in"]) || empty($_SESSION["acc_signed_in"])) {
  header("Location: ../../");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Admin</title>
</head>
<body>
  <h1>Welcome, <?= $_SESSION["acc_signed_in"]["username"] ?>!</h1>
  <a href="./authentication/admin-class.php?logout=true">Log Out</a>
</body>
</html>