<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gmail = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $cname = $_POST["cname"];
    $adress = $_POST["adress"];
    $adress = $_POST["city"];
    $state = $_POST["state"];
    $postal = $_POST["postal"];
    $country = $_POST["country"];
    $number = $_POST["phone"];
    $npedido = $_POST["npedido"];
}
$para = "bryamccuervo2004@gmail.com";
$asunto = "Nueva compra";
$mensaje = "El usuario con el correo electronico" . $gmail . "ha realizado una nueva compra.";

// Cabeceras del correo
$headers = "From: remitente@example.com\r\n";
$headers .= "Reply-To: remitente@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Enviar el correo
$mail_enviado = mail($para, $asunto, $mensaje, $headers);

if ($mail_enviado) {
    echo "Correo enviado con éxito.";
} else {
    echo "Error al enviar el correo.";
}




?>

