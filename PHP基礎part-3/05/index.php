<?php
/**
 * パスの書き方について学ぼう
 * 
 * - マジック定数 __DIR__, __FILE__を使ってみよう
 * - dirnameの使い方を学ぼう
 * - 相対パスと絶対パス
 * - \と/は使い分けよう
 * - "と'は使い分けよう
 */

/* 相対パス */
require 'file1.php';
require './file1.php'; //  "./"  現在のフォルダ
require '../start/file1.php'; // "../" 一つ上の階層のフォルダ
require '../end/file1.php';

/* 絶対パス */
require __DIR__ . '/sub/file2.php';

echo dirname(__FILE__);
// C:\MAMP\htdocs\fullstack-webdev\050_PHP基礎Part3\0500_パスの書き方について学ぼう\start

echo dirname(__FILE__, 2);
// C:\MAMP\htdocs\fullstack-webdev\050_PHP基礎Part3\0500_パスの書き方について学ぼう