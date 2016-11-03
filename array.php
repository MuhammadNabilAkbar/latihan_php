<?php

// $a = array('hello','world');
// var_dump($a);
//array(2) { [0]=> string(5) "hello"
//			 [1]=> string(5) "world"}

// echo"<  pre>".print_r($a,1)."</pre>";
//array
//(
//	[0] => hello
//	[1] => world
//)

// $b =[];
// for($i=0;$i<1000;$i++){
// 	$b[$i] = "Pacar ke " .($i+1);
// }
// for ($i=0; $i < sizeof($b); $i++) { 
// if ($i < 199 and $i >99) {
// 	echo $b[$i];
// 	}
// }

// $c = [
// 	'd'=>['e'=>'s'],
// 		array('x'=>'u'),
// 	5=>[3,4],
// 	['x','d'=>[1,'f']]
// ];

//echo "<pre>".print_r($c,1)."</pre>";
//echo"<br>".$c['d']['e'];
// echo"<br>".$c[0]['x'];
// echo"<br>".$c[1][1];
// echo"<br>".$c[6]['d'][1];

// menampilkan array session
// echo "<pre>".print_r($_SESSION,1)."</pre>";


//input ke array
// $x =[];

// $a = 1;
// $b = 2;
// $c = $a+$b;

// $x['nama'] =  'nama';
// $x['alamat'] = 'alamat';
// $s['identitas'] = $x;
// $u[] = $s;

// $x['nama'] =  'nama 2';
// $x['alamat'] = 'alamat 2';
// $s['identitas'] = $x;
// $u[] = $s;

// $u[0]['identitas']['nama'] = 'nama';
// $u[0]['identitas']['alamat'] = 'alamat';
// $u[1]['identitas']['nama'] = 'nama 2';
// $u[1]['identitas']['alamat'] = 'alamat 2';

// tugas : tampilkan hanya yang urutan bilangan prima
for ($i=1; $i <= 100; $i++) {
	$u[$i]['identitas']['nama'] = 'nama'.$i;
	$u[$i]['identitas']['alamat'] = 'alamat'.$i;
}

echo "<pre>".print_r($u,1)."</pre>";












?>