<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:47:08
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e344c5b80c7_81008619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a9bef80c7e70431ec15407909bac5cbe1700be6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\usuarios.tpl',
      1 => 1637694131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619e344c5b80c7_81008619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-12 border text center ">
            <ul class="list-group ">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <li class="list-group-item">
                        <h5>Usuario: <?php echo $_smarty_tpl->tpl_vars['user']->value->nombre_usuario;?>
</h5>
                        <h5>ROL:<?php if ($_smarty_tpl->tpl_vars['user']->value->rol_admin == 1) {?>
                                    Administrador 
                                <?php } else { ?> 
                                    Usuario registrado
                                <?php }?>    
                        </h5>
                        <a class=" btn-sm btn btn btn-secondary" href="borrarUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
"> BORRAR</a>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->rol_admin == 1) {?>
                            <a class=" btn-sm btn btn-secondary"  href="quitarPermisosAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
" >QUITAR PERMISOS DE ADMIN</a>
                        <?php } else { ?>
                            <a class=" btn-sm btn btn-primary"  href="convertirEnAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
" >CONVERTIR EN ADMIN</a>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div><?php }
}
