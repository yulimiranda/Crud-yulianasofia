<!DOCTYPE html>
<html>
  <head>
    <title>Eliminacion de Programas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
       <br>
            <form name="formulario" role="form" method="post">
              <div class="regisl">
                <strong class="letras">Ingrese criterio de busqueda</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group col-md-5">
                 <input class="form-control" type="text" name="nombre" value="" placeholder="NOMBRE" />
                 </div>
                   <input style="width: 60%;" class="botons" type="submit" value="Eliminar" >
                   <input style="width: 50%;" class="botons" type="button" onclick="location.href ='menu.php'" value="volver">
                <br>
              </div>
            </form>
            <br>
          </div>

          <div id="divconsulta">
          <?php
          if ($_SERVER['REQUEST_METHOD']==='POST')
          {
              include('funciones.php');
              $vnombre=$_POST['nombre'];
              $miconexion=conectar_bd('', 'yuliana');
              $resultado=consulta($miconexion,"select * from programa where programa_nombre='{$vnombre}'");
              $resultado2=consulta($miconexion,"delete from programa where programa_nombre='{$vnombre}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  echo "id: ".$fila->programa_id."<br>"."Nombre del programa:".$fila->programa_nombre."<br>"."Tipo: ".$fila->programa_tipo."<br>";
                  if($resultado2)
                  echo "<br> Datos borrados exitosamente";
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