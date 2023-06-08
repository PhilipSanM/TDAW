<?php
	echo("a");
    $con = mysqli_init();
    $servidorBD = "escomselecdbs.mysql.database.azure.com";
	$usuarioBD = "diegopipebran";
	$contrasenaBD = "ikc83mfL";
	$nombreBD = "sys";

	echo("medio");

    mysqli_ssl_set($con, NULL, NULL, "/Users/macbook/Downloads/cacert.pem", NULL, NULL);
	mysqli_real_connect($con, $servidorBD,$usuarioBD,$contrasenaBD,$nombreBD, 3306, MYSQLI_CLIENT_SSL);

	echo("fin");
?>