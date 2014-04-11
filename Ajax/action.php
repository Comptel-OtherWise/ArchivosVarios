<?php

echo "Hola " . $_POST['nombre'] . " Gracias por contactarnos<br>";
echo "Te hemos enviado un correo a " . $_POST['correo'];


$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$correo = $_POST['correo'];

$contenido = "Alguien ha escrito desde la página web.  Los datos son: <br><br> <b>nombre<b/>: $nombre<br>
<b>correo</b>: $correo<br>
<b>mensaje</b>: $mensaje<br>";

$remitente = "from: MRRICEDELI <contactenos@mrricerestaurant.tk>\nMIME-Version: 1.0\nContent-Type: text/html\nX-Mailer: WebMail ";

//LLEGA A GUARIN
mail("jcguarinpenaranda@gmail.com", "Contacto de la pagina web", $contenido, $remitente);


//AQUI VIENE LA PARTE DE LA AUTORESPUESTA
$contenido_respuesta = "Recibimos su mensaje y en el menor tiempo posible le daremos respuesta.<br><br>
Cordialmente<br><br>
MRRICEDELI Cali - Colombia";

//LLEGA A CORREO USUARIO
mail($correo, "Recibimos su mensaje, Estimado cliente: ".$nombre, $contenido_respuesta, $remitente);
?>
