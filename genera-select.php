<?php

    $dbh = mysql_connect("localhost", root, elperro);
    $db = mysql_select_db('altasbajas');
    $action = $_REQUEST('Action');
    
    if(is_callable($action)){
        
        $action();
    }
    
 
function selectCarrera(){
    header('Content-Type: application/json');
    $carreras = array();
    $consulta = "SELECT * FROM alumno_carrera, carreras  WHERE carreras.carreras_id = alumno_carrera.carreras_id AND alumno_carrera.matricula = 212219"; 
    $query = mysql_query($consulta);
    while($fila = mysql_fetch_assoc($query)) {
         $carreras[] = $fila;
    }
    echo($carreras);
 }
    
 function selectPlan(){
    header('Content-Type: aplication/json');
    $planes = array();
    $consulta = "SELECT * FROM alumno_carrera, carreras WHERE  = ".$_REQUEST['id'];
    $query = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($query)) {
         $planes[] = $fila;
    }
    echo json_encode($planes);
 }
 
 function selectMateria(){
    header('Content-Type: application/json');
    $materias = array();
    $consulta = "SELECT * from registroid WHERE Folio = ".$_REQUEST['id'];
    $query = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($query)) {
         $materias[] = $fila;
    }
    echo json_encode($materias);
 }
 
 function selectGrupo(){
    header('Content-Type: application/json');
    $planes = array();
    $consulta = "SELECT * from registroid WHERE Folio = ".$_REQUEST['id'];
    $query = mysql_query($consulta);
    while ($fila = mysql_fetch_assoc($query)) {
         $planes[] = $fila;
    }
    echo json_encode($planes);
 }
 
?>
