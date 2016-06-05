<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:12:18
  from "/var/www/html/bakery/templates/descripcion.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57532812f1f674_67859058',
  'file_dependency' => 
  array (
    '0f56b7825e941d1a8184299f231dff748beb132b' => 
    array (
      0 => '/var/www/html/bakery/templates/descripcion.html',
      1 => 1464873334,
      2 => 'file',
    ),
    '6fc60154b598aa78fd87df5fe377c5e4de228b2e' => 
    array (
      0 => '/var/www/html/bakery/templates/header.html',
      1 => 1465066129,
      2 => 'file',
    ),
    '8db2bb02fc4362f8c4e77fcb2266b00dc4b7e5ef' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/footer.html',
      1 => 1464553271,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_57532812f1f674_67859058 ($_smarty_tpl) {
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <h2>Cupcakes</h2>
      </div>

    <div class="col-md-2">
      <img src="image/postre1.jpeg" width="200" height="200" class="img-circle img-responsive">
      <h3>$10</h3>  
    </div>

    <div class="col-md-2">
    </div>
    
    <form role="form" action="redireccionar.php" method="post"  autocomplete="on" enctype='multipart/form-data' accept-charset='utf-8'>  
    <input type="hidden" name="id_producto" value="13">
      <div class="col-md-2">
        <input type="submit" value="Comprar" ></input>
      </div>
    </form>
  </div>
</div>
<hr/>
<div class="container-fluid" class="col-md-6">
  <h1>Descripción</h1>
  <br>
  <p>Cupckakes con cubierta de merengue</p>
  
</div>

    </div>

<hr/>
<div class="container-fluid" class="col-md-6">
  <h1>Comentarios</h1>
  <table class="table table-striped">
                        <tr>
               <td>
                <h2>Roberto  Téllez:<br/>Buenisimos</h2>
              </td>
            </tr>
                        <tr>
               <td>
                <h2>Roberto  Téllez:<br/>Estan bien buenos</h2>
              </td>
            </tr>
                        <tr>
               <td>
                <h2>Roberto  Téllez:<br/>Saben horrible</h2>
              </td>
            </tr>
                        <tr>
               <td>
                <h2>Paco  González:<br/>Sabe bien</h2>
              </td>
            </tr>
              </table>
</div>
</body>
</html><?php }
}
