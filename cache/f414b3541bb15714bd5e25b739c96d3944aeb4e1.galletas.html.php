<?php
/* Smarty version 3.1.28, created on 2016-05-31 09:52:45
  from "/var/www/html/bakery/templates/cliente/galletas.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574da53d626505_37003279',
  'file_dependency' => 
  array (
    'f414b3541bb15714bd5e25b739c96d3944aeb4e1' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/galletas.html',
      1 => 1464557387,
      2 => 'file',
    ),
    '76c13e15baa089b06b3531fe6effa6205a83107d' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/header.html',
      1 => 1464656275,
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
function content_574da53d626505_37003279 ($_smarty_tpl) {
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
<img src="../image/ferreweb.png" width="1220" height="200">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">13030603@itcelaya.edu.mx<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../cliente/cambiarContrasenaC.php">Cambiar Contraseña</a></li>
              <li><a href="../cliente/datosClienteC.php">Cambiar datos personales</a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<p><div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <ol class="breadcrumb">
                  <li><a href="../cliente/indexClienteC.php">Inicio</a></li>
                  <li class="active">Galletas</li>
                </ol>
              </div>
          	 	<table class="table table-striped">
          	 	<tr>
          	 		
          		    <th>Producto</th>
                  <th>foto</th>
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Comprar</th>
          		</tr>
          		                  <tr>
                    <td>
                        Galleta con chispas de chocolate
                    </td>
                    <td>
                        <img src='../image/galleta1.jpg' width='150'/>
                    </td>
                      <td>
                        5
                    </td>
                    
                    <td>
                       galletas
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=9"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Galleta de avena
                    </td>
                    <td>
                        <img src='../image/galleta2.jpg' width='150'/>
                    </td>
                      <td>
                        5
                    </td>
                    
                    <td>
                       galletas
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=10"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Galleta de granola
                    </td>
                    <td>
                        <img src='../image/galleta3.jpg' width='150'/>
                    </td>
                      <td>
                        5
                    </td>
                    
                    <td>
                       galletas
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=11"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Caja de madalenas
                    </td>
                    <td>
                        <img src='../image/galleta4.jpg' width='150'/>
                    </td>
                      <td>
                        100
                    </td>
                    
                    <td>
                       galletas
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=12"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                            	 	</table>
            </div>
      </div>
    </div>
</div>

  </body>
</html></p>
</body>
</html><?php }
}
