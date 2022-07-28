<?php

session_start();

require 'config/db.php';

$errors = array();
$username = "";
$email = "";

//if user clicks signup btn
if (isset($_POST['singup-btn'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConf = $_POST['passwordConf'];

  //validation
  if (empty($username)) {
    $errors['username'] = "UsernameRequired";
  }
  if (empty($email)) {
    $errors['email'] = "Email Required";
  }
  if (empty($password)) {
    $errors['password'] = "Password Required";
  }
  if ($password !==$passwordConf) {
    $errors['passwordConf'] = "Password do not match";
  }

  $emailsql = "SELECT * FROM `users` WHERE email=? LIMIT 1";
  $stmt = $con->prepare($emailsql);
  $stmt->bind_param('s',$email);
  $stmt->execute();
  $result = $stmt->get_result();
  $userCount = $result->num_rows;

  if ($userCount > 0) {
    $errors['email'] = "Email already exits";
  }

  if (count($errors) === 0){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(50));
    $verfied = false;

    $sql =  "INSERT INTO `users`(`username`, `email`, `verfied`, `token`, `password`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssbss',$username,$email,$verfied,$token,$password);

    if ($stmt->execute()){
        
        $user_id = $con->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['verfied'] = $verfied;

        $_SESSION['message'] = "You are logged in!";
        $_SESSION['aleert-class'] = "alert success";
        header('location: index.html');
        exit();

    }else {
        $errors['db_error'] = "Database error: Failed to register";
    }

  }


}