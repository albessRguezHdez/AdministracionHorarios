<?php

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenido sistema horarios</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"/>
</head>
<body>
     
<form action="principal.php" method="post" class="login">
    <title> INICIO</title>
    <h1>Iniciar sesión</h1>
    <footer>&copy; Sistema</footer>
    <div><label>Usuario:</label><input name="user" type="text" ></div>
    <div><label>Contraseña:</label><input name="password" type="password"></div>
    <div><input name="login" type="submit" value="Ingresar"></div>
    <div><a href=registrar.php>Registrarse</a></div>
    <a href=Invitado.php>Invitado</a>
</form>
<form>
    <div class="form-group">
        <label for="NombreUsuario">Usuario:</label>
        <input type="Usuario" class="form-control" id="UsuarioEntrada" placeholder="Ingresar usuario">
    </div>    

    <h6>
        <p>Sistema creado en la UV por estudiantes de la Licenciatura en Informática:</p>
	<p>@Sirio</p>
	<p>@Beatriz</p>
	<p>@Julián</p>
	<p>@Jesús</p>
    </h6>
</body>
</html>