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
   
   function __construct($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD) {
       $this->ID_ACTIVIDAD = $ID_ACTIVIDAD;
       $this->ID_USUARIO = $ID_USUARIO;
       $this->NOMBRE = $NOMBRE;
       $this->DESCRIPCION = $DESCRIPCION;
       $this->FECHA_HORA_INICIO = $FECHA_HORA_INICIO;
       $this->COSTO = $COSTO;
       $this->FECHA_REGISTRO = $FECHA_REGISTRO;
       $this->ESTADO = $ESTADO;
       $this->PRIORIDAD = $PRIORIDAD;
       $this->COMPLEJIDAD = $COMPLEJIDAD;
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
