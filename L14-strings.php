<?php  
    $fname = "Protikkha";
    $lname = "Tanwi";

    // echo $fname . " " . $lname . "<br>";

    $ss = "Mujhaid";
    $ss .= " Boyati";

    echo $ss;

    // Trimming strings
    $str = "    Hello World    ";
    echo "<br>" . trim($str) . "<br>";

    // Removing slashes and other harmful characters
    $str = "<script>alert('Your website is hacked')</script>";
    echo htmlspecialchars(stripslashes($str));

    // String functions
    echo "<br>" . strlen($fname) . "<br>";
    echo str_word_count($fname) . "<br>";
    echo strrev($fname) . "<br>";
    echo strpos($fname, "t") . "<br>";
    echo str_replace("Protikkha", "Protikkha Tanwi", $fname) . "<br>";
    //  substr
    echo substr($fname, 0, 4) . "<br>";
    // str_shuffle
    echo str_shuffle($fname) . "<br>";

?>