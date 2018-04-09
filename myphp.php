<?php
echo "Hello IP is it me your looking for:" . $_SERVER['REMOTE_ADDR'] . "</br>";
echo "You are served by the server IP: <b>" . $_SERVER['SERVER_ADDR'] . "</b> </br>";
$datetime = date("jF,Y,g:ia");
echo "on: <b>" . $datetime . "</b>";
?>

