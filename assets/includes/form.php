<?php

if(isset($_POST['persona'])){
    
    $nombre = $_POST['persona'];         //Nombre del cliente
    $correo = $_POST['email'];         //Correo del cliente
    $msj = $_POST['mensaje'];         //Mensaje
    $asunto = "Correo desde Portfolio";         //Asunto
    
    
    $mensaje = 'La persona con el correo: ' . $correo . "\r\n" . 'Nombre: ' . $nombre . "\r\n" . 'Quiere contactase y su Mensaje es: '. $msj;
    
    $email = "jorgeemilianom@gmail.com";               //Correo destinatario
    
    $header = "From: portfolio.GesPrender.com"   .  "\r\n";
    $header .= "Reply-to:" . $email .  " \r\n";
    $header .= "X-Mailer: PHP/"  .  phpversion();
    
    $tipocorreos=explode('@',$email);
    
    
    $correo = mail($email, $mensaje, $header );
    
    if(!$correo){
        echo "<script> Swal.fire('Correo enviado!') </script>";
    }
}

?>