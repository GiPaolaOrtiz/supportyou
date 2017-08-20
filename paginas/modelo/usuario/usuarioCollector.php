<?php

include_once('Usuario.php');
include_once('../Collector.php');


class usuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'email'},$c{'nombre'},$c{'username'},$c{'pass'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
}
?>