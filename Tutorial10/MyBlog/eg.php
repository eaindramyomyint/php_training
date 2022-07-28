<?php 
 require_once 'controller/authController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Register</title>
</head>
<body>

<div class="container my-4">
  <div class="row">
    <div class="col-md-4  offfset-md-4 form-div">
      <form action="eg.php" method="post">
        <h3 class="text-center">Register</h3>

        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" name="username" vlaue="<?php echo $username; ?>" class="form-control form-control-lg my-2">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" vlaue="<?php echo $email; ?>" class="form-control form-control-lg my-2">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control form-control-lg my-2">
        </div>

        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password" name="passwordConf" class="form-control form-control-lg my-2"><br/>
        </div>

        <div class="form-group">
            <button type="submit" name="singup-btn" class="btn btn-primary btn-block btn-lg btn-center">Sign Up</button><br/>
        </div>

        <p class="text-center my-3">Already SignUp? <a href="login.php">Sign In</a></p>

      </form>
    </div>
  </div>
</div>

  
</body>
</html>