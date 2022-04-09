<?php
namespace lib;

function with_tax($base_price, $tax_rate = sub\TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

namespace lib\sub;

const TAX_RATE = 0.1;
    

/* グローバル空間内に配置された関数や定数は、"\"がいらない(グローバル空間を表す必要がない)。
   クラスについては必要。 */
my_echo();
new \GlobalCls();