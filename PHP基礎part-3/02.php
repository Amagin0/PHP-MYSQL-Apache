<?php
/**
 * 条件分岐を省略して記述してみよう
 * 
 * - 三項演算子の使い方
 * - null合体演算子
 */
$arry1 = [
  'key' => 10
];

$arry2 = [
  'key' => 10
];

$arry3 = [
];

if(isset($arry1['key'])) {
  $arry1['key'] *= 10;
} else {
  $arry1['key'] = 1;
}
echo $arry1['key'];

// 三項演算子  上のif文と同じ意味
$arry2['key'] = isset($arry2['key']) ? $arry2['key'] * 10 : 1;
echo $arry2['key'];


// null合体演算子
$arry3['key'] = $arry3['key'] ?? 1;
echo $arry3['key'];

/* 
$arry['key']がnullの時
  $arry['key'] = 1 (??の右の値)

$arry['key']がnull以外の時
  $arry['key'] = $arry['key'] (??の左の値)

上記の三項演算子で表すと
$arry['key'] = isset($arry['key']) ? $arry['key'] : 1;
*/


