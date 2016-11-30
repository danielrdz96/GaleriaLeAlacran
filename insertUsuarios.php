<?php
include("ConexionOO.php");
//$mysqli=new mysqli("localhost","root","","CuartoA");
//if($mysqli->connect_errno){
  //  printf("Error de conexión: %s\n", mysqli_connect_error());
    //exit();
//}


$user=$_POST["nombre"];
$pass=$_POST["password"];
//$rol=$_POST["rol"];
//echo $user;

$query="INSERT INTO usuarios(Username, Password) VALUES('$user','$pass')";
$mysqli->query($query);

$mysqli->close();

header('Location:login.html');

?>


