<!doctype html>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Login</title>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
            <br>    
                <div class="regisl">
                    <form id="formulario" method="post" action="menu.php">

                        <strong class="letras">Ingrese su usuario y contraseña para iniciar sesión</strong>
                        <br>
                        <label class="letras">Nombre de Usuario:</label>
                        <br>
                        <input class="form-control" type="text" name="usuario" value="" required/>

                        <label class="letras">Contraseña:</label>
                        <input class="form-control" type="password" name="clave" value="" required/>
                        <br>
                        <input class="botons" type="submit" value="Iniciar sesión">
                    </form>
                </div>
            </div>
        </div>
        <br><br>
    </body>
</html>