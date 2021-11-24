<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:29:36
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\detailProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e3030578445_50847355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9545fa5104ac2dadf8724f5f2fab27a773afbba9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\detailProduct.tpl',
      1 => 1637452795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/comentProduct.tpl' => 1,
  ),
),false)) {
function content_619e3030578445_50847355 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 > Detalle del producto <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
:</h2>
        </div>
    </div>

    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <ul class="list-group">
                <li  class="list-group-item">
                    <h4 class="list-group-item-heading">Categoria</h4>
                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"> Precio</h4>
                    <p class="list-group-item-text">$ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"> Cantidad disponible</h4>
                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
</p>
                </li>
            </ul>
        </div>
    </div>

 </div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/comentProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
