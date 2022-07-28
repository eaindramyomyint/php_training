<?php


$con = new mysqli("localhost", "root", "password", "userdb");

if (!$con) {
    die(mysqli_error($con));
}

//echo "Database Connect successfully";
