<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>

  <?php 
    $a = 5;
    $b = 3;
  ?>

  <?php
    $a = $a * 10;
    echo $a // 結果 50

    echo --$b // 結果 2
  ?>

<!-- phpのif文 -->
<?php

  $x = 99 * 99;
  $y = 77 * 77;

if($x > 9800) {
  echo "変数xは9800より大きいです。";
}
if($y > 6000) {
  echo "変数yは6000より大きいです。";
}

?>

  </body>
</html>