<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<title>PideTuMusica.mx</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
	</style>
 
  </head>
  <body>
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
<!-- SCRIPTS -->
    <!-- Bootstrap -->
    <script src="js/j.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>