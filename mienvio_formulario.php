<?php 

	$nombre_usuario = $_POST['nombre'];
	$email_usuario = $_POST['correo'];
	$consulta_usuario = $_POST['consulta'];


	$destino = "gabdiv33@gmail.com";

	$asunto = "Consulta enviada desde www.prueba.com.ar";

	$mensaje = "Nombre: ".$nombre_usuario."\r\n";// estos r y n sirven para salto de linea
	$mensaje.="Email: ".$email_usuario."\r\n";
	$mensaje.="Consulta: ".$consulta_usuario."\r\n";

	$remitente = "From: algo@gaby.com.ar";

	mail($destino, $asunto, $mensaje, $remitente);

	header("Location:index.php?i=ok");
	 

	 ?>
