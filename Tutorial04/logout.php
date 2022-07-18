<?php
  session_start(); /* Starts the session */
  session_destroy(); /* Destroy started session */
  echo "You are Successfully logout";
  header("location:login.php");  /* Redirect to login page */
  exit;
