<?php
 function oddEvenChecker($number) {
    if ($number %2 == 0) {
        return "Even number";
    }else {
        return "Odd number";
    }
}

echo oddEvenChecker(11);
?>