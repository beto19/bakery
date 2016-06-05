<?php
/* Smarty version 3.1.28, created on 2016-05-29 13:34:59
  from "/var/www/html/bakery/templates/ingresaMail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574b3653af4ca2_01628698',
  'file_dependency' => 
  array (
    '58d054abe8fba778e0fe001032994b0a79d40ede' => 
    array (
      0 => '/var/www/html/bakery/templates/ingresaMail.html',
      1 => 1464546868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_574b3653af4ca2_01628698 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1414814689574b3653aeb589_43680606';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form-wrap"  >
 <form role="form" action="recuperarContrasena.php" method="post" id="login-form" autocomplete="on"
                    enctype='multipart/form-data' accept-charset='utf-8'>
  <p>
    Ingresa tu correo y te mandaremos una contraseña provisional a tu correo para posteriormente ingresar esa contraseña en el siguiente formulario y cambiarla.
  </p>
  <label>Email</label>
  <input type="email" class="form-control" id="ejemplo_email_1"
        placeholder="Introduce tu email"
        name="email">

  <button type="submit" class="btn btn-default">Enviar</button>  
 </form>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
