<?php  
	$domain="localhost";	
	$user="root";			
	$password="";			
	$database="bd_projeto";		


	$mysqli = new mysqli($domain,$user,$password,$database);

	if($mysqli->connect_errno){

		echo "Não foi possível conectar com o banco de dados ";
		echo $mysqli->connect_error; 
	}
?>