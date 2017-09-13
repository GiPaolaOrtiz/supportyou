<?php

include_once('claseRegistroFundacion.php');
include_once('Collector.php');

class fundacionCollector extends Collector
{
  
  function showFundaciones() {
    $rows = self::$db->getRows("SELECT * FROM fundacion ORDER BY id_fundacion ASC ");        
    echo "Nuestras Fundaciones";
    $arrayFundacion= array();        
    foreach ($rows as $c){
      $aux = new claseRegistroFundacion($c{'id_fundacion'}, $c{'actividad'}, $c{'direccion'}, $c{'email'}, $c{'pass'}, $c{'ruc'}, $c{'pais_id'}, $c{'fundacioncategoria_id'}, $c{'ciudad_id'}, $c{'cuenta_id'}, $c{'telefono'}, $c{'nombre'});
      array_push($arrayFundacion, $aux);
    }
    return $arrayFundacion;        
  }

  function showFundacion($id) {
    $row = self::$db->getRows("SELECT actividad, direccion, telefono, nombre FROM fundacion WHERE id_fundacion = ? ", array("{$id}"));        
    $ObjFundacion = new claseRegistroFundacion($row[0]{'direccion'},$row[0]{'telefono'},$row[0]{'nombre'});

    return $ObjFundacion;        
  }

  function updateFundacion($id,$actividad,$direccion,$email,$pass,$ruc,$pais_id,$fundacioncategoria_id,$ciudad_id,$cuenta_id,$telefono,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.fundacion SET actividad = ?, direccion = ?, email = ?, pass = ?, ruc = ?, pais_id = ?, fundacioncategoria_id = ?, ciudad_id = ?, cuenta_id = ?, telefono = ?, nombre = ? WHERE id_fundacion = ? ", array( "{$actividad}","{$direccion}","{$email}","{$pass}","{$ruc}","{$pais_id}","{$fundacioncategoria_id}","{$ciudad_id}","{$cuenta_id}","{$telefono}","{$nombre}",$id));   
  }  

  function deleteFundacion($id) {
    $deletetrow = self::$db->deleteRow("DELETE FROM public.fundacion WHERE id_fundacion = ? ", array( "{$id}"));   
  } 


  function createFundacion($actividad,$direccion,$email,$pass,$ruc,$pais_id,$fundacioncategoria_id,$ciudad_id,$cuenta_id,$telefono,$nombre){
    $insertrow = self::$db->insertRow("INSERT INTO public.fundacion (actividad,direccion,email,pass,ruc,pais_id,fundacioncategoria_id,ciudad_id,cuenta_id,telefono,nombre) VALUES (?,?,?,?,?,?,?,?,?,?,?)", array("{$actividad}","{$direccion}","{$email}","{$pass}","{$ruc}","{$pais_id}","{$fundacioncategoria_id}","{$ciudad_id}","{$cuenta_id}","{$telefono}","{$nombre}"));
  }

}
?>
