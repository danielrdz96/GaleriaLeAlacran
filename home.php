<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		body{

		}
		@font-face {
			font-family: "Ravi Prakash";
			src: url(fonts/RaviPrakash-Regular.ttf) format("truetype");
		}

		.arriba{
			background-color: #F59C02;
			height: 120px;

			background-repeat: no-repeat;
			position: absolute;
		}
		.titulo{
			font-family: Ravi Prakash;
			color: #ffffff;
			font-size: 72px;
			position: absolute;
			top: 69px;
			left: 610px;
			width: 685px;
			height: 420px;
		}
		.imagen{
			width: 175px;
			height: 195px;
			padding: .5em;
			float: left;
			margin-top: -2px
		}
		.img{
			color: #000000;
			font-size: 17px;
			border-style: solid;
			border-color: #000
		}
		header{
			width: 100%;
			overflow: hidden;
			background: #090909;
		}

		.wrapper{
			width: 90%;
			max-width: 1000px;
			margin: auto;
			overflow: hidden;
		}

		header .logo{
			color: #f2f2f2;
			font-size: 50px;
			line-height: 200px;
			float: left;
		}

		header nav{
			float: right;
			line-height: 200px;
		}

		header nav a{
			display: inline-block;
			color: #fff;
			text-decoration: none;
			padding: 10px 20px;
			line-height: normal;
			font-size: 20px;
			font-weight: bold;
			-webkit-transition: all 500ms ease;
			-o-transition: all 500ms ease;
			transition: all 500ms ease;
		}

		header nav a:hover{
			background: #f34602;
			border-radius: 50px;
		}

		.header2{
			position: fixed;
			height: 100px;
		}

		.header2 .logo{
			line-height: 100px;
			font-size: 30px;
		}

		.header2 nav{
			line-height: 100px;
		}

	</style>
</head>
<body>
	<img id="expres" src="exp.PNG"  style="position: absolute;width: 759px;height: 195px;left: -73.5px;top: 11px;">
	<div class="arriba">
		<h1 class="titulo">Galeria Le' Alacran</h1>
	</div>
	<header>
		<div class="wrapper">
			<nav>
				<a href="index.html">Inicio</a>
				<a href="login.html">Salir</a>

				<span id="img1"></span>
			</nav>
		</div>
	</header class="header2">
	<div>
		<?php
		$conexion = mysqli_connect('localhost', 'root', '', 'cuartoa');

		$subconsulta="SELECT * FROM foto";

		$filas = mysqli_query($conexion, $subconsulta);
		while ($columnas = mysqli_fetch_assoc($filas) ){
			echo '<div class="">' ;
			echo "<img src='Express/$columnas[archivo]' class='imagen'>";
			echo '</div>';
			echo '<div class="img">' ;
			echo "<p>Nombre: $columnas[nombre]</p>";
			echo "<p>Direccion: $columnas[direccion]</p>";
			echo "<p>Edad: $columnas[edad]</p>";
			echo "<p>Telefono: $columnas[telefono]</p>";
			echo "<p>Descripcion: $columnas[descripcion]</p>";
			echo '</div>' ;
		}

		?>
	</div>
</body>
</html>