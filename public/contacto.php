<?php

// Fetching Values from URL.
$nombre = $_POST['nombre1'];
$fecha = $_POST['fecha1'];
// $celular = $_POST['celular1'];
$celular = preg_replace('/[^0-9]/', '', $_POST['celular1']);
$edo = $_POST['edo1'];
$curso = $_POST['curso1'];
$promos = $_POST['promos1'];
$desde = "fervale.8a@gmail.com";


if(strlen($celular) === 10) {

$subject = "Contacto desde Landing page";
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .=  'Content-Type: text/html; charset=utf-8' . "\r\n";
//$headers .= 'Content-Type: text/HTML; charset=ISO-8859-1' . "\r\n";
$headers .= 'From:' . $desde. "\r\n"; // Sender's Email
$headers .= 'Cc:' . "octabio@gmail.com". "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:#000000;">
Datos del sitio.<br/>'
. 'Nombre: ' . $nombre . '<br/>'
. 'Fecha de nacimiento: ' . $fecha . '<br/>'
. 'Numero celular: ' . $celular . '<br/>'
. 'Estado: ' . $edo . '<br/>'
. 'Curso de interes: ' . $curso. '<br/>'
. 'Promociones: ' . $promos . '<br/>'
. '<br/>'
. 'Datos de contacto desde Bezirk (Landing page 2023)  .</div>';
$sendmessage = "<div style=\"background-color:#ffffff; color:white;\">" . $template . "</div>";
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function. esau@bezirk.mx 
mail($desde, $subject, $sendmessage, $headers);
// mail("esau@bezirk.mx", $subject, $sendmessage, $headers);
echo "Gracias por tu registro " . $nombre . ", pronto un asesor se pondra en contacto contigo 😎";

} else {
echo "<span>* Celular invalido *</span>";
}
?>
