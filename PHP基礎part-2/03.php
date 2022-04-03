<?php
// 連想配列を使ってみよう
$arry = [
  'name' => 'Bob',
  'age' => 12,
  'sports' => ['baseball', 'swimming']
];

echo $arry['name'];
echo $arry['age'];
echo $arry['sports'][1];

$arry['age'] = 24;
echo $arry['age'];

$arry['age'] += 24;
echo $arry['age'];

array_shift($arry);
echo $arry['name'];
// error

unset($arry['age']);
echo $arry['age'];
// error