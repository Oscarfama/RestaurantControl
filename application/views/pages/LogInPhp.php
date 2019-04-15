<?php
 session_start();

$host = "localhost";
$user="root";
$password = "";
$db = "parcial2";
$hola= '';

$connection = mysqli_connect($host,$user,$password, $db);
if(isset($_POST['email'])){
	$uname= $_POST['email'];
	$pass=$_POST['password'];

	$sql= "select * from usuario where email = '$uname' and Password = '$pass' ";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_num_rows($result);
	$values = mysqli_fetch_object($result);
	$_SESSION['myemail'] = $values->email;

	$hola = $result;

	if($row>=1)
		{
			$_SESSION['login_user'] = $username;
			header("location: admin");
		}else {
			echo " datos incorrectos";
		}

	//mysqli_close();
	}
?>