<?php
	echo("a");
    $con = mysqli_init();
    $servidorBD = process.env.MYSQL_URI;
	$usuarioBD = process.env.MYSQL_USER;
	$contrasenaBD = process.env.MYSQL_PASSWORD;
	$nombreBD = process.env.MYSQL_DBNAME;

	echo("medio");

    mysqli_ssl_set($con, NULL, NULL, process.env.MYSQL_PEMFILE, NULL, NULL);
	mysqli_real_connect($con, $servidorBD,$usuarioBD,$contrasenaBD,$nombreBD, process.env.MYSQL_PORT, MYSQLI_CLIENT_SSL);

	echo("fin");
?>
