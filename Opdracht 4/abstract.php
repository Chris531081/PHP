<?php
abstract class baan {
    private $_baanname;

      public function __construct($name) {
        $this->_baanname = $name;
    }

    public function getbaanname() {
        return $this->_baanname;
    }
    
    public abstract function getbaanStatus();
}

class kok extends baan {
    private $_kokId;
    
    public function __construct($baanname, $id) {
        $this->_baanname = $baanname;
        $this->_kokId = $id;
    }
    
    public function getbaanStatus() {
        return 'kok';
    }
}

class brandweerman extends baan {
    private $_brandweermanId;
    
    public function __construct($baanname, $id) {
        $this->_baanname = $baanname;
        $this->_brandweermanId = $id;
    }
    
    public function getbaanStatus() {
        return 'brandweerman';
    }
}

$chris = new kok('chris', 1);
$chrisjr = new brandweerman('chrisjr', 1);

echo 'Chris is een '.$chris->getbaanStatus().'. <br />';
echo 'ChrisJr is een '.$chrisjr->getbaanStatus().'.';
?>