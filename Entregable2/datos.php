<?php

function datosUsuarios() {
    $usuario = fread ( resource $handle , int $length );
    
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
