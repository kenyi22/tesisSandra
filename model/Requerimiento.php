<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Requerimiento
 *
 * @author kenyi
 */
class Requerimiento {
    PRIVATE $ID_REQUERIMIENTO;
    PRIVATE $ID_PROYECTO;
    PRIVATE $NOMBRE;
    PRIVATE $DESCRIPCION;
    PRIVATE $ESTADO;
    
    function __construct($ID_REQUERIMIENTO, $ID_PROYECTO, $NOMBRE, $DESCRIPCION, $ESTADO) {
        $this->ID_REQUERIMIENTO = $ID_REQUERIMIENTO;
        $this->ID_PROYECTO = $ID_PROYECTO;
        $this->NOMBRE = $NOMBRE;
        $this->DESCRIPCION = $DESCRIPCION;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_REQUERIMIENTO() {
        return $this->ID_REQUERIMIENTO;
    }

    function getID_PROYECTO() {
        return $this->ID_PROYECTO;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_REQUERIMIENTO($ID_REQUERIMIENTO) {
        $this->ID_REQUERIMIENTO = $ID_REQUERIMIENTO;
    }

    function setID_PROYECTO($ID_PROYECTO) {
        $this->ID_PROYECTO = $ID_PROYECTO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}
