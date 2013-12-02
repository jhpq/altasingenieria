<?php 
    session_start();
    include_once '/db.conexion.php';
    connection();
        if($_SESSION['username']){
            header( 'Location: http://localhost/AltasIngenieria/altas.php' ) ;
        }
        else
        $_SESSION['username']=null;
        
?>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="loginReg.css">
    </head>
    <body>
        <div id="formulario">
            <FORM id="login" method="POST" action="altasLogin.php">
                <H2>Login</H2>
                <div class="formslog">
                    <span>Matricula</span>
                    <br>
                    <input type="text" name="matricula">
                    <br>
                    <br>
                    <span>Contraseña</span>
                    <br>
                    <input type="password" name ="contrasena">
                    <br>
                    <br>
                </div>    
                <input type="submit" value="Entrar">
            </FORM>
             <FORM id="registrar" method="POST" action="RegistrarUsuario.php">
                <H2>Registro</H2>
                <div class="formslog">
                    <span>Matricula</span>
                    <br>
                    <input type="text" name="matricula">
                    <br>
                    <br>
                    <span>Contraseña</span>
                    <br>
                    <input type="password" name="password">
                    <br>
                    <br>
                    <span>Confirmar Contraseña</span>
                    <br>
                    <input type="password" name="rpassword">
                    <br>
                </div>    
                <input type="submit" name="submit" value="Registrar">
            </FORM>
        </div>    
    </body>
</html>