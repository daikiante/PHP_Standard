<?php
class Menu {
  // $nameというプロパティを定義
  public $name;
  
}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入
$curry -> name = 'CURRY';

// $pastaのnameプロパティに'PASTA'を代入
$pasta -> name = 'PASTA';

// $curryのnameプロパティをechoする
echo $curry -> name;

echo '<br>';
// $pastaのnameプロパティをechoする
echo $pasta -> name;

?>