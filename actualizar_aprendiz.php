<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombres=strtoupper($_POST['nombres']);
  $vapellidos=strtoupper($_POST['apellidos']);
  $vdireccion=strtoupper($_POST['direccion']);
  $vtelefono=$_POST['telefono'];
  $vficha=$_POST['ficha'];

  $miconexion=conectar_bd('', 'yuliana');
  $resultado=consulta($miconexion,"insert into aprendices (apre_tipoid,apre_numid,
  apre_nombres,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) values 
  ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");

  if ($miconexion->affected_rows>0)
  {
      echo "Actualizacion exitosa";
  }
?>

<input style="width: 40%;" class="botons" type="button" onclick="location.href ='menu.php'" value="volver">
