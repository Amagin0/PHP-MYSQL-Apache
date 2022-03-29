<?php 
// データ型とは？
// データ型の確認方法 var_dump
$i = 1;
var_dump($i);

$str = 'hello';
var_dump($str);

$b = true; # 大文字(TRUE)でも可
$c = false;
var_dump($b);
var_dump($c);

// 異なる型は自動的に変換される。
echo $i + $b;

// 明示的な変換
echo $i + (int) $b;

// 型の取り扱いの注意点
var_dump($i === 1);   # true
var_dump($i === '1'); # false