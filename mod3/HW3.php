<?php
//№1
class Calculator{
	private $num1;
	private $num2;
	public function __construct($num1, $num2){
		$this->num1=$num1;
		$this->num2=$num2;
	}
	public function add(){
		return $this->num1+$this->num2;
	}
	public function subtract(){
		return $this->num1-$this->num2;
	}
	public function multiply(){
		return $this->num1*$this->num2;
	}
	public function divide(){
		return $this->num1/$this->num2;
	}
}
$calc= new Calculator(3,2);
//echo $calc->add() .'<br>';
//echo $calc->subtract() . '<br>';
//echo $calc->multiply(). '<br>';
//echo $calc->divide(). '<br>';

class ScientificCalculator extends Calculator{
	private $precision;
	public function setPrecision($precision){
		return $this->precision=$precision;
	}
	public function getPrecision(){
		return $this->precision;
	}
}
$scn= new ScientificCalculator(3,2);
$scn->setPrecision(100);
//echo $scn->getPrecision();
