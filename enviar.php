<?php 
$nombres=$_POST["nombres"];
$email=$_POST["email"];
$asunto=$_POST["asunto"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];

$correo="ralupa@resetperusac.com";
$subject = "Mensaje enviado desde la web";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = "
<html>
<head>
<title>Cotizacion</title>
</head>
<body>
<p style='font-size:1.2rem;'>
Nombres : $nombres <br>
Email : $email <br>
Asunto : $asunto <br>
Telefono : $telefono <br>
Mensaje : $mensaje <br>
</p> 
</body>
</html>";

if(mail($correo, $subject, $message, $headers)){
	?>
	<script> 
	window.location.replace('https://www.resetperusac.com/'); 
	</script>
<?php	
}

?>