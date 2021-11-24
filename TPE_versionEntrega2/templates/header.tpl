<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
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
                    {if isset($smarty.session.email)}
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="logout"> Log Out</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="login"> Log in</a>
                        </li>
                    {/if}
                </ul>
            </div>
        </div>
    </div>