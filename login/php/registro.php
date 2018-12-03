<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO DE DATOS</title>
	<meta charset="utf-8">
	<!-- Se agrega la biblioteca de jquery y enseguida nuestro js de funciones-->
	<script type="text/javascript" src="./../js/jquery-1.10.2.min.js" ></script>
	<script type="text/javascript" src="./../js/validares.js" ></script>
	<link type="text/css" href="./../css/style.css" rel="stylesheet" />
</head>

<body>
	<div id="registrar">
          	<a href="../index.php"</a>Retroceso</a>
    </div>
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera">
				<img src="./../css/images/logo para registro.gif" >
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="agregar.php" method="post" >
					
					<p><label for="nombre">Nombre de usuario:</label></p>
						<input name="nombre" type="text" id="nombre" class="nombre" placeholder="INGRESA TU NOMBRE" autofocus=""/ ></p>
						<div id="mensaje1" class="errores"> Ingresa solo caracteres</div>
					
					<!--=============================================================================================-->
					<!-- En seguida de cada input se agregará un div con el mensaje de error-->
					<p><label for="apellidos">Apellidos de usuario:</label></p>
						<input name="apellidos" type="text" id="apellidos" class="apellidos" placeholder="INGRESA TUS APELLIDOS" /></p>
					    <div id="mensaje2" class="errores"> Ingresa solo caracteres</div>
					<!--=============================================================================================-->
    
					<p><label for="correo">Correo:</label></p>
						<input name="correo" type="text" id="correo" class="correo" placeholder="Pon tu mail" /></p>
						<div id="mensaje3" class="errores"> Mail no valido</div>
						
					<p><label for="pass">Password:</label></p>
						<input name="pass" type="password" id="pass" class="pass" placeholder="INGRESA TU CONTRASEÑA" required=""/ ></p>
					
					<p><label for="repass">Repetir Password:</label></p>
						<input name="repass" type="password" id="repass" class="repass" placeholder="REPITE TU CONTRASEÑA" required="" /></p>
						<div id="mensaje4" class="errores"> Passwords incorrectos</div>
						
					<p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"/></p>
				</form>
			</div>
	
			<div id="pie">INFTEC</div>
		</div><!-- fin contenedor -->

	</div>
	
</body>

</html>
