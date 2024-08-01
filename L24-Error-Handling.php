<?php  
    ini_set('display_errors', 1);
    // Error Handling
    if(5 < 10){
        trigger_error('This is an error', E_USER_ERROR);
    echo "Hello World<br>";
    }
?>
