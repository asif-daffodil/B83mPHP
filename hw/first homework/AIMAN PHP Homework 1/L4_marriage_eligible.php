<?php
 function marriageEligibilityChecker($gender, $age) {

    if (($gender == 'Male') && ($age >=21)){
        return "Man is eligible to marry";
    }elseif (($gender == 'Female') && ($age >=18)){
        return "Woman is eligible to marry";
    }else {
        return "Ineligible to marry";
    }
}

 echo marriageEligibilityChecker('Female', 25);
?>