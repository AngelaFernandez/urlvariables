<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>url con enlaces</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	<!--Crear una página de bienvenida que contenga cuatro enlaces con apariencia de botones (bootstrap):Español, Inglés, Francés, Alemán-->
	<div class="container">
	<h1>Estamos en una pagina de idiomas</h1><br>
	<?php
		$idioma=$_GET['idioma'];
		switch($idioma){
			case 'es':
				echo 'españolito';
			break;
			
			case 'en':
				echo 'inglesito';
			break;
			
			case 'fr':
				echo 'francesito';
			break;
			
			case 'ge':
				echo 'alemanin';
			break;
		}
	
	?>
	<body>
	</div>
<html>
	