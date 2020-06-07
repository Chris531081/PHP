<?php
class Person {

 private $name;
    

 private $dateOfBirth;
 

 public function setName($name){
     $this->name = $name;
 }
 

 public function setDateOfBirth($dateOfBirth){
     $this->dateOfBirth = $dateOfBirth;
 }
 

 public function getName(){
     return $this->name;

 }
 

 public function getDateOfBirth(){
     return $this->dateOfBirth;
 } 

}

$person = new Person();
 
//hier setten we de naam.
$person->setName('Chris');
 
//hier getten we de naam.
$name = $person->getName();
 
// hier Printen we de naam en een stukje tekst.
echo "Mijn naam is " , $name;

// hieronder doe ik hetzelfde maar dan voor de geboorte datum.


$person->setDateOfBirth('17-11-2001');
 

$dateOfBirth = $person->getDateOfBirth();
 

echo " ik ben geboren op " , $dateOfBirth;



?> 
