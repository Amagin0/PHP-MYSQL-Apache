<?php 
// ==と===の違い
if(1 == '1'){
  echo 'true';
} else {
  echo 'false';
}
# true

if(1 === '1'){
  echo 'true';
} else {
  echo 'false';
}
# false

# ==  データ型の比較を行わない
# === データ型の比較も行う

if(0 == ''){
  echo 'true';
} else {
  echo 'false';
}
# php8.0からfalseに変更

$var = '';
if(0 == $var){
  echo 'true';
} else {
  echo 'false';
}
# php8.0からfalseに変更

/* 
falsyな値

"" (空文字)
0 (数値、文字列)
NULL
FALSE
*/

if(0){
  echo 'true';
} else {
  echo 'false';
}
# false

# !...否定の論理演算子
if(!0){
  echo 'true';
} else {
  echo 'false';
}
# true