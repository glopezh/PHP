<?php
$fp = fopen('data.txt', 'w');
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);
echo file_get_contents(data.txt);
// the content of 'data.txt' is now 123 and not 23!
?>