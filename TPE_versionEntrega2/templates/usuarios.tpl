{include file='templates/header.tpl'}

<div class="container">
    <div class="row">
        <div class="col-12 border text center ">
            <ul class="list-group ">
                {foreach from=$usuarios item=$user}
                    <li class="list-group-item">
                        <h5>Usuario: {$user->nombre_usuario}</h5>
                        <h5>ROL:{if $user->rol_admin==1}
                                    Administrador 
                                {else} 
                                    Usuario registrado
                                {/if}    
                        </h5>
                        <a class=" btn-sm btn btn btn-secondary" href="borrarUser/{$user->id_usuario}"> BORRAR</a>
                        {if $user->rol_admin==1}
                            <a class=" btn-sm btn btn-secondary"  href="quitarPermisosAdmin/{$user->id_usuario}" >QUITAR PERMISOS DE ADMIN</a>
                        {else}
                            <a class=" btn-sm btn btn-primary"  href="convertirEnAdmin/{$user->id_usuario}" >CONVERTIR EN ADMIN</a>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>
</div>