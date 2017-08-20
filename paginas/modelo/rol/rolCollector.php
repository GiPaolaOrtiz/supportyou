<?php

include_once('rol.php');
include_once('modelo/Collector.php');


class rolCollector extends Collector
{
  
  function showroless() {
    $rows = self::$db->getRows("SELECT * FROM rol ");        
    echo "linea 1";
    $arrayRol= array();        
    foreach ($rows as $c){
      $aux = new rol($c{'idrol'},$c{'nombre'});
      array_push($arrayRol, $aux);
    }
    return $arrayRol;        
  }
}
?>