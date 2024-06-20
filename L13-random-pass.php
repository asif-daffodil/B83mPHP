<?php 
    $capAlpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $smallAlpha = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $specialChars = "!@#$%^&*()_+{}|:<>?";

    echo str_shuffle(substr(str_shuffle($capAlpha), -2).substr(str_shuffle($smallAlpha), -2).substr(str_shuffle($numbers), -2).substr(str_shuffle($specialChars), -2).uniqid().rand(1000, 9999));

    // numeric functions
    
?>