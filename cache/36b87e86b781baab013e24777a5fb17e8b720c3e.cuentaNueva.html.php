<?php
/* Smarty version 3.1.28, created on 2016-06-04 15:08:49
  from "/var/www/html/bakery/templates/cuentaNueva.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575335516fc601_75735431',
  'file_dependency' => 
  array (
    '36b87e86b781baab013e24777a5fb17e8b720c3e' => 
    array (
      0 => '/var/www/html/bakery/templates/cuentaNueva.html',
      1 => 1465017242,
      2 => 'file',
    ),
    '6fc60154b598aa78fd87df5fe377c5e4de228b2e' => 
    array (
      0 => '/var/www/html/bakery/templates/header.html',
      1 => 1465067980,
      2 => 'file',
    ),
    '43dc8361f44817889a6b0abc65120b01856ee99b' => 
    array (
      0 => '/var/www/html/bakery/templates/footer.html',
      1 => 1463948515,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_575335516fc601_75735431 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-QqZs0aSOGFan3GWVdP4PyCBp6icaF/4n8Q+wsmZUTiiVIqE4r4tFYcb8Osf+8y45" crossorigin="anonymous">

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
      <a class="navbar-brand" href="index.php">INICIO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="formulario_login.php">Login <span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vistas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pasteles.php">Pasteles</a></li>
            <li><a href="postres.php">Postres</a></li>
            <li><a href="pan.php">Panes</a></li>
            <li><a href="galletas.php">galletas</a></li>
            <li><a href="producto.php">Todos los productos</a>
            <li><a href="allProducts.php">Todos los productos(PDF)</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action = "busqueda.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" name="q">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>

       <ul class="nav navbar-nav navbar-right">
        <a href="#">Temperatura: 71 F (22 C)</a>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap" method='post' enctype='multipart/form-data' accept-charset='utf-8' id="formularioValidate"  data-toggle="validator">
                 <h1>Creación de cuenta</h1>
                <form role="form" action='cuenta.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="ejemplo_email_1"
                           placeholder="Introduce tu email"
                           name="email" required>
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="ejemplo_password_1" 
                           placeholder="Contraseña" minlength="8"  
                           name="contrasena1" required>
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="ejemplo_password_1" 
                           placeholder="Repite la contraseña"
                           name="contrasena2" minlength="8" required>
                  </div>
                  <hr/>
                  <h1>Datos Personales</h1>
                  <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Nombre/s"
                           name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label>Apellido paterno</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Apellido paterno"
                           name="apaterno" required>
                  </div>
                  <div class="form-group">
                    <label>Apellido materno</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Apellido materno"
                           name="amaterno" required>
                  </div>
                  <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="aaaa/mm/dd"
                           name="nacimiento" required>
                  </div>
                  <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" id="ejemplo_password_1" 
                           placeholder="Domicilio"
                           name="domicilio" required>
                  </div>
                  <button type="submit" class="btn btn-default">Enviar</button>
                </form>
              </div>
          </div>
      </div>
</div>
</body>
</html><?php }
}
