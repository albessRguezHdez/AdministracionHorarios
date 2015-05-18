<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>INICIAR SESIÓN</title>
        <!--
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css.map" type="text/css"/>
        -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body> 
    <form action="<?php echo base_url('index.php/Welcome/login');?>" method="post" class="login">
        <title> INICIO</title>
        <h1>Iniciar sesión</h1>
<!--
        <div><label>Usuario:</label>
            <input name="user" type="text" >
        </div>
        <div><label>Contraseña:</label>
            <input name="password" type="password">
        </div>
        <div>
            <input name="login" type="submit" value="Ingresar">
        </div>
        <div><a href=registrar.php>Registrarse</a></div>
        <a href=Invitado.php>Invitado</a>
    </form>
    <form>
--> 
    <div class="container-fluid">
        <div class="form-group">
            <label for="NombreUsuario">Usuario:</label>
            <input name="user" type="text" class="form-control" id="UsuarioEntrada" placeholder="Ingresar usuario">
        </div> 
        <div class="form-group">
            <label for="Contraseña">Contraseña:</label>
            <input name="password" type="password" class="form-control" id="ContraEntrada" placeholder="Ingresar contraseña">
        </div> 
        <div class="form-group">
            <input name="login" type="submit" value="Ingresar">
        </div>
    </div>
    </form>
    <h6>
    <footer>&copy; Sistema</footer>
        <p>Sistema creado en la UV por estudiantes de la Licenciatura en Informática:</p>
	<p>@Sirio</p>
	<p>@Beatriz</p>
	<p>@Julián</p>
	<p>@Jesús</p>
    </h6>
</body>
</html>

<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>