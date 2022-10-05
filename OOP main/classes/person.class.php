<?php

    // class MyClass{
    //     // ?Properties and methods here
    //     public $info = 'This is some info';


    // }

    // $object = new MyClass;

    // var_dump($object);


    // namespace Person;

    
    class Person {
        // Properties
        private $name;
        private $eyecolor;
        private $age;

        // Constructor
        public function __construct($name, $eyecolor, $age){
            $this->name = $name;
            $this->eyecolor = $eyecolor;
            $this->age = $age;
        }
        
        // constant
        const EXAMPLE = 'This will never change';
        public static $drinkingAge = 21;


        // Methods
        public function  setName($name){
            return $this->name = $name;
        }



        public function getDrinkingAge(){
            return self::$drinkingAge;
        }

        public static function setDrinkingAge($newDA){
            self::$drinkingAge = $newDA;
        }
    }


    class SecondClass extends Person{

        public $staticProperty = 'This is a static property';

        public static function anotherTest(){
            echo parent::EXAMPLE;
            echo self::$staticProperty;
        }
    }

    // class NewClass {
    //     public function __construct(){
    //         echo 'This class has been instantiated <br>';
    //     }

    //     public function setProperty(){
    //         echo 'I am a property <br>';
    //     }

    //     public function __destruct(){
    //         echo 'This is the end of the class <br>';
    //     } 
    // }

?>