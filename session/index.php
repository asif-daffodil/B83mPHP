<?php  
    session_start();
    if(!isset($_SESSION['name'])){
        header('location:login.php');
    }
?>
<h2>Welcome</h2>
<h3>Your name is : <?= $_SESSION['name'] ?> and your city is : <?= $_SESSION['city'] ?></h3>
<br>
<a href="logout.php">Logout</a>