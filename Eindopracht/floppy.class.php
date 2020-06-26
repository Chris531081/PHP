<?php





/**
 * De class floppy.
 */
class Floppy extends Figuur {
    public function __construct($If) {
        parent::__construct($If, 0);  

        
 
     }


    
    /**
     * @return string
     */
    public function getF() {
        return $this->x;
    }


     /**
      * @param mixed $f
      * 
      * @return int het returned het antwoord van de rekensom
      */
     public  function berekenOppervlakte($f) {

        $opp = ($f * $f);
        return $opp;
     }


}
?>