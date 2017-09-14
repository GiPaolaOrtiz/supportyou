<?php

include_once('CategoriaProducto.php');
include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/Collector.php";


class CategoriaProductoCollector extends Collector
{
  
  function showCategoriaProductos() {
    $rows = self::$db->getRows("SELECT * FROM categoriaproducto ");        
    $arrayCategoriaProducto= array();        
    foreach ($rows as $c){
      $aux = new CategoriaProducto($c{'idcategoriaproducto'},$c{'nombre'});
      array_push($arrayCategoriaProducto, $aux);
    }
    return $arrayCategoriaProducto;        
  }
  function showCategoriaProducto($id) {
    $row = self::$db->getRows("SELECT * FROM categoriaproducto where idcategoriaproducto= ?", array("{$id}"));
    $ObjDemo= new Usuario($row[0]{'idusuario'},$row[0]{'email'},$row[0]{'nombre'},$row[0]{'username'},$row[0]{'password'},$row[0]{'idrol'});
    return $ObjDemo;        
  }

  function updatecategoriaproducto($id, $nombre){
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
