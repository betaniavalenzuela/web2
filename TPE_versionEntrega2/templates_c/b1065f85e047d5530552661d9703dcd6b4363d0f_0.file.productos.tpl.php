<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:34:50
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebe0a6672a9_68905240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1065f85e047d5530552661d9703dcd6b4363d0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\productos.tpl',
      1 => 1637793285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/createProduct.tpl' => 1,
  ),
),false)) {
function content_619ebe0a6672a9_68905240 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     
     
    <?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value) {?>
        <div class="container">
            <div class="row">
                <div class="row alert alert-secondary">
                    <h3 >Bienvenido administrador <?php echo $_SESSION['nombre'];?>
</h3>
                    <a   href="listarUsers"> ADMINISTRAR USUARIOS</a>
                </div>
            </div>
        </div>
    <?php }?> 

    <div class="container">
        <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2 ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 border text center ">
                <ul class="list-group ">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                            <li  class="list-group-item">
                                <a  id="lista_prod" data-idProducto="<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
" class="list-group-item-text fs-4" href="producto/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_producto;?>
</a>
                                <p><?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_categoria;?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value) {?>
                                    <a class=" btn-sm btn btn btn-secondary" href="borrarProd/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> BORRAR</a>
                                    <a class=" btn-sm btn btn-primary list-group-item-text" href="editar/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> EDITAR</a>
                                <?php }?>                             
                            </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>


                <?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:templates/createProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                   
                    
                <?php }?>
            </div>
        </div>
    </div>
<?php }
}
