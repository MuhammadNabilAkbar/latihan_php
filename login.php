<?php
session_start();
	//echo "<pre>".print_r($_POST,1)."</pre>";
$x =[];
$x['email'] = "";
$x['password'] = "";

if(isset($_POST['email'])){

$email = $_POST['email'];
$password = $_POST['password'];


if(trim($email) == ""){
	$x['email'] = 'error_empty';

}else if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	$x['email'] = "error_format";

}else{
	$x['email'] = "no_error";
}


if(trim($password)==""){
	$x['password'] = "password_empty";
}else if(strlen($password)<8){
	$x['password'] = 'password_length';
}else if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
	$x['password'] = 'password_restrict';

}



if($email=="nabil@gmail.com"){
	if($password=="nabil") {
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['email'] = $email;
		header("location:index.php?l=succes");
	}else{
		$_SESSION['isLoggedIn'] = false;
		
	}
}else{
	$_SESSION['isLoggedIn'] = false;
		
}

}

?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="" style="background:url(cloud.png);background-size:cover;">
	<center>

	<form method="POST" action="">
		<table>
			<tr>
				<td><span style="color:white">E-Mail</span></td>
			
				<td><input style="color:red"type="text" 
				name="email"
				></td>
			</tr>
			
			<?php if($x['email']!="no_error"){ ?>
			<tr>
				<td></td>
				<td>
					<?php switch ($x['email']) {
						case 'error_empty': ?>
							
							<span style="color:red">
							E-mail Cannot be blank
							</span>
							
						<?php break;
						case 'error_format': ?>
							<span style="color:red">
							E-mail Format error
							</span>
						<?php break;
				}
				?>

		</td>
		</tr>
		<?php } ?>


			<br>
			<br>
			<br>
			<tr>
				<td><span style="color:white">Password</span></td>
				<td><input style="color:red"type="Password"
			 	name="password"
			 	></td>
			</tr>
			<?php if($x['password']!="no_error"){ ?>
			<tr>
				<td></td>
				<td>
					<?php switch ($x['password']) {
						case 'password_empty': ?>
							
							<span style="color:red">
							Password Cannot be blank
							</span>
							
						<?php break;
						case 'password_length': ?>
							<span style="color:red">
							Password Format error
							</span>
						<?php break;
						case 'password_restrict': ?>
							<span style="color:red">
							Password Format error
							</span>
						<?php break;
				}
				?>

		</td>
		</tr>
		<?php } ?>

			<tr>
				<td></td>
				
				<td><button type="submit" style="color:black">Sign In</button></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>