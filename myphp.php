<?php
echo "HELO, is it me your looking for, have i told"
echo "Hello IP:" . $_SERVER['REMOTE_ADDR'] . "</br>";
echo "You are served by the server IP: <b>" . $_SERVER['SERVER_ADDR'] . "</b> </br>";
$datetime = date("jF,Y,g:ia");
echo "on: <b>" . $datetime . "</b>";
?>

