<?php

include_once('venta.php');
include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/Collector.php";


class ventaCollector extends Collector
{
  
  function showventas() {
    $rows = self::$db->getRows("SELECT * FROM venta ");   
    $arrayVenta= array();        
    foreach ($rows as $c){
      $aux = new venta($c{'idventa'},$c{'total'},$c{'idclientefk'},$c{'metodopagofk'},$c{'idproducto'});
      array_push($arrayVenta, $aux);
    }
    return $arrayVenta;        
  }
    function showventa($id) {
    $row = self::$db->getRows("SELECT * FROM venta where idventa= ?", array("{$id}"));
    $ObjVenta= new rol($row[0]{'idventa'},$row[0]{'total'},$row[0]{'idclientefk'},$row[0]{'metodopagofk'},$row[0]{'idproductofk'});
    return $ObjVenta;        
  }

  function updateventa($id, $total, $idclientefk, $metodopagofk){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.venta SET total= ?, idclientefk= ?, metodopagofk= ?, idproductofk= ? where idventa = ?", 
                  array( "{$nombre}",$id ));
  }

  function deleteventa($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.venta where idrol = ?", 
                  array( $id ));
  }
  function createventa($nombre,$idclientefk,$metodopagofk,$idproductofk){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.venta (total, idclientefk, metodopagofk, idproductofk) VALUES (?, ?, ?, ?)", array("{$nombre}","{$idclientefk}","{$metodopagofk}","{$idproductofk}"));
  }
}
?>