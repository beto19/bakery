<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:06:22
  from "/var/www/html/bakery/templates/cliente/mostrarPostre.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575326ae23d521_38398775',
  'file_dependency' => 
  array (
    'aa062cc352711a6712aa510853838944c3944551' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/mostrarPostre.html',
      1 => 1464627122,
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
function content_575326ae23d521_38398775 ($_smarty_tpl) {
?>
<div class="container">
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
</html><?php }
}
