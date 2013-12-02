<?php

    
    $submit = strip_tags($_POST['submit']);
    $matricula = strip_tags($_POST['matricula']);
    $password = strip_tags($_POST['password']);
    $rpassword =strip_tags($_POST['rpassword']);
    
    if($submit){
        
        $con = mysql_connect("localhost", "root", "elperro");
        mysql_select_db("altasbajas");

        $namecheck = mysql_query("SELECT matricula FROM registroid WHERE matricula='$matricula'");
        $count = mysql_num_rows($namecheck);
        if($count!=0){
            die("Esta matricula ya esta registrada");
        }
        
        
        if($submit&&$matricula&&$password&&$rpassword){
           
            
            if($password==$rpassword){
                
                if($password<25||$password>1){
                   
                    //Registrar el usuario
                     
                     $queryreg = mysql_query("
                         
                        INSERT INTO registroid values(NULL,'$matricula','$password',NULL);
                            
                        
                     ");
                           echo "Te has registrado, <a href='loginReg.php'>haz clic aqui</a>";
                           header( 'Location: http://localhost/AltasIngenieria/altas.php' ) ;        
                    
                }
                else{
                   
                }
           }
            else
              echo "Las contrasenas no son compatibles";  
        }
        else
            echo "Por favor <b>llene</b> todos los campos";
    }

        
?>
