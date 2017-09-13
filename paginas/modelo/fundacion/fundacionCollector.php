<?php

include_once('claseRegistroFundacion.php');
include_once('Collector.php');

class fundacionCollector extends Collector
{
  
  function showFundaciones() {
    $rows = self::$db->getRows("SELECT * FROM fundacion ORDER BY idfundacion ASC ");  
    $arrayFundacion= array();        
    foreach ($rows as $c){
      $aux = new claseRegistroFundacion($c{'idfundacion'}, $c{'direccion'}, $c{'actividad'}, $c{'email'}, $c{'pass'}, $c{'ruc'}, $c{'idusuariofk'}, $c{'idpaisfk'}, $c{'idciudadfk'}, $c{'idcuentafk'}, $c{'fundacioncategoria'}, $c{'nombre'}, $c{'telefono'});
      array_push($arrayFundacion, $aux);
    }
    return $arrayFundacion;        
  }

  function showFundacion($id) {
    $row = self::$db->getRows("SELECT direccion, actividad, nombre, telefono FROM fundacion WHERE idfundacion = ? ", array("{$id}"));        
    $ObjFundacion = new claseRegistroFundacion($row[0]{'direccion'},$row[0]{'nombre'},$row[0]{'telefono'});

    return $ObjFundacion;        
  }

  function updateFundacion($id,$direccion,$actividad,$email,$pass,$ruc,$idusuariofk,$idpaisfk,$idciudadfk,$idcuentafk,$fundacioncategoria,$nombre,$telefono) {
    $insertrow = self::$db->updateRow
                   ("UPDATE public.fundacion SET direccion = ?, actividad = ?, email = ?, pass = ?, ruc = ?, idusuariofk = ?, idpaisfk = ?, idciudadfk = ?, idcuentafk = ?, fundacioncategoria = ?, nombre = ?, telefono = ? WHERE idfundacion = ? ",
                   array("{$direccion}","{$actividad}","{$email}","{$pass}","{$ruc}","{$idusuariofk}","{$idpaisfk}","{$idciudadfk}","{$idcuentafk}","{$fundacioncategoria}","{$nombre}","{$telefono}", $id ));   
  }
    

  function deleteFundacion($id) {
    $deletetrow = self::$db->deleteRow("DELETE FROM public.fundacion WHERE idfundacion = ? ", array( "{$id}"));   
  } 


  function createFundacion($direccion,$actividad,$email,$pass,$ruc,$idusuariofk,$idpaisfk,$idciudadfk,$idcuentafk,$fundacioncategoria,$nombre,$telefono){
    $insertrow = self::$db->insertRow("INSERT INTO public.fundacion (actividad,direccion,email,pass,ruc,pais_id,fundacioncategoria_id,ciudad_id,cuenta_id,telefono,nombre) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)", array("{$actividad}","{$direccion}","{$email}","{$pass}","{$ruc}","{$pais_id}","{$fundacioncategoria_id}","{$ciudad_id}","{$cuenta_id}","{$telefono}","{$nombre}"));
  }

}
?>
