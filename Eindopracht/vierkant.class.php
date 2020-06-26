<?php

class Vierkant extends Figuur {
    public function __construct($Ix) {
        parent::__construct($Ix, 0);  

 
     }


    
    public function getX() {
        return $this->x;
    }


     public  function berekenOppervlakte($x) {

        $opp = ($x * $x);
        return $opp;
     }


}



?>