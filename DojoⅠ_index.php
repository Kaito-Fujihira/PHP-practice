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
?>