<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    document.getElementById('btnSignIn').click();
    $('#btnSignIn').click();
</script>
  <body>
    <nav>

    </nav>
    <br>
    <div class="container">
      <div class="row">
        <div class="col s6">
          <img src="img\LL.jpg" alt="" class="pantallaprincipal responsive-img">
        </div>
        <div class="col s6">
          <div class="container">

            <form class="" action="guardar.php" method="post">
              <label form="tema"> Tema:
                <input type="text" name="tema" placeholder="Escriba el tema">
              </label>
              <label for="articulo">Articulo:
              <textarea id="textareal" name="articulo" class="materialize-texttarea" placeholder="Descripcion"></textarea>
              </label>
              <label for="seccion" style="color: white">Seccion</label>
                <select class="browser-default" style="color: black" name="seccion">
                  <option value=""></option>
                  <option value="A" style="color: black">"A"</option>
                  <option value="B" style="color: black">"B"</option>
                </select>
              </label>
              <br>
              <input type="submit" value="Enviar" class="btn btn-primary">
              <input type="reset" value="Limpiar" class="btn btn-primary">
                <a class="waves-effect waves-light btn" href="http://localhost/segundoinso/Portal/leer.php">Leer</a>
            </from>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>



  
