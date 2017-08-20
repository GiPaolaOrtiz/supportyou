<?php

class claseRegistroFundacion
{
    private $id_fundacion;
    private $actividad;
    private $direccion;
    private $email;
    private $pass;
    private $ruc;
    private $usuario_id;
    private $pais_id;
    private $fundacioncategoria_id;
    private $ciudad_id;
    private $cuenta_id;
    
     function __construct($id_fundacion, $actividad, $direccion, $email, $pass, $ruc, $usuario_id, $pais_id, $fundacioncategoria_id, $ciudad_id, $cuenta_id) {
       $this->id_fundacion = $id_fundacion;
       $this->actividad = $actividad;
       $this->direccion = $direccion;
       $this->email = $email;
       $this->pass = $pass;
       $this->ruc = $ruc;
       $this->usuario_id = $usuario_id;
       $this->pais_id = $pais_id;
       $this->fundacioncategoria_id = $fundacioncategoria_id;
       $this->ciudad_id = $ciudad_id;
       $this->cuenta_id = $cuenta_id;
     }
    
     function setIdFundacion($id_fundacion){
       $this->id_fundacion = $id_fundacion;
     } 
     function getIdFundacion(){
       return $this->id_fundacion;
     } 
     function setActividad($actividad){
       $this->actividad = $actividad;
     } 
     function getActividad(){
       return $this->actividad;
     } 
     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setPass($pass){
       $this->pass = $pass;
     } 
     function getPass(){
       return $this->pass;
     } 
     function setRuc($ruc){
       $this->ruc = $ruc;
     } 
     function getRuc(){
       return $this->ruc;
     } 
     function setUsuario_id($usuario_id){
       $this->usuario_id = $usuario_id;
     } 
     function getUsuario_id(){
       return $this->usuario_id;
     } 
     function setPais_id($pais_id){
       $this->pais_id = $pais_id;
     } 
     function getPais_id(){
       return $this->pais_id;
     } 
     function setFundacioncategoria_id($fundacioncategoria_id){
       $this->fundacioncategoria_id = $fundacioncategoria_id;
     } 
     function getFundacioncategoria_id(){
       return $this->fundacioncategoria_id;
     } 
     function setCiudad_id($ciudad_id){
       $this->ciudad_id = $ciudad_id;
     } 
     function getCiudad_id(){
       return $this->ciudad_id;
     } 
     function setCuenta_id($cuenta_id){
       $this->cuenta_id = $cuenta_id;
     } 
     function getCuenta_id(){
       return $this->cuenta_id;
     } 
     
}

?> 