<?php

include_once('usuarioxrol.php');
include_once('../Collector.php');


class usuarioxrolrolCollector extends Collector
{
  
  function showusuarioxrol() {
    $rows = self::$db->getRows("SELECT * FROM usuariosxrol ");        
    echo "linea 1";
    $arrayUsuarioxrol= array();        
    foreach ($rows as $c){
      $aux = new usuarioxrol($c{'idusuarioxrol'},$c{'idusuario'},$c{'idrol'});
      array_push($arrayUsuarioxrol, $aux);
    }
    return $arrayUsuarioxrol;        
  }
}
?>