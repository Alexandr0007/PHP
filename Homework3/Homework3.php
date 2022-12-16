<?php
	$a = 20;
	echo $a ,"<br>";

	$a = 1+2+3;
	echo $a ,"<br>";

	$a = 10;
	$b = 5;
	$c = $a - $b;
	$d = 7;
	$result = $c + $d;
	echo $result , "<br>";

	$a = 1.5;
	$b = 0.75;
	$result = $a + $b;
	echo $result , "<br>";

	$a = 5;
	echo -$a , "<br>";

	$a = 10;
	$b = 3;
	$c = intdiv($a , $b);
	$d = $a/$b;
	$result = $d - $c;
	echo $result , "<br>";
	//Из полного деления вычли целочисленное для получения остатка

	$text = "Привет мир!";
	var_dump($text );
	echo "<br>";
	 
?>
	 <p>Введите текст <input type="text" maxlength="10" placeholder="до 10 символов" size="15"></p> 
	 <!--Php был закрыт для перехода на html-->

<?php
	$a = true;
	$b = false;
	$c = null;
	echo $a , "<br>";
	echo $b , "<br>";
	echo $c , "<br>";

	$a = 1+2+3+4+5;
	echo $a, "<br>";

	$time = 60*60*24*365;
	echo $time , " секунд", "<br>";
	//минуты, часы, сутки, дни в году

	$tf = 341;
	$a = $tf-32;
	$tc = $a*5/9;
	echo $tc;

	
	


	
	


	


