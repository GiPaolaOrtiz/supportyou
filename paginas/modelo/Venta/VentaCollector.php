<?php

include_once('Venta.php');
include_once('../Collector.php');


class productoCollector extends Collector
{
  
  function showVentas() {
    $rows = self::$db->getRows("SELECT * FROM venta ");        
    echo "linea 1";
    $arrayVenta= array();        
    foreach ($rows as $c){
      $aux = new Venta($c{'idventa'},$c{'idcliente'},$c{'idproducto'},$c{'total'},$c{'idmetodopago'});
      array_push($arrayVenta, $aux);
    }
    return $arrayVenta;        
  }
}
?>
