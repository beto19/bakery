<?php
/* Smarty version 3.1.28, created on 2016-05-29 12:53:48
  from "/var/www/html/bakery/templates/producto.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b2cace81f99_53796536',
  'file_dependency' => 
  array (
    '317c2766db9c5d8ca28aa3d5aeed2efc6a413e20' => 
    array (
      0 => '/var/www/html/bakery/templates/producto.html',
      1 => 1464544414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_574b2cace81f99_53796536 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1270133620574b2cace6ead1_89044862';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</p>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
