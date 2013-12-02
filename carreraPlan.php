<?php
include_once '/db.conexion.php';
connection();

$tipo= $_POST['tipo'];
if($tipo==plan){
{
    
	$consulta = "SELECT plan FROM plan WHERE carrera_id =".$_POST['id'];
	$query = mysql_query($consulta);
    while ($fila = mysql_fetch_array($query)) {
        echo '<option value="'.$fila['plan'].'">'.$fila['plan'].'</option>';
    };
}
}
else
//function selectMateria(){
//
//	$consulta = "SELECT plan FROM justificantes.carrera_plan WHERE carreras_id =".$_GET['id'];
//	$query = mysql_query($consulta);
//    while ($fila = mysql_fetch_array($query)) {
//        echo '<option value="'.$fila['plan'].'">'.$fila['plan'].'</option>';
//    };

{

	$consulta = "SELECT plan FROM justificantes.carrera_plan WHERE carreras_id =".$_GET['id'];
	$query = mysql_query($consulta);
    while ($fila = mysql_fetch_array($query)) {
        echo '<option value="'.$fila['plan'].'">'.$fila['plan'].'</option>';
    };
}

?>
