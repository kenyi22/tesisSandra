<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author kenyi
 */
class Persona {
    PRIVATE $ID_PERSONA;
    PRIVATE $NOMBRE;
    PRIVATE $APEPATERNO;
    PRIVATE $APEMATERNO;
    PRIVATE $DNI;
    PRIVATE $RUC;
    PRIVATE $CORREO;
    PRIVATE $TELEFONO;
    PRIVATE $ESTADO;
    PRIVATE $FECHA_REGISTRO;
    
    function __construct($ID_PERSONA=null, $NOMBRE=null, $APEPATERNO=null, $APEMATERNO=null, $DNI=null, $RUC=null, $CORREO=null, $TELEFONO=null, $ESTADO=null, $FECHA_REGISTRO=null) {
        $this->ID_PERSONA = is_null($ID_PERSONA) ? $this->ID_PERSONA : $ID_PERSONA;
        $this->NOMBRE = is_null($NOMBRE) ? $this->NOMBRE : $NOMBRE;
        $this->APEPATERNO = is_null($APEPATERNO) ? $this->APEPATERNO : $APEPATERNO;
        $this->APEMATERNO = is_null($APEMATERNO) ? $this->APEMATERNO : $APEMATERNO;
        $this->DNI = is_null($DNI) ? $this->DNI : $DNI;
        $this->RUC = is_null($RUC) ? $this->RUC : $RUC;
        $this->CORREO = is_null($CORREO) ? $this->CORREO : $CORREO;
        $this->TELEFONO = is_null($TELEFONO) ? $this->TELEFONO : $TELEFONO;
        $this->ESTADO = is_null($ESTADO) ? $this->ESTADO : $ESTADO;
        $this->FECHA_REGISTRO = is_null($FECHA_REGISTRO) ? $this->FECHA_REGISTRO : $FECHA_REGISTRO;

    }
    
    function getID_PERSONA() {
        return $this->ID_PERSONA;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getAPEPATERNO() {
        return $this->APEPATERNO;
    }

    function getAPEMATERNO() {
        return $this->APEMATERNO;
    }

    function getDNI() {
        return $this->DNI;
    }

    function getRUC() {
        return $this->RUC;
    }

    function getCORREO() {
        return $this->CORREO;
    }

    function getTELEFONO() {
        return $this->TELEFONO;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getFECHA_REGISTRO() {
        return $this->FECHA_REGISTRO;
    }

    function setID_PERSONA($ID_PERSONA) {
        $this->ID_PERSONA = $ID_PERSONA;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setAPEPATERNO($APEPATERNO) {
        $this->APEPATERNO = $APEPATERNO;
    }

    function setAPEMATERNO($APEMATERNO) {
        $this->APEMATERNO = $APEMATERNO;
    }

    function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    function setRUC($RUC) {
        $this->RUC = $RUC;
    }

    function setCORREO($CORREO) {
        $this->CORREO = $CORREO;
    }

    function setTELEFONO($TELEFONO) {
        $this->TELEFONO = $TELEFONO;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setFECHA_REGISTRO($FECHA_REGISTRO) {
        $this->FECHA_REGISTRO = $FECHA_REGISTRO;
    }



}
