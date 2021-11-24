{include file= 'templates/header.tpl'}



<div class="container">
    <div class="row">
            <div class="col-12 border text center alert-secondary">
                <h4 class="col text-danger">             
                    {$error}
                </h4> 
            </div>
        </div>

    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Log in</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-4 border text center">
            <form action="verify" method="POST">
                <div class="col">
                    <input type="text" class="form-control"  placeholder="laspulpas@gmail.com" aria-label="email"name="email" id="email" required>
                </div>
                <div class="col">
                    <input type="password" class="form-control"  placeholder="******" aria-label="password"name="password" id="password" required>
                </div>
                <div class="col">
                    <input type="submit" value="Ingresar" class="btn btn btn-secondary">
                </div>    
            </form>
        </div>
    </div>
    
    
</div>
{include file= 'templates/registroUsuario.tpl'}
 

{include file= 'templates/footer.tpl'}

