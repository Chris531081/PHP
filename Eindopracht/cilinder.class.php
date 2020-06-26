<?php

class Cilinder extends Figuur {

    public function __construct($Ih, $Ir) {
       parent::__construct($Ih, $Ir);  

    }

    public function getH() {
        return $this->x;
    }

    public function getR() {
        return $this->y;
        
    }


    public function berekenOppervlakte($r) {
       
        $opp = (2 * pi() * $r * $r) + (2 * pi() * $r = $this->x);

        return $opp;
    }
    

}




?>