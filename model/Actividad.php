<?php

class Actividad {
   PRIVATE $ID_ACTIVIDAD;
   PRIVATE $ID_USUARIO;
   PRIVATE $NOMBRE;
   PRIVATE $DESCRIPCION;
   PRIVATE $FECHA_HORA_INICIO;
   PRIVATE $COSTO;
   PRIVATE $FECHA_REGISTRO;
   PRIVATE $ESTADO;
   PRIVATE $PRIORIDAD;
   PRIVATE $COMPLEJIDAD;
   
   
   
   function __construct($ID_ACTIVIDAD=null, $ID_USUARIO=null, $NOMBRE=null, $DESCRIPCION=null, $FECHA_HORA_INICIO=null, $COSTO=null, $FECHA_REGISTRO=null, $ESTADO=null, $PRIORIDAD=null, $COMPLEJIDAD=null) {
       $this->ID_ACTIVIDAD = is_null($ID_ACTIVIDAD) ? $this->ID_ACTIVIDAD : $ID_ACTIVIDAD;
       $this->ID_USUARIO = is_null($ID_USUARIO) ? $this->ID_USUARIO : $ID_USUARIO;
       $this->NOMBRE = is_null($NOMBRE) ? $this->NOMBRE : $NOMBRE;
       $this->DESCRIPCION = is_null($DESCRIPCION) ? $this->DESCRIPCION : $DESCRIPCION;
       $this->FECHA_HORA_INICIO = is_null($FECHA_HORA_INICIO) ? $this->FECHA_HORA_INICIO : $FECHA_HORA_INICIO;
       $this->COSTO = is_null($COSTO) ? $this->COSTO : $COSTO;
       $this->FECHA_REGISTRO = is_null($FECHA_REGISTRO) ? $this->FECHA_REGISTRO : $FECHA_REGISTRO;
       $this->ESTADO = is_null($ESTADO) ? $this->ESTADO : $ESTADO;
       $this->PRIORIDAD = is_null($PRIORIDAD) ? $this->PRIORIDAD : $PRIORIDAD;
       $this->COMPLEJIDAD = is_null($COMPLEJIDAD) ? $this->COMPLEJIDAD : $COMPLEJIDAD;
   }
   
   function getID_ACTIVIDAD() {
       return $this->ID_ACTIVIDAD;
   }

   function getID_USUARIO() {
       return $this->ID_USUARIO;
   }

   function getNOMBRE() {
       return $this->NOMBRE;
   }

   function getDESCRIPCION() {
       return $this->DESCRIPCION;
   }

   function getFECHA_HORA_INICIO() {
       return $this->FECHA_HORA_INICIO;
   }

   function getCOSTO() {
       return $this->COSTO;
   }

   function getFECHA_REGISTRO() {
       return $this->FECHA_REGISTRO;
   }

   function getESTADO() {
       return $this->ESTADO;
   }

   function getPRIORIDAD() {
       return $this->PRIORIDAD;
   }

   function getCOMPLEJIDAD() {
       return $this->COMPLEJIDAD;
   }

   function setID_ACTIVIDAD($ID_ACTIVIDAD) {
       $this->ID_ACTIVIDAD = $ID_ACTIVIDAD;
   }

   function setID_USUARIO($ID_USUARIO) {
       $this->ID_USUARIO = $ID_USUARIO;
   }

   function setNOMBRE($NOMBRE) {
       $this->NOMBRE = $NOMBRE;
   }

   function setDESCRIPCION($DESCRIPCION) {
       $this->DESCRIPCION = $DESCRIPCION;
   }

   function setFECHA_HORA_INICIO($FECHA_HORA_INICIO) {
       $this->FECHA_HORA_INICIO = $FECHA_HORA_INICIO;
   }

   function setCOSTO($COSTO) {
       $this->COSTO = $COSTO;
   }

   function setFECHA_REGISTRO($FECHA_REGISTRO) {
       $this->FECHA_REGISTRO = $FECHA_REGISTRO;
   }

   function setESTADO($ESTADO) {
       $this->ESTADO = $ESTADO;
   }

   function setPRIORIDAD($PRIORIDAD) {
       $this->PRIORIDAD = $PRIORIDAD;
   }

   function setCOMPLEJIDAD($COMPLEJIDAD) {
       $this->COMPLEJIDAD = $COMPLEJIDAD;
   }



}
