<!DOCTYPE html>
<html>
  <head>
    <title>Crear Ficha</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="div1" class="container">
        <br>
           <?php session_start(); if(! empty($_SESSION['usua_tipo'])) { ?> <?php } ?>
           <?php
             if($_SESSION['usua_tipo']=='ADMIN')
             {
             ?>
             <form role="form" method="post" action="guardado_ficha.php">
             <div class="regisl">
               <strong class="letras">Crear la ficha</strong>
               <br>
               <label class="letras">Numero:</label>
                <input class="form-control" type="number" name="nombre" min="9999" max="9999999999" value="" placeholder="Numero" required/>
                <br>
               <label class="letras">Nombre del programa:</label>
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','yuliana');
                                $consulta = "SELECT * FROM programa";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="progra">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->programa_id;?>"><?php echo $opcion->programa_nombre;?></option>
                                    <?php } ?>
                  </select>
               <br>
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