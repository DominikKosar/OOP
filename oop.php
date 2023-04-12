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


?>
