
    {include file='templates/header.tpl'}
     
     
    {if $IsAdmin}
        <div class="container">
            <div class="row">
                <div class="row alert alert-secondary">
                    <h3 >Bienvenido administrador {$smarty.session.nombre}</h3>
                    <a   href="listarUsers"> ADMINISTRAR USUARIOS</a>
                </div>
            </div>
        </div>
    {/if} 

    <div class="container">
        <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2 >{$titulo}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 border text center ">
                <ul class="list-group ">
                    {foreach from=$productos item=$prod}
                            <li  class="list-group-item">
                                <a  id="lista_prod" data-idProducto="{$prod->id_producto}" class="list-group-item-text fs-4" href="producto/{$prod->id_producto}">{$prod->nombre_producto}</a>
                                <p>{$prod->nombre_categoria}</p>
                                {if $IsAdmin}
                                    <a class=" btn-sm btn btn btn-secondary" href="borrarProd/{$prod->id_producto}"> BORRAR</a>
                                    <a class=" btn-sm btn btn-primary list-group-item-text" href="editar/{$prod->id_producto}"> EDITAR</a>
                                {/if}                             
                            </li>
                    {/foreach}
                </ul>


                {if $IsAdmin}
                    {include file='templates/createProduct.tpl'}                   
                    
                {/if}
            </div>
        </div>
    </div>
