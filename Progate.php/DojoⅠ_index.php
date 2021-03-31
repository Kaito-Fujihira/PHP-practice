<!-- lesson1~4 -->
<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo "変数の$moneyの値: ".$money;
echo "<br>";
echo "変数$priceの値: ".$price;
echo "<br>";
echo "変数$taxRateの値: ".$taxRate;
echo "<br>";
echo "-----";
echo "<br>";

$taxPrice = $price + $price * $taxRate;
if ($taxPrice < $money) {
  echo "商品を買うことができます";
} else if ($taxPrice == $money){
  echo "商品を買うことができますが、所持金がなくなります";
} else {
  echo "商品を買うことができません";
}

?>


<!-- lesson5 -->
<?php
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz";
  }elseif ($i % 3 == 0) {
    echo "Fizz";
  }elseif ($i % 5 == 0) {
    echo "Buzz";
  }else{
    echo $i;
  }
  echo "<br>"
}
?>


<!-- lesson6 -->
<?php
$prices = array(1000, 650, 750, 800);
echo "$pricesの値: ";
foreach ($prices as $price) {
  echo $price." ";
}
echo "<br>";
echo "-----";
echo "<br>"

echo "合計金額は".array_sum($prices)."円です";

// 他のやり方
$totalPrice = 0; // 金額の合計値を入れるための変数
foreach ($prices as $price) {
  $totalPrice += $price; // 各金額を$totalPriceに足していく
}
echo "合計金額は".$totalPrice."円です";

// lesson7 "max"
echo "最高価格は".max($prices)."円です";
?>


<!-- lesson8 -->
<?php
$menu = array("name" => "CURRY", "price" => 900);
echo "$menuの値: ";
var_export($menu); // var_exportは変数の中身を見るための関数
echo "<br>"
echo "-----";
echo "<br>"
echo $menu["name"]."は".$menu["price"]."円です";
?>


<!-- lesson9 -->
<?php
$menus = array(
  array("name" => "CURRY", "price" => 900);
  array("name" => "PASTA", "price" => 1200);
  array("name" => "COFFEE", "price" => 600);
);
foreach ($menus as $menu) {
  echo $menu["name"]."は".$menu["price"]."円です";
  echo "<br>";
}
?>


<!-- lesson10 -->
<?php
$menus = array(
  array("name" => "CURRY", "price" => 900),
  array("name", => "PASTA", "price" => 1200),
  array("name" => "COFFEE", "price" => 600)
);

$totalPrice = 0;
foreach ($menus as $menu) {
  echo $menu["name"]."は".$menu["price"]."円です";
  echo "<br>";
  $totalPrice += $menu["price"];
}
echo "合計金額は".$totalPrice."円です";
?>


<!-- lesson11 -->
<?php
$menus = array(
  array("name" => "CURRY", "price" => 900),
  array("name" => "PASTA", "price" => 1200),
  array("name" => "COFFEE", "price" => 600)
);

$totalPrice = 0;
$maxPrice = 0; // 最高価格を入れるための変数
$maxPriceName = ""; // 最高価格のものの名前を入れるための変数
foreach ($menus as $menu) {
  echo $menu["name"]."は".$menu["price"]."円です";
  echo "<br>"
  $totalPrice += $menu["price"];
  // $maxPriceに入っている価格より大きければ
  if ($maxPrice < $$menu["price"]) {
    // その価格で$maxPrice上書きする
    $maxPrice = $menu["price"];
    // 最高価格のものの名前で上書きする
    $maxPriceName = $menu["name"]
  }
}
echo "合計金額は".$totalPrice."円です";
echo "<br>"
echo $maxPriceName."が最高価格で".$maxPrice."円です";
?>