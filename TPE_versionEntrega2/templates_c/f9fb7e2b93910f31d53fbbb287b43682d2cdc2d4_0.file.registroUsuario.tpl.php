<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:42:48
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\registroUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e33484b2ad1_13833737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fb7e2b93910f31d53fbbb287b43682d2cdc2d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\registroUsuario.tpl',
      1 => 1637757654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e33484b2ad1_13833737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2>Si aun no tiene cuenta, por favor registrese</h2>

            <p>Los campos con (*) son obligatorios</p>
        </div >        
    </div >
    <div class="row alert alert-secondary">
        <div class="col-4 border text center">
            <form action="registerUser" method="POST" class="formulario">
                <div class="col">
                    <label for="nombre_usuario">Nombre (*)</label>
                    <input type="text" name="nombre_usuario" placeholder="las Pulpas" required>
                </div> 
                <div class="col">   
                    <label for="email">Email (*)</label>
                    <input type="email" name="email" placeholder="laspulpas@mail.com.ar" required>
                </div> 
                <div class="col"> 
                    <label for="contraseña">Contraseña (*)</label>                    
                    <input type="password" name="contraseña" placeholder="*******" required>                            
                </div> 
                <div class="col">                     
                    <input type="submit" value="Registrarme" class="btn btn btn-secondary">                            
                </div> 
            </form>
        </div>
    </div >      
</div ><?php }
}
