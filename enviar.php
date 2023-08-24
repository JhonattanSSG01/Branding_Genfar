<?php
include("conect_db.php");

if(isset($_POST['enviar'])){
  if(strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1){
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $check = trim($_POST['select']);
    $consulta = "INSERT INTO datos(nombre, correo, checkList) VALUES ('$nombre','$correo','$check')";
    $resultado = mysqli_query($conect,$consulta);
    if($resultado){
      ?>
      <h3>Enviados!!!</h3>
      <?php
    } else {
      ?>
      <h3>Error!!!</h3>
      <?php
    }
  }else {
  ?>
    <h3>Campos obligatorios!!!</h3>
  <?php
}
}

?>