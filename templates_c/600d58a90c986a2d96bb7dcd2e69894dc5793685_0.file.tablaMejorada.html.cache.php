<?php
/* Smarty version 3.1.28, created on 2016-06-02 08:40:25
  from "/var/www/html/bakery/templates/tablaMejorada.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57503749a6d201_48074190',
  'file_dependency' => 
  array (
    '600d58a90c986a2d96bb7dcd2e69894dc5793685' => 
    array (
      0 => '/var/www/html/bakery/templates/tablaMejorada.html',
      1 => 1464874823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57503749a6d201_48074190 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '164791389557503749a5de50_53022420';
?>
<table class="table table-striped">
      <tr>
          <th>Email</th>
          <th>Eliminar</th>
          <th>Actualizar</th>
    </tr>
        <tr>
          <?php
$_from = $_smarty_tpl->tpl_vars['dato']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_conexion_0_saved_item = isset($_smarty_tpl->tpl_vars['conexion']) ? $_smarty_tpl->tpl_vars['conexion'] : false;
$__foreach_conexion_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['conexion'] = new Smarty_Variable();
$__foreach_conexion_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_conexion_0_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['conexion']->value) {
$__foreach_conexion_0_saved_local_item = $_smarty_tpl->tpl_vars['conexion'];
?>
          <td>
              <?php echo $_smarty_tpl->tpl_vars['conexion']->value['email'];?>

          </td>
          <td>
             <a href="../Admin/borraUsuario.php?id=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_cliente'];?>
"><span class="glyphicon glyphicon-thumbs-down"></span></a>
          </td>
          <td>
             <a href="../Admin/actualizaClienteC.php?id=<?php echo $_smarty_tpl->tpl_vars['conexion']->value['id_cliente'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
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
$_smarty_tpl->tpl_vars['name'] = $__foreach_conexion_0_saved_key;
}
?>
      </table><?php }
}
