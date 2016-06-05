<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:08:38
  from "/var/www/html/bakery/templates/cliente/descripcionArticulo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575327366e01f7_21929913',
  'file_dependency' => 
  array (
    'f631381d5659b7800564612d0f67127d5f39cf33' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/descripcionArticulo.html',
      1 => 1464704391,
      2 => 'file',
    ),
    '76c13e15baa089b06b3531fe6effa6205a83107d' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/header.html',
      1 => 1465067160,
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
function content_575327366e01f7_21929913 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
 

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <!--ejecuta la camara!-->
  <script type="text/javascript" src="../js/script.js"></script>
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
      <a class="navbar-brand" href="../cliente/indexClienteC.php">Beto´s Bakery</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../cliente/indexClienteC.php">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="../cliente/llenaCarritoC.php">carrito</a></li>
        <li><a href="../cliente/mostrarC.php">productos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">hgfjhgjhg@gmail.com<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../cliente/cambiarContrasenaC.php">Cambiar Contraseña</a></li>
              <li><a href="../cliente/datosClienteC.php">Cambiar datos personales</a></li>
              <li><a href="../logout.php">Logout</a></li>
              <li><a href="../cliente/historialC.php">Historial de compras</a></li>
              <li><a href="../cliente/pdfC.php">Historial de compras(PDF)</a></li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      
      <h2>Concha</h2>
    </div>

    <div class="col-md-2">
      <img src="../image/pan1.jpg" width="200" height="200" class="img-circle img-responsive">
      <h3>$5</h3>  
    </div>

    <div class="col-md-2">
    </div>
    
    <form role="form" action="actualizaCarritoC.php" method="post"  autocomplete="on" enctype='multipart/form-data' accept-charset='utf-8'>  
      <input type="hidden" name="id_producto" value="5">
      
      <div class="col-md-2">
        <input type="text" placeholder="Cantidad a comprar" name='cantidad'></input>
      </div>

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
  <p>Conchas hechas con harina integral</p>
</div>

    </div>

<hr/>
<div class="container-fluid" class="col-md-6">
  <h1>Comentarios</h1>
  <table class="table table-striped">
                        <tr>
               <td>
                <h2>Roberto  Téllez:<br/>Estaa muy rico</h2>
              </td>
            </tr>
                        <tr>
               <td>
                <h2>Roberto  Téllez:<br/>Sabe bien chido</h2>
              </td>
            </tr>
                        <tr>
               <td>
                <h2>Roberto  Téllez:<br/>Pa chuparse los dedos</h2>
              </td>
            </tr>
                        <tr>
               <td>
                <h2>Paco  González:<br/>sabe bien chido</h2>
              </td>
            </tr>
              </table>
</div>
<div class="container-fluid" class="col-md-6">
  <label>Deja un comentario</label>
  <form role="form" action="insertaComentarioC.php" method="post"  autocomplete="on" enctype='multipart/form-data' accept-charset='utf-8'>  
      <textarea rows="4" cols="50" name="Comentario"></textarea>
      <input type="hidden" name="id_producto" value="5">
      <input type="hidden" name="email" value="hgfjhgjhg@gmail.com">
</div>
  <div class="container-fluid" >
    <input type="submit" value="Enviar comentario" ></input>
  </div>
  </form>

</body>
</html><?php }
}
