<?php  
    abstract class aiman {
        public const name = "Aiman";
        public static int $age = 22;

        private function __construct() {
            return ;
        }

        public static function aimanInfo () : string {
            return "My name is ".aiman::name." and I am ".aiman::$age." years old \n";
        }

        abstract protected static function myAbstractFunction(string $name = "Abdul", int $age = 35): string;

    }

    aiman::$age = 23;
    echo aiman::aimanInfo();

    interface aimanInterface {
        public static function aimanInterfaceFunction(string $msg = "Hello World") : string;
    }

    trait aimanTrait {
        public static function aimanTraitFunction(string $msg = "Hello World") : string {
            return $msg."\n";
        }
    }

    class aimanChild extends aiman implements aimanInterface {
        public static function myAbstractFunction(string $name = "Abdul", int $age = 35): string {
            return "My name is ".$name." and I am ".$age." years old \n";
        }

        public static function aimanInterfaceFunction(string $msg = "Hello World") : string {
            return $msg."\n";
        }

        use aimanTrait;
    }

    echo aimanChild::myAbstractFunction("Ghazi", 25);
    echo aimanChild::aimanInterfaceFunction("Hello Aiman Interface");
    echo aimanChild::aimanTraitFunction("Hello Aiman Trait");
?>