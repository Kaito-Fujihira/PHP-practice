<?php 

require_once("menu.php");

class Food extends Menu {
  private $spiciness;

  public function __construct($name, $price, $image, $spiciness) {
    parent::__construct($name, $price, $image); # 親クラスコンストラクタの呼び出し
    $this->spiciness = $spiciness;
  }

  public function getSpiciness() {
    return $this->spiciness;
  }
}

?>