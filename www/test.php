
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Directorio MAN</title>
  <!-- CSS  -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
          <li><a href="admin.php"><i class="material-icons left">perm_identity</i>Menu admin</a></li>
        <li><a href="nuevousuario.php"><i class="material-icons left">add</i>Agregar nuevo usuario</a></li>
        <li><a href="close.php">Cerrar sesion</a></li>
      </ul>
    </div>
  </nav>
<?php
        require("connection.php");
           // $name=$_POST['search'];
        $sql="SELECT * FROM usuario WHERE usuario.Nombre LIKE '%$name%'";
        $resultado = mysqli_query($link,$sql) or die(mysql_error());
        //$row2 = mysqli_fetch_array($resultado);
        ?>
    <main>
  <div id="index-banner" class="parallax-container">
        <div class="row">
      <div class="col s12">
          <h3 class="black-text , center-align">Bienvenido al directorio de MAN</h3>
        <div class="#ffffff white">
            <table>
        <thead class="black-text">
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody class="black-text">
          <tr>
            <td>Alvin creador y salador qu siempre falta a lacas comidad y nunca lleva nada porque es mala onda y no entienbde mierdads asi</td>
            <td>Eclairtttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
          </div>
      </div>
    </div>
    <div class="parallax"><img src="img/realback.jpg" alt="Unsplashed background img 1"></div>
        </div>

    </main>

  <footer class="page-footer teal">
    <div >
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">MAN Truck & Bus</h5>
          <p class="grey-text text-lighten-4">Bienvenidos a el directorio de MAN que está diseñado para hacer más fácil e buscar gente y
            por el cual estamos muy contentos esperamos que les agrade tanto como a nosotros
            cualquier comentario referente a este hablar con el equipo de IT</p>
            <p class="grey-text text-lighten-4">Ver 0.3 beta</p>
        </div>
        <div class="col l6 s12">
          <h5 class="white-text">Otros sitios</h5>
          <ul>
            <li><a class="white-text" href="http://192.168.2.90/tickets/" target="_blank">Sistema Tickets</a></li>
          </ul>
        </div>
      </div>
    </div>
      </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
 </body>
</html>