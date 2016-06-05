<?php
/* Smarty version 3.1.28, created on 2016-05-22 19:20:43
  from "/var/www/html/bakery/templates/combo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57424cdb479642_10281914',
  'file_dependency' => 
  array (
    'c9bb76d8ed1092dc41de5522c1aaa0f5b854c5e5' => 
    array (
      0 => '/var/www/html/bakery/templates/combo.html',
      1 => 1463962688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57424cdb479642_10281914 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '47949925957424cdb4667f2_27807365';
?>
<select class="form-control" id="sel1" name="id_categoria">
	<?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_con_0_saved_item = isset($_smarty_tpl->tpl_vars['con']) ? $_smarty_tpl->tpl_vars['con'] : false;
$__foreach_con_0_saved_key = isset($_smarty_tpl->tpl_vars['cid']) ? $_smarty_tpl->tpl_vars['cid'] : false;
$_smarty_tpl->tpl_vars['con'] = new Smarty_Variable();
$__foreach_con_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_con_0_total) {
$_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['cid']->value => $_smarty_tpl->tpl_vars['con']->value) {
$__foreach_con_0_saved_local_item = $_smarty_tpl->tpl_vars['con'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['con']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['con']->value['categoria'];?>
</option>
	<?php
$_smarty_tpl->tpl_vars['con'] = $__foreach_con_0_saved_local_item;
}
}
if ($__foreach_con_0_saved_item) {
$_smarty_tpl->tpl_vars['con'] = $__foreach_con_0_saved_item;
}
if ($__foreach_con_0_saved_key) {
$_smarty_tpl->tpl_vars['cid'] = $__foreach_con_0_saved_key;
}
?>
</select>


 <?php }
}
