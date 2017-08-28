<?php

class MetodoPago
{
    private $idmetodopago;
    private $metodo;
    
     function __construct($idmetodopago, $metodo) {
       $this->idmetodopago = $idmetodopago;
       $this->metodo = $metodo; 
     }
    //idmetodopago
     function setIdmetodopago($idmetodopago){
       $this->idmetodopago = $idmetodopago;
     } 
     function getIdmetodopago(){
       return $this->idmetodopago;
     } 
    // metodo
    function setMetodo($metodo){
       $this->metodo = $metodo;
     } 
     function getMetodo(){
       return $this->metodo;
     }
  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM demo where id_demo= ?", array("{$id}"));
    $ObjDemo= new Demo($row[0]{'id_demo'},$row[0]{'nombre'},$row[0]{'password'});
    return $ObjDemo;        
  }

  function updateDemo($id, $nombre,$password){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.demo SET nombre= ?, password = ? where id_demo = ?", 
                  array( "{$nombre}", "{$password}",$id ));
  }

  function deleteDemo($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.demo where id_demo = ?", 
                  array( $id ));
  }
  function createDemo($nombre,$password){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.demo (nombre, password) VALUES (?, ?)", array("{$nombre}","{$password}"));
  } 
}

?> 
