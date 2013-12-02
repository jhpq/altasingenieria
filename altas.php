<?php 
    session_start();
    include_once '/db.conexion.php';
    connection();
        if(!$_SESSION['username'] && $_SESSION['password']){
  
            header( 'Location: http://localhost/AltasIngenieria/loginReg.php' ) ;
           
        }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <link rel="stylesheet" type="text/css" href="altas.css">
        <script type="text/javascript" src="jquey-1.9.1.js"></script>
        <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
        
        <script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#carrera").change(function(event){
                    var id = $("carrera").find(':selected').val();
                    $("#plan").load('carreraPlan.php?id='+id+'&tipo=plan');
                });
                $("#plan").change(function(event){
                    var id = $("plan").find(':selected').val();
                    $("#materia").load('carreraPlan.php?id='+id+'&tipo=materia');
                });
            });
        </script>
    </head>
    <body>
        <h2>Solicitúd de Altas y Bajas: Facultad de Ingeniería</h2>
        <!--Div de solicitud, contiene las operaciones principales-->
        <div id="solicitud" >
            <!--Muestra la matricula y el folio de la solicitud-->
            <div id="displayMatricula" >
                <label id = "matricula" >Matricula:<?php echo $_SESSION['username']?>
                    <br>
                <label id = "folio" >Folio:
                    <br>
                <label id = "nombre">Nombre:  
                <a href="logout.php">Salir</a>    
            </div>

            <!--Tabla, se muestran los movimientos-->
            <div id="tabla">
                <div id="tablaMat">
                    <table  border="1">
                        <thead>
                            <tr>
                                <td>Sel.</td>
                                <td>Materia</td>
                                <td>Grupo</td>
                                <td>Tipo</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            
                            $results = mysql_query("SELECT * FROM registroid");
                            while($row = mysql_fetch_array($results)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['Folio']?></td>
                                    <td><?php echo $row['password']?></td>
                                    <td><?php echo $row['matricula']?></td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <input type="submit" id="eliminar" name="eliminar" value="eliminar">
            </div>

            <!--Form, contiene los campos necesarios para hacer el registro-->
            <form>
                    <label style="margin-right:10.5%;">Carrera:</label>
                    <select id="carrera" name="carrera">
                        <?php selectCarrera()?>
                    </select>
                    <label>Plan:</label>
                    <select id="plan" name="plan">
                        
                    </select>
                    <br>
                    <br>
                    <label style=""> Materia:</label>
                    <select id="materia" name="materia">
                        
                    </select>
                    <label>Grupo:</label>
                    <input type="text" id="grupo" maxlength="10">
                    <br>
                    <br>
                    <label style="margin-right:13.5%;">Tipo:</label><select id="abc" name="abc"></select>
                    <br>    
                    <input type="submit" id="registrar" name="registrar">    
            </form>
        </div>
   </body>

</html>
