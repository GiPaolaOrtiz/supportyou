<?php

class usuarioxrol
{
    private $idusuarioxrol;  
    private $idusuario;
    private $idrol;
    
    
     function __construct($idusuarioxrol,$idusuario,$idrol) {
       $this->idusuarioxrol = $idusuarioxrol;
       $this->idusuario = $idusuario;
       $this->idrol = $idrol;
     }
    
     function setIdusuarioxrol($idusuarioxrol){
       $this->idusuarioxrol = $idusuarioxrol;
     } 
     function getIdusuarioxrol(){
       return $this->idusuarioxrol;
     } 
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 
     function setIdrol($idrol){
       $this->idrol = $idrol;
     } 
     function getIdrol(){
       return $this->idrol;
     } 
}

?> 
