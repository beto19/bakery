<?php
/* Smarty version 3.1.28, created on 2016-06-04 12:27:17
  from "/var/www/html/bakery/templates/ingresaMail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57530f75582b10_49057458',
  'file_dependency' => 
  array (
    '58d054abe8fba778e0fe001032994b0a79d40ede' => 
    array (
      0 => '/var/www/html/bakery/templates/ingresaMail.html',
      1 => 1464546868,
      2 => 'file',
    ),
    '6fc60154b598aa78fd87df5fe377c5e4de228b2e' => 
    array (
      0 => '/var/www/html/bakery/templates/header.html',
      1 => 1464780886,
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
function content_57530f75582b10_49057458 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
        <a href="#">Temperatura: 77 F (25 C)</a>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="form-wrap"  >
 <form role="form" action="recuperarContrasena.php" method="post" id="login-form" autocomplete="on"
                    enctype='multipart/form-data' accept-charset='utf-8'>
  <p>
    Ingresa tu correo y te mandaremos una contraseña provisional a tu correo para posteriormente ingresar esa contraseña en el siguiente formulario y cambiarla.
  </p>
  <label>Email</label>
  <input type="email" class="form-control" id="ejemplo_email_1"
        placeholder="Introduce tu email"
        name="email">

  <button type="submit" class="btn btn-default">Enviar</button>  
 </form>
</div>
</body>
</html><?php }
}
