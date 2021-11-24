 

{include file="comentarios.tpl"}
{if $IsUserLogged} 
<div class="container">
    <div class="row">
        <div  class="col-12 border text center alert alert-primary">
            <h2 > Realiza un comentario del producto:  {$producto->nombre_producto}</h2>
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
            <input type="hidden" id="id_user" value="{$smarty.session.id_user}"/>            
            <button class=" btn-sm btn btn-primary list-group-item-text" type="submit" id="enviar_coment">Enviar</button>
        </div>
    </form>
</div >
{/if}

<input type="hidden" name="id_producto" id="id_producto" value="{$producto->id_producto}">
<input type="hidden" name="is_admin" id="is_admin"  value="{$IsAdmin}">

<script src="js/comentariosProduct.js" type="text/javascript"></script>
