<?php
/* Smarty version 3.1.28, created on 2016-05-22 22:24:08
  from "/var/www/html/bakery/templates/tablaUsuarios.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574277d8e2dcc5_81283076',
  'file_dependency' => 
  array (
    '671ab650005ee8b55fa30f71dbefd1e9cfac090e' => 
    array (
      0 => '/var/www/html/bakery/templates/tablaUsuarios.html',
      1 => 1463973836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574277d8e2dcc5_81283076 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '726142143574277d8e1a3d3_56336658';
?>
<table class="table table-striped">
  	 	<tr>
  	 		<?php
$_from = $_smarty_tpl->tpl_vars['nombrescolumnas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_columna_0_saved_item = isset($_smarty_tpl->tpl_vars['columna']) ? $_smarty_tpl->tpl_vars['columna'] : false;
$_smarty_tpl->tpl_vars['columna'] = new Smarty_Variable();
$__foreach_columna_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_columna_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['columna']->value) {
$__foreach_columna_0_saved_local_item = $_smarty_tpl->tpl_vars['columna'];
?>
  		    <th><?php echo $_smarty_tpl->tpl_vars['columna']->value;?>
</th>
			  <?php
$_smarty_tpl->tpl_vars['columna'] = $__foreach_columna_0_saved_local_item;
}
}
if ($__foreach_columna_0_saved_item) {
$_smarty_tpl->tpl_vars['columna'] = $__foreach_columna_0_saved_item;
}
?>
        <th>Eliminar</th>
        <th>Actualizar</th>
	  	</tr>
		
   	    
        	<?php
$_from = $_smarty_tpl->tpl_vars['dato']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conexion_1_saved_item = isset($_smarty_tpl->tpl_vars['conexion']) ? $_smarty_tpl->tpl_vars['conexion'] : false;
$__foreach_conexion_1_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['conexion'] = new Smarty_Variable();
$__foreach_conexion_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_conexion_1_total) {
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['conexion']->value) {
$__foreach_conexion_1_saved_local_item = $_smarty_tpl->tpl_vars['conexion'];
?>
          <tr>
         	 	<td>
              	<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_producto'];?>

          	</td>
              <td>
                <?php echo $_smarty_tpl->tpl_vars['conexion']->value['producto'];?>

            </td>
            <td>
                <img src='../image/<?php echo $_smarty_tpl->tpl_vars['conexion']->value['foto'];?>
' width='150'/>
            </td>
              <td>
                <?php echo $_smarty_tpl->tpl_vars['conexion']->value['precio'];?>

            </td>
            
            <td>
               <a href="../Admin/bajaProductosC.php?id_producto=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_producto'];?>
"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaProductosC.php?id_producto=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_producto'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
          </tr>
        	<?php
$_smarty_tpl->tpl_vars['conexion'] = $__foreach_conexion_1_saved_local_item;
}
}
if ($__foreach_conexion_1_saved_item) {
$_smarty_tpl->tpl_vars['conexion'] = $__foreach_conexion_1_saved_item;
}
if ($__foreach_conexion_1_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_conexion_1_saved_key;
}
?>
            
   		
    	
     
  	 	</table>
  <?php }
}
