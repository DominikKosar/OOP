<?php 
    
    //třída - obecný vzor
    class Clovek{
        public function pozdrav(){
            echo "Ahoj";
        }
    }

    //tvorba objektu
    $pavel = new Clovek();
    $jana = new Clovek();
    $dalibor = new Clovek();

    //objekty umí pozdravit
    $pavel ->pozdrav();
    echo "<br>";
    $jana ->pozdrav();
    echo "<br>";
    $dalibor ->pozdrav();
    echo "<br>";

    if(class_exists("Clovek")){
       echo "Ano, třída existuje"; 
    } else{
        echo "Pozor, třída neexistuje";
    }
    echo "<br>";

    if(method_exists("Clovek", "pozdrav")){
        echo "Ano, metoda existuje";
    } else{
        echo "Pozor, metoda neexistuje";
    }

?>
