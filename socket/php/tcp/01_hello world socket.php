<?php

$portnum = 'Your.Server.Port.Number';
$ipnum = 'Your.Server.Ip.Number';

set_time_limit(0);
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$result = socket_connect($socket, $ipnum, $portnum) or die("Could not connect toserver\n");
$message = 'hello world'."\xA";

socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");

socket_close($socket);

?>
