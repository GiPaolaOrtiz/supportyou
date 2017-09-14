<?php

class Cliente{
	private $idcliente;
	private $idusuario;
	private $foto;
	private $fechanacimiento;
	private $fecharegistro;

	function __construct($idcliente, $idusuario,$foto,$fechanacimiento,$fecharegistro) {
       $this->idcliente = $idcliente;
       $this->idusuario = $idusuario;
       $this->foto = $foto;
       $this->fechanacimiento = $fechanacimiento;
       $this->fecharegistro = $fecharegistro;
     }


     function setIdcliente($idcliente){
       $this->idcliente = $idcliente;
     } 
     function getIdcliente(){
       return $this->idcliente;
     } 
     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 

     function setFechanacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getFechanacimiento(){
       return $this->fechanacimiento;
     } 

     function setFecharegistro($fecharegistro){
       $this->fecharegistro = $fecharegistro;
     } 
     function getFecharegistro(){
       return $this->fecharegistro;
     } 

}