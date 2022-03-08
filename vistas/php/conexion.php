<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	//$user = 'tecnotr1_webmstr';
	//$password = 'Oa?*&2#Bzuqt';
	$db = 'tbr_phi3';

	$conex = @mysqli_connect($host, $user, $password, $db);
	if(!$conex){
		echo "Error en la conexión";
	}
	// else{
	// 	echo "Conexión exitosa";
	// }
	$conex -> set_charset("utf8");
?>