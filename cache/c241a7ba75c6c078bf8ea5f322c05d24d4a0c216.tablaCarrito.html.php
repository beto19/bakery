<?php
/* Smarty version 3.1.28, created on 2016-06-04 12:16:51
  from "/var/www/html/bakery/templates/cliente/tablaCarrito.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57530d03280aa4_59169221',
  'file_dependency' => 
  array (
    'c241a7ba75c6c078bf8ea5f322c05d24d4a0c216' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/tablaCarrito.html',
      1 => 1464590725,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_57530d03280aa4_59169221 ($_smarty_tpl) {
?>
<table class="table table-striped">
  	 	<tr>
  	 		<th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Subtotal</th>
        <th>Foto</th>
        <th>Borrar</th>
	  	</tr>
		
   	    
        	          <tr>
         	 	<td>
              	Concha
          	</td>

            <td>
                5
            </td>

            <td>
               <label>$</label> 5
            </td>
            <td>
                <label>$</label>25 
            </td>
            
            <td>
              <img src="../image/pan1.jpg" width='150' height="160">
            </td>
            
            <td>
             <a href="../cliente/borraArticuloC.php?id_producto=5"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
          </tr>
        	
          

  	 	</table>
                              <div>
       <label>Total: $25</label>
       <input type="hidden" name="total" value="25">
      </div>
<?php }
}
