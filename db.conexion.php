<?php

//function connection() {
//    $connection = mysql_connect("148.229.20.237:3306", "registro", "maruchan") or die("No se pudo conectar a la base de datos");
//    $db = mysql_select_db("justificantes", $connection) or die("No se pudo seleccionar la base de datos");
//}
function connection() {
    $connection = mysql_connect("localhost", "root", "elperro") or die("No se pudo conectar a la base de datos");
    mysql_select_db("altas") or die("No se pudo seleccionar la base de datos");
}

//function selectCarrera() {
//    
//    $consulta = "SELECT * FROM justificantes.carreras";
//    $query = mysql_query($consulta);
//    while ($fila = mysql_fetch_array($query)) {
//        echo '<option value="'.$fila['carreras_id'].'">'.$fila['carrera'].'</option>';
//    };
//}

function selectCarrera() {
    
    $consulta = "SELECT * FROM carreras";
    $query = mysql_query($consulta);
    while ($fila = mysql_fetch_array($query)) {
        echo '<option value="'.$fila['id'].'">'.$fila['carrera'].'</option>';
    };
}


//function selectPlan() {
//    
//	$consulta = "SELECT plan FROM justificantes.carrera_plan WHERE carreras_id =".$_GET['id'];
//	$query = mysql_query($consulta);
//    while ($fila = mysql_fetch_array($query)) {
//        echo '<option value="'.$fila['plan'].'">'.$fila['plan'].'</option>';
//    };
//}


//function selectMateria(){
//
//	$consulta = "SELECT plan FROM justificantes.carrera_plan WHERE carreras_id =".$_GET['id'];
//	$query = mysql_query($consulta);
//    while ($fila = mysql_fetch_array($query)) {
//        echo '<option value="'.$fila['plan'].'">'.$fila['plan'].'</option>';
//    };





 
 






