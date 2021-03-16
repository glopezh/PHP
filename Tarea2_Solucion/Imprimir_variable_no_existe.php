<?php
error_reporting(E_ALL);
//ini_set("display_errors", true);
//he comentado la línea de arriba porque he modificado el /etc/php.ini poniendo display_errors = On + sudo service httpd restart => se muestran los errores siempre.

echo $variableQueNoExiste;
