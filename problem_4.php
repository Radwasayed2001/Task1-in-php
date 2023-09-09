<?php
$number = 6;
$factorial =1;
echo "the factorial of $number is ";
for($i=$number;$i>1;$i--) {
    echo "$i*";
    $factorial *=$i;
}
echo "$i=$factorial";