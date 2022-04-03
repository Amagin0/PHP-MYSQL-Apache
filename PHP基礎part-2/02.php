<?php
// 配列の操作に慣れよう。
// 配列操作関数
$arry_1 = [
  ['table', 1000],
  ['chair', 100],
  ['bed', 10000],
];

$arry_2 = [
  ['table', 1000],
  ['chair', 100],
  ['chair', 100],
  ['chair', 100],
  ['bed', 10000],
];

foreach ($arry_1 as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
  // print_r($val);
}

$arry_1[1][1] = 500;
array_shift($arry_1);
array_pop($arry_1);

foreach ($arry_1 as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
}

array_splice($arry_2, 2, 2, ['replace']);
// 2番目から2個分削除

foreach ($arry_2 as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
  // print_r($val);
}
