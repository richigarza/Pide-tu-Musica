<?php
/////////////////////////////
// index.php
// Autor: Richi Garza
// Fecha: 07-feb-2017
////////////////////////////
	header('Content-type: application/json');
	require('../DTO/User.php');
	require('../DTO/Band.php');
	require('../DTO/Venue.php');
	require('../DTO/Event.php');

	function test(){
		return true;
	} 

	function lol(){
		$user = new User('Ricardo', 'Garza', 'Richi', 'richi@conglom-osoft.net', 'Monterrey, MX', '19-02-2016', '19-02-2016', NULL);
		$band = new Band('Metallica', 'Metal', '19-02-2016');	
		$venue = new Venue('Estadio BBVA Bancomer', 'Guadalupe, MX', '19-02-2016');
		$event = new Event('Metallica en Monterrey', $venue, $user, $band, '50000', '0', '19-02-2016', '19-02-2016');

		$user->setPassword('la4705');
		return $user->getPassword();
	}

	$action = $_GET["action"];
	switch($action){
		case "test":
			$result["success"] = test();
		break;
		case "lol":
			$result["success"] = lol();
		break;
		default:
			$result["success"] = false;
	}

	echo json_encode($result);
	exit();
?>