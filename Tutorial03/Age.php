<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Age Calculation</title>
</head>
<body>
<h1 class="center">Age Calculation from User Input using PHP</h1>
<hr>
<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
      <label>Date of Birth</label>
      <input type="date" name="dob" value="<?php echo (isset($_GET['dob']))?$_GET['dob']:'';?>">
      <input type="submit" value="Calculate Age">
    </div>
  </form>
  <?php
      function getAge($dob)
      {
          $bday = new DateTime($dob);
          $string = $bday->format('M-D-Y H:i:s');
          $today = new Datetime(date('m.d.y'));
          if ($bday>$today) {
              return 'Not born yet';
          }
          $diff = $today->diff($bday);
          return 'Your Current Age is : '.$diff->y.' Years, '.$diff->m.' month, '.$diff->d.' days'.'<br>'.'Your birthday:'.$string;
      }
      ?>
  <?php
            if (isset($_GET['dob']) && $_GET['dob']!='') {?>
    
      <div class="result-wrapper">
        
        <?php echo getAge($_GET['dob']);
        
                ?>
      </div>
    <?php }
            ?>
</div>
</body>
</html>