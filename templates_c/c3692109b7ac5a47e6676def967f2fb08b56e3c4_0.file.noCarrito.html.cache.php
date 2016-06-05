<?php
/* Smarty version 3.1.28, created on 2016-05-30 16:23:08
  from "/var/www/html/bakery/templates/cliente/noCarrito.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574caf3c1ec377_47336166',
  'file_dependency' => 
  array (
    'c3692109b7ac5a47e6676def967f2fb08b56e3c4' => 
    array (
      0 => '/var/www/html/bakery/templates/cliente/noCarrito.html',
      1 => 1464643384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cliente/header.html' => 1,
    'file:cliente/footer.html' => 1,
  ),
),false)) {
function content_574caf3c1ec377_47336166 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1238806336574caf3c1e3fa4_29575625';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div >
    <h1>No hay carrito que comprar</h1>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cliente/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
