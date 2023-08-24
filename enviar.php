<?php
include("conect_db.php");

if(isset($_POST['enviar'])){
  if(strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1){
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $consulta = "INSERT INTO datos(nombre, correo) VALUES ('$nombre','$correo')";
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