	<?php
session_start();

if(isset($_SESSION['isLoggedIn'])) {
if($_SESSION['isLoggedIn']==false){
	header("location:login.php");
	}
}else{
	header("location:login.php");
}


?>



<! DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center>

<body background="" style="background:url(images.jpeg);background-size:cover;">
	
<!--	<body background="color:white">-->
	<span style="color:green">
	<ul>
		<li style="color:red"><a href ="?p=condition" style="color:black">Condition</a></li>
		<li style="color:red"><a href ="?p=variabel" style="color:black">Variabel &amp;Operator</a></li>
		<li style="color:red"><a href ="?p=looping" style="color:black">Looping</a></li>
		<li style="color:red"><a href="?p=array" style="color:black">Array</a></li>
	</ul>
	<?php
		switch($_GET['p']){
			case 'array':
			echo "<h1>Allay</h1>";
			include 'array.php';
			break;

			case 'condition':
			echo "<h1>Condition</h1>";
			include 'condition.php';
			break;

			case  'variabel':
			echo "<h1>Variabel</h1>";
			include 'variabel_operator.php';
			break;

		
			case 'looping':
			echo "<h1>Looping</h1>";
			include 'looping.php';
			break;

			default:
			echo "<h1>404 Not Found</h1>";
			break;
		}
?>
</span>
</body>
</html>