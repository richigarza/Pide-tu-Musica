<?php
/////////////////////////////
// BLL.User.php
// Autor: Richi Garza
// Fecha: 09git-feb-2017
////////////////////////////
require("../DAO/mysql.php");

Class BLLUser{
	function editUser(){

	}

	function createUser($user){		
		// Generamos el ParamsString
		$ParamsString = "CALL sp_newUser( '". $user->getFirstName() ."', 
								'". $user->getLastName() ."',
								'". $user->getUserName() ."', 
								'". $user->getEmail() ."', 
								'". $user->getLocation() ."', 
								'". $user->getUserType() ."'
								)";
		
		// Hacemos los llamadaos a la base de datos
		$comand = new dbMySQL();	
		$comand->execSP($ParamsString);
	}
}
?>