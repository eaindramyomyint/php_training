<?php
if(isset($_POST['forgot-btn']) && $_POST['email'])
{
    include "config/db.php";
    
    $email = $_POST['email'];

    $sql = "SELECT * FROM `users` WHERE email = '$email'";

    $res = mysqli_query($con, $sql);

    $count = mysqli_num_rows($res);

  if($count)
  {

    $link = "<a href='http://localhost/MyBlog/forgotPswd.php?key=".$email."'>Click To Reset password</a>";

    require_once('PHPMailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();

    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "your_email_id@gmail.com";
    // GMAIL password
    $mail->Password = "your_gmail_password";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='eaindramyo123@gmail.com';
    $mail->FromName='your_name';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
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
  <title>Forgot Password</title>
</head>
<body>

<div class="container my-4">
  <div class="row">
    <div class="col-md-4  offfset-md-4 form-div">
      <form action="forgotPswd.php" method="post">
        <h3 class="text-center">Forgot Password</h3>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control form-control-lg my-2">
        </div>

        <div class="form-group">
            <button type="submit" name="forgot-btn" class="btn btn-primary btn-block btn-lg btn-center">Send My Password</button><br/>
        </div>

    

      </form>
    </div>
  </div>
</div>

  
</body>
</html>