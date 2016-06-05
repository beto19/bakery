<?php
/* Smarty version 3.1.28, created on 2016-06-02 19:43:16
  from "/var/www/html/bakery/templates/Admin/cambiarContrasenaAdmin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5750d2a40daef7_06632544',
  'file_dependency' => 
  array (
    '9051c036d75f7c75d438129116fc0dbb71438d51' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/cambiarContrasenaAdmin.html',
      1 => 1463954236,
      2 => 'file',
    ),
    'd40b3e47c89b01bab11ed4176e0e390579cf1f0b' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/header.html',
      1 => 1464780603,
      2 => 'file',
    ),
    '799245de4ff7b12de326e4105070a69107d1f46c' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/footer.html',
      1 => 1463954236,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5750d2a40daef7_06632544 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
 

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <!--ejecuta la camara!-->
  <script type="text/javascript" src="../js/script.js"></script>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-XYCjB+hFAjSbgf9yKUgbysEjaVLOXhCgATTEBpCqT1R3jvG5LGRAK5ZIyRbH5vpX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <title>Beto´s Bakery</title>
</head>
<body>
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../Admin/indexC.php">Bakery</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../Admin/indexC.php">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="../Admin/usuariosC.php">Crear usuario</a></li>
        <li><a href="../Admin/altaProductosC.php">Crear producto</a></li>
        <li><a href="../Admin/altaMarcaC.php">Crear Categoria</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">beto.tellez19@gmail.com <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../Admin/cambiarContrasenaC.php">Cambiar Contraseña</a></li>
              <li><a href="../Admin/datosAdminC.php">Cambiar datos</a></li>
              <li><a href="../Admin/camaraAdminC.php">Cambiar foto</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<form role="form" action='../Admin/cambiarContrasenaAdminC.php' method='post'
 enctype='multipart/form-data' accept-charset='utf-8'>
    <div class="form-group">
      <label>Ingresar contraseña anterior</label>
      <input type="password" class="form-control" id="ejemplo_password_1" 
             placeholder="Contraseña"
             name="contrasenaAnterior">
    </div>

    <div class="form-group">
      <label>Contraseña nueva</label>
      <input type="password" class="form-control" id="ejemplo_password_1" 
             placeholder="Contraseña"
             name="contrasenaNueva">
    </div>

    <div class="form-group">
      <label>Confirmar contraseña</label>
      <input type="password" class="form-control" id="ejemplo_password_1" 
             placeholder="Contraseña"
             name="contrasenaConfirmar">
    </div>
    <button type="submit" class="btn btn-default">Cambiar</button>  
  </form>
</body>
</html><?php }
}
