<?php
/**
 * 名前空間について学ぼう
 * 
 * 
 * コードの格納場所
 */

/* 名前空間に登録できるのは、関数、定数、クラス*/
/* namespace lib;

const TAX_RATE = 0.1;
    
function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
*/

require_once 'lib.php';
use function lib\with_tax;
use const lib\sub\TAX_RATE;
$price = with_tax(1000, 0.08);
echo $price;
echo TAX_RATE;

/* useを使わない場合 */
$price = \lib\with_tax(1000, 0.08);
//  \名前空間

echo $price;
echo \lib\sub\TAX_RATE;

/* 名前空間を意識して記載すると */
function my_echo() {
}
my_echo();
class GlobalCls{

}