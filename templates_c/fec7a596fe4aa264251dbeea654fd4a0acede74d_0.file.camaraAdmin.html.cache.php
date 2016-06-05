<?php
/* Smarty version 3.1.28, created on 2016-05-22 23:47:11
  from "/var/www/html/bakery/templates/Admin/camaraAdmin.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57428b4f0355f1_75051891',
  'file_dependency' => 
  array (
    'fec7a596fe4aa264251dbeea654fd4a0acede74d' => 
    array (
      0 => '/var/www/html/bakery/templates/Admin/camaraAdmin.html',
      1 => 1463954236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/header.html' => 1,
    'file:Admin/footer.html' => 1,
  ),
),false)) {
function content_57428b4f0355f1_75051891 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '171297409057428b4f029571_70647591';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="form">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Tomar foto</h1>
                   <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="form-actions">
                                    <h3 id="nombre"></h3>
                                    <div >
                                        <input id='botonIniciar' type='button' value='Iniciar Camara' class="btn btn-info"/>
                                        <input id="email" name="email" value="" value=""/>
                                        <input id='botonFoto' type='button' value='Tomar Foto' class="btn btn-danger "/>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="span4">
                                        <div class="titulo">Cámara</div>
                                        <video id="camara" autoplay controls></video>
                                    </div>

                                    <div class="span4">
                                        <div class="titulo">Foto</div>
                                        <canvas id="foto" ></canvas>
                                    </div> 

                                    <div class="span4">
                                        <div id="consola"></div>  
                                    </div> 
                                </div>    
                            </div>
                        </div>

                    </div>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
