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

  // while文
  $i = 2;
  while($i <= 100) {
    echo $i."<br>";
    $i += 2;
  }

  // breakとcontinue
  for($i = 1; $i <= 1000; $i++) {
    if($i > 500) {
      break; // 501以上の数字を表示しないようにbreak文
    }
    echo $i."<br>";
  }
  for($i = 1; $i <= 1000; $i++) {
    if($i % 3 == 0) {
      continue; // 3の倍数の場合はechoせずにcontinueを用いて次の数字に進む
    }
    echo $i."<br>";
  }

  // foreach文
  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

  foreach($scores as $key => $value) {
    echo $key."は".$value."点です。"; // 「キー変数」の部分は省略可能
  }
  // 結果 数学は70点です。英語は90点です。国語は80点です。

  // 関数
  $str = 'progate';

  echo strlen($str); // 文字列の文字数を返す組み込み関数
    
  echo '<br>';
    
  $array = array('HTML', 'CSS', 'PHP');

  echo count($array); // 配列の要素の数を返す
    
  echo '<br>';
    
  echo rand(10,15); // ランダムな整数を返す

  // 関数を自作する
  function hello() {
    echo "Hello, world!";
  }
    
  hello(); // 結果 Hello, world!

  echo '<br>';

  function printRectangleArea($height, $width) {
    echo $height * $width;
  }
    
  printRectangleArea(5, 10); // $height(5) * $width(10)で50になる

  // 戻り値
  function getCircleArea($radius) {
    return $radius * $radius * 3;
  }
  
  $circleArea = getCircleArea(5);
  
  echo $circleArea

?>

<!-- formタグ -->
<form method="post" action="sent.php">
  <div class="form-item">名前</div>
  <input type="text" name="name">

  <div class="form-item">年齢</div>
  <select name="age">
    <option value="未選択">選択してください</option>
    <?php
      for($i = 6; $i <= 100; $i++) {
        echo "<option value='{$i}'>{$i}</option>";
      }
    ?>
  </select>

  <div class="form-item">お問い合わせの種類</div>
  <?php
    $types = array("Progateに関するお問い合わせ", "Progateに対する意見", "採用に関するお問い合わせ", "取材・メディア関連のお問い合わせ", "料金に関するお問い合わせ", "その他");
  ?>

  <select name="category">
    <option value="未選択">選択してください</option>
    <?php
      foreach($types as $type) {
        echo "<option value='{$type}'>{$type}</option>"
      }
    ?>
  </select>

  <div class="form-item">内容</div>
  <textarea name="body"></textarea>
  
  <input type="submit" value="送信">
</form>


  </body>
</html>