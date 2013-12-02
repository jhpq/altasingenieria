<!DOCTYPE html>
<?php 
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    include_once '/db.conexion.php';
    connection();
        if($_SESSION['username']){
            header( 'Location: http://localhost/AltasIngenieria/solicitud.php' );
           
        }
        else
        $_SESSION['username']=null;
    
?>
<html lang="en">
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
        <link href="datepicker/css/datepicker.css" rel="stylesheet">
        <link href="datepicker/less/datepicker.less" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>


        <div class="container theme-showcase">


            <div class="jumbotron" id="jumbotron1">
                <h1>                   .</h1>

            </div>
            <div class="row">


                <div class="col-sm-4 col-md-offset-4 centered">
                    <div class="panel centered">
                        <div class="panel-heading" style="background-color: #463265">
                            <h2 class="panel-title">Login</h2>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal" method="POST" action="login.php">
                                <div class="form-group">

                                    <label class="col-sm-4 control-label">Matricula</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  id="matricula" name="matricula" placeholder="Matricula">
                                    </div>
                                </div>                               
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-10">
                                        <input type="submit" class="btn btn-default" value="Entrar"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../docs-assets/js/holder.js"></script>
        <script src="datepicker/js/bootstrap-datepicker.js"></script>
        <script>$('.datepicker').datepicker();</script>
    </body>
</html> 