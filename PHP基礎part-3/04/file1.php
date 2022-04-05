<?php
if(!function_exists('fn1')) {
  function fn1() {
    echo 'fn1 is called';
  }
}
// if(!function_exists('fn1'))...他の場所で使われているかどうか確認している
// requireを何回も使うと再宣言されてしまうので、それを避けるためにも使われる
$arry['num']++;