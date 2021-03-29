<?php

function datosUsuarios() {
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

function menus(){
    $menu[]=array("item"=>'Menu 1',
        "icono"=>'fa-frown-o',
        "url"=>'#',
        "onclick"=>'pagina1();');
    $menu[]=array("item"=>'Menu 2',
        "icono"=>'fa-life-buoy',
        "url"=>'#',
        "onclick"=>'pagina2();');
    $menu[]=array("item"=>'Menu 3',
        "icono"=>'fa-music',
        "url"=>'#',
        "onclick"=>'pagina3();');
    return $menu;
}

function datosMensajes(){
    $mensaje[]=array("asunto"=>'Envio de Notas',
        "mensajeCorto"=>'¿Cuando saldran las notas?',
        "time"=>'5 hoas',
        'imagen'=>'user6-128x128');
    $mensaje[]=array("asunto"=>'Fin de Clases',
        "mensajeCorto"=>'¿Donde Somos?',
        "time"=>'5 hoas',
        'imagen'=>'user5-128x128');
    $mensaje[]=array("asunto"=>'Fiesta de Cachimbos',
        "mensajeCorto"=>'¿Hay Cachimbas?',
        "time"=>'5 hoas',
        'imagen'=>'user4-128x128');
    $mensaje[]=array("asunto"=>'Semana Fiis',
        "mensajeCorto"=>'¿Que Grupos se Presentan?',
        "time"=>'5 hoas',
        'imagen'=>'user3-128x128');
    return $mensaje;
}
