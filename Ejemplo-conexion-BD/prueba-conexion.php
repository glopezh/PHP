<?php
if (mysql_connect("167.71.169.99", "php", "platzi2019") ){
    echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
}else{
    echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
}
?>