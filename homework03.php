<?php
//$nameにあなたの名前を代入し、if文で$nameがあなたの名前だったら「私はあなたの名前です」もし違ったら
//「あなたの名前ではありません」と表示するように実装する

$name = "kitooo";
if ($name == "kitooo") {
    echo "私はkitoooです。"."\n";
} else {
    echo "私はkitoooではありません。"."\n";
}


//for文を使って１～10000までの合計の値を表示する
$total = 0;
echo $total;
for ($i = 0; $i<10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

//$fruitsに配列で好きなフルーツを５個代入し、foreach文で順番に出力してください。
$fruits = array("apple","orange","lemon","peach","muscat");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

//バグを修正し、１から100までの間で５の倍数のみ表示するようにする
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
