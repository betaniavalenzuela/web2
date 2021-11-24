<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:50:32
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\createProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eb3a8708469_68995079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '884f7601e2c533bc499fb85c91c39947c363d27b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\createProduct.tpl',
      1 => 1637790628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eb3a8708469_68995079 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2>Cargar productos:</h2>
            </div>
    </div>

    
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <form action="createProd" method="POST">
                
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto" aria-label="nombre"name="nombre" required >
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" aria-label="cantidad"name="cantidad" required>
                    </div> 
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio" aria-label="precio"name="precio" required>
                    </div> 
                    <div class="col">
                        <select class="form-control" name="categoria" aria-label="cantidad" id="" >
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
                        <input type="submit" value="Cargar" class="btn btn btn-secondary">
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
