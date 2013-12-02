<?php 
    
  include_once './db.inc.php';
  
  function connect(){
      mysql_connect(DB_HOST, DB_USER,DB_PASS) or die('No se pudo conectar a la base de datos' . mysql_error());
      mysql_select_db(DB_NAME);
  }
  
  function close(){
      mysql_close();
  }
  
  function queryCarrera(){
      $myData = mysql_query("SELECT * FROM justificantes.carreras "); 
      while ($record = mysql_fetch_array($myData)) {
          echo '<option value="'.$record['carrera_id'].'"  >' .$record['carrera']. '</option>';
      }
      die();
  }
  
 function queryPlan(){
      $myData = mysql_query("SELECT plan FROM justificantes.carrera_plan WHERE id = "); 
          echo '<select>'; 
      while ($record = mysql_fetch_array($myData)) {
          echo '<option value="'.$record['plan'].'">' .$record['plan']. '</option>';
      }
          echo 'select';
     
  }

 

  
?>
