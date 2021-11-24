<?php
require_once './libs/RouterClass.php';
require_once 'api/ComentarioApiController.php';

$router= new Router();

$router->addRoute('comentarios','GET','ComentarioApiController','getAllComentarios');
$router->addRoute('comentarios/producto/:ID','GET','ComentarioApiController','getComent');
$router->addRoute('comentarios/:ID', 'DELETE', 'ComentarioApiController', 'deleteComent');
$router->addRoute('comentarios', 'POST', 'ComentarioApiController', 'addComent');

$router->route($_REQUEST['resource'],  $_SERVER['REQUEST_METHOD']);
