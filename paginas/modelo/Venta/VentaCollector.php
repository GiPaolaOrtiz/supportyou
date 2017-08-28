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

  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM demo where id_demo= ?", array("{$id}"));
    $ObjDemo= new Demo($row[0]{'id_demo'},$row[0]{'nombre'},$row[0]{'password'});
    return $ObjDemo;        
  }

  function updateDemo($id, $nombre,$password){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.demo SET nombre= ?, password = ? where id_demo = ?", 
                  array( "{$nombre}", "{$password}",$id ));
  }

  function deleteDemo($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.demo where id_demo = ?", 
                  array( $id ));
  }
  function createDemo($nombre,$password){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.demo (nombre, password) VALUES (?, ?)", array("{$nombre}","{$password}"));
  }
}
?>
