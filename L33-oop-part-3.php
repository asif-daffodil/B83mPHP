<!--  magic methods -->
  <?php  
        class myClass {
        public $setProperties = [];
        public $status = "Single";
        public function __get($name) {
            echo "You are trying to access non-existing or private property $name <br>";
        }

        public function __set($name, $value) {
            $this->setProperties[$name] = $value;
            echo $this->setProperties[$name]."<br>";
        }

        public function __isset($name) {
            if(isset($this->setProperties[$name]) || isset($this->$name)) {
                echo "Property $name is set <br>";
            } else {
                echo "Property $name is not set <br>";
            }
        }

        public function __unset($name) {
            echo "Unsetting is not allowed <br>";
        }

        // __call() method is triggered when invoking inaccessible methods in an object context.
        public function __call($name, $arguments) {
            echo "You are trying to access non-existing or private method $name <br>";
        }

        // __callStatic() is triggered when invoking inaccessible methods in a static context.
        public static function __callStatic($name, $arguments) {
            echo "You are trying to access non-existing or private static method $name <br>";
        }

        // __sleep() method is called when the object is serialized.
        public function __sleep() {
            return ["status"];
        }
        
        // __wakeup() method is called when the object is unserialized.
        public function __wakeup() {
            echo "Wakeup method is called <br>";
        }

        //  __serialize() method is called when the object is serialized.
        public function __serialize() {
            return ["setProperties" => $this->status, "status" => $this->status];
        }

        // __unserialize() method is called when the object is unserialized.
        public function __unserialize(array $data) {
            $this->setProperties = $data["setProperties"];
            $this->status = $data["status"];
        }

        // __toString() method allows a class to decide how it will react when it is treated like a string.
        public function __toString() {
            return "This is a myClass object <br>";
        }

        // __invoke() method is called when a script tries to call an object as a function.

        public function __invoke() {
            return "Object is being called as a function <br>";
        }

        // __set_state() is called for classes exported by var_export() when var_export() is called with the __set_state() magic method.
        public static function __set_state(array $properties) {
            $obj = new myClass();
            $obj->setProperties = $properties["setProperties"];
            $obj->status = $properties["status"];
            return $obj;
        }

        // __clone() method is called when an object is cloned.
        public function __clone() {
            echo "Object is being cloned <br>";
        }

        // __debugInfo() method is called by var_dump() when dumping an object to get the properties that should be shown.
        public function __debugInfo() {
            return ["setProperties" => $this->setProperties, "status" => $this->status];
        }
    } 

    $obj = new myClass();
    echo $obj->city;
    $obj->city = "Dhaka";
    isset($obj->age);
    unset($obj->city);
    $obj->myMethod();
    myClass::myStaticMethod();
    echo "<pre>";
    print_r(serialize($obj));
    echo "</pre>";
    echo unserialize(serialize($obj))->status;
    echo "<br>";
    echo $obj;
    echo $obj();
    $obj->setProperties = ["name" => "Aiman", "age" => 22];

    $exportedObj = var_export($obj, true);
    eval('$newObj = '.$exportedObj.';');
    echo "<pre>";
    print_r($newObj);
    echo "</pre>";

    $clonedObj = clone $obj;
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
  ?>