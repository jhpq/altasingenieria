<?php
 
   
  $consulta = "SELECT plan FROM justificantes.carrera_plan WHERE carreras_id =".$_GET['id'];
	$query = mysql_query($consulta);
    while ($fila = mysql_fetch_array($query)) {
        echo '<option value="'.$fila['plan'].'">'.$fila['plan'].'</option>';
    };
?>