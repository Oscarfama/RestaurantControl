<?php 

$host = "localhost";
$user="root";
$password = "";
$db = "parcial2";

$connection = mysqli_connect($host,$user,$password, $db);
session_start();


$user_check =$_Session['login_user'];
$sql= "select Nombre from usuario where email = '$user_check'";
$result = mysqli_query($connection,$sql);
$login_session = $row['email'];

if(!isset($login_session)){
	mysqli_close();
	//header("location: admin");
}

?>