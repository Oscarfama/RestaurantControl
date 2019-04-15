 <div class="row tours">
 <?php
 $host = "localhost";
$user="root";
$password = "";
$db = "parcial2";
$id= '';

$conn = new mysqli($host,$user,$password, $db);
if($conn -> connect_error){
    die("Connection failed:". $conn -> connect_error);
}
$sql = "select Id_Restaurant, Nombre, Direccion from restaurant"; 
$result = $conn->query($sql);

if($result -> num_rows>0){
    while ($row = $result-> fetch_assoc()){
        ?>
            <div class="tourcard">
            <figure>
                <div class="tourpic">
                    <img width="320" height="180" src="https://placeimg.com/400/225/nature">
                </div>
                <figcaption>
                  <h3 class="entry-title">
                      <a href="https://reezhdesign.com"><?php echo $row["Nombre"] ?> </a></h3>
                  <span class="description"><?php  echo $row["Direccion"]?></span>
                </figcaption>
                <div class="tourbtn">
                    <a class="btn btn-sm" >
                      <i class="fa fa-edit"></i><span>Edit</span>
                    </a>
                    <a method ="POST" class="btn btn-sm" target="_blank" rel="noreferrer">
                        <i class="fa fa-trash"  name="Delete" type= "Delete"></i><span>Delete</span>
                    </a>
                </div>
            </figure>
        </div>
        <?php 
        echo  $row["Id_Restaurant"];
    }
     if (isset($_POST['Delete'])){
        echo "dentro de accion del boton";
            $sql = "delete from restaurant where Id_Restaurant = '".$row["Id_Restaurant"]."'"; 
            $result = $conn->query($sql);
            echo "np esta funcionandooo";
        }

}
else { 
echo "No Clients";
}

 ?>
</div>
    
<div style="text-align: center;">
<a href="Form" class="btn btn-info" role="button" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  display: inline-block;
  font-size: 15px;
  margin: 3px 1px;
  border-radius: 12px;
  cursor: pointer;">Add</a>

</div>

<!-- <input type="submit" value="Login" class="btn float-right login_btn"-->