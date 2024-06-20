<?php  
    function shoeMyName ($myFirstName = "Hello", $myLastName = "dude"){
        return "$myFirstName $myLastName<br>";
    }

    echo shoeMyName("Protikkha", "Tanwi");
    echo shoeMyName("Aiman", "Ghazi");
    echo shoeMyName();
    echo shoeMyName("Mujhaid");
    echo shoeMyName(myLastName:"Boyati", myFirstName:"Mujhaid");
?>