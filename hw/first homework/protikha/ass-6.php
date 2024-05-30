<?php
function checkOddEven($num) {
    if ($num % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

echo checkOddEven(7) . "\n";
