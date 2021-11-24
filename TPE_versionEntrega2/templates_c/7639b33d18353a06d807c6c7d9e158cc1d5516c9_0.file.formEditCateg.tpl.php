<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:51:00
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\formEditCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eb3c49dde17_15465207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7639b33d18353a06d807c6c7d9e158cc1d5516c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\formEditCateg.tpl',
      1 => 1637790566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619eb3c49dde17_15465207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Editar Categoria</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <form action="editCateg/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control"  aria-label="Nombre categoria:"name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control"  aria-label="Descripción"name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
" required>
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
