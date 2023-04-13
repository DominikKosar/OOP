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

        public function __toString(){
            return $this->jmeno." ".$this->prijmeni;
        }

        /*public function jduDoPrace(){
            echo "Zrovna vyrážím do práce, ".$this->jmeno." a je ".date("H:i:s");   //hodiny, minuty, sekundy
        }*/
    }



?>
