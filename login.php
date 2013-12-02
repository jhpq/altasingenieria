<?php

    session_start();
    include_once '/db.conexion.php';
    include_once '/folio.php';
    connection();
        if($_SESSION['username']){
            header( 'Location: http://localhost/AltasIngenieria/solicitud.php' ) ;
        }
        else
        $_SESSION['username']=null;
        
        $username=$_POST['matricula'];
        //$password=$_POST['contrasena'];
        
        if($username){
            $host = "localhost"; //Nombre del host
            $dbuser = "root";  //Nombre del usuario del host
            $dbpassword = "elperro";  //Contrasena del host
            $db_name = "altasbajas";  //Nombre de la base de datos
       
            
           $con= mysql_connect("$host", "$dbuser", "$dbpassword") or die("cannot connect");
           mysql_select_db("$db_name") or die("cannot select DB");

           $query = mysql_query("SELECT * FROM alumno WHERE matricula = '$username'");
        
           $numrows= mysql_num_rows($query);

           
           if($numrows!=0){
               
               while($row = mysql_fetch_assoc($query))
               {
                   $matriculasql = $row['matricula'];
                  // $passwordsql  = $row['password'];
               }
               
               //checar si son compatibles
               
               if($username == $matriculasql){
                   $_SESSION['username'] = $matriculasql;
                   folio($matriculasql);
                   //folio($matriculasql);    
                   header( 'Location: http://localhost/AltasIngenieria/solicitud.php' ) ;
                   
               }
               else
                   header( 'Location: http://localhost/AltasIngenieria/index.php' ); 
                   $_SESSION['username']= null;  
                   die("Passowrd incorrecto");
           }      
           else
              // header( 'Location: http://localhost/AltasIngenieria/index.php' );
               $username= null;      
               die("La matricula no existe");
        }
        else
            //header( 'Location: http://localhost/AltasIngenieria/index.php' );
            $username= null;  
            die('Ingrese usuario');
    ?>
