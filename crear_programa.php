<!DOCTYPE html>
<html>
  <head>
    <title>Crear Programa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
           <?php session_start(); if(! empty($_SESSION['usua_tipo'])) { ?> <?php } ?>
           <div id="div3">
           <?php
             if($_SESSION['usua_tipo']='ADMIN')
             {
             ?>
             <form id="formulario" role="form" method="post" action="guardado_programa.php">
             <div class="regisl">
               <strong class="lgris">Cree el programa</strong>
               <br>
               <label class="lgris">Nombre:</label>
               <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" required/>

               <label class="lgris">Tipo Programa:</label>
               <div class="form-row">
                <div class="form-group col-xs-2">
                <select class="form-control" name="Tiposprograma"  required>
                  <option value="presencial" selected>Presencial</option>
                  <option value="virtual" >Virtual</option>
                  <option value="mixta" >Mixta</option>
                </select>
                </div>         
                </div>              
                  <br><br>
               <input style="width: 60%;" class="botons" type="submit" value="Guardar">
               <input style="width: 50%;" class="botons" type="button" onclick="location.href ='menu.php'" value="volver">
             </div>
             </form>
            <?php
             }
             else
             {
                 echo "No tiene permisos para realizar esta acción";
             }
            ?> 
            <br>
           </div>
        </div>
    </div>
  </body>
</html>