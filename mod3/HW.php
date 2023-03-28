<?php
class Person{
	public $firstName;
	public $lastName;
	public function __construct($firstName, $lastName){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
	public function get_firstName(){
		return $this->firstName;
	}
	public function get_lastName(){
		return $this->lastName;
	}
	public function set_firstName($firstName){
		$this->firstName=$firstName;
	}
	public function set_lastName($lastName){
		$this->lastName=$lastName;
	}
	public function fullName(){
		return $this->firstName . ' ' . $this->lastName;
	}
}
$person = new Person('Alex', 'Frolov'); //данные через конструктор
//$person->firstName='Ivan';
//$person->lastName= 'Ivanov';
echo $person->fullName();