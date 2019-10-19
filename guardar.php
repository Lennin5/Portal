<?php
  error_reporting(E_ALL);
  ini_set('display_errors' , 'On');
  $tema = $_REQUEST['tema'];
  $articulo = $_REQUEST['articulo'];
  $conexion = mysqli_connect ("localhost","root","","segundoa")
  or die ("Problemas con la conexion");
  mysqli_query($conexion, "insert into articulos(tema,articulo) value('$tema
  ','$articulo')") or die ("Problemas con la Query". mysqli_error($conexion));
  echo "Articulo Grabado"
?>
