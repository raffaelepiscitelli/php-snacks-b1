<?php
    class Person {
        public $age;

        public function __construct($age)
        {
            return $this->age = $age;
        }

        public function setAge($newAge) {
            if (!is_int($newAge)) {

            }
        }
    }

 

?>