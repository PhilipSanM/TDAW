<?php
  session_start();
  include("./conexion.php");
  include("./getPosts.php");

  $contrasena = md5($contrasena);
  
  $sqlCheckLogin = "SELECT * FROM docente WHERE numeroEmpleado = '$numeroEmpleado' AND contraseña = '$contrasena'";
  $resCheckLogin = mysqli_query($conexion, $sqlCheckLogin);
  $numFilasRes = mysqli_num_rows($resCheckLogin);
  $respAX = [];
  if($numFilasRes == 1){
    $infCheckLogin = mysqli_fetch_row($resCheckLogin);
    $respAX["cod"] = 1;
    $respAX["msj"] = "Hola! Bienvenido $infCheckLogin[1] $infCheckLogin[2].";
    $respAX["icono"] = "success";
    $_SESSION["alumno"] = $numeroEmpleado;
  }else{
    $respAX["cod"] = 0;
    $respAX["msj"] = "Error. Favor de intentarlo nuevamente.";
    $respAX["icono"] = "error";
  }

  echo json_encode($respAX);
?>