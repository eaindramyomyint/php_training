<?php
session_start(); /* Starts the session */
if (!isset($_SESSION['UserData']['Username'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/common.js"></script>
  <link rel="stylesheet" href="css/rest.css">
  <link rel="stylesheet" href="css/style.css">
  <title>JQuery Toggle Menu</title>
</head>

<body>
  <header>
    <p class="btn-gnavi">
      <span></span>
      <span></span>
      <span></span>
    </p>
    <nav id="global-navi">
      <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Chefs</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</body>

</html>

