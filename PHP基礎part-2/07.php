<?php
/**
 * 関数を作ってみよう（Part. 1）
 * 
 * - 特定の機能を使いまわせるようにまとめたもの。
 * - Input（引数）、Output（戻り値）を設定する
 * - returnが実行された時点でその関数の処理終了
 */
$numbers = [1,2,3,4];
$numbers2 = [1,2,3];

$sum = 0;
foreach($numbers as $num) {
  $sum += $num;
}
echo "合計：{$sum}<br>";

$sum2 = 0;
foreach($numbers2 as $num) {
  $sum2 += $num;
}
echo "合計：{$sum2}<br>";


function sum($nums) {  // 引数
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num;
  }
  return $sum; // 戻り値  関数が終了する
  // echo "合計：{$sum}<br>";
}

$result = sum($numbers);
echo "合計：{$result}<br>";

$result = sum($numbers2);
echo "合計：{$result}<br>";