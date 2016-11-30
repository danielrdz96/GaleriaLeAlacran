<?php
$conexion = mysqli_connect('localhost', 'root', '', 'cuartoa');

$nombre = $_POST['Nombre'];
$direccion = $_POST['Direccion'];
$edad = $_POST['Edad'];
$telefono = $_POST['Telefono'];
$descripcion = $_POST['Descripcion'];
    $nombre_file = mktime() .'.jpg';
    $posicion = 0;

    $consulta = <<<SQL
INSERT INTO
    foto
SET
    nombre='$nombre',
    direccion='$direccion',
    edad='$edad',
    telefono='$telefono',
    descripcion='$descripcion',
    archivo='$nombre_file'
SQL;
    mysqli_query($conexion, $consulta);

        $origen = $_FILES['archivo']['tmp_name'];
        $destino = "Express/$nombre_file";
     
        move_uploaded_file ($origen, $destino);

        header("Location: home.php");    
?>