<?php
/* Smarty version 3.1.39, created on 2021-11-24 13:29:30
  from 'C:\xampp\htdocs\WEB2\TPE_versionEntrega2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e302a9a8848_00071882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c01684eee763af31c260be2e06d0f503f97ef781' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_versionEntrega2\\templates\\header.tpl',
      1 => 1637695104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e302a9a8848_00071882 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet" >     
    <title>Las Pulpas</title>    
</head>

<body>
    <div class="container">
        <div class="row alert alert-secondary">
            <div class="col-12  text center">
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home" > Productos</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link" href="categorias" > Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.laspulpas.com" > Contacto</a>
                    </li>                   
                    <?php if ((isset($_SESSION['email']))) {?>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="logout"> Log Out</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="login"> Log in</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div><?php }
}
