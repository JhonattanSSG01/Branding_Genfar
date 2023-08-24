<?php
include("conect_db.php");

if(isset($_POST['enviar']) && isset($_POST['select']) === "si"){
  if(!empty($_POST['nombre']) && !empty($_POST['correo'])){
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $check = 1;
    $consulta = "INSERT INTO datos(nombre, correo, checkList) VALUES ('$nombre','$correo','$check')";
    $resultado = mysqli_query($conect,$consulta);
    
    $header = "From: genfar@gmail.com" . "\r\n";
    $header = "Reply-To: genfar@gmail.com" . "\r\n";
    $header = "X-Mailer: PHP/" . phpversion();
    $mail = mail($nombre, $correo, 'Informativo', '¡Gracias por inscribirte, espera la próxima notificación con descuentos y
    promociones del mes!');

    if($mail){
      echo "<h4> Mail enviado exitosamente!!!</h4>";
    } else {
      echo "<h4> Errorr!!!</h4>";
    }
  }else {
  echo "<h4> Gracias por visitarnos!!!</h4>";
}
} else {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $check = 0;
    $consulta = "INSERT INTO datos(nombre, correo, checkList) VALUES ('$nombre','$correo','$check')";
    $resultado = mysqli_query($conect,$consulta);

    echo "<h4> Gracias por visitarnos!!!</h4>";
}
?>