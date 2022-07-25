<?php 
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>CRUD Operation</title>
</head>
<body>

  <div class="container my-5">
    <button class="btn btn-primary"><a href="user.php" class="text-light"> Add New</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql = "SELECT * FROM `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $password = $row['password'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
        <button type="submit" class="btn btn-primary" name="submit"><a href="update.php?
        updateid='.$id.'" class="text-light">Edit</a></button>
        <button type="submit" class="btn btn-danger" name="submit"><a href="delete.php?
        deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
    </tr>';


    }
    
  }else{
    die(mysqli_error($con));
  }


  ?>
    
  </tbody>
</table>
  </div>
  
</body>
</html>