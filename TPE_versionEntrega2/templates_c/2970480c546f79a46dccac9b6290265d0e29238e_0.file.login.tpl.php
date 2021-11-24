<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:24:41
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebba9bdcb26_36119006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2970480c546f79a46dccac9b6290265d0e29238e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\login.tpl',
      1 => 1637792676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/registroUsuario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ebba9bdcb26_36119006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
    <div class="row">
            <div class="col-12 border text center alert-secondary">
                <h4 class="col text-danger">             
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </h4> 
            </div>
        </div>

    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Log in</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-4 border text center">
            <form action="verify" method="POST">
                <div class="col">
                    <input type="text" class="form-control"  placeholder="laspulpas@gmail.com" aria-label="email"name="email" id="email" required>
                </div>
                <div class="col">
                    <input type="password" class="form-control"  placeholder="******" aria-label="password"name="password" id="password" required>
                </div>
                <div class="col">
                    <input type="submit" value="Ingresar" class="btn btn btn-secondary">
                </div>    
            </form>
        </div>
    </div>
    
    
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/registroUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
