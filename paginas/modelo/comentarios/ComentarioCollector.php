<?php

include_once('comentario.php');
include_once('../../modelo/Collector.php');

class ComentarioCollector extends Collector
{
  
  function showComentarios() {
    $rows = self::$db->getRows("SELECT * FROM comentarios ");        
    $arrayComentario= array();        
    foreach ($rows as $c){
      $auxi = new  comentario($c{'idcomentario'},$c{'descripcion'},$c{'email'});
      array_push($arrayComentario, $auxi);
    }
    return $arrayComentario;        
  }

  function showComentario($id) {
    $row = self::$db->getRows("SELECT * FROM comentarios WHERE idcomentario= ? ", array("{$id}"));        
    $ObjComentarios = new comentarios $row[0]{'idcomentario'},$row[0]{'descripcion'},$row[0]{'email'});

    return $ObjComentarios;        
  }

  function updateComentario($id, $descripcion, $email){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.comentarios SET descripcion = ? where idcomentario = ?", 
                  array( "{$descripcion}", $id ));
  }

  function deleteComentario($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.comentarios where idcomentario = ?", 
                  array( $id ));
  }
  function createComentario($descripcion, $email){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.comentarios (descripcion, email) VALUES (?)", array("{$descripcion}", "{$email}"));
  }

}

?>