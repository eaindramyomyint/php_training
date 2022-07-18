<?php
session_start(); /* Starts the session */
echo "Congratulation! You have logged into password protected page.";
echo "<a href='logout.php'>Logout</a>";
if (!isset($_SESSION['UserData']['Username'])) {
    header("location:login.php");
    exit;
}
?>

