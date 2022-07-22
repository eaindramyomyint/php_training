<?php

use chillerlan\QRCode\QRCode;

include 'vendor/autoload.php';

$result = '';

if (isset($_POST['text']) && !empty($_POST['text'])) {
    $result = (new QRCode())->render($_POST['text']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     
  <form method="post" class="wrapper">
    <center>
      <h2>Create your QR code</h2>
      <input type="text" name="text" placeholder="enter yr QR Text"><br><br>
      <input type="submit" name="text" value="Generate">
    </center>
 </form>
  <div class="result">
      <h2>Result:</h2>
      <?php if (isset($result) && !empty($result)): ?>
          <img src="<?= $result ?>"/>
      <?php endif; ?>
  </div>
    
</body>
</html>