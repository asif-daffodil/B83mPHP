<?php
 function positiveChecker($number) {
    if(!is_numeric($number)) {
        return "Invalid Input";
    }
    if ($number >= 0) {
        return "The number is positive";
    }else {
        return "The number is negative";
    }
}

echo positiveChecker(-21);

?>