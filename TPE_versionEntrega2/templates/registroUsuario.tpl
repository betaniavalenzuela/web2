
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
</div >