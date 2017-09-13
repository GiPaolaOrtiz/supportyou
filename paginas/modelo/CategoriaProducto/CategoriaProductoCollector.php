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
  function showcategoriaproducto($id) {
    $row = self::$db->getRows("SELECT * FROM categoriaproducto where id_categoriaproducto= ?", array("{$id}"));
    $Obj= new categoriaproducto($row[0]{'idcategoriaproducto'},$row[0]{'nombre'};
    return $Obj;        
  }

  function updatecategoriaproducto($id, $nombre,$password){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.categoriaproducto SET nombre= ? where id_categoriaproducto = ?", 
                  array( "{$nombre}", $id ));
  }

  function deletecategoriaproducto($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.categoriaproducto where idcategoriaproducto = ?", 
                  array( $id ));
  }
  function createcategoriaproducto($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.categoriaproducto (nombre) VALUES (?)", array("{$nombre}"));
  }

}
?>
