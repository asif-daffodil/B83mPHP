<?php  
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "83m_session");

    if(isset($_POST['register'])){
        $ruserName = $_POST['ruserName'];
        $rpassword = $_POST['rpassword'];

        $check_username = $conn->query("SELECT * FROM `users` WHERE `user_name` = '$ruserName'");
        if($check_username->num_rows > 0){
            echo "<script>alert('User name already exists')</script>";
        }else{
            $rpassword = md5($rpassword);
            $insert = $conn->query("INSERT INTO `users` (`user_name`, `password`) VALUES ('$ruserName', '$rpassword')");
            if($insert){
                echo "<script>alert('User registered successfully')</script>";
            }else{
                echo "<script>alert('Failed to register user')</script>";
            }
        }
    }

    if(isset($_POST['login'])){
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $password = md5($password);

        $check_user = $conn->query("SELECT * FROM `users` WHERE `user_name` = '$userName' AND `password` = '$password'");

        if ($check_user->num_rows == 1) {
            $_SESSION['user'] = $userName;
            echo "<script>alert('Login successful');location.href='./L30-session.php'</script>";
        }else{
            echo "<script>alert('Invalid username or password')</script>";
        }
    }

    if(isset($_GET['logout'])){
        session_unset();
        echo "<script>alert('Logout completed');location.href='./L30-session.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION['user'])){ ?>
    <table width="750" align="center" cellspacing="0">
        <tr>
            <td>
                <h2>Login Form</h2>
                <form action="" method="post">
                    <input type="text" placeholder="User Name" name="userName" required>
                    <br><br>
                    <input type="password" placeholder="password" name="password" required>
                    <br><br>
                    <button type="submit" name="login">Login</button>
                </form>
            </td>
            <td>
                <h2>Registration Form</h2>
                <form action="" method="post">
                    <input type="text" placeholder="User Name" name="ruserName" required>
                    <br><br>
                    <input type="password" placeholder="password" name="rpassword" required>
                    <br><br>
                    <button type="submit" name="register">Register</button>
                </form>
            </td>
        </tr>
    </table>
    <?php }else{ ?>
        <h2>Welcome <?= $_SESSION['user'] ?></h2>
        <a href="./L30-session.php?logout=yes">Logout</a>
    <?php } ?>
</body>
</html>