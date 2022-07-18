<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/rest.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Page</title>
</head>
<body>
    
    
<form action="" method="post" name="Login_Form" class="form-wrapper">
  <table class="table">
   
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button"></td>
    </tr>
  </table>
  
</form>
<div>
    <p>
        username=>'Alex' password=> '123456'<br>
        username=>'username1' password=> 'password1'<br>
        username=>'username2' password=> 'password2'<br>
    </p>
</div>
</body>
</html>
<?php
    session_start();
        

if (isset($_POST['Submit'])) {
    $logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
                
        
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
       
    if (isset($logins[$Username]) && $logins[$Username] == $Password) {
        $_SESSION['UserData']['Username']=$logins[$Username];
        header("location:index.php");
        exit;
    } else {
        echo "<span style='color:red'>Invalid Login Details.Try Again!!!</span>";
    }
}
?>