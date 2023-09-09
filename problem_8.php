<?php

$num1 = 30;
$num2 = 4;
$calc = "%";
echo "$num1 $calc $num2 = ";
if ($calc ==="+")
    echo $num1 + $num2;
elseif ($calc ==="-")
    echo $num1 - $num2;
elseif ($calc ==="*")
    echo $num1 * $num2;
elseif ($calc ==="/")
    echo $num1 / $num2;
elseif ($calc ==="**")
    echo $num1 ** $num2;
elseif ($calc ==="%")
    echo $num1 % $num2;