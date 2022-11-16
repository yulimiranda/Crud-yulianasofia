<!DOCTYPE html>
<html>
  <head>
    <title>Modificación de Programas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
       <br>
       <div id="div2">
          <div id="div4">
               <form name="formulario" role="form" method="post">
                 <div class="regisl">
                    <strong class="letras">Ingrese criterio de busqueda</strong>
                    <br><br>
                     <div class="form-contro1">
                     <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre" />
                     </div>
                       <input class="botons" style="width: 60%;" type="submit" value="consultar" >
                       <input style="width: 50%;" class="botons" type="button" onclick="location.href ='menu.php'" value="volver">
                       </div>
                    </div>
                    <br>
                 </div>
               </form>
               <br>
          </div>

          <div id="divconsulta2">
          <?php
          if ($_SERVER['REQUEST_METHOD']==='POST')
          {
              include('funciones.php');
              session_start();
              $vnombre=$_POST['nombre'];
              $miconexion=conectar_bd('', 'yuliana');
              $resultado=consulta($miconexion,"select * from programa where programa_nombre='{$vnombre}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['ide1']=$fila->programa_id;
                  ?>
                <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
                    <div class="regisl">
                       <strong class="letras">Datos del Programa</strong><br>

                       <label class="letras">Id:</label>
                       <input class="form-control" type="text" name="ide1" disabled="disabled" value="<?php echo $fila->programa_id?>"/>

                       <label class="letras">Nombres:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre de programa" />

                       <label class="letras">Tipo Programa:</label>
                       <input class="form-control" type="text" name="tipo" value="<?php echo $fila->programa_tipo ?>" required/>

                       <br>
                       <input style="width: 60%;" class="botons" type="submit" value="Actualizar">
                       <br>
                    </div>
                </form>
                <?php
              }
            else{
                echo "No existen registros";
                }
            $miconexion->close();
          }?>
          </div>
       </div>
    </div>
  </body>
</html>