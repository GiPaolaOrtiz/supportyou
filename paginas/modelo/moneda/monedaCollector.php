<?php

include_once('moneda.php');
include_once("../../modelo/Collector.php");


class monedaCollector extends Collector
{
  
  function showmonedas() {
    $rows = self::$db->getRows("SELECT * FROM moneda ");   
    $arrayCuenta= array();        
    foreach ($rows as $c){
      $aux = new moneda($c{'id'},$c{'nombre'},$c{'id_ciudad_fk'});
      array_push($arrayCuenta, $aux);
    }
    return $arrayCuenta;        
  }
  function showmonedasInner() {
    $rows = self::$db->getRows("select m.id, m.nombre, c.id from moneda as m inner join ciudad2 as c on c.id=m.id_ciudad_fk");   
    $arrayCuenta= array();        
    foreach ($rows as $c){
      $aux = new moneda($c{'id'},$c{'nombre'},$c{'id'});
      array_push($arrayCuenta, $aux);
    }
    return $arrayCuenta;        
  }    
    function showmoneda($id) {
    $row = self::$db->getRows("SELECT * FROM moneda where id= ?", array("{$id}"));
    $Obj= new cuenta($row[0]{'id'},$row[0]{'nombre'},$row[0]{'id_ciudad_fk'});
    return $Obj;        
  }

  function updatemoneda($id, $nombre, $idciudad){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.moneda SET nombre= ?, id_ciudad_fk=? where id = ?", 
                  array( "{$nombre}", "{$idciudad}", $id ));
  }

  function deletemoneda($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.moneda where id = ?", 
                  array( $id ));
  }
  function createmoneda($nombre, $idciudad){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.moneda (nombre, id_ciudad_fk) VALUES (?, ?)", array("{$nombre}", "{$idciudad}"));
  }
}
?>