<?php
function calculator($operator, $num1, $num2) {
    switch ($operator) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Cannot divide by zero!";
            }
        default:
            return "Invalid operator";
    }
}

echo "Addition: " . calculator('add', 5, 3) . "\n";
echo "Subtraction: " . calculator('subtract', 5, 3) . "\n";
echo "Multiplication: " . calculator('multiply', 5, 3) . "\n";
echo "Division: " . calculator('divide', 5, 3) . "\n";
