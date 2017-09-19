<?php

include_once('ciudad.php');
include_once("../../modelo/Collector.php");

class ciudadCollector extends Collector
{
  
  function showciudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad2 ");        
    $arrayCiudad= array();        
    foreach ($rows as $c){
      $auxi = new  ciudad($c{'id'},$c{'nombre'});
      array_push($arrayCiudad, $auxi);
    }
    return $arrayCiudad;        
  }

  function showciudad($id) {
    $row = self::$db->getRows("SELECT * FROM ciudad2 WHERE id= ? ", array("{$id}"));        
    $ObjCiudad = new Ciudad($row[0]{'id'},$row[0]{'nombre'});

    return $ObjCiudad;        
  }

  function updateciudad($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.ciudad2 SET nombre= ? where id = ?", 
                  array( "{$nombre}", $id ));
  }

  function deleteciudad($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.ciudad2 where id = ?", 
                  array( $id ));
  }
  function createciudad($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.ciudad2 (nombre) VALUES (?)", array("{$nombre}"));
  }

}
?>
