<?php

$host = "localhost";
$user="root";
$password = "";
$db = "parcial2";

$connection = mysqli_connect($host,$user,$password, $db);
if(isset($_POST['email'])){
	$uname= $_POST['email'];
	$pass=$_POST['password'];

	$sql= "select count(*) as contar from usuario where email = '$uname' and Password = '$pass' ";
	$result = mysqli_query($connection,$sql);
	$array = mysqli_fetch_array($result);

	if($array['contar']>0){
		header("location: admin");
	}else {
		echo " datos incorrectos";
	}
}
?>
<div class="backgr">
<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="#">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name= "email" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name= "password" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>