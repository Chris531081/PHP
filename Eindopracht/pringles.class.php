<?php

class Pringle extends Figuur {

    /**
     * @param mixed $Il
     * @param mixed $Im
     */
    public function __construct($Il, $Im) {
       parent::__construct($Il, $Im);  

    }

    /**
     * @return string
     */
    public function getL() {
        return $this->x;
    }

    /**
     * @return string
     */
    public function getM() {
        return $this->y;
        
    }


    /**
     * @param mixed $l
     * 
     * @return int het returned het antwoord van de som
     */
    public function berekenOppervlakte($l) {
       
        $opp = (2 * pi() * $l * $l) + (2 * pi() * $l = $this->x);

        return $opp;
    }
    

}





?>