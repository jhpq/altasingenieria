<html>
    <head>
        <title>Login error</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="login.css">
              
    </head>
    
    <body>  
      
                <FORM method="post" action="login_1.php" id="login-box">
                      <H2>Solicitud de Altas y Bajas: Login</H2>
                      
                      <div id="login-box-name" style="margin-top:20px;">Matricula:</div>
                        <div id="login-box-field" style="margin-top:20px;">
                            <span style="color: red; font-size: 20px; text-shadow: 0.08em 0.06em 0.08em black">(Matricula incorrecta)</span>
                            <input type="text" name="username" class="form-login" title="Matricula" value="" size="30" maxlength="6" />
                        </div>
                      <div id="login-box-name">Folio:</div>
                      
                      <div id="login-box-field">
                          
                            <input name="password" type="text" class="form-login" title="Folio" value="" size="30" maxlength="9" />
                      </div>
                      
                      <input type="submit" style="margin-left:90px;" id="botonlog">

                </FORM>            
    </body>
</html>
