<?php 
    
    //třída - obecný vzor
    class Clovek{

        public $jmeno;
        public $prijmeni;
        public function pozdrav(){
            echo "Ahoj, já jsem ".$this->jmeno." ".$this->prijmeni;
        }

        public function jduDoPrace(){
            echo "Zrovna vyrážím do práce, ".$this->jmeno." a je ".date("H:i:s");
        }
    }

    //tvorba objektu
    $pavel = new Clovek();
    $pavel ->jmeno = "Pavel";
    $pavel ->prijmeni = "Novák";
    
    $jana = new Clovek();
    $jana ->jmeno = "Jana";
    $jana ->prijmeni = "Novotná";

    $dalibor = new Clovek();
    $dalibor ->jmeno = "Dalibor";
    $dalibor ->prijmeni = "Netkal";

    //objekty umí pozdravit
    $pavel ->pozdrav();
    echo "<br>";
    $jana ->pozdrav();
    echo "<br>";
    $dalibor ->pozdrav();
    echo "<br>";

    //objekty umí jít do práce
    $pavel ->jduDoPrace();
    echo "<br>";
    $jana ->jduDoPrace();
    echo "<br>";
    $dalibor ->jduDoPrace();

?>
