<?php

include_once('Producto.php');
include_once('../Collector.php');


class productoCollector extends Collector
{
  
  function showProductos() {
    $rows = self::$db->getRows("SELECT * FROM producto ");        
    echo "linea 1";
    $arrayProducto= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idproducto'},$c{'idcategoriaproducto'},$c{'idfundacion'},$c{'descripcion'},$c{'estado'},$c{'precio'},$c{'img'},$c{'idperfil'},$c{'estadoventa'});
      array_push($arrayProducto, $aux);
    }
    return $arrayProducto;        
  }
}
?>