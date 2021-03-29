<?php

function validaUsuarios($correo,$clave){
    $usuarios=  datosUsuarios();
    $login=0;
    $usuarioSeleccionado=array();
    foreach ($usuarios as $value) {
        if($value['correo']==$correo&&$value['clave']==$clave){
            $login=1;
            $usuarioSeleccionado=$value;
            break;
        }
    }
    $usuarioSeleccionado['login']=$login;
    return $usuarioSeleccionado;
    
}

