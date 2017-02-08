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
  		<button id="prro" class="btn btn-primary">Lol</button>
		
    	<!-- Bootstrap -->
    	<script src="js/j.js"></script>	
    	<script src="js/bootstrap.min.js"></script>
		<!-- SCRIPTS -->
		<script>
		$("#prro").click(function(){
			$.ajax({
				url: "BLL/index.php?action=lol",
				datatype: "json",
				type: "post",
				success: function(response){
					console.log(response.success);
				}
			});
		});
		</script>
	</body>
</html>