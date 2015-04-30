<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <link type="text/css" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <p class="bg-primary">INICIAR SESIÓN</p>
    <p class="bg-info">BIENVENIDO A ADMINISTRA HORARIOS UV</p>
    <form>
        <div class="form-group">
            <label for="txtUsuario">Nombre usuario:</label>
            <input type="text" id="txtUsuario" name="txtUsuario"/>
        </div>
        <div class="form-group">
            <label for="txtPassword">Contraseña:</label>
            <input type="text" id="txtPassword" name="txtPassword"/>
        </div>
        <button type="button" class="btn btn-primary">Iniciar sesión</button>
        <input type="submit" id="btnSubmit" value="Iniciar sesion"/>
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
    </form>
    
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Carrera
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Informática</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Estadística</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TIC</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ingeniería</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Redes</a></li>
  </ul>
</div>
        
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
                <p>Aquí alterando la línea de código a ver que sucede</p>
                
		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>