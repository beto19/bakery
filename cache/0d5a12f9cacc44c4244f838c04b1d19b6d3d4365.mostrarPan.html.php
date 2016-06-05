<?php
/* Smarty version 3.1.28, created on 2016-05-31 17:43:15
  from "/var/www/html/bakery/templates/cliente/mostrarPan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574e1383cfd566_54691593',
  'file_dependency' => 
  array (
    '0d5a12f9cacc44c4244f838c04b1d19b6d3d4365' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/mostrarPan.html',
      1 => 1464627121,
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
function content_574e1383cfd566_54691593 ($_smarty_tpl) {
?>
<div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <ol class="breadcrumb">
                  <li><a href="../cliente/indexClienteC.php">Inicio</a></li>
                  <li class="active">Pan</li>
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
                        Concha
                    </td>
                    <td>
                        <img src='../image/pan1.jpg' width='150'/>
                    </td>
                      <td>
                        5
                    </td>
                    
                    <td>
                       pan
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=5"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Pan para rebanar
                    </td>
                    <td>
                        <img src='../image/pan2.jpg' width='150'/>
                    </td>
                      <td>
                        30
                    </td>
                    
                    <td>
                       pan
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=6"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Panqué de nuez
                    </td>
                    <td>
                        <img src='../image/pan3.jpg' width='150'/>
                    </td>
                      <td>
                        50
                    </td>
                    
                    <td>
                       pan
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=7"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                                    <tr>
                    <td>
                        Cuernitos
                    </td>
                    <td>
                        <img src='../image/pan4.jpg' width='150'/>
                    </td>
                      <td>
                        10
                    </td>
                    
                    <td>
                       pan
                    </td>
                    <td>
                       <a href="../cliente/descricpionArticulo.php?id_producto=8"><span class="glyphicon glyphicon-tag"></span></a>
                    </td>
                  </tr>
                            	 	</table>
            </div>
      </div>
    </div>
</div>

  </body>
</html><?php }
}
