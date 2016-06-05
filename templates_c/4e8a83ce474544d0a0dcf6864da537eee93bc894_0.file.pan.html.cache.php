<?php
/* Smarty version 3.1.28, created on 2016-05-29 16:16:10
  from "/var/www/html/bakery/templates/cliente/pan.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b5c1ad06831_10737314',
  'file_dependency' => 
  array (
    '4e8a83ce474544d0a0dcf6864da537eee93bc894' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/pan.html',
      1 => 1464556556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574b5c1ad06831_10737314 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '483258314574b5c1acfda24_43333513';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</p>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
