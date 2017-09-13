<?php

class claseRegistroFundacion
{
    private $id_fundacion;
    private $direccion;
    private $actividad;
    private $email;
    private $pass;
    private $ruc;
    private $idusuariofk;
    private $idpaisfk;
    private $idciudadfk;
    private $idcuentafk;
    private $fundacioncategoria;
    private $nombre;
    private $telefono;

    
     function __construct($id_fundacion,$direccion,$actividad,$email,$pass,$ruc,$idusuariofk,$idpaisfk,$idciudadfk,$idcuentafk,$fundacioncategoria,$nombre,$telefono) {
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
     function setActividad($actividad){
       $this->actividad = $actividad;
     } 
     function getActividad(){
       return $this->actividad;
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
     function setIdusuariofk($idusuariofk){
       $this->idusuariofk = $idusuariofk;
     } 
     function getIdusuariofk(){
       return $this->idusuariofk;
     } 
     function setIdpaisfk($idpaisfk){
       $this->idpaisfk = $idpaisfk;
     } 
     function getIdpaisfk(){
       return $this->idpaisfk;
     } 
     function setIdciudadfk($idciudadfk){
       $this->idciudadfk = $idciudadfk;
     } 
     function getIdciudadfk(){
       return $this->idciudadfk;
     } 
     function setIdcuentafk($idcuentafk){
       $this->idcuentafk = $idcuentafk;
     } 
     function getIdcuentafk(){
       return $this->idcuentafk;
     } 
     function setFundacioncategoria($fundacioncategoria){
       $this->fundacioncategoria = $fundacioncategoria;
     } 
     function getFundacioncategoria(){
       return $this->fundacioncategoria;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getTelefono(){
       return $this->telefono;
     } 
}

?> 