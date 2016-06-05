<?php
/* Smarty version 3.1.28, created on 2016-05-29 14:56:48
  from "/var/www/html/bakery/templates/cliente/producto.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b4980b7bb77_96145810',
  'file_dependency' => 
  array (
    '62537e6f728b28ee5e4c7a4e3851f22c8f8bd807' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/producto.html',
      1 => 1464551805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574b4980b7bb77_96145810 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '951760365574b4980b723d0_21217174';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</p>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
