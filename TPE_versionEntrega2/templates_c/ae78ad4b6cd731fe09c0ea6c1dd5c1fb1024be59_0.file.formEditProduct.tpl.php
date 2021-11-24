<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:50:52
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\formEditProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eb3bcc3d698_53603700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae78ad4b6cd731fe09c0ea6c1dd5c1fb1024be59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\formEditProduct.tpl',
      1 => 1637790598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619eb3bcc3d698_53603700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Editar Producto</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <form action="editProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control"  aria-label="Nombre categoria:"name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
" required>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control"  aria-label="cantidad"name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
" required>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control"  aria-label="precio"name="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" required>
                    </div>
                    <div class="col">
                        <select class="form-control" name="categoria" aria-label="cantidad" id="">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>       
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                        </select> 
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="EDITAR" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-12 border text center alert-secondary">
                <h4 class="col text-danger">             
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </h4> 
            </div>
        </div>
    </div>    
</div>

<?php }
}
