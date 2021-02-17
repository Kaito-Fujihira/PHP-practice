<?php
require_once("food.php");
require_once("drink.php");

$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');

$juice->setType("アイス");
$coffee->setType("ホット");

$juice->setOrderCount(2);
echo $juice->getOrderCount();

$menus = array($juice, $coffee, $curry, $pasta);

?>