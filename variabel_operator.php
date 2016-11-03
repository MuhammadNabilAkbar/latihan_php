<?php
/*
variabel berisi string
*/
$a ="Andini";
//variabel berisi angka
//atau desimal
$d = 1.2;
$e = 1;
//echo$d;
//echo$e;
//menggabungkan dua variabel
$x = "HELLO";
$w = "WORLD";
$z = $x.$w;
//echo $z; //HELLO WORLD

$m = "Test1";
//echo $m."<br>";//Test 1
$m .= "Test2";
//echo $m."<br>";//Test 1Test 2
$m .= "Test3";
//echo $m."<br>";//TEst 1Test 2Test 3

$q = 2;
$v = 20;
$ka = $q*$v;
$ba = $q/$v;
$ta = $q+$v;
$ku = $q-$v;
$mod = $q%$v;
// echo $ka."<br>";
// echo $ba."<br>";
// echo $ta."<br>";
// echo $ku."<br>";
// echo $mod."<br>";

//tipe data
$s = "HeLlo"; // <-teks
$i = 1;//integer/angka
$d = 1.2;//double/desimal
$b = true;//boolean
$arr = array();//array

var_dump($s);//string(5) "HELLO"
var_dump($i);//int(4)
var_dump($d);//float(1.2)
var_dump($b);//bool(true)
var_dump($arr);//array(0){}



?>