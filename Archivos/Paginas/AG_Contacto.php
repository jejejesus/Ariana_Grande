<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, inicial-escale=1">
		<title>
			Ariana Grande | Contact us
		</title>
		<!--Librerias-->
		<script src="https://kit.fontawesome.com/d84e9fbcd0.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudfire.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../JavaScript/Validacion.js"> </script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!--Icono y hoja de diseno-->
		<link rel="shortcut icon" href="../Imagenes/Generales/Icono.ico">
		<link rel="stylesheet" type="text/css" href="../CSS/Diseno_Contacto.css"/>
		
	</head>
	<body>
		<!--Logo-->
		<br><br>
		<div class="logo" align="center">
			<a href="../../Ariana_Grande.html">
				<img src="../Imagenes/Generales/ArianaGrande_Logo.png" alt="Logo Ariana Grande" width="20%" height="auto" title="Go to homepage..."/>
			</a>
		</div>
		<br>
		<!--Contenido-->
		<header>
			<i class="fas fa-comment-medical"></i>
			<b>Contact us</b>
		</header>
		<div class="contenedor">
			<form class="formulario">
				<label for="id_text_nombre_usuario">Name:</label><br>
				<input type="text" id="id_text_nombre_usuario" class="class-text-ingresar-datos" placeholder="Your first name(s)..." maxlength="25" required>
			
				<input type="text" id="id_text_apellido_usuario" class="class-text-ingresar-datos" placeholder="Your last name(s)..." maxlength="25" required>
					<p class="alerta" id="alerta_1_n"><i class="fas fa-info"></i> Write a valid <strong>first name</strong></p>
					<p class="alerta" id="alerta_1_a"><i class="fas fa-info"></i> Write a valid <strong>last name</strong></p>
				
				<label for="id_email">Email for answer back:</label><br>
				<input type="email" id="id_email" class="class-text-ingresar-datos" placeholder="Your email..." required onkeyup="this.value=this.value.toLowerCase()">
					<p id="alerta_2"class="alerta"><i class="fas fa-info"></i> Write a valid <strong>email</strong></p>
				<hr>
				
				<label for="id_radio_1">Contact reason:</label>
				<div class="radio-toolbar">
					<input type="radio" name="name_radio_razon_contacto" id="id_radio_1" value="1" checked>
					<label for="id_radio_1">Comments</label>
					<input type="radio" name="name_radio_razon_contacto" id="id_radio_2" value="2">
					<label for="id_radio_2">Get help</label>
					<input type="radio" name="name_radio_razon_contacto" id="id_radio_3" value="3">
					<label for="id_radio_3">Other</label><br>
				</div>

				<label for="id-comentarios">Message:</label>
				<input type="text" id="id_text_comentarios" class="class-text-mensaje" placeholder="Your message..." maxlength="255" required>
				<br>
					<p id="alerta_3" class="alerta"><i class="fas fa-info"></i> Write a <strong>message</strong></p>

				<input type="submit" id="id_submit_mensaje" value="Send info" disabled="true">

			</form>
		</div>
		<!--Pie de pagina-->
		<footer>
			<p align="left">
				<b>
					Copyright © 2020 Ariana Grande
				</b>
			</p>		
		</footer>
	</body>
</html>