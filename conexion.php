<?php
	// connect to the database
	// mysqli_connect(host, user, pass, database);
	@$conexion = mysqli_connect('localhost', 'root', '', 'pd3') or die("No se pudo conectar con la base de datos");
?>