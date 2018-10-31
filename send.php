<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$name = $_POST["name"];
	$mail = $_POST["email"];
	$description = $_POST["description"];
	$message = $name . "\n" . $mail . "\n" . $description;

	$recipient = "jfbm97@hotmail.com";
	$asunto = "Contacto pagina cali";
	if(mail($recipient, $asunto, $message)){
		echo "Mail enviado exitosamente";
	}else{
		echo "Algo salió mal. Intenta nuevamente";
	}
	
 	?>

</body>
</html>