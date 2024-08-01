<?php  
    // mail
    if(isset($_POST['submit'])){
        $to = 'lecturer1@dipti.com.bd';
        $subject = 'Test mail';
        $message = 'Hello, this is a test mail';
        $headers = 'From:abir@dipti.com.bd';

        $sendMail = mail($to, $subject, $message, $headers);

        if($sendMail){
            echo 'Mail sent successfully';
        }else{
            echo 'Mail sent failed';
        }
    }
?>

<form action="" method="post">
    <input type="submit" name="submit" value="Send Mail">
</form>