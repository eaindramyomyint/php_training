<?php


$con = new mysqli("localhost", "root", "password", "crudoperation");

if (!$con) {
    die(mysqli_error($con));
}

//echo "Database Connect successfully";
