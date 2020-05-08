<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>MVC - PHP</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href=<?php echo constant('URL')?>index>Inicio</a>

		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href=<?php echo constant('URL')?>alumno>Alumnos <span class="sr-only">(current)</span></a>
			</li>
		</ul>

	</nav>

