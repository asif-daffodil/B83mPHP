<?php
function checkVoterEligibility($age) {
    if ($age >= 18) {
        return "Eligible to vote";
    } else {
        return "Not eligible to vote";
    }
}

echo checkVoterEligibility(25) . "\n";
