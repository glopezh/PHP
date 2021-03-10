<?php
// Incluimos los datos de conexión y las funciones:
include("datos.php");
include("funciones.php");

// Usamos esas variables:
if (conectarBase($host,$usuario,$clave,$base)) {

// Aquí irá el resto

} else {
    echo"<p>Servicio interrumpido</p>";

}
?>