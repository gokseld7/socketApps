<?php

$portnum = 'Your.Server.Port.Number';		
$ipnum = 'Your.Server.Ip.Number';	
$samplearray = array ( "Michael", "Annie", "Henry", "Clay", "Ian" );
$i=0;				

set_time_limit(0);	

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");				
$result = socket_connect($socket, $ipnum, $portnum) or die("Could not connect toserver\n");			

$dt = fopen("c://arrayExample.txt","w");							

for ( $i=0 ; $i<=4 ; $i++) {	
	$message = $samplearray[$i];	
	fwrite( $dt , $samplearray[$i].PHP_EOL );	
	socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");	
						}
	
fclose( $dt );	
	
echo "<h1> All the data have been transferred.";
echo "<br> <h1> Closing the socket...";
socket_close($socket);		

?>