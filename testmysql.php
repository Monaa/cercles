<?php 
$link = mysql_connect('fr.anco.is','fherbert','penelope49');
 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 


echo 'Bonjour Fanny';
?> 