<?php
echo "<b>T741</b> <br>";
function wbz1 ($x){
    if ($x > 0) {
        return $x;
    }
    else {
        return $x * -1;
    }
}

function wbz2 ($x){
    return ($x > 0) ? $x : $x * -1;
}

echo wbz1(-3) . "\n <br>";
echo wbz1(7) . "\n <br>";
echo wbz2(15) . "\n <br>";
echo wbz2(-21) . "\n <br>";
