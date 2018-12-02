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
	<title>BASE DE DATOS DE UN ZOOLOGICO</title>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="registrar">
          	<a href="./php/registro.php"</a>I N G R E S A R</a>
    </div> <!-- fin opcion-->
    
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera" >
				<img src="./css/images/lovito.gif">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >Usuario:</label></p>
						<input name="usuario" type="text" id="usuario" placeholder="U S U A R I O" autofocus="" required=""></p>
					
					<p><label>contraseña:</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="P A S S W O R D" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="submit" value="ENTRAR" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->
	
			<div id="pie">INF</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
