<?php
$dbhost = 'localhost'; 
$dbuser = 'handshak_MantuDB'; 
$dbpass = 'M@ntuP@ni123'; 
$dbname = 'handshak_HandshakeDB'; 
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');  
mysql_select_db($dbname) or die('database selection problem'); 
$dbh=mysql_connect($dbhost,$dbuser,$dbpass);
$dbf=mysql_select_db($dbname);
?>