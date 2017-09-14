<?php

include_once('cliente.php');
include_once $_SERVER['DOCUMENT_ROOT'] . "/supportyou/paginas/modelo/Collector.php";


class clienteCollector extends Collector
{
  function showClientes() {
    $rows = self::$db->getRows("SELECT * FROM cliente "); 
    $arrayCliente= array();        
    foreach ($rows as $c){
      $aux = new Cliente($c{'idcliente'},$c{'idusuario'},$c{'foto'},$c{'fechanacimiento'},$c{'fecharegistro'});
      array_push($arrayCliente, $aux);
    }
    return $arrayCliente;        
  }

  function showCliente($id) {
    $row = self::$db->getRows("SELECT * FROM cliente where idcliente= ?", array("{$id}"));
    $ObjDemo= new Cliente($row[0]{'idcliente'},$row[0]{'idusuario'},$row[0]{'foto'},$row[0]{'fechanacimiento'},$row[0]{'fecharegistro'});
    return $ObjDemo;        
  }
    
function showClienteUsuario($id,$idcliente) {
    $row = self::$db->getRows("SELECT * FROM cliente where idcliente= ? and idusuario=?", array("{$idcliente}","{$id}" ));
    $ObjDemo= new Cliente($row[0]{'idcliente'},$row[0]{'idusuario'},$row[0]{'foto'},$row[0]{'fechanacimiento'},$row[0]{'fecharegistro'});
    return $ObjDemo;        
  }    

  function updateCliente($id, $idusuario, $foto, $fechanacimiento, $fecharegistro){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.cliente SET foto= ?, fechanacimiento= ? where idcliente = ?", 
                  array( "{$foto}","{$fechanacimiento}",$id ));
  }

  function deleteUsuario($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.cliente where idcliente = ?", 
                  array( $id ));
  }
  function createCliente($idusuario, $foto, $fechanacimiento, $fecharegistro){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.cliente (idusuario,foto, fechanacimiento, fecharegistro) VALUES (?,?,?,?)", array("{$idusuario}","{$foto}","{$fechanacimiento}","{$fecharegistro}"));
  }    
}
?>