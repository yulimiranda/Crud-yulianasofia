<!DOCTYPE html>
<html>
  <head>
    <title>Eliminacion De Fichas</title>
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
                <strong class="lgris">Ingrese criterio de busqueda</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group col-md-5">
                 <input class="form-control" type="number" name="nombre" min="9999" max="9999999999" value="" placeholder="NUMERO" required/>
                 </div>
                   <div class="form-group col-md-3">
                   <input style="width: 60%;" class="botons" type="submit" value="Eliminar" >
                   <input style="width: 50%;" class="botons" type="button" onclick="location.href ='menu.php'" value="volver">
                   </div>
                </div>
                <br>
              </div>
            </form>
            <br>
          </div>

          <?php
          if ($_SERVER['REQUEST_METHOD']==='POST')
          {
              include('funciones.php');
              $vnombre=$_POST['nombre'];
              $miconexion=conectar_bd('', 'yuliana');
              $resultado=consulta($miconexion,"select * from fichas where ficha_numero='{$vnombre}'");
              $resultado2=consulta($miconexion,"delete from fichas where ficha_numero='{$vnombre}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  echo "Ficha: ".$fila->ficha_numero."<br>"."Programa: ".$fila->ficha_programa."<br>";
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