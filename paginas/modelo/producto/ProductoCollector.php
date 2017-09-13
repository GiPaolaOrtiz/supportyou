<?php

include_once('Producto.php');
include_once('CategoriaProducto.php')
include_once('fundacionCategoria.php')

include_once('../Collector.php');


class productoCollector extends Collector
{
  
  function showProductos() {
    $rows = self::$db->getRows("SELECT * FROM producto ");        
    echo "linea 1";
    $arrayProducto= array();        
    foreach ($rows as $c){
      $aux = new Producto($c{'idproducto'},$c{'idcategoriaproducto'},$c{'idfundacion'},$c{'descripcion'},$c{'estado'},$c{'precio'},$c{'img'},$c{'idperfil'},$c{'estadoventa'});
      array_push($arrayProducto, $aux);
    }
    return $arrayProducto;        
  }
 

  function updateProductos($idproducto, $idcategoriaproducto,  $idfundacion, $descripcion, $estado, $precio, $img, $idperfil, $estadoventa){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.producto SET idcategoriaproducto= ?, idfundacion = ?, descripcion = ?, estado = ?, precio = ?, img = ?,  $estadoventa = ?, $idperfil = ? where idproducto = ?, ", 
                  array( "{$idcategoriaproducto}", "{$idfundacion}", "{descripcion}","{estado}", "{precio}","{img}","{estadoventa}", "{idperfil}",$idproducto ));
  }

  function deleteProducto($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.producto where idproducto = ?", 
                  array( $idproducto ));
  }
  function createProducto($idcategoriaproducto,$idfundacion, $descripcion, $estado, $precio, $img, $estadoventa){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.producto (idcategoriaproducto, idfundacion, descripcion, estado, precio, img, estadoventa) VALUES (?, ?)", array("{$idcategoriaproducto}","{idfundacion}","{descripcion}","{estado}","{precio}","{img}","{$estadoventa}"));
  }
  function showCategoria() {
    $rows = self::$db->getRows("SELECT * FROM CategoriaProducto ");        
    echo "linea 1";
    $arrayCategoria= array();        
    foreach ($rows as $c){
      $aux = new CategoriaProducto($c{'idcategoriaproducto'},$c{'nombre'});
      array_push($arrayCategoria, $aux);
    }
    return $arrayCategoria;        
  }

  function showFundacion() {
    $rows = self::$db->getRows("SELECT * FROM fundacionCategoria ");        
    echo "linea 1";
    $arrayCategoriafundacion= array();        
    foreach ($rows as $c){
      $aux = new fundacionCategoria($c{'idfundacioncategoria'},$c{'nombre'});
      array_push($arrayCategoriafundacion, $aux);
    }
    return $arrayCategoriafundacion;        
  }

}
?>
