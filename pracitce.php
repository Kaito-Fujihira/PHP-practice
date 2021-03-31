<!-- foreach復習 -->
<?php
/**
 * foreach (配列 or オブジェクト as 要素) {
 *     処理
 * }
 */
 $fruits = array(
   "orange", "melon", "grape", "banana", "strawberry"
 );
 foreach($fruits as $fruit) {
   echo $fruit;
 }

 /**
 * foreach (配列 or オブジェクト as キー => 要素) {
 *     処理
 * }
 *
 */
$fruits_juice = array(
  "orange" => "orange juice",
  "melon"  => "melon juice",
  "grape"  => "grape juice",
  "banana" => "banana juice",
  "strawberry" => "strawberry juice"
);
foreach ($fruits_juice as $fruit => $juice) {
  echo $fruits . "(果物) => " . $juice . "(ジュース)<br>";
}
?>