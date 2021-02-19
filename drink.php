<?php

require_once("menu.php");

class Drink extends Menu {
  private $type;

  public function __construct($name, $price, $image, $type) {
    parent::__construct($name, $price, $image); # 親クラスのコンストラクの呼び出し
    $this->type = $type;
  }

  public function getType() {
    return $this->type;
  }

  public function setType($type) {
    return $this->type = $type;
  }
}

?>