<?php
function checkMarriageEligibility($age, $gender) {
    if ($age >= 21 && $gender == 'male') {
        return "Eligible for marriage";
    } elseif ($age >= 18 && $gender == 'female') {
        return "Eligible for marriage";
    } else {
        return "Not eligible for marriage";
    }
}

echo checkMarriageEligibility(20, 'male') . "\n";
