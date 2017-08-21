<?php

include_once('CategoriaProducto.php');
include_once('../Collector.php');


class CategoriaProductoCollector extends Collector
{
  
  function showCategoriaProducto() {
    $rows = self::$db->getRows("SELECT * FROM categoriaproducto ");        
    echo "linea 1";
    $arrayCategoriaProducto= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idcategoriaproducto'},$c{'nombre'});
      array_push($arrayCategoriaProducto, $aux);
    }
    return $arrayCategoriaProducto;        
  }
}
?>
