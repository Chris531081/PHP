<?php







/**
 * [een class genaamd Person]
 */
class Person {

 /**
  * @var [str name]
  */
 private $name;
    

 /**
  * @var [int date of birth]
  */
 private $dateOfBirth;
 

 /**
  * @param mixed $name
  * 
  * @return [str name]
  */
 public function setName($name){
     $this->name = $name;
 }
 

 /**
  * @param mixed $dateOfBirth
  * 
  * @return [int date of birth]
  */
 public function setDateOfBirth($dateOfBirth){
     $this->dateOfBirth = $dateOfBirth;
 }
 

 /**
  * @return [str name]
  */
 public function getName(){
     return $this->name;

 }
 

 /**
  * @return [int date of birth]
  */
 public function getDateOfBirth(){
     return $this->dateOfBirth;
 } 

}

$person = new Person();
 

$person->setName('Chris');
 

$name = $person->getName();
 

echo "Mijn naam is " , $name;


$person->setDateOfBirth('17-11-2001');
 

$dateOfBirth = $person->getDateOfBirth();
 

echo " ik ben geboren op " , $dateOfBirth;



?> 