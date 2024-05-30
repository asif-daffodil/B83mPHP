<?php
 function voterEligibilityChecker($age) {

    if ($age >= 18){
        return "Eligible to vote";
    }else {
        return "Uneligible to Vote";
    }
}

 echo voterEligibilityChecker(43);
?>