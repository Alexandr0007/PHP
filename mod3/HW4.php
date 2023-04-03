<?php
//№1
interface PersonInterface{
	public function getInfo();
}
abstract class Person implements PersonInterface{
	public $name;
	public $age;
}
class Student extends Person{
	public function getInfo(){
		echo "My name is $this->name, my age is $this->age and my major is $this->major.";
	}
	public $major;
	public function __construct($major){
		$this->major = $major;
	}
}
$student= new Student("Builder");
$student->name = "Victor";
$student->age = 18;
//$student->getInfo();

//№2
abstract class Vehicle{
	protected $brand;
	protected $model;
	abstract public function getInfo();
	public function startEngine(){
		echo "Двигатель транспорта запустился";
	}
}
interface ElectricVehicle{
	
	public function setBatteryLife($a);
	public function getBatteryLife();
}
class Car extends Vehicle implements ElectricVehicle{
	public $batteryLife;
	public function __construct($brand, $model){
		$this->brand= $brand;
		$this->model = $model;
	}
	public function getInfo(){
		echo "Авто - $this->brand $this->model с емкостью аккумулятора - $this->batteryLife";
	}
	public function startEngine(){
		echo "Двигатель транспорта запустился";
	}
	public function setBatteryLife($a){
		return $this->batteryLife=$a;
	}
	public function getBatteryLife(){
		return  $this->batteryLife;
	}
}
/*$CAR1 = new Car('BMW','X6 sport');
$CAR1->setBatteryLife(1000);
$CAR1->getInfo() ;
echo "<br>";
$CAR1->startEngine();*/

//№3
interface MathOperations{
	public function add($a,$b);
	public function subtract($a,$b);
	public function multiply($a,$b);
	public function divide($a,$b);
}
abstract class BaseCalculator{
	abstract public function add($a,$b);
	abstract public function subtract($a,$b);
	abstract public function multiply($a,$b);
	abstract public function divide($a,$b);
}

class Calculator extends BaseCalculator implements MathOperations{
	public function add($a,$b){
		echo $a+$b;
	}
	public function subtract($a,$b){
		echo $a-$b;
	}
	public function multiply($a,$b){
		echo $a*$b;
	}
	public function divide($a,$b){
		echo $a/$b;
	}
}
/*$n1= new Calculator();
$n1->add(4,2);
echo "<br>";
$n1->subtract(4,2);
echo "<br>";
$n1->multiply(4,2);
echo "<br>";
$n1->divide(4,2);
echo "<br>";*/

