<?php

session_start();
include './datos.php';
include './funciones.php';

$usuario = datosUsuarios();

$caso = 0;
if (isset($_POST['username'])) {
    $username = $_POST['correo'];
    $clave = $_POST['pwd'];
    $recordar = FALSE;
    if (isset($_POST['recordar'])) {
        $recordar = true;
    }
    $usuario=validaUsuarios($correo, $clave);
    if ($usuario['login'] == 1) {
        $caso = 1;
        $_SESSION['estadoLogin'] = true;
        $_SESSION['usuario'] = $correo;
        $_SESSION['nombre']=$usuario['nombre'];
        $_SESSION['puesto']=$usuario['puesto'];
        
    } else {
        $caso = 2;
    }
} else {
    if (isset($_SESSION['estadoLogin'])) {
        $caso = 3;
    } else {
        $caso = 4;
    }
}
switch ($caso) {
    case 1:include 'pages/home.php';
        break;
    case 2:include 'pages/errorLogin.php';
        break;
    case 3:include 'pages/home.php';
        break;
    case 4:include 'pages/sinSession.php';
        break;
    default:
        break;
}
