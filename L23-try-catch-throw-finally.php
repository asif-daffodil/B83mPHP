<?php  
$x = 3;
    try{
        if($x >= 5){
            throw new Exception('This is an exception');
        }
        echo 'This is not an exception<br>';
    }catch(Exception $e){
        echo 'Message: '.$e->getMessage()."<br>";
    }finally{
        echo 'Finally block';
    }

?>