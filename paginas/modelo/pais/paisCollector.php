<?php

include_once('Pais.php');
include_once('../Collector.php');


class paisCollector extends Collector
{
  
  function showPaises() {
    $rows = self::$db->getRows("SELECT * FROM pais ");        
    $arrayPais= array();        
    foreach ($rows as $c){
      $aux = new Pais($c{'id_pais'},$c{'nombre'});
      array_push($arrayPais, $aux);
    }
    return $arrayPais;        
  }

  function showPais($id) {
    $row = self::$db->getRows("SELECT * FROM pais WHERE id_pais= ? ", array("{$id}"));        
    $ObjPais = new Pais($row[0]{'id_pais'},$row[0]{'nombre'});

    return $ObjPais;        
  }

  function updatePais($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.pais SET nombre= ? where id_pais = ?", 
                  array( "{$nombre}", $id ));
  }

  function deletePais($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.pais where id_pais = ?", 
                  array( $id ));
  }
  function createPais($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.pais (nombre) VALUES (?)", array("{$nombre}"));
  }

}

?>