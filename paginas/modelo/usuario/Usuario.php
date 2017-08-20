<?php

class Usuario
{
    private $idusuario;
    private $email;
    private $nombre;
    private $username;
    private $pass;
    
     function __construct($idusuario, $email,$nombre,$username,$pass) {
       $this->idusuario = $idusuario;
       $this->email = $email;
       $this->nombre = $nombre;
       $this->username = $username;
       $this->pass = $pass;
     }
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idusuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
