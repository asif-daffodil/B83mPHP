<?php  
    // Superglobals
    // $GLOBALS
    $x = 5;
    $y = 10;
    function sum(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    sum();
    echo $z."<br>";

    // $_SERVER
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['HTTP_HOST']."<br>";
    echo $_SERVER['HTTP_USER_AGENT']."<br>";
    echo $_SERVER['SCRIPT_NAME']."<br>";
    // get user ip address
    echo $_SERVER['REMOTE_ADDR']."<br>";
    // get server ip address
    echo $_SERVER['SERVER_ADDR']."<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    // $_REQUEST
    echo $_REQUEST['name']."<br>";
    echo $_REQUEST['email']."<br>";

    // $_POST
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";

    // $_GET
    echo $_GET['name']."<br>";
    echo $_GET['email']."<br>";

    // $_FILES
    echo $_FILES['file']['name']."<br>";
    echo $_FILES['file']['type']."<br>";
    echo $_FILES['file']['tmp_name']."<br>";
    echo $_FILES['file']['error']."<br>";
    echo $_FILES['file']['size']."<br>";

    // $_ENV
    echo $_ENV['USER']."<br>";

    // $_COOKIE
    echo $_COOKIE['user']."<br>";

    // $_SESSION
    session_start();
    $_SESSION['user'] = "John Doe";
    echo $_SESSION['user']."<br>";
?>