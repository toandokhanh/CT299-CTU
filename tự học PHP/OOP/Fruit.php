<?php 
    $c = 10;
    function myFunction($a , $b){
        $c = $a;
        echo $a + $b;
    }
    echo "hello php <br/>";
    myFunction(5, 10);


    class Sinhvien {
        public $name;
        public $age;


        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }


        function into(){
            echo "toi la {$this->name}, toi {$this->age} tuoi";
        }


    }
    $sinhviena = new Sinhvien("toan", 18);
    $sinhviena->into();
?>