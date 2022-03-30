<?php 
/*
 - isset
 変数が定義されていて、null以外の値の時にtrueを返す。
 
 - empty
 issetがfalse、または値がfalsyな時にtrueを返す。

 !isset($val) || $val == false

 - falsyな値
 "" (空文字)
 0 (数値、文字列)
 NULL
 FALSE
*/

$a = 0;
$b = null;
$c = "";
$d = "0";

if(isset($a)) {
  echo 'true';
} else {
  echo 'false';
}
# true

if(isset($b)) {
  echo 'true';
} else {
  echo 'false';
}
# false

if(isset($e)) {
  echo 'true';
} else {
  echo 'false';
}
# false

if(empty($a)) {
  echo 'true';
} else {
  echo 'false';
}
# true

if(empty($b)) {
  echo 'true';
} else {
  echo 'false';
}
# true

if(empty($c)) {
  echo 'true';
} else {
  echo 'false';
}
# true

if(empty($d)) {
  echo 'true';
} else {
  echo 'false';
}
# true

if(!empty($a)) {
  echo 'true';
} else {
  echo 'false';
}
# false

if(!isset($a) || $a == false) {
  echo 'true';
} else {
  echo 'false';
}
# emptyを分解すると上記のようになる
# !isset($a)はfalse
# $a == falseがtrueとなっている