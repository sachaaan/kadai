<?php
echo 'hello php!';
//a=3,b-7を代入して足し算する
$a = 3;
$b = 7;
echo $a+$b;
//$array_monthに１月～１２月を代入して８月を表示する
$array_month = ["１月","２月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月"];
echo $array_month [7];
//$helloに"Hello,"を$nameに自分の名前、$worldに"'s World!"を代入して各変数を連結させて”Hello,自分の名前’ｓ　World!”と表示する
$hello = "Hello";
$name = "saheki kito";
$world = "'s World!";
echo $hello . $name . $world;
//$tech_boostに"tech"という文字列が代入されている。これを複合演算子を使ってecho $tech_boostと実行するとtech boostと表示されるようにする。
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
//プラグラムのバグを調べて修正する
$calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calender_2018["December"];
