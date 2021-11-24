<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:50:58
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\createCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eb3c2c37254_42656827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6300937784b3af0352b606e72aa27888b0b54cc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\createCateg.tpl',
      1 => 1637790608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eb3c2c37254_42656827 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2>Cargar categorias:</h2>
            </div>
    </div>
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <form action="createCateg" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Categoria" aria-label="nombre_categoria"name="categoria" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion"name="descripcion" required>
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="Cargar" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>
    </div> 
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <h4 class="col text-danger">             
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </h4> 
        </div>
    </div>
</div>
<?php }
}
