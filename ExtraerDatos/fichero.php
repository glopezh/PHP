<?php
$ArchivoLeer = "datos.txt";
if(touch($ArchivoLeer)){
    //
    $archivoID = fopen($ArchivoLeer, "r");
    //
    while( !feof($archivoID)){
        $linea = fgets($archivoID, 1024);
        //
        print "<p>".$linea."</p>";
    }
    //
    fclose($archivoID);
}

?>