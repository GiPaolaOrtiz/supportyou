<?php


include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/Collector.php";

include_once('Producto.php');



class ProductoCollector extends Collector
{
  
  function showProductos() {
    $rows = self::$db->getRows("SELECT * FROM producto ");        
    $arrayProducto= array();        
    foreach ($rows as $c){
      $aux = new Producto($c{'idproducto'},$c{'idcategoriaproducto'},$c{'idfundacion'},$c{'descripcion'},$c{'estado'},$c{'precio'},$c{'img'},$c{'estadoventa'});
      array_push($arrayProducto, $aux);
    }
    return $arrayProducto;        
  }
 

  function showProducto($idproducto) {
    $row = self::$db->getRows("SELECT * FROM producto where idproducto= ?", array("{$idproducto}"));
    $ObjDemo= new Producto($row[0]{'idproducto'},$row[0]{'idcategoriaproducto'},$row[0]{'idfundacion'},$row[0]{'descripcion'},$row[0]{'estado'},$row[0]{'precio'},$row[0]{'img'},$row[0]{'estadoventa'});
    return $ObjDemo;        
  }


  function updateProductos( $idproducto, $idcategoriaproducto,  $idfundacion, $descripcion, $estado, $precio, $img, $estadoventa){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.producto SET idcategoriaproducto= ?, idfundacion = ?, descripcion = ?, estado = ?, precio = ?, img = ?,  estadoventa = ? where idproducto = ?, ", 
                  array( "{$idcategoriaproducto}", "{$idfundacion}", "{$descripcion}","{$estado}", "{$precio}","{img}","{estadoventa}", "{idperfil}",$idproducto ));
  }

  function deleteProducto($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.producto where idproducto = ?", 
                  array( $id ));
  }
   function createProducto(  $idcategoriaproducto, $idfundacion, $descripcion, $estado, $precio,$img, $estadoventa){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.producto (idcategoriaproducto,idfundacion, descripcion, estado, precio, img, estadoventa) VALUES (?,?,?,?,?,?,?)", array("{$idcategoriaproducto}","{$idfundacion}","{$descripcion}","{$estado}","{$precio}", "{$img}", "{estadoventa}"));
  }  
}
?>
