<?php
/* Smarty version 3.1.28, created on 2016-06-02 09:40:49
  from "/var/www/html/bakery/templates/Admin/alta_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57504571c98ea8_54621339',
  'file_dependency' => 
  array (
    '74c99f4c04ae102475d9b82ca66e0d8e3ab00066' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/alta_login.html',
      1 => 1464878420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:tablaMejorada.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_57504571c98ea8_54621339 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '25174252157504571c8ee17_60871296';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Ingresar nueva Cuenta</h1>
                    <form role="form" action="../Admin/clienteC.php" method="post" id="login-form" autocomplete="off" data-toggle="validator">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="alguien@example.com" required>
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Enviar" 
                        name="ingresar">
                    </form>
                    <hr>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tablaMejorada.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
