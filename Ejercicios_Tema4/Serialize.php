<?php
// $datos_sesion contiene un array multi-dimensional con
// información del usuario actual. Usamos serialize() para
// almacenarla en una base de datos al final de la petición.

$datos_sesion =0;
$datos_sesion =function datosUsuarios() {
    $usuario[]=array(
        'correo'=>'garroyo@uni.pe',
        'clave'=>'123456',
        'nombre'=>'Giancarlo Arroyo',
        'puesto'=>'Jefe de Sistemas');
    $usuario[]=array(
        'correo'=>'usuario1@uni.pe',
        'clave'=>'123456',
        'nombre'=>'Flor La Rosa Espinoza',
        'puesto'=>'Analista Programadora');
    $usuario[]=array(
        'correo'=>'usuario2@uni.pe',
        'clave'=>'123456',
        'nombre'=>'Aquiles Pinto Paredes',
        'puesto'=>'Analista de Calidad');

    return $usuario;
}

$con  = odbc_connect("bd_web", "php", "gallina");
$sent = odbc_prepare($con,
    "UPDATE sesiones SET datos = ? WHERE id = ?");
$datos_sql = array (serialize($datos_sesion), $_SERVER['PHP_AUTH_USER']);

if (!odbc_execute($sent, &$datos_sql)) {
    $sent = odbc_prepare($con,
        "INSERT INTO sesiones (id, datos) VALUES(?, ?)");
    if (!odbc_execute($sent, &$datos_sql)) {
        /* Algo ha fallado.. */
    }
}
?>