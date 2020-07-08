<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CERTIFICADOS</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="css/style.css?v=2">
</head>

<body>
	<div id="container">
        <div id="contact-form" class="clearfix">
            <h1>CERTIFICADOS</h1>
            <h2>Sistema de certificados</h2>

            <form method="post" action="certificado.php">
                <label for="name">Nombres y Apellidos: <span class="required">*</span></label>
                <!-- <input type="text" id="cedula" name="cedula" pattern="[0-9]{8}" placeholder="cedula de participante ejem: 12345678" required autofocus autocomplete='off' /> -->
                <input type="text" id="name" name="name" placeholder="nombres y apellidos" required autofocus autocomplete='off' />
                <label for="cedula">Nombre del Curso: <span class="required">*</span></label>
                <input type="text" id="curso" name="curso" placeholder="nombre del curso" required autofocus autocomplete='off' />
                          
                <input type="submit" value="Crear" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> Todos los campos son requeridos.</p>
            </form>
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</body>
</html>