<?php

include 'connect.php';
$id = $_GET['updateid'];
//$sql = "SELECT * FROM `crud` WHERE id=$id";
//$result = mysqli_query($con,$sql);
//$row=mysqli_fetch_assoc($result);
//
//$name=$row['name'];
//$email=$row['email'];
//$mobile=$row['mobile'];
//$password=$row['password'];

if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql  = "UPDATE `crud` SET `id`=$id,`name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password'";
  //$sql = "INSERT INTO `crud`(`id`, `name`, `email`, `mobile`, `password`) VALUES ($id,'$name','$email','$mobile','$password')";

  $result=mysqli_query($con,$sql);
  if($result){
    //echo "Data insert Success";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Operation</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <center><h3>Update Form</h3></center>
      <div class="mb-3">
          <label>ID</label>
          <input type="text" class="form-control" placeholder="Enter Your ID" name="id"  
          >
        </div>

        <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
        </div>

        <div class="mb-3">
          <label>Mobile Number</label>
          <input type="text" class="form-control" placeholder="Enter Your Mobile No:" name="mobile">
        </div>

        <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>
    </div>

   
  </body>
</html>