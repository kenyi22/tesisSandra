<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proyecto
 *
 * @author kenyi
 */
class Proyecto {
    
    PRIVATE $ID_PROYECTO;
    PRIVATE $NOMBRE;
    PRIVATE $FECHA_INICIO;
    PRIVATE $FECHA_FIN;
    PRIVATE $DESCRIPCION;
    PRIVATE $COSTO;
    PRIVATE $PRECIO;
    PRIVATE $FECHA_REGISTRO;
    PRIVATE $ESTADO;
    
    function __construct($ID_PROYECTO, $NOMBRE, $FECHA_INICIO, $FECHA_FIN, $DESCRIPCION, $COSTO, $PRECIO, $FECHA_REGISTRO, $ESTADO) {
        $this->ID_PROYECTO = $ID_PROYECTO;
        $this->NOMBRE = $NOMBRE;
        $this->FECHA_INICIO = $FECHA_INICIO;
        $this->FECHA_FIN = $FECHA_FIN;
        $this->DESCRIPCION = $DESCRIPCION;
        $this->COSTO = $COSTO;
        $this->PRECIO = $PRECIO;
        $this->FECHA_REGISTRO = $FECHA_REGISTRO;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_PROYECTO() {
        return $this->ID_PROYECTO;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getFECHA_INICIO() {
        return $this->FECHA_INICIO;
    }

    function getFECHA_FIN() {
        return $this->FECHA_FIN;
    }

    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function getCOSTO() {
        return $this->COSTO;
    }

    function getPRECIO() {
        return $this->PRECIO;
    }

    function getFECHA_REGISTRO() {
        return $this->FECHA_REGISTRO;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_PROYECTO($ID_PROYECTO) {
        $this->ID_PROYECTO = $ID_PROYECTO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setFECHA_INICIO($FECHA_INICIO) {
        $this->FECHA_INICIO = $FECHA_INICIO;
    }

    function setFECHA_FIN($FECHA_FIN) {
        $this->FECHA_FIN = $FECHA_FIN;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    function setCOSTO($COSTO) {
        $this->COSTO = $COSTO;
    }

    function setPRECIO($PRECIO) {
        $this->PRECIO = $PRECIO;
    }

    function setFECHA_REGISTRO($FECHA_REGISTRO) {
        $this->FECHA_REGISTRO = $FECHA_REGISTRO;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



    
}

