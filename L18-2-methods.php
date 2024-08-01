<?php  
    // echo $_REQUEST['msg']." ".$_REQUEST['alert'];
    // echo $_GET['msg']." ".$_GET['alert'];
    // $finalMsg = null;
    if(isset($_POST['msg']) && isset($_POST['alert'])){
        $finalMsg = $_POST['msg']." ".$_POST['alert'];
    }
?>

<form action="" method="post">
    <input type="text" name="msg">
    <input type="text" name="alert">
    <button type="submit">Show Message</button>
</form>

<?php  
    // echo $_REQUEST['msg'] ?? null;
    // echo $_GET['msg'] ?? null;
    // echo $_POST['msg'] ?? null;
    echo $finalMsg ?? null;
?>