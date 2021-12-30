<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="stylesheet" type="text/css" href="libraries/css/bootstrap.min.css">
	<script type="text/javascript" src="libraries/js/bootstrap.min.js"></script>
  	<title>Login</title>
  	<script src="libraries/jquery-3.5.0.js"></script>
	<script type="text/javascript">
		history.forward();
		$(document).ready(function(){
			$("#log").click(function(){
				var usuario = $("#user").val();
				var clave = $("#psw").val();
				var tipo = $("#tipo").val();
				if(usuario!=""&&clave!=""){
					var envio = 'action=Login&usuario='+usuario+'&clave='+clave+'&tipo='+tipo;
					$.ajax({
						type: 'POST',
						data: envio,
						url: 'funciones.php',
						success: function(request){
							if(request=="1"){
								if(tipo=="1"){
									window.location.href="principalplanta.php";
								}else if(tipo=="2"){
									window.location.href="principalsucursal.php";
								}
							}else{
								$("#mensajes").empty();
								$("#mensajes").append("El usuario no existe o hay datos incorrectos");
							
							}
						}
					});
				}
				else{
					$("#mensajes").empty();
					$("#mensajes").append("Ingrese sus datos por favor")
				}
			});

		});
	</script>
</head>
<body style="font-family: Arial; text-align: center">
	
 	<div>
  		<div>
  			<h3>Ingreso al Sistema</h3>
  		</div>
  		<br>
  		<div id="mensajes"></div>
  		<br>
  		<div>
    		<input type="text" placeholder="Usuario" name="user" id="user">
  		</div>
  		<br>
  		<div>
    		<input type="password" placeholder="Contraseña" name="psw" id="psw">
    	</div>
    	<br>
    	<div>
    		<select id="tipo">
				<option value="1">Planta</option>
				<option value="2">Sucursal</option>
    		</select>
    	</div>
    	<br>
    	<div>
    		<button type="button" name="log" id="log" class="btn btn-primary">Entrar</button>
    	</div>
	</div>
 	</div>
</body>
</html>
