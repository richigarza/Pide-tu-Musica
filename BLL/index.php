<?php
/////////////////////////////
// index.php
// Autor: Richi Garza
// Fecha: 09-feb-2017
////////////////////////////
	header('Content-type: application/json');
	require('../DTO/User.php');
	require('../DTO/Band.php');
	require('../DTO/Venue.php');
	require('../DTO/Event.php');
	require("../BLL/User.php");

	function test(){
		return true;
	} 

	function createUser(){
		$user = new User('Ricardo', 'Garza', 'Richi', 'richi@conglom-osoft.net', 'Monterrey, MX', 2);
		$User = new BLLUser();
		$User->createUser($user);

		//$band = new Band('Metallica', 'Metal', '19-02-2016', '19-02-2016');	
		//$venue = new Venue('Estadio BBVA Bancomer', 'Guadalupe, MX', '19-02-2016', '19-02-2016');
		//$event = new Event('Metallica en Monterrey', $venue, $user, $band, '50000', '0', '19-02-2016', '19-02-2016');
		//$user->setPassword('la4705');
		//return $user->getPassword();
	}

	function main(){
		$fn = $_GET["fn"];
		switch($fn){
			case "test":
				$result["success"] = test();
			break;
			case "newUser":
				$result["success"] = createUser();
			break;
			default:
				$result["success"] = false;
		}
		echo json_encode($result);
	}
	main();
	exit();
?>