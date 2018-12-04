<?php
require_once("./php/myDBC.php");
if(isset($_SESSION['session']))
{
	header("location:principal.php");
	exit;
} 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>INTERFAZ DE ACEESO</title>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="ENTRAR">
    <a href="./php/registro.php"</a> I N G R E S A R</a></center</
              </div> <!-- fin opcion-->
    
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera" >
				<img src="./css/images/smile.gif">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >U S U A R I O:</label></p>
						<input name="usuario" type="text" id="usuario" placeholder="Email o cuenta" autofocus="" required=""></p>
					
					<p><label>C O N T R A S E Ñ A:</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="PIN de acceso" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="submit" value="A c c e d e r" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->
	
			<div id="pie">INF</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
