<?php
$conexion = mysqli_connect('localhost', 'root', '', 'cuartoa');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    @font-face {
      font-family: "Ravi Prakash";
      src: url(fonts/RaviPrakash-Regular.ttf) format("truetype");
    }

    .titulo{
      font-family: Ravi Prakash;
      color: #ffffff;
      font-size: 72px;
      position: absolute;
      top: 69px;
      left: 624px;
      
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
      background: #f56f3a;
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
    input[type="text"]{
      background-color: #FFFFFF;
      border: 1px solid #CCCCCC;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
      transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
      border-radius: 4px 4px 4px 4px;
      color: #555555;
      display: inline-block;
      font-size: 14px;
      height: 20px;
      line-height: 20px;
      margin-bottom: 10px;
      padding: 4px 6px;
      vertical-align: middle;
    }
    input[type="text"]:focus {
      border-color: rgba(82, 168, 236, 0.8);
      outline: 0 none;
      -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
      -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
      box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
    }
    textarea{
      background-color: #FFFFFF;
      border: 1px solid #CCCCCC;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
      transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
      border-radius: 4px 4px 4px 4px;
      color: #555555;
      display: inline-block;
      font-size: 14px;
      height: 90px;
      line-height: 20px;
      margin-bottom: 10px;
      padding: 4px 6px;
      vertical-align: middle;
    }
    textarea:focus{
     border-color: rgba(82, 168, 236, 0.8);
     outline: 0 none;
     -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
     -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
     box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);
   }
   input[type="file"]{
     border: none;
     background: #000;
     color: #636363;
     padding: 10px;
     font-size: 12px;
     border-radius: 5px;
     position: relative;
     box-sizing: border-box;
     transition: all 500ms ease;
   }
   input[type="file"]:before{
     content:'';
     position: absolute;
     top: 0px;
     left: 0px;
     width: 0px;
     height: 42px;
     background: rgba(128,128,128,0.3);
     border-radius: 5px;
     transition: all 2s ease;
   }
   input[type="file"]:hover:before{
     width: 100%;
   }
   input[type="submit"]{
     border: none;
     background: #000;
     color: #636363;
     padding: 5px;
     font-size: 19px;
     border-radius: 7px;
     position: relative;
     box-sizing: border-box;
     transition: all 500ms ease;s
   }
   input[type="submit"]:before{
     content:'';
     position: absolute;
     top: 0px;
     left: 0px;
     width: 0px;
     height: 42px;
     background: rgba(128,128,128,0.3);
     border-radius: 5px;
     transition: all 2s ease;
   }
   input[type="submit"]:hover:before{
     width: 100%;
   }
   #express{
    position: absolute;
    width: 210px;
    height: 141px;
    left: 347.5px;
    top: 439px;
    background-position: -335px -392px;
  }
  

</style>
</head>
<body>

  <img id="expres" src="exp.PNG"  style="position: absolute;width: 759px;height: 195px;left: -73.5px;top: 11px;">

  <div class="arriba">
    <h1 class="titulo">Galeria Le'Alacran</h1>
  </div>
  <header>
    <div class="wrapper">
      <nav>
        <a href="index.html">Inicio</a>
				<a href="login.html">Salir</a>

      </nav>

    </div>
  </header class="header2">
  <form class="form" id="form" method="post" enctype="multipart/form-data" action="guardar_foto.php">
    <div>
      <h3>Subir Foto</h3>
      <input type="text" placeholder="Nombre" name="Nombre" /><br>
      <input type="text" placeholder="Direccion" name="Direccion" /><br>
      <input type="text" placeholder="Edad" name="Edad" /><br>
      <input type="text" placeholder="Telefono" name="Telefono" /><br>
      <textarea placeholder="Descripcion" name="Descripcion"></textarea><br>
      <input type="file" name="archivo" />
    </div>
    <br>
    <input type="submit" name="Almacenar" value="Almacenar" />
  </form>
  
</body>
</html>