<?php

error_reporting(E_ALL);
ini_set('display_errors' , 'On');

$conexion = mysqli_connect("localhost","root","","segundoa") or
die("problemas con la conexion");
$articulos = mysqli_query($conexion, "select tema, articulo from
articulos") or die("Problemas con las slq" .mysqli_error($conexion));

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="utf-8">
    <title>Articulos</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <divexx class="row">
      <?php
      while($reg = mysqli_fetch_array($articulos))
      {
      ?>

          <div class="col s4">
            <?php
            echo "Tema: ".$reg['tema'] ."<br>";
            echo "Articulo: " .$reg['articulo'] ."<br><br>";
            ?>
          </div>


      <?php
      }
      echo "<br>";
      mysqli_close($conexion);
       ?>
    </div>
  </body>
</html>
