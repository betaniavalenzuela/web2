<div class="container">
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
                            {foreach from=$categorias item=$cat}       
                                <option value="{$cat->id_categoria}">{$cat->nombre_categoria}</option>
                            {/foreach} 
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
                {$error}
            </h4> 
        </div>
    </div>
</div>


