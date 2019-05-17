<?php

$portnum = 'Your.Server.Port.Number';						
$ipnum = 'Your.Server.Ip.Number';	
$samplearray = array ( "Michael", "Annie", "Henry", "Clay", "Ian" );	
$i=0;	

set_time_limit(0);	

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$dt = fsockopen($ipnum, $portnum, $errno, $errstr, 30); 

for ( $i=0 ; $i<=4 ; $i++) {		
	$message = $samplearray[$i];			
	fwrite( $dt , $message.PHP_EOL );	
}
						
echo "<h1> All the data have been transferred.";
echo "<br> <h1> Closing the socket...";
fclose( $dt );		
	
?>
