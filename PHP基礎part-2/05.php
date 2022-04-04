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
$char_3 = '1ZAabd12_sscc';
$char_4 = '<h2>1ZAabd12_sscc</h2>';
$char_5 = '';

if (preg_match("/aAa/", $char_1, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// aAa

if (preg_match("/\wAa/", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// ZAa

if (preg_match("/\waa/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// ZAa

if (preg_match("/[a-zA-Z]aa/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// ZAa

if (preg_match("/[a-zA-Z]{1,3}/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// ZAa

if (preg_match("/[a-zA-Z]{1,}/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// ZAabd

if (preg_match("/[a-zA-Z]{1,}$/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// sscc

if (preg_match("/[^a-zA-Z]{1,}$/i", $char_2, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// 検索失敗
// [^a-z]でa-z以外の文字列となる

if (preg_match("/[^a-zA-Z]{1,}/i", $char_3, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}

if (preg_match("/^[^a-zA-Z]{2,}/i", $char_3, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// 検索失敗

if (preg_match("/[^a-zA-Z]{2,}/i", $char_3, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// 12_

if (preg_match("/.{2,}/i", $char_3, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// 1ZAabd12_sscc

if (preg_match("/<h2>.{2,}<\/h2>/i", $char_4, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// <\/h2> "\"でエスケープすることで "/"がスラッシュであることを認識させている

if (preg_match("/<h2>(.{2,})<\/h2>/i", $char_4, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// タグの中身だけ取り出したいときは()で囲う

if (preg_match("/.{0,}/i", $char_5, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// "/.*/i" と同義

if (preg_match("/.+/i", $char_5, $result)) {
  echo "<div>検索成功</div>";
  print_r($result);
} else {
  echo '<div>検索失敗</div>';
}
// 検索失敗
