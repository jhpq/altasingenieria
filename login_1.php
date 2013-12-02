
<html>
    <body>
        <?php
        if($username&& $password){
        $host = "localhost"; //Nombre del host
        $username = "root";  //Nombre del usuario del host
        $password = "elperro";  //Contrasena del host
        $db_name = "altas";  //Nombre de la base de datos
        $tbl_name = "registro"; //Nombre de la tabla
// Conectarse al servidor y seleccionar la base de Datos
        
       $con= mysql_connect("$host", "$username", "$password") or die("cannot connect");
        mysql_select_db("$db_name") or die("cannot select DB");

// Usuario y contraseña enviados de la forma
       
        $matricula = $_POST['username'];
        $password = $_POST['password'];

// Proteccion de Inyeccion de MySql 
        $matricula = stripslashes($matricula);
        $folio = stripslashes($folio);
        $matricula = mysql_real_escape_string($matricula);
        $folio = mysql_real_escape_string($folio);
        $sql = "SELECT * FROM $tbl_name WHERE matricula='$matricula' and folio='$folio'";
        $usu = "SELECT matricula FROM $tbl_name WHERE matricula='$matricula'";
        $folio = "SELECT folio FROM registro WHERE matricula='$matricula'";
        $result = mysql_query($sql);
        $count = mysql_num_rows($result);
        if ($usu == null) {
            header("location:loginError.php");
        } 
        
        elseif ($folio == null) {
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "INSERT INTO Registro (Matricula) VALUES('$_POST[username]')";

            if (!\mysqli_query($con, $sql)) {
                die('Error: ' . mysqli_error($con));
            }
            ;

            mysqli_close($con);
        }
//Si el usuario y la contraseña son compatibles , el contador de columnas sera igual a 1
        elseif ($count == 1) {

            session_register("matricula");
            session_register("folio");
            header("location:altas.html?matricula='$matricula'&folio='$folio'");
        }
        else    
            echo "Error: Contraseña o Usuario Incorrecto";
        ?>
    </body>
</html>






