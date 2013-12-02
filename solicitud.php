<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include_once '/db.conexion.php';
    connection();
        if(!$_SESSION['username']){
  
            header( 'Location: http://localhost/AltasIngenieria/index.php' ) ;
           
        }
    ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Altas y Bajas: Ingenieria</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet">
        <!-- Bootstrap theme --><link href="NAltas.css" rel="stylesheet">
        <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="theme.css" rel="stylesheet">
        <!--CSS Altas-->
        <link href="NAltas.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>


        <div class="container">
            <nav class="navbar" role="navigation" id="navBarSolicitud" >
                <form class="navbar-form navbar-right" role="search">
                    <input type="button" class="btn btn-danger btn-xs " onclick="document.location.href='logout.php';" value="cerrar sesion"></input>
                </form>
            </nav>


            <div class="col-sm-8 col-md-offset-2">
                <div class="panel centered">
                    <div class="panel-heading" style="background-color: #463265">
                        <h2 class="panel-title">Solicitud</h2>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body" id="headSolicitud">
                            <label id = "matricula" >Matricula:<?php echo $_SESSION['username']?>
                                <br>
                                <label id = "folio" >Folio:<?php echo $_SESSION['folio']?>
                                    <br>
                                    <label id = "nombre">Nombre: <?php echo $_SESSION['folioac']?> 
                                        </div> 
                                        <div class="panel-body" >
                                            <div class="panel-heading" style="background-color: #463265">
                                                <h2 class="panel-title">Registro</h2>
                                            </div>
                                            <div class="span3" >

                                                <table class="table " id="tabla">
                                                    <thead>
                                                        <tr>
                                                            <th>Materia</th>
                                                            <th>Tipo</th>
                                                            <th>Grupo</th>
                                                            <th>Remover</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $results = mysql_query("SELECT * FROM ");
                                                        while ($row = mysql_fetch_array($results)) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['Folio'] ?></td>
                                                                <td><?php echo $row['password'] ?></td>
                                                                <td><?php echo $row['matricula'] ?></td>
                                                                <td><input type="checkbox"></td>
                                                            </tr>

                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <form>
                                                <button type="submit" name="remover" id="remover" class="btn btn-danger btn-xs navbar-right">Remover</button>
                                            </form>
                                        </div>
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="selectGrupo" class="col-sm-1 control-label">Carrera</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" id="selectCarrera" name="selectCarrera" >

                                                    </select>
                                                </div>
                                                <label for="selectPlan" class="col-sm-1 control-label">Plan</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" id="selectPlan" name="selectPlan"></select>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <label for="selectMateria" class="col-sm-1 control-label">Materia</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" id="selectMateria"></select>
                                                </div>
                                                <label for="selectTipo" class="col-sm-1 control-label">Tipo</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" id="selectTipo"></select>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <label for="inputGrupo" class="col-sm-1 control-label">Grupo</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="inputGrupo" placeholder="Grupo"/>
                                                </div>
                                                <div class="col-sm-3 col-md-offset-2">
                                                    <input type="submit" class="form-control" id="enviar" value="Enviar" onClick="anadirMovimiento()"/>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                                        </div> 


                                        <!-- Bootstrap core JavaScript
                                        ================================================== -->
                                        <!-- Placed at the end of the document so the pages load faster -->
                                        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                                        <script src="AnadirEliminarMovimiento.js"></script>
                                        <script src="dist/js/bootstrap.min.js"></script>
                                        <script src="/docs-assets/js/holder.js"></script>
                                        <script src="jquery-1.10.2.js" type="text/javascript"></script>
                                        <script src="ListasEnlazadas.js" type="text/javascript"></script>

                                        </body>
                                        </html>
