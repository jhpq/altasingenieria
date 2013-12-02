<?php

    session_start();
    $username=$_POST['matricula'];
    $password=$_POST['contrasena'];
    
    if($username&&$password){
        $host = "localhost"; //Nombre del host
        $dbuser = "root";  //Nombre del usuario del host
        $dbpassword = "elperro";  //Contrasena del host
        $db_name = "altas";  //Nombre de la base de datos
   
        
       $con= mysql_connect("$host", "$dbuser", "$dbpassword") or die("cannot connect");
        mysql_select_db("$db_name") or die("cannot select DB");
        
        
       $query = mysql_query("SELECT * FROM registroid WHERE matricula = '$username'");
    
       $numrows= mysql_num_rows($query);
       
       if($numrows!=0){
           
           while($row = mysql_fetch_assoc($query))
           {
               $matriculasql = $row['matricula'];
               $passwordsql  = $row['password'];
           }
           
           //checar si son compatibles
           
           if($username == $matriculasql && $password==$passwordsql){
               header( 'Location: http://localhost/AltasIngenieria/altas.php' ) ;
               $_SESSION['username']=$matriculasql;
           }
           else
               echo "Passowrd incorrecto";
       }      
       else
           die("La matricula no se ha registrado");
    }
    else
        die('Ingrese usuario y Contraseña');
?>
