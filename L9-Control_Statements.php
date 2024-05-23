<?php 
    session_start();
    $express = ["Valo", "Motamuty", "Nosto", "Valo", "Nosto", "Valo", "Nosto", "Valo", "Nosto", "Valo", "Nosto", "Motamuty", "Motamuty"];

    $_SESSION['lav'] = $_SESSION['lav'] ?? 0;
    $_SESSION['total'] = $_SESSION['total'] ?? 0;

    if($_SESSION['total'] <= (count($express) - 1)){
        if($express[rand(0, (count($express) - 1))] == "Valo"){
            $_SESSION['lav'] += 10;
            echo "Lav Hoise. Total Lav:".$_SESSION['lav']." <br>";
        }elseif($express[rand(0, (count($express) - 1))] == "Motamuty"){
            $_SESSION['lav'] += 5;
            echo "Motamuty Lav Hoise. Total Lav:".$_SESSION['lav']." <br>"; 
        }else{
            $_SESSION['lav'] -= 10;
            echo "Lav Nai :(. Total Lav: ".$_SESSION['lav']." <br>";
        }
        $_SESSION['total']++;
    }else{
        echo "Total Lav: ".$_SESSION['lav']." <br>";
        session_unset();
    }

    //  switch statement

    $day = "Friday";

    switch($day){
        case "Saturday":
            echo "Today is Saturday";
            break;
        case "Sunday":
            echo "Today is Sunday";
            break;
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "Today is Wednesday";
            break;
        case "Thursday":
            echo "Today is Thursday";
            break;
        case "Friday":
            echo "Today is Friday";
            break;
        default:
            echo "Invalid Day";
    }

    //  ternary operator

    if(2 == 2) {
        echo "True";
    }else{
        echo "False";
    }

    (2 == 6) ? "True" : "False";

    echo $protikha ?? "No value"; 
?>