<?php
$dbhost = 'localhost'; 
$dbuser = 'Handshakeuser'; 
$dbpass = '7381930122'; 
$dbname = 'HandshakeDB'; 
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');  
mysql_select_db($dbname) or die('database selection problem'); 
$dbh=mysql_connect($dbhost,$dbuser,$dbpass);
$dbf=mysql_select_db($dbname);
?>