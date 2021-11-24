<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:35:18
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebe2621d853_71773552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa12973f62f2966a7dfc097e4874c688d7c0cbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\categorias.tpl',
      1 => 1637793313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/createCateg.tpl' => 1,
  ),
),false)) {
function content_619ebe2621d853_71773552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Lista de categorías</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 border text center ">
            <ul class="list-group ">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                    <li  class="list-group-item">
                        <a class="list-group-item-text fs-4" href="Categoria/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
">  <?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value) {?>
                            <a class=" btn-sm btn btn btn-secondary" href="borrar/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"> BORRAR</a>
                            <a class=" btn-sm btn btn-primary list-group-item-text" href="edit/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"> EDITAR</a>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['IsAdmin']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:templates/createCateg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>
    </div>
</div><?php }
}
