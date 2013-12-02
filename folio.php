<?php
      function folio($matriculasql){
        //Buscar el ultimo folio de la matricula
          $folio = mysql_query("SELECT * FROM solicitudes WHERE matricula = $matriculasql ORDER BY solicitudes_id DESC LIMIT 1;");
        //Contar el numero de solicitudes 
          $numr= mysql_num_rows($folio);
        // si hay solicitudes entra       
               if($numr!=0){
                   
                   while($r = mysql_fetch_assoc($folio))
                   {
                       $foliosql = $r['solicitudes_id'];
                       $folioactivo = $r['activa'];
                   }
                           
                        if($folioactivo == 1 ){

                        $querysolmayor = mysql_query(" SELECT * FROM solicitudes ORDER BY solicitudes_id DESC LIMIT 1 ");
                        while($row = mysql_fetch_assoc($querysolmayor))
                        {
                           $foliosql = $r['solicitudes_id'];
                           
                        }
                        $sol = intval($foliosql)+1;
                        $_SESSION['folio'] = $sol;
                        $_SESSION['folioac']=$folioactivo;
                        $date = date("Y/m/d");
                        $query = mysql_query("INSERT INTO solicitudes values('$sol','$matriculasql','$date', 0, NULL, 2, 0)");
                        
                        

                          //$queryreg = mysql_query("INSERT INTO solicitudes values(NULL,'$matriculasql',NULL, NULL, NULL,NULL);");    
                       }
                       else
                        $_SESSION['folio'] = $foliosql; 
                        $_SESSION['folioac']=$folioactivo;
                       
                 }
                else
                    
                    $querysolmayor = mysql_query(" SELECT solicitudes_id FROM solicitudes ORDER BY solicitudes_id DESC LIMIT 1 ");
                    while($r = mysql_fetch_assoc($querysolmayor))
                    {
                       $foliosql = $r['solicitudes_id'];
                       
                    }
                    $sol=intval($foliosql)+1;
                    $date = date("Y/m/d");
                    $queryr = mysql_query("INSERT INTO solicitudes values('$sol','$matriculasql','$date', 0, NULL, 2, 0);");
                    $_SESSION['folio'] = $sol;
                   
       }
       ?>