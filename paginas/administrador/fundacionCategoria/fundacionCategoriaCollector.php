<?php

include_once('FundacionCategoria.php');
include_once('../Collector.php');


class fundacionCategoriaCollector extends Collector
{
  
  function showFundacionCategorias() {
    $rows = self::$db->getRows("SELECT * FROM fundacioncategoria ORDER BY id_fundacioncategoria ASC");        
    $arrayCategoria= array();        
    foreach ($rows as $c){
      $aux = new FundacionCategoria($c{'id_fundacioncategoria'},$c{'nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

  function showFundacionCategoria($id) {
    $row = self::$db->getRows("SELECT * FROM fundacioncategoria WHERE id_fundacioncategoria= ? ", array("{$id}"));        
    $ObjCategoria = new FundacionCategoria($row[0]{'id_fundacioncategoria'},$row[0]{'nombre'});

    return $ObjCategoria;        
  }

  function updateFundacionCategoria($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.fundacioncategoria SET nombre= ? where id_fundacioncategoria = ?", 
                  array( "{$nombre}", $id ));
  }

  function deleteFundacionCategoria($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.fundacioncategoria where id_fundacioncategoria = ?", 
                  array( $id ));
  }
  function createFundacionCategoria($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.fundacioncategoria (nombre) VALUES (?)", array("{$nombre}"));
  }

}

?>