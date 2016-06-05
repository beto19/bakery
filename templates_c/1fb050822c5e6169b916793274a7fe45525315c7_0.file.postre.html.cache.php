<?php
/* Smarty version 3.1.28, created on 2016-05-29 15:40:04
  from "/var/www/html/bakery/templates/cliente/postre.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b53a40f68e3_85678616',
  'file_dependency' => 
  array (
    '1fb050822c5e6169b916793274a7fe45525315c7' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/postre.html',
      1 => 1464554284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574b53a40f68e3_85678616 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1559689942574b53a40eb015_96163476';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</p>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
