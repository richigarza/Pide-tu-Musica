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
		<!-- Modal -->
		<div id="myModal"class="modal fade" tabindex="-1" role="dialog" style="text-align:center;">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<!--<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
        				<h4 class="modal-title">Modal title</h4>
      				</div>-->
      				<div class="modal-body">
      					<img src="img/loading.gif" style="width:150px; display: block; margin: 0 auto;"/>
        				<p>Cargando, espere un momento.</p>
      				</div>
      				<!--<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Save changes</button>
      				</div>-->
    			</div><!-- /.modal-content -->
  			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

    	<!-- Bootstrap -->
    	<script src="js/j.js"></script>	
    	<script src="js/bootstrap.min.js"></script>
		<!-- SCRIPTS -->
		<script>
		$("#prro").click(function(){
			$("#myModal").modal({show: true, backdrop: 'static', keyboard: false});
			$.ajax({
				url: "BLL/index.php?fn=lol",
				datatype: "json",
				type: "post",
				success: function(response){
					console.log(response.success);
					$("#myModal").modal("hide");
				}
			});			
		});
		</script>
	</body>
</html>