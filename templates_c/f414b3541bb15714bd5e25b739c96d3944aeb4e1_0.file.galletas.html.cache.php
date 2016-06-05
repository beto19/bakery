<?php
/* Smarty version 3.1.28, created on 2016-05-29 16:30:47
  from "/var/www/html/bakery/templates/cliente/galletas.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b5f870ccdb2_63182365',
  'file_dependency' => 
  array (
    'f414b3541bb15714bd5e25b739c96d3944aeb4e1' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/galletas.html',
      1 => 1464557387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574b5f870ccdb2_63182365 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1669218024574b5f870c7078_57694864';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</p>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
