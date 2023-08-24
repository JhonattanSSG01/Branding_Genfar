<?php

if(isset($_POST['enviar'])){
  if(!empty($_POST['nombre']) && !empty($_POST['correo'])){
    $nombre = $_POST["nombre"];
    $correo  = $_POST["correo"];
    $header = "From: genfar@gmail.com" . "\r\n";
    $header = "Reply-To: genfar@gmail.com" . "\r\n";
    $header = "X-Mailer: PHP/" . phpversion();
    $mail = mail($correo, 'Informativo', '¡Gracias por inscribirte, espera la próxima notificación con descuentos y
    promociones del mes!');

    if($mail){
      echo "<h4> Mail enviado exitosamente!!!</h4>";
    }
  }
}

?>