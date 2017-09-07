<?php

include_once('MetodoPago.php');
include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/Collector.php";

class metodopagoCollector extends Collector
{
  
  function showMetodoPagos() {
    $rows = self::$db->getRows("SELECT * FROM metodopago "); 
    $arrayMetodoPago= array();        
    foreach ($rows as $c){
      $aux = new MetodoPago($c{'idmetodopago'},$c{'nombre'});
      array_push($arrayMetodoPago, $aux);
    }
    return $arrayMetodoPago;        
  }
}
?>
