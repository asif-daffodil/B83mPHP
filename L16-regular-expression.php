<?php  
    // Regular expression
    $str = "Hello World";
    echo preg_match("/World/", $str) . "<br>";
    echo preg_match("/world/", $str) . "<br>";
    echo preg_match("/world/i", $str) . "<br>"; // i means case insensitive
    echo preg_match("/^Hello/", $str) . "<br>"; // ^ means start
    echo preg_match("/World$/", $str) . "<br>"; // $ means end
    echo preg_match("/^Hello World$/", $str) . "<br>"; // ^ means start and $ means end
    echo preg_match("/^Hello World$/i", $str) . "<br>"; // ^ means start and $ means end
    echo preg_match("/^Hello W\w+$/i", $str) . "<br>"; // \w+ means one or more word characters
    echo preg_match("/^Hello W\w{1,5}$/i", $str) . "<br>"; // \w{1,5} means one to five word characters
    // \d means one digit
    //  example: \d{1,5} means one to five digits
    // \s means one whitespace
    //  example: \s{1,5} means one to five whitespaces
    // \b means word boundary
    //  example: \bHello\b means Hello word boundary
    // /^[A-Za-z]*$/