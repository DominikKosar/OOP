<?php 
    
    //třída - obecný vzor
    class Clovek{

        public $jmeno;
        public $prijmeni;

        public function __construct($jmeno, $prijmeni){
            $this->jmeno = $jmeno;
            $this->prijmeni = $prijmeni;
        }

        public function pozdrav(){
            echo "Ahoj, já jsem ".$this->jmeno." ".$this->prijmeni;
        }

        /*public function jduDoPrace(){
            echo "Zrovna vyrážím do práce, ".$this->jmeno." a je ".date("H:i:s");   //hodiny, minuty, sekundy
        }*/
    }

    //tvorba objektu
    $pavel = new Clovek("Pavel", "Novák");
    $jana = new Clovek("Jana", "Nováková");
    $dalibor = new Clovek("Dalibor", "Netkal");
    //objekty umí pozdravit
    $pavel ->pozdrav();
    echo "<br>";
    $jana ->pozdrav();
    echo "<br>";
    $dalibor ->pozdrav();

?>
