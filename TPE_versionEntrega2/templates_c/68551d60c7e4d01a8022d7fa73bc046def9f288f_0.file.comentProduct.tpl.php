<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:29:36
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\comentProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e3030593f22_68316803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68551d60c7e4d01a8022d7fa73bc046def9f288f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\comentProduct.tpl',
      1 => 1637692304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comentarios.tpl' => 1,
  ),
),false)) {
function content_619e3030593f22_68316803 (Smarty_Internal_Template $_smarty_tpl) {
?> 

<?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['IsUserLogged']->value) {?> 
<div class="container">
    <div class="row">
        <div  class="col-12 border text center alert alert-primary">
            <h2 > Realiza un comentario del producto:  <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
</h2>
        </div >
    </div >

    <form class="formAdd" id="formAdd" method="POST" name= "addComment" >        
        <div >
            <p>Puntaje</p>
            <div >
                <label class="puntaje" for="radio5">1</label>
                <input id="radio5" type="radio" name="puntaje" value="1">
                <label class="puntaje" for="radio4">2</label>
                <input id="radio4" type="radio" name="puntaje" value="2">
                <label class="puntaje" for="radio3">3</label>
                <input id="radio3" type="radio" name="puntaje" value="3">
                <label class="puntaje" for="radio2">4</label>
                <input id="radio2" type="radio" name="puntaje" value="4">
                <label class="puntaje" for="radio1">5</label>
                <input id="radio1" type="radio" name="puntaje" value="5">
            </div>

            <textarea id="comentario" name="comentario" rows="10" cols="30" required></textarea >
            <input type="hidden" id="id_user" value="<?php echo $_SESSION['id_user'];?>
"/>            
            <button class=" btn-sm btn btn-primary list-group-item-text" type="submit" id="enviar_coment">Enviar</button>
        </div>
    </form>
</div >
<?php }?>

<input type="hidden" name="id_producto" id="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
<input type="hidden" name="is_admin" id="is_admin"  value="<?php echo $_smarty_tpl->tpl_vars['IsAdmin']->value;?>
">

<?php echo '<script'; ?>
 src="js/comentariosProduct.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
