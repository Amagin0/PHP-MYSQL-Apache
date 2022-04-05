<?php

/**
 * スコープ
 * 変数が参照可能な範囲
 * 
 * - グローバルスコープ
 * - ローカルスコープ
 * - スーパーグローバル
 */

// グローバルスコープ
$a = 0;

// ローカルスコープ...{}内でしか使えない
function fn1()
{
  $b = 1;
}

function fn2()
{
  echo $b;
}
fn2();
// 参照できない

function fn3()
{
  if (true) {
    $b = 2;
  }
  echo $b;
}
fn3();
// 参照できる

function fn4()
{
  $b = 2;
  echo $b;
}
fn4();
// 参照できる。同じ変数を使っても大丈夫

// グローバルスコープを関数内で使う
function fn5()
{
  global $a;
  echo $a;
}
fn5();

// スーパーグローバル
function fn6()
{
  var_dump($_SERVER);
}
fn6();
