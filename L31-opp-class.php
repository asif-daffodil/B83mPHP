<?php  
    class myInfo {
        // properties
        public $myName = "Asif Abir";
        public $myCity = "Dhaka";

        // methods
        public function myDetails() {
            return "My name is ".$this->myName." and I live in ".$this->myCity;
        }

        public function __construct($msg) {
            echo $msg."<br>";
        }

        public function __destruct() {
            echo "This is a destructor function";
        }
    } 

    //  instantiate the class | create object
    $myObj = new myInfo("Hello World");
    $myObj->myName = "Asif";
    echo $myObj->myDetails();
    echo "<br>";

    // inheritance
    class myChildInfo extends myInfo {
        public $myChildName = "Asifa Amrin";

        public function myChildDetails() {
            return "My elder child name is ".$this->myChildName." and she lives in ".$this->myCity;
        }

        public function __construct() {
            return ;
        }

        public function __destruct() {
            return ;
        }
    }

    $myChildObj = new myChildInfo;
    echo $myChildObj->myChildDetails();
    echo "<br>";
?>