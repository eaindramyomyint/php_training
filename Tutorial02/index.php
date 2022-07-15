<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <h3 class="text">Diamond Shape using Nested For Loop</h3>
  <h4 class="star">
    <?php
     $m =1;
    $n=5;
    for ($row=1; $row<=5; $row++) {
        for ($column=$row; $column<=4; $column++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k=1; $k<=$m; $k++) {
            echo "*";
        }
        for ($c=$m; $c>1; $c--) {
            echo "*";
        }
        echo "<br>";
        $m++;
    }

    for ($i=1; $i<=5; $i++) {
        for ($j=$i; $j>=1; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k=$n; $k>1; $k--) {
            echo "*";
        }
        for ($c=$n-1; $c>1; $c--) {
            echo "*";
        }
        echo "<br>";
        $n--;
    }
    ?>
    </h4>
</body>
</html> 