<?php

include_once('MetodoPago.php');
include_once('../Collector.php');


class metodopagoCollector extends Collector
{
  
  function showMetodoPago() {
    $rows = self::$db->getRows("SELECT * FROM metodopago ");        
    echo "linea 1";
    $arrayMetodoPago= array();        
    foreach ($rows as $c){
      $aux = new MetodoPago($c{'idmetodopago'},$c{'metodo'});
      array_push($arrayMetodoPago, $aux);
    }
    return $arrayMetodoPago;        
  }
}
?>
