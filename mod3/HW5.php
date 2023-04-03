<?php
//№1
class Calculator {
	public static function add( float $a, float $b): float {
		return $a+$b;
	}
	public static function subtract(float $a, float $b): float {
		return $a-$b;
	}
	public static function multiply(float $a, float $b): float {
		return $a*$b;
	}
	public static function divide(float $a, float $b):float {
		return $a/$b;
	}
}
/*echo Calculator::add(3,2) . '<br>';
echo Calculator::subtract(3,2) . '<br>';
echo Calculator::multiply(3,2) . '<br>';
echo Calculator::divide(3,2) . '<br>';*/

//№2
class BankAccount{
	private static float $interestRate;
	public static function setInterestRate(float $money){
		self::$interestRate = $money;
	}
	public static function getInterestRate(){
		echo self::$interestRate;
	}
}
BankAccount::setInterestRate(500);
//BankAccount::getInterestRate();

//№3
class Book{
	
	protected static int $count = 0;
	
	public function __construct() {
	    static::$count++;
	}
	public static function getInfo(){
	  	echo "Последняя книга №" . static::$count;
	}
	public static function getCount() {
    echo static::$count;
	}
}
$book1 = new Book;
$book4 = new Book;
$book3 = new Book;
$book2 = new Book;
//Book::getCount();
//Book::getInfo();



