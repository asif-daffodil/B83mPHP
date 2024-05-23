<?php  
    var_dump("ha ha ha");
    echo "<br>";
    var_dump(123);
    echo "<br>";
    var_dump(123.123);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([1, 2, 3]);
    echo "<br>";
    var_dump(null);
    echo "<br>";
    class students {
        public $name = "Protikkha";
        private $age = 21;
        protected $roll = 123;

        public function herAge () {
            return $this->age;
        }
    }

    class childOfStudent extends students {
        public function herRoll () {
            return $this->roll;
        }
    }
    $student = new students;
    var_dump($student);

    // resource
?>