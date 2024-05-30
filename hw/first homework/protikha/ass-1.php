<?php
function calculateElectricBill($units) {
    if ($units <= 50) {
        return $units * 3.50;
    } elseif ($units <= 150) {
        return (50 * 3.50) + (($units - 50) * 4.00);
    } elseif ($units <= 250) {
        return (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    } else {
        return (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }
}

echo "Electricity bill for 200 units: " . calculateElectricBill(200) . " tk\n";
