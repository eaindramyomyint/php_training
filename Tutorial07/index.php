<html>
  <link rel="stylesheet" href="style.css">
<body>
<?php
  $userInput = "";
  session_start();
  if (isset($_SESSION["userInput"])) {
    $userInput = $_SESSION["userInput"];
    session_unset();
  }
  ?>
  <div class="card">
    <h1>QR Code Generator</h1>
    <form action="qrcode.php" method="post">
      <label>Enter your data :</label>
      <input type="text" name="userInput" id="userInput" value="<?= $userInput; ?>" required><br>
      <input type="submit" value="Generate" name="generate">
    </form>
    <?php
    if (isset($_GET["status"])) {
      echo '<img src="tutoqr.png" />';
    }
    ?>
  </div>
</body>
</html>
