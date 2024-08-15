<?php  
    session_start();

    if(isset($_SESSION['name'])){
        header('location:index.php');
    }

    if(isset($_POST['login'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['city'] = $_POST['city'];
        header('location:index.php');
    }
?>
<h1>Login Form</h1>
<form action="" method="post">
    <input type="text" placeholder="Your name" name="name" required>
    <br><br>
    <input type="text" placeholder="Your City" name="city" required>
    <br><br>
    <button type="submit" name="login">Login</button>
</form>