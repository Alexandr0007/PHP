<?php
//№1
class Car{
	public $model;
	public $year;
	public $color;

	public function getInfo(){
		return "Машина - ". $this->model . ' '. $this->year . ' года ' . $this->color . ' цвет.';	
	}
	public function paint($col){
		$this->color=$col;
	}
}
$car1 = new Car();
$car1->model='LADA CROSS';
$car1->year=2015;
$car1->color='синий';
echo $car1->paint('красный');
//echo $car1->getInfo();

//№2
class Calculator{
	public function add($a, $b){
		return $a + $b;
	}
	public function subtract($a, $b){
		return $a - $b;
	}
	public function multiply($a, $b){
		return $a * $b;
	}
	public function divide($a, $b){
		return $a / $b;
	}
}
$val= new Calculator();
//echo $val->add(3,2) . "<br>";
//echo $val->subtract(3,2). "<br>";
//echo $val->multiply(3,2). "<br>";
//echo $val->divide(3,2). "<br>";

//№3
class BankAccount {
	public $balance;
	public function deposit($money){
		return $this->balance + $money;
	}
	public function withdraw($money){
		return $this->balance - $money;
	}
}
$acc = new BankAccount();
$acc->balance=1000;
//echo $acc->withdraw(120) . '<br>';
//echo $acc->deposit(120);

//№4
class Book{
	public $title;
	public $author;
	public $price;
	public function GetInfo(){
		return "Название - $this->title, автор - $this->author, цена- $this->price.";
	}
	public function setPrice($price){
		$this->price= $price;
	}
}
$book= new Book();
$book->title= "Ведьмак";
$book->author= "Анджей Сапковский";
$book->setPrice(1120);
//echo $book->GetInfo();

//№5
class Circle{
	public $radius;
	public function getArea(){
		return $this->radius**2 * pi();
	}
	public function getCircumference(){
		return $this->radius * 2 * pi();
	}
}
$circle= new Circle();
$circle->radius = 3;
//echo $circle->getArea(). '<br>';
//echo $circle->getCircumference();
