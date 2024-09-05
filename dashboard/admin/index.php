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
  <title>Document</title>

  <link rel="stylesheet" href="../../src/css/general_style.css">
  <link rel="stylesheet" href="../../src/css/admin-dashboard.css"/>
</head>
<body>
  <div id="wrapper">
    <div id="side_bar">
      <button id="dashboard_button"><img src="../../src/res/images/dashboard_dark.png"> Dashboard</button>
      <button id="manage_user_button"><img src="../../src/res/images/manage_user_dark.png"> Manage Users</button>
      <button id="settings_button"><img src="../../src/res/images/settings_dark.png"> Settings</button>
    </div>
    <header>
      <div>
        <button id="side_bar_button"><img src="../../src/res/images/menu_dark.png"></button>
        <h1><span class="logo-bg1">Black&</span><span class="logo-bg2">White</span></h1>
      </div>
      <div>
        <input type="text" name="search" id="search_bar" placeholder="Search..." />
        <button id="search_button"><img src="../../src/res/images/search_dark.png"></button>
      </div>
      <div>
        <button id="mode_button"><img src="../../src/res/images/mode_dark.png"></button>
        <button id="account_button"><img src="../../src/res/images/account_dark.png"></button>
      </div>
    </header>
    <main>
      <h1>Welcome, <?= $_SESSION["acc_signed_in"]["username"] ?>!</h1>
      <a href="./authentication/admin-class.php?logout=true">Log Out</a>
    </main>
</body>
</html>