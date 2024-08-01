<?php  
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $extNameArr = explode('.',$fileName);
        $fileExt = strtolower(end($extNameArr));
        $allowed = ['jpg','jpeg','png','pdf'];

        if(empty($fileName)){
            $msg = "<span style='color: red'>Please choose a file</span>";
        }elseif(!in_array($fileExt, $allowed)){
            $msg = "<span style='color: red'>Please choose a valid file</span>";
        }elseif($fileSize > 2000000){
            $msg = "<span style='color: red'>File size is too large</span>";
        }else{
            $newFileName = uniqid('IMG-', false).'.'.$fileExt;
            $uploadPath = 'uploads/'.$newFileName;
            $move = move_uploaded_file($fileTmpName, $uploadPath);
            if($move){
                $msg = "<span style='color: green'>File uploaded successfully</span>";
            }else{
                $msg = "<span style='color: red'>File upload failed</span>";
            }
        }
    }
?>

<form action="" method="post" enctype="multipart/form-data" >
    <input type="file" name="file" >
    <input type="submit" name="submit" value="Upload" >
</form>
<?= $msg ?? null ?>