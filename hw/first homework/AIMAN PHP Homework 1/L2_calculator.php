<?php
 function calculator($val1, $val2, $operator) {
    $output = 0;
    
    switch($operator) {
        case 'addition':
            $output = $val1 + $val2;
            break;
        case 'subtraction':
            $output = $val1 - $val2;
            break;
        case 'multiplication':
            $output = $val1 * $val2;
            break;
        case 'division':
            $output = $val1 / $val2;
            break;
        default:
            return "Invalid Input";
    }
    
    return $output;
}

echo calculator(4, 5, 'addition');

?>