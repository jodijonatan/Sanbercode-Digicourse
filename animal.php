<?php
    class Animal {
        public $name = "shaun";
        public $legs = 4;
        public $cold_blooded = "no"; 

        public function __construct($namaAnimal) {
            $this->name = $namaAnimal;
        }
    }
?>