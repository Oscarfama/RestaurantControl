<?php
session_start();
$host = "localhost";
$user="root";
$password = "";
$db = "parcial2";
$hola= '';

$conn = new mysqli($host,$user,$password, $db);
if(isset($_POST['name'])){
	$name= $_POST['name'];
	$dir=$_POST['direccion'];
	$sql = "insert into restaurant (Nombre, Direccion) values('$name','$dir')"; 

	if($conn->query($sql) ===TRUE){
		header("location: admin");
	}
}
?>
<h2><?php $name ?></h2>
<div class="container">
	<div class="main">
		<div class="main-center">
			<h5>Restaurant Manager</h5>
				<form action="" method="POST">
					<div class="form-group">
						<label for="name">Nombre del Restaurant</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
							</div>
					</div>
					<div class="form-group">
						<label for="email">Direccion</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="direccion" placeholder="Enter your Email"/>
							</div>
					</div>
					<div style="text-align: center">
					<button type="submit" >SUBMIT</button>
					</div>
				</form>
		</div><!--main-center"-->
	</div><!--main-->
</div><!--container-->