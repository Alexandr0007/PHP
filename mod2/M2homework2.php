<?php
//№1
$pattern = '#a.b#';
$replacement= '!';
$str = 'ahb acb aeb aeeb adcb axeb';
echo $res= preg_replace($pattern, $replacement, $str);
echo "<br> <br> <br> ";

//№2
$pattern= '#ab*a#';
$replacement= '!';
$str = 'aa aba abba abbba abca abea';
echo $res= preg_replace($pattern, $replacement, $str);
echo "<br> <br> <br> ";

//№3
$pattern= '#ab?a#';
$replacement= '!';
$str = 'aa aba abba abbba abca abea';
echo $res= preg_replace($pattern, $replacement, $str);
echo "<br> <br> <br> ";

//№4
$pattern= '#(ab)+#';
$replacement= '!';
$str = 'ab abab abab abababab abea';
echo $res= preg_replace($pattern, $replacement, $str);
echo "<br> <br> <br> ";

//№5
$pattern= '#2\++3#';
$replacement= '!';
$str = '23 2+3 2++3 2+++3 345 567';
echo $res= preg_replace($pattern, $replacement, $str);
echo "<br> <br> <br> ";

//№6
$pattern= '#ab{4,}a#';
$replacement= '!';
$str = 'aa aba abba abbba abbbba abbbbba';
echo $res= preg_replace($pattern, $replacement, $str);
echo "<br> <br> <br> ";



