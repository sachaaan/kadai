<?php
//引数に数値を指定して実行すると数値を２倍にして返す関数を作成する
function sum($a){
    $result = $a * 2;
    echo $result;
};
sum(10);
echo "\n";

//$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください

function f($a,$b){
    $result = $a + $b;
    echo $result;
}
f(2,5);
echo "\n";

//$arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1,3,5,7,9);
function multiplication($arr){
    $result = 1;
    foreach($arr as $a){
    $result *= $a;
    }
    return $result;
}
echo multiplication($arr)."\n";


//応用問題
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if ($max_number < $a){
         $max_number = $a;
     }
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 echo max_array(array(9,18,12,11,15))."\n";



//ビルトイン関数の用途、使い方を調べる
//strip_tags
//指定した文字列からHTMLを取り除く
//str HTMLを取り除く文字列を指定する
//tags　取り除かないタグを指定する
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
echo "\n";

//array_push
//配列の最後に一つ以上の要素を追加したいときに使用する
$fruits = ['apple','orange','melon'];
array_push($fruits,'banana','pineapple');
print_r ($fruits);
echo "\n";

//array_merge
//配列の要素の最後にひとつまたは複数の配列を結合するとき
$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";

//time, mktime
//PHPの標準関数で指定した日時のタイムスタンプを取得するためのメソッド
$time = mktime(9);
var_dump(date('Y年m月d日h時i分s秒'),$time);
print('<br/>');
echo "\n";
//date
//指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
date_default_timezone_set('Asia/Tokyo');
echo '<p>',date("G:i a"),'</p>';
echo "\n";
