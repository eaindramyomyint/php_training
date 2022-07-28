<?php
    include 'config/db.php';

    if (isset($_POST['login-btn'])){

      if(empty($_POST['username']) && empty($_POST['password'])){
        echo '<script>alert("username & password required")</script>';
      }
      else{
        $username = mysqli_real_escape_string($con,$_POST['username']) ;
        $email = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $password = md5($password);

        $sql = "SELECT * FROM `users` 
        WHERE username= '$username' AND password='$password' ";

        $result = mysqli_query($con ,$sql);
        if (mysqli_num_rows($result) > 0){
          $_SESSION['username'] = $username ;
          
        }else{
          
          header("location:index.html");
        }
      }
      

      //echo '<script>alert("username & password required")</script>';
      //echo "Database Connect successfully";
     
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>

<div class="container my-4">
  <div class="row">
    <div class="col-md-4  offfset-md-4 form-div">
      <form action="login.php" method="post">
        <h3 class="text-center">Login</h3>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control form-control-lg my-2">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control form-control-lg my-2">
        </div>

        <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg btn-center my-2">Login</button><br/>
        </div>

        <p class="text-center my-3">Not yet SignUp? <a href="signup.php">Sign Up</a></p>

        <p class="text-center my-3"><a href="forgotPswd.php">Forgot password?</a></p>

      </form>
    </div>
  </div>
</div>

  
</body>
</html>