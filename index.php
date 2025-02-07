<?php
    include_once("animal.php");
    include_once("Ape.php");
    include_once("Frog.php");

    $sheep = new Animal("shaun");

    echo "Name : " . $sheep->name . "<br>";
    echo "legs : " . $sheep->legs . "<br>"; 
    echo "cold blooded : " . $sheep->cold_blooded . "<br><br>";

    $frog = new Buduk("buduk");
    echo "Name : " . $frog->name . "<br>";
    echo "legs : " . $frog->legs . "<br>"; 
    echo "cold blooded : " . $frog->cold_blooded . "<br>";
    echo "Jump : " . $frog->jump() . "<br><br>";

    $keraSakti = new Sungokong("kera sakti");
    echo "Name : " . $keraSakti->name . "<br>";
    echo "legs : " . $keraSakti->legs . "<br>";
    echo "cold blooded : " . $keraSakti->cold_blooded . "<br>";
    echo "Yell : " . $keraSakti->yell();
?>