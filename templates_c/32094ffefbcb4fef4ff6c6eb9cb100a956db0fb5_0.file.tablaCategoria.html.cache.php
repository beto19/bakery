<?php
/* Smarty version 3.1.28, created on 2016-06-03 23:12:26
  from "/var/www/html/bakery/templates/tablaCategoria.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5752552a313df0_69572156',
  'file_dependency' => 
  array (
    '32094ffefbcb4fef4ff6c6eb9cb100a956db0fb5' => 
    array (
      0 => '/var/www/html/bakery/templates/tablaCategoria.html',
      1 => 1465013541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5752552a313df0_69572156 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10937242005752552a25a9a1_61560124';
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
$_from = $_smarty_tpl->tpl_vars['datos']->value;
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
              	<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_categoria'];?>

          	</td>
              <td>
                <?php echo $_smarty_tpl->tpl_vars['conexion']->value['categoria'];?>

            </td>
            <td>
               <a href="../Admin/bajaCategoriaC.php?id_producto=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_categoria'];?>
"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
            <td>
               <a href="../Admin/altaMarcaC.php?id_producto=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_categoria'];?>
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
