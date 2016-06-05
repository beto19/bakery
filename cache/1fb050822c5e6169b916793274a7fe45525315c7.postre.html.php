<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:06:22
  from "/var/www/html/bakery/templates/cliente/postre.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575326ae24d326_70686425',
  'file_dependency' => 
  array (
    '1fb050822c5e6169b916793274a7fe45525315c7' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/postre.html',
      1 => 1464554284,
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
function content_575326ae24d326_70686425 ($_smarty_tpl) {
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
<p><div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <ol class="breadcrumb">
                  <li><a href="../cliente/indexClienteC.php">Inicio</a></li>
                  <li class="active">Postres</li>
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
                        Cupcakes
                    </td>
                    <td>
                        <img src='../image/postre1.jpeg' width='150'/>
                    </td>
                      <td>
                        10
                    </td>
                    
                    <td>
                       postres
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=13"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Fresas de chocolate
                    </td>
                    <td>
                        <img src='../image/postre2.jpg' width='150'/>
                    </td>
                      <td>
                        20
                    </td>
                    
                    <td>
                       postres
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=14"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Pastelillos de chocolate
                    </td>
                    <td>
                        <img src='../image/postre3.jpg' width='150'/>
                    </td>
                      <td>
                        10
                    </td>
                    
                    <td>
                       postres
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=15"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Tartaletas
                    </td>
                    <td>
                        <img src='../image/postre4.jpg' width='150'/>
                    </td>
                      <td>
                        30
                    </td>
                    
                    <td>
                       postres
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=16"><span class="glyphicon glyphicon-tag"></span></a>
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
