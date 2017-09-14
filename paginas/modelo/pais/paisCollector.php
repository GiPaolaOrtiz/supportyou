<?php

include_once('Pais.php');
include_once('../../modelo/Collector.php');

class paisCollector extends Collector
{
  
  function showPaises() {
    $rows = self::$db->getRows("SELECT * FROM pais ");        
    $arrayPais= array();        
    foreach ($rows as $c){
      $aux = new Pais($c{'idpais'},$c{'nombre'});
      array_push($arrayPais, $aux);
    }
    return $arrayPais;        
  }

  function showPais($id) {
    $row = self::$db->getRows("SELECT * FROM pais WHERE idpais= ? ", array("{$id}"));        
    $ObjPais = new Pais($row[0]{'idpais'},$row[0]{'nombre'});

    return $ObjPais;        
  }

  function updatePais($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.pais SET nombre= ? where idpais = ?", 
                  array( "{$nombre}", $id ));
  }

  function deletePais($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.pais where idpais = ?", 
                  array( $id ));
  }
  function createPais($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.pais (nombre) VALUES (?)", array("{$nombre}"));
  }

}

?>