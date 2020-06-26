<?php



/**
 * [Description Figuur]
 */
abstract class Figuur {
   
    public static $PI = 3.1415;
    protected $x;
    protected $y;
   
    private $omschrijving;

    /**
     * @param mixed $Ix
     * @param mixed $Iy
     */
    public function __construct($Ix, $Iy)  {
        $this->setX($Ix);
        $this->setY($Iy);
        
    }

    /**
     * @param mixed $Ix
     * 
     * @return [type]
     */
    public function setX($Ix) {
        if (!is_int($Ix)) {
            die('dat is geen getal, daarmee kun je niet rekenen');
        }
        $this->x = $Ix;
    }
    /**
     * @param mixed $Iy
     * 
     * @return [type]
     */
    public function setY($Iy) {
        if (!is_int($Iy)) {
            die('dat is geen getal, daarmee kun je niet rekenen');
        }
        $this->y = $Iy;
    }

    /**
     * @param mixed $Iomschrijving
     * 
     * @return [type]
     */
    public function setOmschrijving($Iomschrijving){
        
        $this-> omschrijving = $Iomschrijving;
    }

    /**
     * @param mixed $Iomschrijving
     * 
     * @return string
     */
    public function getOmschrijving() : string {

        return $this-> omschrijving;
        
    }

 /**
  * @return [type]
  */
    abstract public  function berekenOppervlakte($r);

}

?>