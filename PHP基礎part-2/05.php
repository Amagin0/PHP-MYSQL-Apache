<?php
// 正規表現を使ってみよう！
// 正規表現とは文字列のパターンを表現するための方法
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 * () 文字列の抜き出し
 */

$char_1 = 'aAabd12_sscc';
$char_2 = 'ZAabd12_sscc';

if(preg_match("/aAa/", $char_1, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// aAa

if(preg_match("/\wAa/", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// ZAa

if(preg_match("/\waa/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// ZAa

if(preg_match("/[a-zA-Z]aa/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// ZAa

if(preg_match("/[a-zA-Z]{1,3}/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// ZAa

if(preg_match("/[a-zA-Z]{1,}/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// ZAabd

if(preg_match("/[a-zA-Z]{1,}$/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '検索失敗';
}
// sscc