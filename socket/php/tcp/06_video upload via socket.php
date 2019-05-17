<?php

$streamarray = array();
$portnum = 'Your.Server.Port.Number';
$ipnum = 'Your.Server.Ip.Number';
$i=0;

set_time_limit(0);

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$sampvid = "C:/sampvid.mp4";

$tt = fopen( $sampvid , "r" );

$dt = fsockopen($ipnum, $portnum, $errno, $errstr, 30);
$streamarray = fread( $tt , filesize($sampvid) );
fwrite( $dt , $streamarray );		

fclose( $tt );
echo "<h1> All the data have been transferred.";
echo "<br> <h1> Closing the socket...";
fclose( $dt );

?>
