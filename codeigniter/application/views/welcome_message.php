<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INICIAR SESIÓN</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css"/>
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
    </form>
    
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Carreras
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
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>