<?php
class Menu {
  public $name;

    // コンストラクタを作成するとnewを用いてインスタンスを生成するときに、このメソッドが自動的に呼ばれる
  public function __construct() {
    echo '１つのメニューが作られました';
  }
  
  // public functon メソッド名()  ->  関数を作る
  public function hello() {
    // '私は○○です'とechoする
    echo '私は'.$this->name.'です';
  }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>