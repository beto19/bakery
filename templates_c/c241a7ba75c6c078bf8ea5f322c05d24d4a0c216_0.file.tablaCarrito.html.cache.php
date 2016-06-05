<?php
/* Smarty version 3.1.28, created on 2016-05-30 01:45:29
  from "/var/www/html/bakery/templates/cliente/tablaCarrito.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574be1890b97a7_14547089',
  'file_dependency' => 
  array (
    'c241a7ba75c6c078bf8ea5f322c05d24d4a0c216' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/tablaCarrito.html',
      1 => 1464590725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574be1890b97a7_14547089 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '624709884574be1890a1b31_64064242';
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
		
   	    
        	<?php
$_from = $_smarty_tpl->tpl_vars['dato']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conexion_0_saved_item = isset($_smarty_tpl->tpl_vars['conexion']) ? $_smarty_tpl->tpl_vars['conexion'] : false;
$__foreach_conexion_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['conexion'] = new Smarty_Variable();
$__foreach_conexion_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_conexion_0_total) {
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['conexion']->value) {
$__foreach_conexion_0_saved_local_item = $_smarty_tpl->tpl_vars['conexion'];
?>
          <tr>
         	 	<td>
              	<?php echo $_smarty_tpl->tpl_vars['conexion']->value['producto'];?>

          	</td>

            <td>
                <?php echo $_smarty_tpl->tpl_vars['conexion']->value['cantidad'];?>

            </td>

            <td>
               <label>$</label> <?php echo $_smarty_tpl->tpl_vars['conexion']->value['precio'];?>

            </td>
            <td>
                <label>$</label><?php echo $_smarty_tpl->tpl_vars['conexion']->value['subtotal'];?>
 
            </td>
            
            <td>
              <img src="../image/<?php echo $_smarty_tpl->tpl_vars['conexion']->value['foto'];?>
" width='150' height="160">
            </td>
            
            <td>
             <a href="../cliente/borraArticuloC.php?id_producto=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_producto'];?>
"><span class="glyphicon glyphicon-thumbs-down"></span></a>
            </td>
          </tr>
        	<?php
$_smarty_tpl->tpl_vars['conexion'] = $__foreach_conexion_0_saved_local_item;
}
}
if ($__foreach_conexion_0_saved_item) {
$_smarty_tpl->tpl_vars['conexion'] = $__foreach_conexion_0_saved_item;
}
if ($__foreach_conexion_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_conexion_0_saved_key;
}
?>

          

  	 	</table>
      <?php $_smarty_tpl->tpl_vars['suma'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'suma', 0);?>
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
      <?php $_smarty_tpl->tpl_vars['suma'] = new Smarty_Variable($_smarty_tpl->tpl_vars['suma']->value+$_smarty_tpl->tpl_vars['conexion']->value['subtotal'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'suma', 0);?>
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
      <div>
       <label>Total: $<?php echo $_smarty_tpl->tpl_vars['suma']->value;?>
</label>
       <input type="hidden" name="total" value="<?php echo $_smarty_tpl->tpl_vars['suma']->value;?>
">
      </div>
<?php }
}
