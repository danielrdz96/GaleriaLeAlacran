<?php

include("ConexionOO.php");

$user=$_POST["user"];
$pass=$_POST["password"];
//$rol=$_POST["rol"];

    
$resultados=$mysqli->query("SELECT * FROM usuarios WHERE Password='$pass' AND Username='$user'");
$filas=$resultados->fetch_all();

if(count($filas)==0){
    echo"El usuario o la contraseña son incorrectas";
    $_SESSION["VIP"]=NULL;
    
}
else{
    echo"Ya tienes acceso a la zona VIP";
    $_SESSION["VIP"]=$user;
    $url="index.html";
    header("Location:".$url);
    die();
    
}

?>