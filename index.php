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

$age = 20;
if($age >= 30) {
  echo "あなたは30歳以上です。";
}elseif($age <= 30) { //phpの条件式ではelseifを使用する。
  echo "あなたは30歳未満です。";
}

?>

<?php
// 配列の出し方
$colors = array("赤", "青", "黄");
    echo $colors[0];
    $colors[] = "白";
    echo $colors[3];
?>

<?php
// switch文
  $num = 77;
  $remainder = $num % 3;

  switch($remainder) {
    case 0:
      echo "大吉です。";
      break;
    case 1:
      echo "中吉です。";
      break;
    case 2:
      echo "小吉です。";
      break;
    default:
      echo "凶です。";
      break;
  }
  // 結果 "小吉です。"

  // 連想配列
  $scores = array(
    "数学" => 70,
    "英語" => 90,
    "国語" => 80,
    );
  $scores["国語"] += 5;
  echo $scores["国語"];
  // 結果 85

  // for文
  for($i = 51; $i <= 100; $i++) { //最初に初期化、次にループの条件、最後に変数の更新
    echo $i."<br>"; // .<br>を入れることで改行する
  }

?>

  </body>
</html>