<?php
/**
 * ファイル分割の方法を学ぼう
 * 
 * - require、includeの違い
 * - require、require_onceの使い方
 */
$arry = [
    'num' => 0
];

require_once('file1.php');
require_once('file1.php');
require_once('file1.php');
require_once('file2.php');
require_once('file2.php');
require_once('file2.php');

fn1();
echo $arry['num']; // 1

require('file1.php');
require('file1.php');
require('file1.php');
fn1();
echo $arry['num']; // 4
// require_once...何回宣言しても１回分しか処理されない

/* require と include の違い　*/
require('file3.php');  // ここで処理が止まる
echo $arry['num'];     // 表示されない


include('file3.php');  // 処理が止まらない
echo $arry['num'];     // 表示される

/* 使い分け 
 require...絶対に必要なファイルを読み込む
 include...最悪なくても動くファイルを読み込む
*/