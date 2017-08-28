<?php

class claseRegistroFundacion
{
    private $id_fundacion;
   
    private $direccion;
    private $email;
    private $pass;
    private $ruc;
    private $pais_id;
    private $fundacioncategoria_id;
    private $ciudad_id;
    private $cuenta_id;
    private $telefono;
    private $nombre;

    
     function __construct($id_fundacion, $direccion, $email, $pass, $ruc, $pais_id, $fundacioncategoria_id, $ciudad_id, $cuenta_id, $telefono, $nombre) {
       $this->id_fundacion = $id_fundacion;
       $this->direccion = $direccion;
       $this->email = $email;
       $this->pass = $pass;
       $this->ruc = $ruc;
       $this->pais_id = $pais_id;
       $this->fundacioncategoria_id = $fundacioncategoria_id;
       $this->ciudad_id = $ciudad_id;
       $this->cuenta_id = $cuenta_id;
       $this->telefono = $telefono;
       $this->nombre = $nombre;
     }
    
     function setIdFundacion($id_fundacion){
       $this->id_fundacion = $id_fundacion;
     } 
     function getIdFundacion(){
       return $this->id_fundacion;
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
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
}

?> 