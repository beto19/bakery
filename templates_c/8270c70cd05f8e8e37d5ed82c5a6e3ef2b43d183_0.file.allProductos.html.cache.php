<?php
/* Smarty version 3.1.28, created on 2016-05-31 18:14:10
  from "/var/www/html/bakery/templates/allProductos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574e1ac23c03f9_33211337',
  'file_dependency' => 
  array (
    '8270c70cd05f8e8e37d5ed82c5a6e3ef2b43d183' => 
    array (
      0 => '/var/www/html/bakery/templates/allProductos.html',
      1 => 1464736447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574e1ac23c03f9_33211337 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '441153269574e1ac23b1374_80477778';
?>
<page>
              <h2>Productos</h2>
              <table class="table table-striped">
              <tr>
                
                  <th>Producto</th>
                  <th>foto</th>
                  <th>Precio</th>
                  <th>Categoria</th>
              </tr>
              <?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
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
                        <img src='image/<?php echo $_smarty_tpl->tpl_vars['conexion']->value['foto'];?>
' width='150'/>
                    </td>
                      <td>
                        <?php echo $_smarty_tpl->tpl_vars['conexion']->value['precio'];?>

                    </td>
                    
                    <td>
                       <?php echo $_smarty_tpl->tpl_vars['conexion']->value['categoria'];?>

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
</page><?php }
}
