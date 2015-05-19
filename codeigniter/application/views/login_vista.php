<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
    <h1>Iniciar sesión</h1>
<!--    -->
    <form action="<?php echo base_url('index.php/Welcome/login');?>" method="post" class="login">     
    <div class="container-fluid">
        <div class="form-group">
            <label for="NombreUsuario">Usuario:</label>
            <input name="user" type="text" class="form-control" id="UsuarioEntrada" placeholder="Ingresar usuario">
            <br>
<!--        </div> 
        <div class="form-group">
-->
            <label for="Contraseña">Contraseña:</label>
            <input name="password" type="password" class="form-control" id="ContraEntrada" placeholder="Ingresar contraseña">
        </div> 
        <div class="form-group">
            <input name="login" type="submit" value="Ingresar">
        </div>
    </div>
    </form>
    <form method="post" class="login">
        <div><label>-----Usuario:</label>
            <input name="user" type="text" >
        </div>
        <div><label>-----Contraseña:</label>
            <input name="password" type="password">
        </div>
        <div>
            <input name="login" type="submit" value="Ingresar">
        </div>
        <div><a href=registrar.php>Registrarse</a></div>
        <a href=Invitado.php>Invitado</a>
    </form>
    
    <h6>
    
    </h6>
    <?php $this->load->view('footer/footer_vista');?>