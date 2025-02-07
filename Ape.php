<?php
    include_once("animal.php");
    class Sungokong extends Animal {
        public $legs = 2;

        public function yell() {
            return "Auooo";
        }
    }
?>