<?php

class Venta
{
    private $idventa;
    private $idcliente;
    private $idproducto;
    private $total;
    private $idmetodopago;
    
     function __construct($idventa, $idcliente, $idproducto, $total, $idmetodopago) {
       $this->idventa = $idventa;
       $this->idcliente = $idcliente;
       $this->idproducto = $idproducto;
       $this->total = $total;
       $this->idmetodopago = $idmetodopago;
     }
    //idventa
     function setIdventa($idventa){
       $this->idventa = $idventa;
     } 
     function getIdventa(){
       return $this->idventa;
     } 
    // idcliente
    function setIdcliente($idcliente){
       $this->idcliente = $idcliente;
     } 
     function getIdcliente(){
       return $this->idcliente;
     } 
    //idproducto
    function setIdproducto($idproducto){
       $this->idproducto = $idproducto;
     } 
     function getTotal(){
       return $this->idproducto;
     } 
    //total
    function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
     } 
    //idmetodopago
    function setIdmetodopago($idmetodopago){
       $this->idmetodopago = $idmetodopago;
     } 
     function getIdmetodopago(){
       return $this->idmetodopago;
     } 
}

?> 
