<?php

//№1
    for ($i=1; $i<6; $i++) { 
    for ($j=5; $j>=$i; $j--) { 
     echo "&nbsp&nbsp";
     }
     for ($b=1; $b<=$i ; $b++) { 
      echo '*';
     }
     echo '<br>' ;
}
echo '<br>' . '<br>'.'<br>';
//№2
$arr1=['Январь', 'февраль', 'март',' апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
var_dump($arr1);
echo '<br>' . '<br>'.'<br>';
//№3
function kk($a)
{
    return sqrt($a);
}
$res1=kk(3);
$res2=kk(4);
echo $res1+$res2;
echo '<br>' . '<br>'.'<br>';
//№4
$arr2=[1, 2, 2, 3, 4, 5, 6, 2];

 function delElem($v, $arr){
 foreach($arr as $key => $item){
    if ($item == $v){
      unset($arr[$key]);
    }
    }
    var_dump($arr);
}
    delElem(2, $arr2);
    echo '<br>' . '<br>'.'<br>';

//№5
   function check($arr){
    foreach($arr as $key => $item){
        $a=0;
        $b=$arr[$key];
        $c=$arr[$key+1];
        if($b==$c){
            echo 'Yes';
            $a++;
            break;
        }
    }
    if ($a==0){
        echo 'No';
    }
} 

check($arr2);
echo '<br>' . '<br>'.'<br>';

//№6
function odd($val){
    $c=0;
while ($val > 0) {
    $array[] = $val % 10;
    $val = intval($val / 10);
    }
    $array = array_reverse($array);
    foreach ($array as $item){
        if ($item%2==0){
            $c++;
        }
    }
    if ($c>0) {
        echo 'Не все цифры четные';
    }
    else {
        echo 'Все цифры четные';
    }
}
odd(9913);
echo '<br>' . '<br>'.'<br>';
//№7

$arr6=[2,4,9,8,10,40];
function even($arr){
    $a=0;
    foreach($arr as $item){
        if ($item%2!=0){
            $a++;
        }
    }
    if($a>0){
        echo 'Не все элементы массива четные';
    }
    else{
        echo 'Все элементы массива четные';
    }
}
even($arr6);
echo '<br>' . '<br>'.'<br>';









