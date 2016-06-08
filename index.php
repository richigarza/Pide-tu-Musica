<?php
	require('Class/User.php');
	require('Class/Band.php');
	require('Class/Venue.php');
	require('Class/Event.php');

	$user = new User('Ricardo', 'Garza', 'Richi', 'richi@conglom-osoft.net', 'Monterrey, MX', '19-02-2016', '19-02-2016');
	$band = new Band('Metallica', 'Metal', '19-02-2016');	
	$venue = new Venue('Estadio BBVA Bancomer', 'Guadalupe, MX', '19-02-2016');
	$event = new Event('Metallica en Monterrey', $venue, $user, $band, '50000', '0', '19-02-2016', '19-02-2016');

	$user->setPassword('la4705');
	echo $user->getPassword();

?>