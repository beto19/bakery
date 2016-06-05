<?php
/* Smarty version 3.1.28, created on 2016-06-04 14:14:44
  from "/var/www/html/bakery/templates/tablaCategoria.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575328a4687b37_97862816',
  'file_dependency' => 
  array (
    '32094ffefbcb4fef4ff6c6eb9cb100a956db0fb5' => 
    array (
      0 => '/var/www/html/bakery/templates/tablaCategoria.html',
      1 => 1465013541,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_575328a4687b37_97862816 ($_smarty_tpl) {
?>
<table class="table table-striped">
  	 	<tr>
  	 		  		    <th>id_categoria</th>
			    		    <th>categoria</th>
			          <th>Eliminar</th>
        <th>Actualizar</th>
	  	</tr>
        	          <tr>
         	 	<td>
              	1
          	</td>
              <td>
                pan
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=1"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=1"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	2
          	</td>
              <td>
                pastel
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=2"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=2"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	3
          	</td>
              <td>
                postres
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=3"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=3"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	4
          	</td>
              <td>
                galletas
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=4"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=4"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	          <tr>
         	 	<td>
              	5
          	</td>
              <td>
                dulcess
            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=5"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=5"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	  	 	</table>
  <?php }
}
